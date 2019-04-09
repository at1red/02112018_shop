<?php

$db = mysqli_connect('localhost', 'root', '', '02112018_market');
mysqli_set_charset($db, 'utf8');

    if(!$db) {
       echo 'нет подключения к БД';
       die();
    }
 