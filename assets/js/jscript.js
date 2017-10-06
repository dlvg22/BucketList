$(function(){
		//default load
	
		$(".datepicker").datepicker({dateFormat: 'mm/dd/yy', yearRange: "-69:+0",changeMonth: true,changeYear: true}).datepicker();


	
		//end
		
		$("#change").hover(function(){
		$("#cphoto").removeClass('change-hide',500);
		},function(){
		$("#cphoto").addClass('change-hide',500);
		});
	 		
		
	});
		