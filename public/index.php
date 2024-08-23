<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <script src="../jquery-3.6.0.min.js"></script>
   <script src="../typed-js.js"></script>
   <script src="../tailwind.js"></script>
   <link rel="stylesheet" href="style.css">
   <style>
      
      .bg-change{
         background: rgba(0,0,0,.7);
      }
      nav a{
         color: white;
      }
      span.typed-cursor{
         font-size: 40px;
         margin-left: 5px;
         color: inherit;
      }
   </style>
</head>
<body>
   <div class="">
      <div class="bg-change">
         <?php include 'nav.php'?>
         <div class="px-xPad py-[200px] flex items-center">
            <hr class="h-[200px] w-[10px] bg-defClr mr-[30px] border-0">
            <div>
               <p class="text-[22px] mb-[10px] font-medium text-white">"Project Name" here to help</p>
               <div class="flex items-center text-white">
                  <h1 class="text-[40px] font-semibold text-white uppercase" id="typeW"></h1>
               </div>
               <a href="" class="px-[25px] py-[5px] bg-defClr text-white text-[15px] mt-[10px] w-fit flex">Login</a>
            </div>
         </div>
         <div class="bg absolute top-0 h-full w-full grid grid-cols-3 justify-center] -z-20">
            <img src="./assets/bg1.webp" alt="" class="w-full h-full object-cover">
            <img src="./assets/bg2.webp" alt="" class="w-full h-full object-cover">
            <img src="./assets/bg3.jpg" alt="" class="w-full h-full object-cover">
         </div>
      </div>
      <div class="pt-[60px] pb-[150px] px-xPad">
         <h1 class="text-center text-[20px] mb-[50px]">Our Services</h1>
         <div class="grid grid-cols-[repeat(3,calc(100%/3.15))] justify-between">
            <div class="flex flex-col justify-center items-center bg-white py-[40px] px-[20px] rounded-md">
               <div class="w-[80px] h-[80px] border p-4 rounded-md border-defClr">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                     <path d="M10.2,48.6c-0.2,0-0.4-0.1-0.6-0.2c-0.3-0.2-0.5-0.7-0.4-1.1l4.4-16.4L0.4,20.2C0,20-0.1,19.5,0,19.1 c0.1-0.4,0.5-0.7,0.9-0.7l17-0.9l6.1-15.9C24.2,1.3,24.6,1,25,1c0.4,0,0.8,0.3,0.9,0.6l6.1,15.9l17,0.9c0.4,0,0.8,0.3,0.9,0.7 c0.1,0.4,0,0.8-0.3,1.1L36.4,30.9l4.4,16.4c0.1,0.4,0,0.8-0.4,1.1c-0.3,0.2-0.8,0.3-1.1,0L25,39.2l-14.3,9.2 C10.5,48.6,10.4,48.6,10.2,48.6z"/>
                  </svg>
               </div>
               <h1 class="text-[22px] uppercase mt-[10px] mb-[20px] font-semibold text-defClr">Dummy 1</h1>
               <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere reprehenderit consequatur eum ratione, doloribus maiores facilis dolores ab sit nesciunt!</p>
            </div>
            <div class="flex flex-col justify-center items-center relative top-[30px] bg-white py-[40px] px-[20px] rounded-md">
               <div class="w-[80px] h-[80px] border p-4 rounded-md border-defClr">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                     <path d="M10.2,48.6c-0.2,0-0.4-0.1-0.6-0.2c-0.3-0.2-0.5-0.7-0.4-1.1l4.4-16.4L0.4,20.2C0,20-0.1,19.5,0,19.1 c0.1-0.4,0.5-0.7,0.9-0.7l17-0.9l6.1-15.9C24.2,1.3,24.6,1,25,1c0.4,0,0.8,0.3,0.9,0.6l6.1,15.9l17,0.9c0.4,0,0.8,0.3,0.9,0.7 c0.1,0.4,0,0.8-0.3,1.1L36.4,30.9l4.4,16.4c0.1,0.4,0,0.8-0.4,1.1c-0.3,0.2-0.8,0.3-1.1,0L25,39.2l-14.3,9.2 C10.5,48.6,10.4,48.6,10.2,48.6z"/>
                  </svg>
               </div>
               <h1 class="text-[22px] uppercase mt-[10px] mb-[20px] font-semibold text-defClr">Dummy 2</h1>
               <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere reprehenderit consequatur eum ratione, doloribus maiores facilis dolores ab sit nesciunt!</p>
            </div>
            <div class="flex flex-col justify-center items-center relative top-[60px] bg-white py-[40px] px-[20px] rounded-md">
               <div class="w-[80px] h-[80px] border p-4 rounded-md border-defClr">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
                     <path d="M10.2,48.6c-0.2,0-0.4-0.1-0.6-0.2c-0.3-0.2-0.5-0.7-0.4-1.1l4.4-16.4L0.4,20.2C0,20-0.1,19.5,0,19.1 c0.1-0.4,0.5-0.7,0.9-0.7l17-0.9l6.1-15.9C24.2,1.3,24.6,1,25,1c0.4,0,0.8,0.3,0.9,0.6l6.1,15.9l17,0.9c0.4,0,0.8,0.3,0.9,0.7 c0.1,0.4,0,0.8-0.3,1.1L36.4,30.9l4.4,16.4c0.1,0.4,0,0.8-0.4,1.1c-0.3,0.2-0.8,0.3-1.1,0L25,39.2l-14.3,9.2 C10.5,48.6,10.4,48.6,10.2,48.6z"/>
                  </svg>
               </div>
               <h1 class="text-[22px] uppercase mt-[10px] mb-[20px] font-semibold text-defClr">Dummy 3</h1>
               <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere reprehenderit consequatur eum ratione, doloribus maiores facilis dolores ab sit nesciunt!</p>
            </div>
         </div>
      </div>
      <div class="px-xPad pb-[40px]">
         <h1 class="text-center text-[20px] mb-[50px]">What We Aim To Solve</h1>
         <div class="grid gap-y-4">
            <div class="py-[15px] px-[30px] bg-white rounded-md cursor-pointer acc-crd">
               <h1 class="flex justify-between">
                  Problem 1
                  <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                     <path d="M43.486328 11.978516 A 1.50015 1.50015 0 0 0 42.439453 12.439453L24 30.878906L5.5605469 12.439453 A 1.50015 1.50015 0 0 0 4.484375 11.984375 A 1.50015 1.50015 0 0 0 3.4394531 14.560547L22.939453 34.060547 A 1.50015 1.50015 0 0 0 25.060547 34.060547L44.560547 14.560547 A 1.50015 1.50015 0 0 0 43.486328 11.978516 z"/>
                  </svg>
               </h1>
               <p class="hidden mt-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sequi vel ad consectetur quae quibusdam blanditiis autem distinctio delectus, minima eveniet mollitia, amet, libero suscipit nobis ea accusamus sit quasi. Voluptas, animi! Velit dignissimos expedita facilis quasi, reprehenderit eaque earum!</p>
            </div>
            <div class="py-[15px] px-[30px] bg-white rounded-md cursor-pointer acc-crd">
               <h1 class="flex justify-between">
                  Problem 1
                  <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                     <path d="M43.486328 11.978516 A 1.50015 1.50015 0 0 0 42.439453 12.439453L24 30.878906L5.5605469 12.439453 A 1.50015 1.50015 0 0 0 4.484375 11.984375 A 1.50015 1.50015 0 0 0 3.4394531 14.560547L22.939453 34.060547 A 1.50015 1.50015 0 0 0 25.060547 34.060547L44.560547 14.560547 A 1.50015 1.50015 0 0 0 43.486328 11.978516 z"/>
                  </svg>
               </h1>
               <p class="hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod sequi vel ad consectetur quae quibusdam blanditiis autem distinctio delectus, minima eveniet mollitia, amet, libero suscipit nobis ea accusamus sit quasi. Voluptas, animi! Velit dignissimos expedita facilis quasi, reprehenderit eaque earum!</p>
            </div>
         </div>
      </div>
   </div>
   <script src="./app.js"></script>
   <script>
      var typed = new Typed('#typeW', {
         strings: ['HELPING "EARLY" IMPREGRNATED FEMALE', 'Consultation For Teenagers', 'Online Counselors Services'],
         typeSpeed: 60,
         backSpeed:60,
         loop: true,
         loopCount: Infinity,
         startDelay:500,
         showCursor : true,
         cursorChar : '|'
      });
   </script>
   <script>
      $('.acc-crd').click(function () {
         $(this).find('p').slideToggle()
      })
   </script>
</body>
</html>