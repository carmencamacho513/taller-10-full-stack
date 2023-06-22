<?php 

function calculate($firstNumber, $secondNumber, $operationType) {
    
    switch($operationType) {

        case "Suma":
            return $firstNumber + $secondNumber;
    
        case "Resta":
            return $firstNumber - $secondNumber;
    
        case "Multiplicación":
            return $firstNumber * $secondNumber;
    
        case "División":
            return $firstNumber / $secondNumber;
        }  
    } 
?>