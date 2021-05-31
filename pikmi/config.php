<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pikmi";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db)
    die("Gagal terhubung dengan database: " . mysqli_connect_error());

    function query($query) {
        global $db;
        $result = mysqli_query($db, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

    
    function upload() {
        global $db;
        $namafile=$_FILES['poster']['name'];
        $size=$_FILES['poster']['size'];
        $error=$_FILES['poster']['error'];
        $tmp=$_FILES['poster']['tmp_name'];

        $ext=['jpg', 'jpeg', 'png'];
        $extfile=explode('.', $namafile);
        $extfile=strtolower(end($extfile));
        if(!in_array($extfile, $ext))
        {
            echo "
                <script>
                    alert('Format gambar Anda tidak sesuai!');
                </script>
            ";
            return false;
        }

        if($size>4000000)
        {
            echo "
                <script>
                    alert('Ukuran gambar Anda terlalu besar!');
                </script>
            ";
            return false;
        }
        $namafilebaru=uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $extfile;
        move_uploaded_file($tmp, 'img/' . $namafilebaru);
        return $namafilebaru;
    }

    
    function ubah($data) {
        global $db;
        $id_ide = $data["id"];
        $posterlama=htmlspecialchars($data["posterlama"]);
        $judul = htmlspecialchars($data["judul"]);
        if($_FILES['poster']['error'] === 4)
        {
            $poster=$posterlama;
        }
        else {
            $poster=upload();
        }
        $query="UPDATE idea SET 
            poster='$poster', judul='$judul'
            WHERE id=$id_ide
        ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    
    function hapus($id) {
        global $db;
        mysqli_query($db, "DELETE FROM idea WHERE id=$id");
        return mysqli_affected_rows($db);
    }

?>