<?php

    $db = new PDO("mysql:host=localhost;dbname=testdb;","root","");

    $islem = $_GET['islem'] ?? null;

    if ($islem == 'addgroup') {
        $name = $_POST['group_name'];
        $query = $db->query("insert into `groups` set group_name = '$name'");

        if ($query) {
            $status = "success";
            $title = "Islem Basarili";
            $msg = "Islem basariyla tamamlandi";

            echo json_encode(["status" => $status, "title" => $title,"msg" => $msg, "data" => [
                "id" => $db->lastInsertId(),
                "name"=> $name
            ]]);
            exit();
        } else {
            $status = "error";
            $title = "Ops! Dikkat";
            $msg = "Beklenmedik bir hata meydana geldi. Lutfen sayfanizi yenileyerek tekrar deneyin.";

            echo json_encode(["status" => $status, "title" => $title,"msg" => $msg]);
            exit();
        }
    }