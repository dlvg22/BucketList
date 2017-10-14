$(function(){
		//default load
	
		$(".datepicker").datepicker({dateFormat: 'mm/dd/yy', yearRange: "-69:+0",changeMonth: true,changeYear: true}).datepicker();


	
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
			  
			  
   

(function($) {          
    $(document).ready(function(){         
		 $('#hiddentitle').hide();
        $( document.body).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('#hiddentitle').fadeIn(200);
            } else {
                $('#hiddentitle').fadeOut(200);
            }
        });
    });
})(jQuery);



