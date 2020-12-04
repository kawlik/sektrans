<?php require TEMP.'/menu.php'; ?>

<?php

    /*
        1.  Obsługa listy podstron.
        2.  Importowanie zawartości podstron.
    */


    $page = false;  //  deklaracja zmiennej wyboru podstrony


    if(isset($_GET['page'])) {  //  sprawdzenie czy nastąpił wybór podstrony
        $page = $_GET['page'];  //  przypisanie podstrony do zmiennej wyboru
    }



    if($page) {     //  sprawdzanie czy wybrano podstronę

        //  wybrano jakąś podstronę
        //  importowanie wyglądu podstrony

        require 'subpage.php';

    } else {

        //  nie wybrano żadenej podstrony
        //  importowanie wyglądu listy

        require 'list.php';
    }

?>