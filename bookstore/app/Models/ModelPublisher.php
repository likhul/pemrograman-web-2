<?php

// File: App/Models/ModelPublisher.php

namespace App\Models;

use CodeIgniter\Model;

class ModelPublisher extends Model
{

    protected $table = "penerbit";
    protected $primarykey = "id_penerbit";
    protected $useAutoIncrement = false; // Non-Auto Increment untuk id_penerbit
    protected $allowedFields = ['id_penerbit', 'nama', 'alamat', 'kota', 'telepon']; // sesuaikan dengan kolom-kolom pada tabel penerbit
    
    public function getAllPublisher()
    {
        return $this->findAll();
    }

    public function generateNextID()
    {
        $lastPublisher = $this->select('id_penerbit')->orderBy('id_penerbit', 'DESC')->first();

        if ($lastPublisher) {
            $lastID = substr($lastPublisher['id_penerbit'], 2); // Ambil dua digit terakhir
            $nextID = 'SP' . str_pad($lastID + 1, 2, '0', STR_PAD_LEFT); // Increment dan format ulang
        } else {
            $nextID = 'SP01'; // Jika belum ada data, maka ID pertama adalah "SP01"
        }

        return $nextID;
    }
}

?>
