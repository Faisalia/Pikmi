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

?>