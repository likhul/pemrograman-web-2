<?php 

require_once "Buku.php";

class listBuku{

public function getData(){
    $list_buku = array(
        new Buku('Belajar PHP Dasar', 'James W', 'Informatika', '2024'),
        new Buku('Matematika Diskrit', 'Emely S', 'Andi Publisher', '2017'),
        new Buku('Kalkulus 2', 'Robert R', 'Erlangga', '2020'),
        new Buku('Metode Penelitian', 'Solikhul Hadi, M.Kom', 'Informatika', '2018')
    );

    return $list_buku;
}

}