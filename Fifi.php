<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Pertemuan 2</title>
</head>
<body>
    <?php
    // Fungsi dengan 3 parameter yaitu: Nama, NIM, Prodi
    function sapa($Nama, $NIM, $Prodi){
        echo("<br>Assalamualaikum, Selamat Datang " .$Nama.
        "<br>Dengan NIM ".$NIM.
        "<br>Dari Program Studi ".$Prodi. "<br>");
    }

    //Memanggil fungsi sebanyak 3 kali
    sapa("Fifi", 210411100078, "Teknik Informatika");
    sapa("Sholah", 180211100136, "Manajemen");
    sapa("Jihaz", 200421100162, "Teknik Industri");
    ?>
</body>
</html>
