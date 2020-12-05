<?php

//  imprt wspólnego pliku
require '../app/common.php';

//  tworzenie sesji
session_start();

//  tworzenie ciasteczka automatycznego wylogowania 12 minut
setcookie('login_timeout', 'true', time() + (1 * 60));

?>