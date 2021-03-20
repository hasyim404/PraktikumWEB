<?php 
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
// Grade Nilai UTS
if ($uts >= 85 && $uts <= 100){
    $grade_uts='A';
}
elseif ($uts >= 70 && $uts <= 84){
    $grade_uts='B';
}
elseif ($uts >= 56 && $uts <= 69){
    $grade_uts='C';
}
elseif ($uts >= 36 && $uts <= 55){
    $grade_uts='D';
}
elseif ($uts >= 0 && $uts <= 35){
    $grade_uts='E';
}
else {
    $grade_uts='I';
}


// Grade Bilai UAS
if ($uas >= 85 && $uas <= 100){
    $grade_uas='A';
}
elseif ($uas >= 70 && $uas <= 84){
    $grade_uas='B';
}
elseif ($uas >= 56 && $uas <= 69){
    $grade_uas='C';
}
elseif ($uas >= 36 && $uas <= 55){
    $grade_uas='D';
}
elseif ($uas >= 0 && $uas <= 35){
    $grade_uas='E';
}
else {
    $grade_uas='I';
}


// Grade Nilai Tugas/Praktikum
if ($tugas >= 85 && $tugas <= 100){
    $grade_tugas='A';
}
elseif ($tugas >= 70 && $tugas <= 84){
    $grade_tugas='B';
}
elseif ($tugas >= 56 && $tugas <= 69){
    $grade_tugas='C';
}
elseif ($tugas >= 36 && $tugas <= 55){
    $grade_tugas='D';
}
elseif ($tugas >= 0 && $tugas <= 35){
    $grade_tugas='E';
}
else {
    $grade_tugas='I';
}


// Keterangan Nilai Akhir
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
if ($nilai_akhir >= 55 && $nilai_akhir <= 100){
    $grade_na='Lulus';
}else {
    $grade_na='Tidak Lulus';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body{
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="well">
            <table class="table">
            <thead>
                <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor=1;
                    echo '<tr>
                    <td>'.$nomor.'</td>';
                    echo '<td>'.$nama.'</td>';
                    echo '<td>'.$nim.'</td>';
                    echo '<td>'.$grade_uts.'</td>';
                    echo '<td>'.$grade_uas.'</td>';
                    echo '<td>'.$grade_tugas.'</td>';
                    echo '<td>'.$grade_na.' '.'('.number_format($nilai_akhir,2,',','.').')'.'</td>';
                    echo '</tr>';
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>

