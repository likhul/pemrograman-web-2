<?php

require_once"buku.php";

class listbuku{
    public function getData(){
        $list_buku =array(
            new Buku ('belajar PHP dasar','James W.','Informatika','2024'),
            new Buku ('belajar Matematika Diskrit','Emely S.','Andi Publisher','2020'),
            new Buku ('kalkulus','Likhul, M.Kom','Erlangga','2018'),
            new Buku ('Metode Penelitian','Santi O','Informatika','2017')
        );
        return $list_buku;
    }
}