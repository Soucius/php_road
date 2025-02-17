<?php

    foreach (glob(__DIR__.'/helpers/*.php') as $file) {
        require $file;
    }

    $config["route"] = "home";
    $config["lang"] = "tr";

    if (isset($_GET["route"])) {
        preg_match('@(?<lang>\b[a-z]{2}\b)?/?(?<route>.+)/?@', $_GET["route"], $result);
    }

    if (isset($result["lang"])) {
        if (file_exists(__DIR__.'/language/'.$result['lang'].'.php')) {
            $config['lang'] = $result['lang'];
        } else {
            $config['lang'] = 'tr';
        }

        require __DIR__.'/language/'.$config['lang'].'.php';
    }

    $config['route'] = explode('/', $result['route']);

    if (file_exists(__DIR__.'/Controller/'.$config['route'][0].'.php')) {
        require __DIR__.'/Controller/'.$config['route'][0].'.php';
    } else {
        echo 'Sayfa bulunamadi';
    }

    require __DIR__.'/language/'.$config['lang'].'.php';