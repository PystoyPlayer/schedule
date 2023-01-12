<?php

    $connect = mysqli_connect('localhost', 'root', '', 'subvost');

    if (!$connect) {
        die('Error connect to DataBase');
    }