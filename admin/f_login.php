<?php

//  importowanie wspólnych plików
require 'admin.php';

if(!isset($_SESSION['bad_attempts'])) {
    $_SESSION['bad_attempts'] = 0;
}

if(!isset($_SESSION['is_loged'])) {

    if(isset($_POST['form-login']) && $_SESSION['bad_attempts'] < 5) {

        //  podano login oraz nie przekroczono liczby 5 prób
        $login = filter_input(INPUT_POST, 'form-login');
        $haslo = filter_input(INPUT_POST, 'form-haslo');
    
        $user = $db->prepare('SELECT id, login, haslo FROM users WHERE login = :login');
        $user->execute(['login' => $login]);
        $user = $user->fetch(PDO::FETCH_ASSOC);
    
        if($user && password_verify($haslo, $user['haslo'])) {
    
            //  login i haslo poprawne
            $_SESSION['is_logged'] = true;
            unset($_SESSION['bad_attempts']);
    
        } else {
    
            //  logowanie nie powiodło się
            $_SESSION['bad_attempts']++;
    
        }
    
    }

}

//  instrukc końcowa, wspólna dla każdego warynku
header('Location: index.php');
exit();

?>