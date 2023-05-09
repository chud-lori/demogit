<?php

    $connection = mysqli_connect('localhost','root','','port');

    if(isset($_POST['send'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nomor = $_POST['nomor'];
        $komentar = $_POST['komentar'];

        $_request = "insert into kontak(id,nama,email,nomor,komentar) values ('$id','$nama','$email','$nomor','$komentar')";

        mysqli_query($connection,$_request);

        header('location:index.php');
    }else{
        echo 'terjadi kesalahan silahkan coba lagi';
    }
?>