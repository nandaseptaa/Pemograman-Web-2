<?php

class orang{
    // property
    public $nama;
    public $tglLahir;
    public $alamat;

    //constructor
    public function __construct(){

    
        $this->nama = "Anonim";
    
    }
    // method
    public function ucapSalam(){
        echo "<h2> Hallo, perkenalkan nama saya" . $this->nama . "</h2>";
    }

    // destructor 
    public function __destruct()
    {
        echo "ini adalah destructor dari" . $this->nama;
    }
}
