<?php

//  imprt wspólnego pliku
require 'admin.php';
require TEMP.'/header.php';


//  sprawdzanie, czy jest ktoś zalogowany
if(!isset($_SESSION['is_logged']) || !isset($_COOKIE['login_timeout'])) {

    //  nikt nie jest zalogowany
    require ADMN.'/user/login.php';

} else {

    //  ktos jest juz zalogowany
    require ADMN.'/user/logout.php';

    //  import strony wyboru opcji
    require ADMN.'/view.php';

    //  wykonanie odpowiedniej funkcji
    switch($_GET['action']) {

        case 'add':     //  dodawanie nowej strony
            addPage($_POST, $db);
        break;
        
        case 'edit':    //  edycja wybranej strony
            editPage($_POST, $db);
        break;

        case 'delete':  //  usunięcie wybranej strony
            deletePage($_POST, $db);
        break;
    }
}

require TEMP.'/footer.php';


?>