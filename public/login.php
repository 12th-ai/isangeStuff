<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <script src="../tailwind.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include './nav.php'?>
   <div class="h-[calc(100vh-100px)] border flex justify-center items-center">
      <div class="border p-[30px] min-w-[500px]">
         <h1 class="text-[18px] uppercase font-semibold text-center mb-[25px] text-defClr">Login</h1>
         <form action="" class="grid gap-y-4" method="POST">
            <div class="flex flex-col gap-y-[8px]">
               <label class="text-[15px]">Phone Number</label>
               <input type="text" placeholder="07xxxxxxxxx" name="phone" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
            </div>
            <div class="flex flex-col gap-y-[8px]">
               <label class="text-[15px]">Password</label>
               <input type="password" name="pw" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
            </div>
            <a href="./sign-up" class="underline text-[15px] text-defClr">No Account?</a>
            <button name="log" class="border py-2 text-[15px] rounded-[5px] bg-defClr text-white">Login</button>
         </form>
      </div>
   </div>
   <script src="./app.js"></script>
   <?php 
      $con = mysqli_connect('localhost', 'root', '', 'counsellors');
      if(isset($_POST['log'])){
         $phn = $_POST['phone'];
         $pw = $_POST['pw'];
         $qq = mysqli_query($con, "SELECT * FROM users WHERE phone = '$phn' AND `password` = '$pw'");
         if(mysqli_num_rows($qq) > 0){
            $ff = mysqli_fetch_array($qq);
            $_SESSION['logged'] = $ff['id'];
            echo '<script>
                  alert("Log In Successful");
                  window.location.href="./dashboard/"; 
               </script>  
            ';
         }else{
            echo '<script>
                  alert("Log In Failed");
                  window.location.href="#"; 
               </script>  
            ';
         }
      }
   ?>
</body>
</html>