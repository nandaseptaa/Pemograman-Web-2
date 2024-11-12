<?php

Class Orang{
    protected $nama;

    public function ucapSalam(){
        echo "Hallo perkenalkan nama saya " . $this->nama . "<br>";
    }
}