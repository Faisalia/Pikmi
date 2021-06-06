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


    function uploadpp() {
        global $db;
        $namafile=$_FILES['foto']['name'];
        $size=$_FILES['foto']['size'];
        $error=$_FILES['foto']['error'];
        $tmp=$_FILES['foto']['tmp_name'];

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
        $bidang = htmlspecialchars($data["bidang"]);
        $judul = htmlspecialchars($data["judul"]);
        if($_FILES['poster']['error'] === 4)
        {
            $poster=$posterlama;
        }
        
        else {
            $poster=upload();
        }
        $query="UPDATE idea SET 
            poster='$poster', bidang='$bidang', judul='$judul'
            WHERE id=$id_ide
        ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function ubahprofil($data) {
        global $db;
        $id_profil = $data["id"];
        $email = $data["email"];
        $fotolama=htmlspecialchars($data["fotolama"]);
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $panggilan = htmlspecialchars($data["panggilan"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $fakultas = htmlspecialchars($data["fakultas"]);
        $wa = htmlspecialchars($data["whatsapp"]);
        $ig = htmlspecialchars($data["instagram"]);
        $komitmen = htmlspecialchars($data["komitmen"]);
        $keahlian = htmlspecialchars($data["keahlian"]);
        $pengalaman = htmlspecialchars($data["pengalaman"]);
        $kesibukan = htmlspecialchars($data["kesibukan"]);
        if($_FILES['foto']['error'] === 4)
        {
            $foto=$fotolama;
        }
        else    {
            $foto=uploadpp();
        }
        $query="UPDATE mahasiswa SET 
            email='$email', foto='$foto', nama_lengkap='$nama_lengkap', 
            panggilan='$panggilan', nim='$nim',
            jurusan='$jurusan', fakultas='$fakultas',
            whatsapp='$wa', instagram='$ig',
            komitmen='$komitmen', keahlian='$keahlian',
            pengalaman='$pengalaman', kesibukan='$kesibukan'
            WHERE id=$id_profil
        ";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    function buatprofil($data) {
        global $db;
        $email = $data["email"];
        if($_FILES['foto']['error'] === 4)
        {
            $foto="empty.png";
        }
        else {
            $foto=uploadpp();
        }
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $panggilan = htmlspecialchars($data["panggilan"]);
        $nim = htmlspecialchars($data["nim"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $fakultas = htmlspecialchars($data["fakultas"]);
        $wa = htmlspecialchars($data["whatsapp"]);
        $ig = htmlspecialchars($data["instagram"]);
        $komitmen = htmlspecialchars($data["komitmen"]);
        $keahlian = htmlspecialchars($data["keahlian"]);
        $pengalaman = htmlspecialchars($data["pengalaman"]);
        $kesibukan = htmlspecialchars($data["kesibukan"]);
        $query="INSERT INTO mahasiswa VALUES ( 
            '', '$email', '$foto', '$nama_lengkap', 
            '$panggilan', '$nim',
            '$jurusan', '$fakultas',
            '$wa', '$ig',
            '$komitmen', '$keahlian',
            '$pengalaman', '$kesibukan'
        )";
        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    
    function hapus($id) {
        global $db;
        mysqli_query($db, "DELETE FROM idea WHERE id=$id");
        return mysqli_affected_rows($db);
    }

?>