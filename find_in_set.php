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

    echo "<pre>";

    $sql = "select * from users where FIND_IN_SET('A', REPLACE(group, ' ', ''))";
    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);