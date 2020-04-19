<?php
    require 'php/function.php';
    $alatmusik = query("SELECT * FROM alatmusik")
?>

<html>
    <head>
        <title>latihan5c</title>
    </head>
    
<body>
    <div class="container">
        <?php foreach ($alatmusik as $alat) :?>
            <p class="tipe">
                 <a href="php/detail.php?id=<?= $alat['id'] ?>">
                    <?= $alat["harga"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>