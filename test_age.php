<?php 

//file :test_age.php

//ambil fungsi Validator.php

require_once "Validator.php";

//test case 1 : umur tidak huruf
try {
    $result =validateAge(25);
    echo "PASS : umur 25 seharusnya di terima";
}catch (Exception $e){
echo "FAIL: umur 25 tidak di terima.  error:  "  .$e->getMessage()  . "\n";

}

//test case 2 : tidak boleh negatif

