<?php
include 'connection.php';

error_reporting(0);
session_start();

if (isset($_POST['Ajouter'])){

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
  
$sql="INSERT INTO partiel barbarin (nom, prenom, age,)
      VALUES('$nom','$prenom', '$age',')";
$result=mysqli_query($conn, $sql);
} 