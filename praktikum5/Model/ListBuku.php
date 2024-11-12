<?php

require_once "Buku.php";
require_once "Database/Database.php";
class ListBuku{
    
public function getData(){
    $db = new Database();
    $koneksi = $db->getKoneksi();

    $sql = "SELECT * FROM buku";

    $query = $koneksi->query($sql);

    $list_buku = [];

    if ($query->num_rows > 0){
        while($row = $query->fetch_assoc()){
            $buku = new Buku($row['judul'], $row['pengarang'], $row['penerbit'], $row['tahun']);
            $buku->setid($row['id']);
            array_push($list_buku, $buku);
        }
    }
    return $list_buku;
}

}