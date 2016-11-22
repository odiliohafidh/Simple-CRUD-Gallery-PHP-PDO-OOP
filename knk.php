<?php

	header("Access-Control-Allow-Origin: *");


        $db_name  = 'lth2';
        $hostname = 'localhost';
        $username = 'root';
        $password = '';


        $con = new PDO("mysql:host=$hostname;dbname=$db_name", $username, $password);

?>