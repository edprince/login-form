$(document).ready(function(){
  $('#signup').on('click', function(){
   $('.login')
     .toggle('slide')  
     .hide();
   $('.sign_up')
     .toggle('slide')  
     .show();
  }); 
  $('#return_to_login').on('click', function(){
   $('.sign_up')
     .toggle('slide')  
     .hide();
   $('.login')
     .toggle('slide')  
     .show();
  }); 
});
