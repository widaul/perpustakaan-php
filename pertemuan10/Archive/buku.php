<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku" );


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Buku </title>
</head>
<body>
    <h1>Daftar Buku</h1>

    <table border=1>
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
        </tr>

        <?php  foreach ($query as $buku) { ?>
            <tr>
                <td> <?php  echo $buku["nama"]  ?></td>
                <td> <?php  echo $buku["isbn"]  ?></td>
                <td> <?php  echo $buku["unit"]  ?></td>
                <td> 
                    <a href="editBuku.php?id=<?php echo $buku['id']; ?>">EDIT</a> |
                    <a href="hapusBuku.php?id=<?php echo $buku['id']; ?>">HAPUS</a>
                </td>

            </tr>
        <?php  } ?>


    </table>

    <br>
        <a href="tambahBuku.php"> Tambah Data Buku </a>

    <br>
        <a href="index.php"> Kembali ke Halaman Utama </a>

    
</body>
</html>