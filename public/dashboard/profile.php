<?php include 'sess.php'?>
<?php 
   if(isset($_GET['q'])){
      $id = $_GET['q'];
      $qry = mysqli_query($con, "SELECT * FROM users WHERE id = '$id'");
      $get = mysqli_fetch_array($qry);
      $name = $get['names'];
      $age = $get['age'];
      $tel = $get['phone'];
      $email = $get['email'];
      $more = $get['more'];
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>
   <script src="../../tailwind.js"></script>
   <script src="../../jquery-3.6.0.min.js"></script>
   <script src="../app.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'nav.php'?>
   <main>
      <?php include 'header.php'?>
      <div class="flex">
         <div>
            <p class="flex items-center text-[14px] gap-x-2 mb-[10px]">
               <!-- <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                  <path d="M24 4C12.972066 4 4 12.972074 4 24C4 35.027926 12.972066 44 24 44C35.027934 44 44 35.027926 44 24C44 12.972074 35.027934 4 24 4 z M 24 7C33.406615 7 41 14.593391 41 24C41 33.406609 33.406615 41 24 41C14.593385 41 7 33.406609 7 24C7 14.593391 14.593385 7 24 7 z M 31.470703 17.986328 A 1.50015 1.50015 0 0 0 30.439453 18.439453L21.5 27.378906L17.560547 23.439453 A 1.50015 1.50015 0 1 0 15.439453 25.560547L20.439453 30.560547 A 1.50015 1.50015 0 0 0 22.560547 30.560547L32.560547 20.560547 A 1.50015 1.50015 0 0 0 31.470703 17.986328 z"/>
               </svg> -->
               Counsellor
            </p>
            <h1 class="text-[30px] font-semibold mb-[10px]"><?php echo $name?></h1>
            <p class="text-[17px] my-[10px]">Age: <?php echo $age?> Years Old</p>
            <p class="text-[17px] my-[10px]">Tel: <a href="tel:<?php echo $tel?>"><?php echo $tel?></a></p>
            <p class="text-[17px] my-[10px]">Email: <?php echo $email?></p>
            <div class="flex gap-x-3">
               <a href="tel:<?php echo $tel?>" class="py-[3px] px-[15px] bg-defClr text-white">Contact</a>
            </div>
         </div>
      </div>
      <p class="mt-[15px]"><?php echo $more?></p>
   </main>
</body>
</html>