<?php require_once 'class_mahasiswa.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
            <tr>
                <td>1</td>
                <td><?= $mahasiswa1->nim?></td>
                <td><?= $mahasiswa1->nama?></td>
                <td><?= $mahasiswa1->prodi?></td>
                <td><?= $mahasiswa1->angkatan?></td>
                <td><?= $mahasiswa1->ipk?></td>
                <td><?= $mahasiswa1->predikat_ipk()?></td>
            </tr>
            <tr></tr>
        </table>
    </div>
</body>
</html>