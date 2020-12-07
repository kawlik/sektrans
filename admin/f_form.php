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



//  Safe data read
$name = e($_POST['form-name']);
$email = e($_POST['form-email']);
$phone = e($_POST['form-phone']);
$body = e($_POST['form-body']);


//  Insert data into database
$contact = $db->prepare('INSERT INTO forms VALUES(null, :name, :email, :phone, :body, NOW(), null)');
$contact->execute([
    'name'  =>  $name,
    'email' =>  $email,
    'phone' =>  $phone,
    'body'  =>  $body,
]);

//  Powrót na stronę główną
header('Location: '.URL);
exit();

?>