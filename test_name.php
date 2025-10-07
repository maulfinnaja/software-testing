<?php 

require_once "Validator.php";

try {
    $result = validateName(100);
    echo "PASS : Nama seharusnya di terima";
}catch (Exception $e){
echo "FAIL: nama tidak di terima.  error:  "  .$e->getMessage()  . "\n";

}