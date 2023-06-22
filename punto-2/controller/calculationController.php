<?php

$ageNumber = 0;
$personName = "";
$message = "";
  
  if (isset($_POST["full_name"]) && 
      isset($_POST["enter_age"])) {
        $personName = $_POST["full_name"];
        $ageNumber = intval($_POST["enter_age"]);

        if ($ageNumber >= 18) {
           $message = "*ES MAYOR DE EDAD*";

        } else {
           $message = "*NO ES MAYOR DE EDAD*";
        }
      }
?>
