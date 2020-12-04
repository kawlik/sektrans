<?php


//  Aktywne na czas produkcji
ini_set('display_errors', 'Off');


//  Definiowanie ścierzek względnych do folderów
define('URL', 'http://localhost/sektrans'); //  strona www
define('APP', __DIR__);     //  ścierzka do folderu aplikacji

define('SRC', APP.'/src');      //  ścierzka do katalogu zasobów
define('ERR', APP.'/err');      //  ścierzka do katalogu zasobów
define('VIEW', APP.'/view');    //  ścierzka do katalogu treści

define('PAGE', VIEW.'/page');   //  ścierzka do katalogu podstron dynamicznych
define('STAT', VIEW.'/stat');   //  ścierzka do katalogu podstron statycznych
define('TEMP', VIEW.'/temp');   //  ścierzka do katalogu z szablonami
define('ADMN', VIEW.'/admin');  //  ścierzka do katalogu z szablonami administracyjnymi


//  Definiowanie ścierzek względnych do folderów zewnętrznych
define('CSS', URL.'/css');  //  ścierzka do katalogu akrusza stylów
define('IMG', URL.'/img');  //  ścierzka do katalogu zdjęć
define('JS', URL.'/js');    //  ścierzka do katalogu skryptów


//  Konfiguracja bazy danych
define('DB_HOST', 'localhost');
define('DB_NAME', 'sektrans');
define('DB_USER', 'root');
define('DB_PASS', '');


//  Referencja do połącznia z bazą danych
$db = false;


//  Próba nawiązania połączenia z bazą
try {

    $db = new PDO(
        'mysql:host='.DB_HOST.';dbname='.DB_NAME,           //  Linkowanie z bazą
        DB_USER,    //  Dane użytkownika
        DB_PASS,    //  Hasło użytkownika
        [           //  Poniżej => predefiniowane opcje zabezpieczeń
            PDO::ATTR_EMULATE_PREPARES => false,            //  Wyłączenie emulowania preparowanych zapytań 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION     //  Włączenie trybu rzucania wyjątków
        ]
    );

} catch (PDOException $e) {

    /*
        W razie błędu nastąpi pobranie statycznej strony błędu, z przygotowanym
        komunikatem dla użytkownika, oraz możliwością ponowienia próby odwiedzenia strony.

        Docelowo komunikat o błędzie będzie zapisywany do rejestru błędów.
    */

    require ERR.'/error.php';
    exit();

}


//  Importowanie podstawowych komponentów
require SRC.'/functions.php';


?>