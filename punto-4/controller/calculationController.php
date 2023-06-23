<?php

$birthDate = date("y-m-d");
$personName = "";
$message = "";


if (
   isset($_POST["full_name"]) &&
   isset($_POST["birth_date"])
) {
   $personName = $_POST["full_name"];
   $birthDate = ($_POST["birth_date"]);

   $currentDate = new DateTime();
   $birthDate = new DateTime($birthDate);
   $ageNumber = $currentDate->diff($birthDate)->y;

   if ($ageNumber >= 18) {
      $message = "Tienes $ageNumber años \n *ERES MAYOR DE EDAD*";
   } else {
      $message = "Tienes $ageNumber años \n *NO ERES MAYOR DE EDAD*";
   }
}
