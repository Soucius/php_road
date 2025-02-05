<?php

    require "baglanti.php";

    echo "<pre>";

    $sql = "select * from users where user_id between 0 and 10";
    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);