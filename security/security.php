<?php
    include "config/config.php";

    $sql = "insert into kullanicilar set isim='{$_POST['isim']}', soyisim='{$_POST['soyisim']}'";

    if (isset($_POST["isim"])) {
        $insert = $db->query($sql);

        if ($insert) {
            echo "eklendi";
        } else {
            echo "Bir hata olustu";
        }
    }
?>

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

    <form action="" method="post">
        <input type="text" name="isim"></input> <br>
        <input type="text" name="soyisim"></input> <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
