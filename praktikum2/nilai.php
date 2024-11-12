<?php 
// nilai.php

class nilai{
    private $tugas = 0;
    private $uts = 0;
    private $uas = 0;

// setter
public function setTugas($tugas){
    if($tugas <= 100 && $tugas){
        $this->tugas = $tugas;
    }else{
        $this->tugas = 0;
    }
}  

public function setuts($uts){
    if($uts<= 100 && $uts >= 0){
        $this->uts = $uts;
    }else{
        
    }
}
}