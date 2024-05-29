<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Widda Aulia Ditasari (BMI) </title>

    <style>

    .input{
        width: 20%;
        height: 30px;
        border: 1px solid rgb(0, 0, 0);
        border-radius: 2cm;
        font-size: large;
    }

    .spasi {
         margin: 10px;
    }

    .tombol{
        font-size: large;
        font-weight: bold;
        border-radius: 10%;
    }

    .text{
        font-size: 20px;
        font-family: arial;
        font-weight: 600;
        }
    </style>

</head>
<body>

<div class="spasi" >
    <h1> Aplikasi Penghitung BMI </h1>
</div>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div class="spasi" >
        <label class="text" for="bb"> Berat Badan (Kg): </label>
        <input class="input" type="number" name="bb">
    </div>
            <br>
    <div class="spasi">
        <label class="text" for="tb"> Tinggi Badan (Cm): </label>
        <input class="input" type="number" name="tb">
    </div>
            <br>
    <div>
        <input class="tombol" type="submit" value="Hitung BMI" name="Hitung"/>
    </div>

    
</form>

<?php
function hitungBmi($bb, $tb){
    $total= ($bb/($tb * $tb)) * 10000;
    return number_format($total, 2);

}

function kategori($total){
    if($total < 18.50){
        return "underweight";
    }
    elseif ($total>=18.50 && $total<=24.99) {
        return "healthy weight";
    }
    elseif ($total>=25.00 && $total<=29.99){
        return "overweight";
    }
    else{
        return "obese";
    }
}

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $bb= $_POST["bb"];
    $tb = $_POST["tb"];

   $hasil = hitungBmi($bb, $tb);
   $kategori = kategori($hasil);

    echo "<h2> Hasil Perhitungan </h2>";

    echo "Berat Badan: " .$bb. " kg <br>";
    echo "Tinggi Badan: " .$tb. " cm <br>";
    echo "BMI: " .$hasil."<br>" ;
    echo "Kategori: " .$kategori. "<br>";

};

?>
 
</body>
</html>