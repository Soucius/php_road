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

    // $select = $db->query("select * from users where user_id = 1");
    // $users = $select->fetch(PDO::FETCH_ASSOC);
    // print_r($users);

    echo "<pre>";

    // $update = $db->query("update users set name = 'sahin ersever' where user_id = 1");

    // if ($update) {
    //     echo "Guncellendi";
    // } else {
    //     echo "Guncelleme basarisiz";
    // }

    // $delete = $db->query("delete from users where user_id = 2");

    // if ($delete) {
    //     echo "Silindi";
    // } else {
    //     echo "Silme basarisiz";
    // }

    // $insert = $db->query("insert into users set name = 'fatma ersever', phone = '+905976425689', mail = 'fatma@gmail.com', city = 'kocaeli', group = 'B', postal_code = '31875', age = 27");

    // if ($insert) {
    //     echo "Eklendi";
    // } else {
    //     echo "Ekleme basarisiz";
    // }

    $data = [
        "name" => "Soucius Kaenj",
        "phone" => "+904322345487",
        "mail" => "soucius@gmail.com",
        "city" => "istanbul",
        "group" => "A",
        "postal_code" => 34000,
        "age" => 22
    ];

    $query = "insert into users(name, phone, mail, city, group, postal_code, age) values (:name, :phone, :mail, :city, :group, :postal_code, :age)";

    $statement = $db->prepare($query);

    $statement->execute($data);

    $rows = $statement->rowCount();

    if ($rows) {
        echo $db->lastInsertId();
        echo "$rows satir eklendi";
    }

    echo "</pre>";