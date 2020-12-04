<?php require TEMP.'/header.php'; ?>

<?php

    /*
        1.  Obsługa menu głównego - wspólne dla wszystkich stron.
        2.  Importowanie zawartości stron.
    */


    $view = false;  //  deklaracja zmiennej wyboru strony


    if(isset($_GET['view'])) {  //  sprawdzenie czy nastąpił wybór strony
        $view = $_GET['view'];  //  przypisanie strony do zmiennej wyboru
    }
    

    switch($view) { //  importowanie odpowiedniej strony

        default:    //  strona domowa
            require STAT.'/home.php';
        break;


        case 'page':    //  strona z artykułami
            require PAGE.'/page.php';
        break;

        case 'about':   //  strona informaci
            require STAT.'/about.php';
        break;

        case 'contact': //  strona kontaktowa
            require STAT.'/contact.php';
        break;

    }

?>

<?php require TEMP.'/footer.php'; ?>