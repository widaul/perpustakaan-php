<?php
$mahasiswa = [
    "Widda Aulia Ditasari",
    "Najwa Alifia Fakhreza",
    "Rahmalika Putri Anjani",
    "Asyifa Nadhira Aprilia"
];

$nama_depan = "Widda Aulia";
$nama_belakang = "Ditasari";

$nama_lengkap = $nama_depan ." ". $nama_belakang;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Widda Aulia Ditasari (Daftar Mahasiswa)</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <!-- Menampilkan array dalam tabel -->
    <table border="1">
        <tr>
            <td><h3>Nama Lengkap</h3></td>
        </tr>
        <?php foreach ($mahasiswa as $m) { ?>
            <tr>
                <td> 
                    <?php echo $m; ?> 
                </td>
            </tr>
        <?php }  ?>
       
    </table>

<?php 
echo "<br>";
echo "Nama Lengkap: " .$nama_lengkap; ?>

</body>
</html>