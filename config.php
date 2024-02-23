<?php
  session_start();
  try {
    $bd = new PDO('mysql:host=localhost;dbname=test','root','');
    $bd -> setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bd -> setATTRIBUTE(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  } catch (PDOException $e) {
     die('Erreur : ' ) .$e->getMessage;
  }
?>