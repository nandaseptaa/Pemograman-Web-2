<?php

include "Buku.php";

class ListBuku{

public function getData(){
    $list_buku = array(
        new Buku('Belajar PHP Dasar', 'Maxim', 'Informatika', '2024'),
        new Buku('Matematika Diskrit', 'Emely', 'Jefri Nichol', '2017'),
        new Buku('Kalkulus 2', 'Robert', 'Erlangga', '2020'),
        new Buku('Metode Penelitian', 'James', 'Informatika', '2018')
    );

    return $list_buku;

}

}