<?php
  $task = $_POST['task'];
  if($task == '') {
    echo 'Введите само задание';
    exit();
  }

  require 'configDB.php';

/*  $sql = 'INSERT INTO tasks(task) VALUES(:task)';
  $query = $pdo->prepare($sql);
  $query->execute(['task' => $task]);*/
$sql = "SELECT * FROM `tasks` ";
die(var_dump(mysqli_query($link,$sql)));
mysqli_query($link,$sql);
  header('Location: /');
?>
