<?php

//  importowanie wspólnych plików
require 'admin.php';

session_destroy();
header('Location: index.php');
exit();

?>