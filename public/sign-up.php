<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up</title>
   <script src="../tailwind.js"></script>
   <link rel="stylesheet" href="style.css">
   <script src="../jquery-3.6.0.min.js"></script>
   <script src="./app.js"></script>
</head>
<body>
   <?php include './nav.php'?>
   <div class="h-[calc(100vh-100px)] border flex justify-center items-center flex-col">
      <div class="border p-[30px] min-w-[800px] eachTab" id="employer">
         <h1 class="text-[18px] uppercase font-semibold text-center mb-[25px] text-defClr">Sign Up</h1>
         <form action="" class="grid gap-y-4" method="POST">
            <div class="grid grid-cols-[repeat(3,calc(100%/3.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Full Names</label>
                  <input type="text" name="names" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Age</label>
                  <input type="number" name="age" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Password</label>
                  <input type="password" name="pw" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            <div class="grid grid-cols-[repeat(2,calc(100%/2.1))] justify-between">
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Phone Number</label>
                  <input type="text" name="phone" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
               <div class="flex flex-col gap-y-[8px]">
                  <label class="text-[14px]">Email (Optional)</label>
                  <input type="email" name="email" id="" class="px-[15px] bg-transparent border py-[6px] text-[14px] outline-none">
               </div>
            </div>
            
            <div class="flex gap-x-5">
               <div>
                  <input type="radio" name="type" value="1">
                  <label>As User</label>
               </div>
               <div>
                  <input type="radio" name="type" value="2">
                  <label>As Counsellor</label>
               </div>
            </div>
            <div class="flex flex-col gap-y-[8px] w-full">
               <label class="text-[15px]">More About You</label>
               <textarea name="more" id="" class="px-[15px] bg-transparent py-[6px] text-[14px] outline-none w-full border h-[100px]"></textarea>
            </div>
            <a href="./login.php" class="underline text-[15px] text-defClr w-fit">Have Account?</a>
            <button name="register" class="border py-2 text-[15px] rounded-[5px] bg-defClr text-white">Sign Up</button>
         </form>
      </div>
   </div>
   <script>
      $('.tabButton').click(function(){
         $('.eachTab').hide();
         let toToggle = $(`#${$(this).attr('data-tab')}`)
         $('.activeBtn').removeClass('activeBtn bg-defClr border-defClr text-myW');
         $(this).addClass('activeBtn bg-defClr border-defClr text-myW');
         toToggle.fadeToggle();
      })
      
      $('.activeBtn').trigger('click')
   </script>
   <?php
      if(isset($_POST['register'])){
         $con = mysqli_connect('localhost', 'root', '', 'counsellors');

         $name = $_POST['names'];
         $age = $_POST['age'];
         $phn = $_POST['phone'];
         $eml = $_POST['email'];
         $pw = $_POST['pw'];
         $typ = $_POST['type'];

         $more = $_POST['more'];
         $qq = mysqli_query($con, "INSERT INTO users VALUES('', '$name', '$age', '$phn', '$eml', '$pw','$more', '$typ')");
         if($qq){
            echo '<script>
                  alert("Sign Up Successful")
                  window.location.href="./login"; 
               </script>  
            ';
         }
      }
   ?>
</body>
</html>