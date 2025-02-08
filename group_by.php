<?php

    require "baglanti.php";

    echo "<pre>";

    $sql = "select count(user_id) as total, group_name, users.user_group from users inner join `groups` on user_group = group_id group by user_group";
    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    print_r($users);