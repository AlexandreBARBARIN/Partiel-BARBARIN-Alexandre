<?php
$server = "localhost"; $user = "root"; $pass = "root"; $database = "partiel barbarin";
try { 
   $conn = mysqli_connect($server, $user, $pass, $database);
} 
catch (Exception $e) {
   die('Erreur : '.$e->getMessage());
}
?>
