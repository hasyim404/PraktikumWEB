<?php 
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
// Case UTS
switch (true){
    case ($uts >= 85 && $uts <= 100):
        $grade_uts = 'A';
        $predikat_uts = 'Sangat Memuaskan';
        break;
    case ($uts >= 70 && $uts <= 84):
        $grade_uts = 'B';
        $predikat_uts = 'Memuaskan';
        break;
    case ($uts >= 56 && $uts <= 69):
        $grade_uts = 'C';
        $predikat_uts = 'Cukup';
        break;
    case ($uts >= 36 && $uts <= 55):
        $grade_uts = 'D';
        $predikat_uts = 'Kurang';
        break;
    case ($uts >= 0 && $uts <= 35):
        $grade_uts = 'E';
        $predikat_uts = 'Sangat Kurang';
        break;
    default:
        $grade_uts = 'I';
        $predikat_uts = 'error';
}


// Case UAS
switch (true){
    case ($uas >= 85 && $uas <= 100):
        $grade_uas = 'A';
        $predikat_uas = 'Sangat Memuaskan';
        break;
    case ($uas >= 70 && $uas <= 84):
        $grade_uas = 'B';
        $predikat_uas = 'Memuaskan';
        break;
    case ($uas >= 56 && $uas <= 69):
        $grade_uas = 'C';
        $predikat_uas = 'Cukup';
        break;
    case ($uas >= 36 && $uas <= 55):
        $grade_uas = 'D';
        $predikat_uas = 'Kurang';
        break;
    case ($uas >= 0 && $uas <= 35):
        $grade_uas = 'E';
        $predikat_uas = 'Sangat Kurang';
        break;
    default:
        $grade_uas = 'I';
        $predikat_uas = 'error';
}


// Case Tugas/Praktikum
switch (true){
    case ($tugas >= 85 && $tugas <= 100):
        $grade_tugas = 'A';
        $predikat_tugas = 'Sangat Memuaskan';
        break;
    case ($tugas >= 70 && $tugas <= 84):
        $grade_tugas = 'B';
        $predikat_tugas = 'Memuaskan';
        break;
    case ($tugas >= 56 && $tugas <= 69):
        $grade_tugas = 'C';
        $predikat_tugas = 'Cukup';
        break;
    case ($tugas >= 36 && $tugas <= 55):
        $grade_tugas = 'D';
        $predikat_tugas = 'Kurang';
        break;
    case ($tugas >= 0 && $tugas <= 35):
        $grade_tugas = 'E';
        $predikat_tugas = 'Sangat Kurang';
        break;
    default:
        $grade_tugas = 'I';
        $predikat_tugas = 'error';
}


// Case Nilai Akhir
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
switch (true){
    case ($nilai_akhir >= 55 && $nilai_akhir <= 100):
        $grade_na='Lulus';
        break;
    default:
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-default table-hover ">
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
                    echo '<td>'.$grade_uts.' (<i>'.$predikat_uts.'</i>)'.'</td>';
                    echo '<td>'.$grade_uas.' (<i>'.$predikat_uas.'</i>)'.'</td>';
                    echo '<td>'.$grade_tugas.' (<i>'.$predikat_tugas.'</i>)'.'</td>';
                    echo '<td>'.$grade_na.' '.'('.number_format($nilai_akhir,2,',','.').')'.'</td>';
                    echo '</tr>';
                ?>
            </tbody>
            </table>
        </div>
    </div>
</body>
</html>

