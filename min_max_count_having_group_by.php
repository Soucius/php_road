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

    // $sql = "select min(age) as younger, max(age) as older from users";

    // $query = $db->query($sql);
    // $users = $query->fetchAll(PDO::FETCH_ASSOC);

    // print_r($users);

    $sql = "select count(user_id) as total, city from users group by city having total >= 1";

    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);