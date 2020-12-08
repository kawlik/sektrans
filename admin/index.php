<?php

//  imprt wspólnego pliku

use function PHPSTORM_META\type;

require 'admin.php';
require TEMP.'/header.php';


//  sprawdzanie, czy jest ktoś zalogowany
//  jeśli istnieje zmienna sesyjna 'is_logged' - ktos jest zalogowany
//  jesli zmienna cookie 'login_timeout' istnieje - ktos jest zalogowany
if($_SESSION['is_logged'] && (int)$_COOKIE['login_timeout'] > time()) {

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

} else {

    //  sesja nie powinna widzieć nikogo jako zalogowanego
    $_SESSION['is_logged'] = false;

    //  nikt nie jest zalogowany
    require ADMN.'/user/login.php';

    //  Element w fazie rozwoju
    /*  require ADMN.'/user/register.php';  */

    //  tworzenie ciasteczka automatycznego wylogowania po zamknięciu przeglądarki
    //  login timeout zezwala na 12 minut niewylogowywania się
    setcookie('login_timeout', time() + (12 * 60), time() + (12 * 60));

}

require TEMP.'/footer.php';
ob_end_flush();

?>