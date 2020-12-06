<?php

//  importowanie wspólnych plików
require 'admin.php';


//  niszczenie coasteczka logowania
setcookie('login_timeout', '1',1);


//  niszczenie sesji
session_destroy();
header('Location: index.php');
exit();

?>