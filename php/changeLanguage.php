<?php

$time = time() + (86400 * 30 * 365); // one year
setcookie("i18n", $_POST["lang"], $time, "/");