<?php

    /*
        1.  Obsługa panelu administracyjnego.
        2.  Importowanie funkcji administratora.
    */


    $view = false;  //  deklaracja zmiennej wyboru funkcji


    if(isset($_GET['view'])) {  //  sprawdzenie czy nastąpił wybór funkcji
        $view = $_GET['view'];  //  przypisanie funkcji do zmiennej wyboru
    }
    

    switch($view) { //  importowanie odpowiedniej funkcji

        default:        //  lista dostępnych wpisów
            require 'page/list.php';
        break;

        case 'add':     //  dodawanie strony
            require 'page/add.php';
        break;

        case 'show':    //  wyświetlanie strony
            require 'page/show.php';
        break;

        case 'edit':    //  edycja wybranej strony
            require 'page/edit.php';
        break;

        case 'delete':  //  usunięcie wybranej strony
            require 'page/delete.php';
        break;
    }

?>