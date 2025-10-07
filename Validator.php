<?php 

// file : validator.php
function validateAge ($age) {
    //harus angka 
    if(!is_numeric($age)){
        throw new InvalidArgumentException("Umur harus angka");
    }
    //tidak boleh negatif 
    if ($age<0){
        throw new InvalidArgumentException("umur tidak boleh negatif");
    }
    return true;
}

function validateName ($Name) {
    //harus huruf
    if (!is_string($Name)){
        throw new InvalidArgumentException("Nama harus huruf");
    }

    //tidak boleh kosong
    if (($Name=null)){
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    return true;
}
