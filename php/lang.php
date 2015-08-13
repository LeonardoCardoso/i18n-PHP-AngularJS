<?php

$file = (isset($_COOKIE['i18n'])  ? $_COOKIE['i18n'] : "ptBr") . ".class.php";
$file = file_exists($file) ? $file : "ptBr.class.php";
include_once $file;
$language = new Language();
echo json_encode($language->getLang($_POST["langRequests"]));

