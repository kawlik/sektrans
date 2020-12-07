<?php

var_dump($_POST);


//  Plik wspólny
require 'admin.php';


//  Obsługa formularza
$login = e($_POST['form-login']);
$name = e($_POST['form-name']);
$surname = e($_POST['form-surname']);


$haslo = password_hash(e($_POST['form-haslo']), PASSWORD_DEFAULT);

$user = $db->prepare('INSERT INTO users VALUES(null, :name, :surname, :login, :haslo)');
$user->execute([
    'name'      =>  $name,
    'surname'   =>  $surname,
    'login'     =>  $login,
    'haslo'     =>  $haslo,
]);

var_dump($_POST);
header('Location: '.URL.'/admin');
exit();

?>