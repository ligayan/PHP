<?php
$dbserver = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbname = 'php';

$mysqli = new mysqli($dbserver,$dbUser,$dbPassword,$dbname);
$mysqli->set_charset("utf8");
if (mysqli_connect_errno()) {
  echo "błąd bazy danych";
}




 ?>
