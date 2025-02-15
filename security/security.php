<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <h1>Guvenlik</h1>

    <?php
        require "config/config.inc";

        $query = $db->query("select * from users limit 10");
        $users = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        print_r($users);
    ?>  
</body>
</html>
