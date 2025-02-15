<?php

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://jsonplaceholder.typicode.com/posts",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => [
            "user" => true
        ]
    ]);

    $result = curl_exec($curl);
    curl_close($curl);

    echo "<pre>";
    print_r($result);