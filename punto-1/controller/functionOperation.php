<?php 

function calculate($firstNumber, $secondNumber, $operationType) {
    
    switch($operationType) {

        case "A":
            return $firstNumber + $secondNumber;
    
        case "B":
            return $firstNumber - $secondNumber;
    
        case "C":
            return $firstNumber * $secondNumber;
    
        case "D":
            return $firstNumber / $secondNumber;
        }  
    } 
?>