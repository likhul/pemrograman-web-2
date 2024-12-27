<?php

namespace App\Controllers;
use App\Models\ModelBook;
use App\Models\ModelPublisher;

// Import the Dompdf classes at the top of your controller file
use Dompdf\Dompdf;
use Dompdf\Options;


class AdminController extends BaseController
{
    protected $book;
    protected $publisher;

    public function __construct()
    {
        $this -> book = new ModelBook();
        $this->publisher = new ModelPublisher(); //3 inisialisasi Buku dan Publisher
    }

    public function index()
    {
        $data['books'] = $this->book->getAllData(); 
        return view('book/index', $data);
    }

    public function user()
    {
        $data['books'] = $this->book->getAllData(); 
        return view('book/user', $data);
    }

    public function search()
    {
        $searchQuery = $this->request->getPost('search_query');
        
        // You can modify the query based on your database schema
        $bookModel = new ModelBook();
        $data['books'] = $bookModel->like('nama_buku', $searchQuery)->getAllData();

        return view('book/index', $data);
    }

    public function admin()
    {
        $data['books'] = $this->book->getAllData();
        $data['publishers'] = $this->publisher->getAllPublisher();

        return view('book/admin', $data);
    }

    public function pengadaan()
    {
        // Get books with low stock
        $data['books'] = $this->book->getBooksLowStock();

        // Load the view pengadaan.php with data
        return view('book/pengadaan', $data);
    }

    public function printPengadaan()
    {
        // Get books with low stock
        $data['books'] = $this->book->getBooksLowStock();

        // Load the view into a variable
        $view = view('book/pengadaan', $data);

        // Setup PDF options
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);

        // Instantiate Dompdf
        $dompdf = new Dompdf($options);

        // Load HTML content into Dompdf
        $dompdf->loadHtml($view);

        // Set paper size (optional)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first pass to get total pages)
        $dompdf->render();

        // Stream the file for download
        $dompdf->stream('pengadaan_report.pdf', ['Attachment' => false]);
    }

    public function add()
    { //tambah data
        $data['publishers'] = $this->publisher->getAllPublisher();
        // $data["errors"] = session('errors');
        return view('book/addBook', $data);
    }

    public function addBook()
    {
        // Validate form data
        $validationRules = [
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_penerbit' => 'required',
        ];
    
        if (!$this->validate($validationRules)) {
            return redirect()->to('/admin/addBook')->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Get form data
        $category = $this->request->getPost('kategori');
        $categoryMapping = [
            'B' => 'Bisnis',
            'K' => 'Keilmuan',
            'N' => 'Novel',
        ];
    
        // Validasi apakah kategori yang diberikan benar
        if (!array_key_exists($category, $categoryMapping)) {
            return redirect()->to('/admin/addBook')->withInput()->with('error', 'Invalid category. Please try again.');
        }
    
        $fullCategory = $categoryMapping[$category];
        $nextID = $this->book->generateNextID($category);
    
        $bookData = [
            'id_buku' => $nextID,
            'kategori' => $fullCategory,
            'nama_buku' => $this->request->getPost('nama_buku'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'id_penerbit' => $this->request->getPost('id_penerbit'),
        ];
    
        // Insert into the database
        if ($this->book->insert($bookData)) {
            return redirect()->to('/admin')->with('success', 'Book added successfully!');
        } else {
            return redirect()->to('/admin')->withInput()->with('error', 'Failed to add book. Please try again.');
        }
    }

    public function update($id)
    {
        $data['publishers'] = $this->publisher->getAllPublisher();
        // $data["errors"] = session('errors');
        $data['book'] = $this->book->getBookById($id);                // Tambahkan ini untuk mengirim data film
        return view("book/updateBook", $data);                        // Mengarahkan ke halaman Edit Data
    }

    public function updateBook($id)
    {
        // Validate form data
        $validationRules = [
            'kategori' => 'required',
            'nama_buku' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'id_penerbit' => 'required',
        ];
    
        if (!$this->validate($validationRules)) {
            return redirect()->to("/admin/updateBook/{$id}")->withInput()->with('errors', $this->validator->getErrors());
        }
    
        // Get form data
        $category = $this->request->getPost('kategori');
        $categoryMapping = [
            'B' => 'Bisnis',
            'K' => 'Keilmuan',
            'N' => 'Novel',
        ];
    
        // Validasi apakah kategori yang diberikan benar
        if (!array_key_exists($category, $categoryMapping)) {
            return redirect()->to("/admin/updateBook/{$id}")->withInput()->with('error', 'Invalid category. Please try again.');
        }
    
        $fullCategory = $categoryMapping[$category];
    
        $bookData = [
            'kategori' => $fullCategory,
            'nama_buku' => $this->request->getPost('nama_buku'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
            'id_penerbit' => $this->request->getPost('id_penerbit'),
        ];
    
        // Update the database
        if ($this->book->update($id, $bookData)) {
            return redirect()->to('/admin')->with('success', 'Book updated successfully!');
        } else {
            return redirect()->to("/admin/updateBook/{$id}")->withInput()->with('error', 'Failed to update book. Please try again.');
        }
    }


    public function deleteBook($id)
    {
        $bookModel = new ModelBook();

        // Check if the book exists
        $book = $bookModel->find($id);
        if (!$book) {
            return redirect()->to('/admin')->with('error', 'Book not found');
        }

        // Perform the delete operation
        $bookModel->delete($id);

        return redirect()->to('/admin')->with('success', 'Book deleted successfully');
    }
}

    
