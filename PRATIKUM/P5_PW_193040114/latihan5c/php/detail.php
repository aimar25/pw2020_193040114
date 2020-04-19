<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }
    require 'function.php';
    $id = $_GET['id'];
    $alatmusik = query("SELECT * FROM alatmusik WHERE id = $id")[0];
?>

<html>
    <head>
        <title>detail</title>
    </head>
<body>
<div class="container">
        <div class="gambar">
            <img src="../asset/gambar/<?= $lap["gambar"]; ?>" alt="">
         </div>
         
            <div class="keterangan">
                <p><?= $x["gambar"]; ?></p>
                <p><?= $x["harga"]; ?></p>
                <p><?= $x["asal"]; ?></p>
                <p><?= $x["nama"]; ?></p>
                <p><?= $x["cara"]; ?></p>
            </div>

            <button class="tombol_kembali"> <a href="../index.php">kembali</a> </button>
    </div>
</body>
</html>
