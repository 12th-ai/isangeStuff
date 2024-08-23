<?php include 'sess.php'?>
<?php 
   if(isset($_GET['l'])){
      session_destroy();
      header('location:../login');
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>
   <script src="../../tailwind.js"></script>
   <!-- <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon"> -->
   <script src="../app.js"></script>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <?php include 'nav.php' ?>
   <main class="">
      <?php include './header.php'?>
      <div>
         <h1 class="text-[17px] mb-[20px]">
            Available Counselors (5)
            <a href="" class="text-[16px] text-themeClr">[ View All ]</a>
         </h1>
         <div class="grid grid-cols-2 gap-x-7 gap-y-5">
            <?php 
               $qry = mysqli_query($con, "SELECT * FROM users WHERE `type` = 2");
               while($qryF = mysqli_fetch_array($qry)){
                  $name = $qryF['names'];
                  $age = $qryF['age'];
                  $phn = $qryF['phone'];
                  $id = $qryF['id'];
            ?>
            <div class="flex gap-x-5 border p-4 rounded-sm">
               <div class="py-3">
                  <a href="./profile?q=<?php echo $id?>" class="mb-[15px] flex text-[15.5px] hover:text-defClr transition-all">Names: <?php echo $name?></a>
                  <p class="mb-[10px]">Age: <?php echo $age?></p>
                  <div class="flex gap-x-3 items-center">
                     <a href="tel:<?php echo $phn ?>" class="px-3 py-1 bg-defClr rounded-sm text-white text-[15px]">Call</a>
                     <a href="./profile?q=<?php echo $id?>" class="px-3 py-1 bg-defClr rounded-sm text-white text-[15px]">More Info</a>
                  </div>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </main>
   
</body>
</html>