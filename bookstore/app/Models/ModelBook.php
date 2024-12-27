<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBook extends Model
{
    protected $table = "buku";
    protected $primaryKey = "id_buku";
    protected $useAutoIncrement = false;
    protected $allowedFields = ['id_buku', 'kategori', 'nama_buku', 'harga', 'stok', 'id_penerbit'];

    public function getAllData()
    {
        return $this->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit')->findAll();
    }

    public function getBookById($id)
    {
        return $this->find($id);
    }

    public function generateNextID($category)
    {
        $latestID = $this->where('kategori', $category)
            ->orderBy('id_buku', 'DESC')
            ->first();

        if ($latestID) {
            $lastNumber = intval(substr($latestID['id_buku'], -4)); // Extract last 4 digits
            $nextNumber = $lastNumber + 1;
            $nextID = $category . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        } else {
            // If no record found, start from 1
            $nextID = $category . '0001';
        }

        return $nextID;
    }

    public function getBooksLowStock()
    {
        // Get books with low stock
        return $this->select('nama_buku, stok, penerbit.nama as nama_penerbit')
            ->join('penerbit', 'buku.id_penerbit = penerbit.id_penerbit')
            ->where('stok <=', 5) // Set the threshold for low stock
            ->findAll();
    }
}
