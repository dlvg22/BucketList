$(document).ready(function(){
      $(".datepicker").datepicker({dateFormat: 'mm/dd/yy', yearRange: "-69:+0",changeMonth: true,changeYear: true}).datepicker();
});


$(function(){
    //default load
  



  
    //end
    
    $("#change").hover(function(){
    $("#cphoto").removeClass('change-hide',500);
    },function(){
    $("#cphoto").addClass('change-hide',500);
    });
      
    $('.menu-settings').hide();
  
  
  });
    $('.item p').click(function(e){

              e.preventDefault();
              var $this = $(this).parent().find('.menu-settings');
              $(".menu-settings").not($this).hide();
              $(".menu-settings").not($this).parent().removeClass("colored");
              $this.toggle();
              $(this).parent().toggleClass("colored");
              });

              $('.closer').click(function(e){
               e.preventDefault();
              $(".menu-settings").hide();
              $(".item").removeClass("colored");
              });
        
        
   

$(function($) { 

    $(document).ready(function(){  

     $('#hiddentitle').hide();
    
        $( window ).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#hiddentitle').fadeIn(200);
            } else {
                $('#hiddentitle').fadeOut(200);
            }
        });
    });
});

$(document).ready(function(){

  $('#saveF').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#firstname').val();

 
  $.ajax({
    type: "POST",
    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {name: name,id: user},
    success: function(msg){
      $('#fname').hide();
            console.log(msg);
            $("#ff").empty();
            $("#ff").append(msg);
             $("#ff").show();    
             $("#edit1").removeClass('cheight');
         
  }

  });

  });


});



$(document).ready(function(){
  $('#saveM').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#Middle').val();

  $.ajax({
    type: "POST",

    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {middle: name,id: user},
    success: function(msg){
      $('#mname').hide();
            console.log(msg);
            $("#mm").empty();
            $("#mm").append(msg);
        
            $("#mm").show();  
            $("#edit2").removeClass('cheight');
           
  }

  });

  });

});




$(document).ready(function(){
  $('#saveL').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#lastname').val();

  $.ajax({
    type: "POST",

    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {last: name,id: user},

    success: function(msg){
     
      $('#lname').hide();
            console.log(msg);
            $("#ll").empty();
            $("#ll").append(msg);
            $("#ll").show();  
                         $("#edit3").removeClass('cheight');
           
  }

  });

  });

});



$(document).ready(function(){
  $('#saveNN').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#nickname').val();

  $.ajax({
    type: "POST",

    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {nick: name,id: user},

    success: function(msg){
     
      $('#myname').hide();
            console.log(msg);
            $("#nn").empty();
            $("#nn").append(msg);
            $("#nn").show();    
                         $("#edit4").removeClass('cheight');
         
  }

  });

  });

});



$(document).ready(function(){
  $('#saveB').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#birthday').val();
 
  $.ajax({

    type: "POST",

    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {bday: name,id: user},

    success: function(msg){
     
      $('#birth').hide();
            console.log(msg);
            $("#bb").empty();
            $("#bb").append(msg);
            $("#bb").show(); 
                         $("#edit5").removeClass('cheight');
           
  }

  });

  });

});


$(document).ready(function(){
  $('#saveS').click(function(e){
    e.preventDefault();
  
    var base_url = window.location.origin;
     var   mypage= base_url+"/BucketList/Bucket/profile";
      var user=$('#id').val();
    var name=$('#sex').val();
   
  $.ajax({

    type: "POST",

    url: base_url+"/BucketList/Edit_profile/addInfo",
     data: {gender: name,id: user},

    success: function(msg){
     
      $('#gender').hide();
            console.log(msg);
            $("#ss").empty();
            $("#ss").append(msg);
            $("#ss").show();   
                         $("#edit6").removeClass('cheight');
          
  }

  });

  });

});


$(document).ready(function(){

  $("#login").click(function(e){ 
 e.preventDefault();


    var myuser=$('#myusername').val();
    var mypass=$('#mypass').val();
    var base_url = window.location.origin;
    $.ajax({
      type: "POST",
      url: base_url+"/BucketList/Login",
      data: {user:myuser,pass:mypass},
      success:function(msg){


               if(msg=="false"){
          
            $("#error").empty();
            $("#error").append('Username or password is incorrect');
            $("#error").show()
           
          }
            else{
                $("#homee").submit();
            }

         }    

    });

  });
});







 




