<?php

require_once 'Model/listbuku.php';

class BukuController{

    public function jalankan(){

        //menggunakan model
        $daftar_buku_model =new listbuku();
        $daftar_buku = $daftar_buku_model->getData();

        //mengirim dan menampilkan data ke view
        include_once "view/BukuView.php";
    }

    public function edit(){
        echo "edit";
    }

    public function update(){
        echo "update";
    }

    public function hapus(){
        echo "hapus";
    }

    public function simpan(){
        echo "simpan";
    }
}

