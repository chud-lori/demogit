<?php

   $connection = mysqli_connect('localhost','root','','contact_db');

   if(isset($_POST['send'])){
      $id = $_POST['id'];
      $name = $_POST['nama'];
      $email = $_POST['email'];
      $number = $_POST['nomor'];
      $message = $_POST['pesan'];

      $request = " insert into contact_form(id, name, email, number, message) values('$id','$name','$email','$number','$message') ";
      mysqli_query($connection, $request);

      header('location:index.php'); 

   }else{
      echo 'terjadi kesalahan silahkan coba lagi!';
   }

?>