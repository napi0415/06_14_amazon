<?php
// var_dump($_POST);
// exit();
$getemail = $_POST['getemail'];
$getpass = $_POST['getpass'];

$write_data = "{$getemail} {$getpass}\n";

$file = fopen('data/todo.txt', 'a');
flock($file, LOCK_EX);
fwrite($file, $write_data);
flock($file, LOCK_UN);
fclose($file);
header('Location:input2.php');
