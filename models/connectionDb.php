<?php

function connection () {
  try{
    $db = new PDO('mysql:host=localhost;dbname=bank;charset=utf8', 'root' , '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch (Exception $e)
  {
  die ('Erreur : ' .$e->getMessage());
  }
  return $db;
}
