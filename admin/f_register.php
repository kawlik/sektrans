<?php


/*
    SEKCJA NIEDOSTĘPNA

    
    Automatyczne przekierowanie na stronę główną,
    do czasu właściwego zabezpieczenia.

    Stan na 07.12.2020
*/

//  Importowanie pliku wspólnego
require 'admin.php';
header('Location: '.URL);
exit();



/*   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   *   */



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

header('Location: '.URL.'/admin');
exit();

?>