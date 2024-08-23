tailwind.config = {
   theme: {
      extend: {
         colors: {
            defClr: 'salmon'
         },
         spacing: {
            xPad: '100px'
         }
      }
   }
}
$(window).scroll(function() {
   if($(window).scrollTop() > 100){
      $('div.basic-nav').removeClass('-top-[100px]');
      $('div.basic-nav').addClass('top-0 shadow-md');
      $('nav a').addClass('text-[#272727]')
   }else{
      $('div.basic-nav').addClass('-top-[100px]');
      $('div.basic-nav').removeClass('top-0 shadow-md');
      $('nav a').removeClass('text-[#272727]')
   }
})