<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id" );
    }
        
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form Edit Staff </title>
</head>
<body>
    <h1> Form Edit Data Staff</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama']?>" type="text" id="nama" name="nama">

        <br>
            <br>

        <label for="telp"> No Telepon </label>
        <input value="<?php echo $staff['telp']?>" type="text" id="telp" name="telp">

        <br>
            <br>

        <label for="email">Email</label>
        <input value="<?php echo $staff['email']?>" type="text" id="email" name="email">

        <br>
            <br>

        <button type="submit" name="submit" > Submit </button>
        
    </form>

    <br>
        <a href="staff.php"> Kembali ke Halaman Staff </a>

    <br>
        <a href="index.php"> Kembali ke Halaman Utama </a>
</body>
</html>