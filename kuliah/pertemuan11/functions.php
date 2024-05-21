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


  
    function tambah($data){

    $conn = koneksi();

    $nama = $data['nama'];
    $nim = $data['nim'];
    $email = $data['email'];
    $jurusan = $data['jurusan'];
    
    $sql = "INSERT INTO mahasiswa
              VALUES (null, '$nama', '$nim', '$email', '$jurusan')
            ";

    mysqli_query($conn, $sql);
}


    function hapus($id){
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));
    
        return mysqli_affected_rows($conn);
    
    }


?>