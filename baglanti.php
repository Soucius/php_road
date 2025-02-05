<?php

    try {
        $db = new PDO("mysql:host=localhost;dbname=testdb;", "root", "");

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->query("set @@lc_time_names = 'tr_TR';");
        $db->query("set character set utf8mb4;");
        $db->query("set character_set_connection=utf8mb4;");
    } catch (PDOException $error) {
        echo $error->getMessage();
    }