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
        $id_buku = $_GET['id_buku'];

        $daftar_buku = new ListBuku();
        $buku = $daftar_buku->getBukuById($id_buku);

        if($buku){
            include_once "view/EditBukuview.php";
        }else{
            header("Location: http://localhostindex.php");
        }
    }

    public function update(){
        echo "update";
    }

    public function hapus(){
        $id_buku = $_POST['id_buku'];

        $daftar_buku = new listBuku();

        session_start();
        if($status){
            $_SESSION['message'] = "Data buku dengan id " . $id_buku . " Berhasil dihapus";   
        }else{
            $_SESSION['error'] = "Data gagal dihapus! ";
        }

        //redirect ke index.php
        header('Location: http://localhost/index.php');
        exit;
    }

    public function simpan(){
        //mengambil nilai dari form tambah pada BukuView
        $judul = $_POST['judul'];
        $pengarang = $_POST['pengarang'];
        $penerbit = $_POST['penerbit'];
        $tahun = $_POST['tahun'];

        //buat objek buku dari class Buku
        $buku = new Buku($judul, $pengarang, $penerbit, $tahun);

        //menyimoan buku dengan metode simpan di class ListBuku
        $daftar_buku = new listbuku();
        $status = $daftar_buku->simpan($buku);

        //membuat session untuk menampilkan berhasil atau gagal
        session_start();
        if($status){
            $_SESSION['message'] = "Data buku dengan judul " . $buku->getJudul() . " Berhasil disimpan";   
        }else{
            $_SESSION['error'] = "Data gagal disimpan ";
        }

        //redirect ke index.php
        header('Location: http://localhost/index.php');
        exit;

    }
}

