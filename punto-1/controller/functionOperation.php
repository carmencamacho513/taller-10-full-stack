<?php 

function calculate($firstNumber, $secondNumber, $operationType) {
    $result = 0;
    
    switch($operationType) {

        case "Suma":
            $result = $firstNumber + $secondNumber;
            return "El resultado de la suma es: " . number_format($result, 1, ",", "."); 

        case "Resta":
            $result = $firstNumber - $secondNumber;
            return "El resultado de la resta es: " . number_format($result, 1, ",", ".");
    
        case "Multiplicación":
            $result = $firstNumber * $secondNumber;
            return "El resultado de la multiplicación es: " . number_format($result, 1, ",", ".");
    
        case "División":
            $result = $firstNumber / $secondNumber;
            return "El resultado de la división es: " . number_format($result, 1, ",", ".");
        }  
    } 
?>