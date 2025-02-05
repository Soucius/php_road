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

    $sql = "select name, age from users where user_id >= 1 && users.user_id <= 10 order by age desc";

    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);