<?php
include "./controller/functionOperation.php";

$firstNumber = 0;
$secondnumber = 0;
$operationType = "";
$message = "";

if(isset($_POST["first_number"]) &&
   isset($_POST["second_number"]) &&
   isset($_POST["operation_type"])) {
    $firstNumber = floatval($_POST["first_number"]);
    $secondNumber = floatval($_POST["second_number"]);
    $operationType = $_POST["operation_type"];  
    
    $message = calculate($firstNumber, $secondNumber, $operationType);
}


?>

