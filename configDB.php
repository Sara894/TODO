<?php
/*  $dsn = 'mysql:host=localhost;dbname=todo';
  $pdo = new PDO($dsn, 'root', '');*/
$link = mysqli_connect('localhost', "root", '', 'todo');
if ( !$link ) die("Error");

?>
