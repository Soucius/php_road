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
        <input type="text" name="username"> <br>

        <button type="submit">Submit</button>
    </form>

    <?php
        echo htmlspecialchars($_POST['username'] ?? '');
    ?>
</body>
</html>
