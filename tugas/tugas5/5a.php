<?php
$mahasiswa = [
    [
        'nama' => 'Hikmat Pandu Raharja',
        'nrp' => '233040065',
        'email' => 'hikmat@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'hikmat.png'
    ],
    [
        'nama' => 'udin emir',
        'nrp' => '233040054',
        'email' => 'udin@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g1.jpg'
    ],
    [
        'nama' => 'asep fahri',
        'nrp' => '233040052',
        'email' => 'asep@gamil.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g2.jpg'
    ],
    [
        'nama' => 'rudi faiz',
        'nrp' => '233040058',
        'email' => 'rudi@gamil.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g3.jpg'
    ],
    [
        'nama' => 'maman andika',
        'nrp' => '233040069',
        'email' => 'maman@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g4.png'
    ],
    [
        'nama' => 'yadi murthado',
        'nrp' => '233040060',
        'email' => 'yadi@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g9.png'
    ],
    [
        'nama' => 'iyar roswadi',
        'nrp' => '233040061',
        'email' => 'iyar@gmail.com',
        'jurusan' => 'teknik ninformatika',
        'gambar' => 'g5.png'
    ],
    [
        'nama' => 'usman samsul',
        'nrp' => '233040067',
        'email' => 'usman@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g6.png'
    ],
    [
        'nama' => 'abdul jamal',
        'nrp' => '233040068',
        'email' => 'abdul@gmail.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g7.png'
    ],
    [
        'nama' => 'roswadi herman',
        'nrp' => '233040077',
        'email' => 'roswadi@gamil.com',
        'jurusan' => 'teknik informatika',
        'gambar' => 'g8.png'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>
            <img src= "gambar/<?= $m['gambar']; ?>" alt="">
            </li>
            <li>NRP: <?= $m['nrp'] ?></li>
            <li>Nama: <?= $m['nama'] ?></li>
            <li>Email: <?= $m['email'] ?></li>
            <li>Jurusan: <?= $m['jurusan'] ?></li>

        </ul>
    <?php endforeach; ?>

</body>
</html>