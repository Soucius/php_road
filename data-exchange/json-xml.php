<?php

    // $array = [
    //     "name" => "soucius",
    //     "surname" => "kaenj",
    //     "age" => 22
    // ];

    // $array = json_decode($obj, true);
    // echo $array['name'];

    // $obj = file_get_contents("person.json");

    // $array = json_decode($obj, true);

    // echo '<pre>';
    // print_r($array);

    // $people = simplexml_load_file("people.xml");

    // echo "<pre>";
    // print_r($people);

    header("Content-type: application/xml; charset='utf8'");

    $xml = new SimpleXMLElement("<People />");

    require "../baglanti.php";

    $sql = "select users.*, `groups`.group_name from users inner join `groups` on users.user_group = `groups`.group_id";
    $query = $db->query($sql);
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        $person = $xml->addChild("Person");
        $person->addChild("name", $user["name"]);
        $person->addChild("mail", $user["mail"]);
        $person->addChild("group", $user["group_name"]);
    }

    echo $xml->asXML();