<?php

    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");


    mysqli_select_db($conn, "pw_193040114") or die ("Database salah!");


    $result = mysqli_query($conn, "SELECT * FROM alatmusik");
?>

    <html>
        <head>
            <title>Latihan5a</title>
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
            
            <?php while($row = mysqli_fetch_assoc($result)) :?>
            <tr>
            <td><?=$row["id"];?></td>
            <td><img src="asset/gambar/<?=$row ["gambar"]?>" ></td>
            <td><?=$row["gambar"];?></td>
            <td><?=$row["harga"];?></td>
            <td><?=$row["asal"];?></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["cara"];?></td>
            </tr>

            <?php endwhile; ?>
        </table>
        </div>
        
    </body>
    </html>