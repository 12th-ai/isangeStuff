<?php
   session_start();
   $con = mysqli_connect('localhost', 'root', '', 'counsellors');
   if(!isset($_SESSION['logged'])){
      header('location:../login');
   }else{
      $sesId = $_SESSION['logged'];
      $sesQ = mysqli_query($con, "SELECT * FROM users WHERE id = $sesId");
      $sesF = mysqli_fetch_array($sesQ);

      $sesN = $sesF['names'];
      $sesTyp = $sesF['type'];
      // if(isset($_GET['l'])){
      //    session_destroy();
      // }
   }
   
?>