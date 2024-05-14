<?php

    function koneksi()
    {
        $db = mysqli_connect('localhost', 'root', '', 'pw2024_b_233040056' );
        return $db;
    }


    function query($db)
    {
        $conn = koneksi();
        $result = mysqli_query($conn, 'SELECT * FROM mahasiswa');
        $rows = [];
        while($row = mysqli_fetch_assoc($result))
            {
             $rows[] = $row;
            }
        return $rows;
    }


?>