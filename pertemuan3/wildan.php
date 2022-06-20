<?php
// $_GET

$mahasiswa = [
    [
        "nama" => "Wildana Yudha",
        "nrp" => "567098123",
        "email" => "wildannamaku2@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "wildan.jpg"
    ],
    [
        "nama" => "Vanesya",
        "nrp" => "456789012",
        "email" => "vanesyasun23@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "gowa.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach( $mahasiswa as $mhs ) : ?> 
            <li> 
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>

    
</body>
</html>