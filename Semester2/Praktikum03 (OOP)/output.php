<?php
require 'class_bmipasien.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Evaluasi BMI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0daa54a808.js" crossorigin="anonymous"></script>
</head>
<style>
    .inputan {
        margin: 5px;
    }
    .jumb {
        border-radius:4px;
        box-shadow: 0 0 1px rgba(0, 0, 0, 1);
        background-color:white;
        margin: 7em auto auto auto;
        padding: 3rem;
    }
    .judul {
        margin-bottom:50px;
        margin-top:-40px;
        text-align:center;
    }
    .geser {
        margin-right:25px;
    }
    .container {
        margin: 1rem 10rem auto auto;
    }
</style>
<body>
<form class="form-inline inputan">
<div class="jumbotron jumbotron-fluid jumb">
    <div class="container">
        <h4 class="judul">Hasil Evaluasi BMI</h3>
        <p><span style="padding-right: 114px;">Nama</span><?= ': '.$nama.' ('.$kelamin.')' ?></p>
        <p><span style="padding-right: 20px;">Berat/Tinggi Badan</span><?= ': '.$berat_b."kg".'/'.$tinggi_b.'cm' ?></p>
        <p><span style="padding-right: 116px;">Umur</span><?= ': '.$umur.' Tahun' ?></p>
        <p><span style="padding-right: 128px;">BMI</span><?= ': '.$bmi1->hasilBMI(); ?></p>
        <p><span style="padding-right: 122px;">Hasil</span><?= ': '.$bmi1->statusBMI(); ?></p>
    </div>
</div>
</form>
</body>
</html>