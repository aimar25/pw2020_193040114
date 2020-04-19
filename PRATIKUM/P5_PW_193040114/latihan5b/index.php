<?php
		  require 'php/function.php';
  		  $alatmusik = query("SELECT * FROM alatmusik")
?>

<html>
    <head>
        <title>Latihan5b</title>
    </head>
<body>
<div class="container">
    <table border="1" cellpadding="3" cellspacing="2">
        <tr>
            <th>Gambar</th>
            <th>Harga Barang</th>
            <th>Asal</th>
            <th>Nama</th>
            <th>Cara Main</th> 
        </tr>

         <?php foreach ($alatmusik as $alat) :?>
        <tr>
        <td><?=$alat["id"];?></td>
        <td><img src="asset/gambar/<?=$alat ["gambar"]?>" ></td>
        <td><?=$alat["gambar"];?></td>
        <td><?=$alat["harga"];?></td>
        <td><?=$alat["asal"];?></td>
        <td><?=$alat["nama"];?></td>
        <td><?=$alat["cara"];?></td>
        </tr>

        <?php endforeach; ?>
    </table>
    </div>
    
</body>
</html>