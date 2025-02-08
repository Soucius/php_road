<?php

    require "baglanti.php";

    $sql = "select * from users inner join groups on users.user_group = groups.group_id";
    $q = $db->query($sql);
    $arr = $q->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";