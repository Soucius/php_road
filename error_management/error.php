<div style="width: 100%; padding: 30px; margin-bottom: 1px; background: #303030; color: white;">
    <p><?= $errno ?> - <?= $errstr ?></p>
    <p><strong>Exception File:</strong> <?= $errfile ?></p>
    <p><strong>Exception Line:</strong> <?= $errline ?></p>

    <?php
        $open_file = fopen($errfile,"r");
        $count = 0;

        while ($line = fgets($open_file)) {
            if (++$count == $errline) {
                echo "<p><strong>Exception You Made:</strong>$line</p>";
            }
        }
    ?>
</div>