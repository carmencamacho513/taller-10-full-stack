<?php
include "./controller/functionOperation.php";

$result = 0;
$firstNumber = 0;
$secondnumber = 0;
$operationType = "";
$message = "";

if(isset($_POST["first_number"]) &&
   isset($_POST["second_number"]) &&
   isset($_POST["operation_type"])) {
    $firstNumber = intval($_POST["first_number"]);
    $secondNumber = intval($_POST["second_number"]);
    $operationType = $_POST["operation_type"];  
    
    $result = calculate($firstNumber, $secondNumber, $operationType);
}


?>

