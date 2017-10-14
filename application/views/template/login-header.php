<!-- LOGIN HEADER-->
<script>


</script>

<div class="container-fluid">
<div class="row">
<div class="col-md-12 rmv-padding" id="hiddentitle">
			<div class="col-md-1"> 
					<div id="logo2" class="img-responsive">	
						<?xml version="1.0" encoding="utf-8"?>
					
						<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="px" y="0px"
							 viewBox="0 0 97 138" style="enable-background:new 0 0 97 138;" xml:space="preserve">
						<style type="text/css">
							 width="500px"; height="40px";
							.st0{fill:#231F20;}
						</style>
						<path class="st0" d="M89.7,52.9L53.2,32.3L50,32.1V79l20-0.2L70.2,99H30V3.9c0,0-1.1-3.6-4.8-3.9L5.6-0.3c0,0-5.6-0.3-5.6,6.1v101.2
							c0,0-1,3.4,7.1,8.7l38.1,21.6c0,0,5.4,1.2,8.7-1L92,115.1c0,0,4.8-4,5-8.5l0.2-45.4C97.2,61.2,97.8,59,89.7,52.9z M74,98.9
							l-0.2-19.8l10,9.6L74,98.9z"/>
							 
						</svg>
						
					
					
					
					</div>
				</div>
				<div class="col-md-1 logo-text2 ">
				<p>ucketlist</p>
				</div>
				<div class=" header-margin2">
				<div class="col-md-1 col-md-offset-3 "><a href="#home-view"><button class="btn btn-green2 btn-sm" >HOME</button></a></div>
				<div class="col-md-1 "><a href="#myIdeas"><button class="btn btn-green2 btn-sm" >IDEAS</button></a></div>
				<div class="col-md-1"><a href="#achievements"><button class="btn btn-green2 btn-sm" >ACHIEVEMENTS</button></a></div>
				</div>	
				<div class="col-md-2 col-md-offset-1"> 
				<button class="btn btn-green2 btn-sm"  data-toggle="modal" data-target="#showLogin" >LOGIN</button>
				<button class="btn-red2  btn-sm "  data-toggle="modal" data-target="#showSignup" >SIGN UP </button>
				
				</div>
				</div>
				</div>
	

</div> 
	<div class="col-md-12 rmv-padding " id="home-view">
		<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
		
		<div id="login-header">
		<div class="col-md-12">
		
				<div class="col-md-1"> 
					<div id="logo" class="img-responsive">	
						<?xml version="1.0" encoding="utf-8"?>
					
						<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="px" y="0px"
							 viewBox="0 0 97 138" style="enable-background:new 0 0 97 138;" xml:space="preserve">
						<style type="text/css">
							 width="500px"; height="40px";
							.st0{fill:#231F20;}
						</style>
						<path class="st0" d="M89.7,52.9L53.2,32.3L50,32.1V79l20-0.2L70.2,99H30V3.9c0,0-1.1-3.6-4.8-3.9L5.6-0.3c0,0-5.6-0.3-5.6,6.1v101.2
							c0,0-1,3.4,7.1,8.7l38.1,21.6c0,0,5.4,1.2,8.7-1L92,115.1c0,0,4.8-4,5-8.5l0.2-45.4C97.2,61.2,97.8,59,89.7,52.9z M74,98.9
							l-0.2-19.8l10,9.6L74,98.9z"/>
							 
						</svg>
						
					
					
					
					</div>
				</div>
				<div class="col-md-1 logo-text ">
				<p>ucketlist</p>
				</div>
				<div class=" header-margin">
				<div class="col-md-1 col-md-offset-4"><a href="#home-view"><button class="btn btn-green btn-sm" >HOME</button></a></div>
				<div class="col-md-1 "><a href="#myIdeas"><button class="btn btn-green btn-sm " >IDEAS</button></a></div>
				<div class="col-md-1"><a href="#achievements"><button class="btn btn-green btn-sm" >ACHIEVEMENTS</button></a></div>
				</div>	
				<div class=" header-margin"> 
				<button class="btn btn-green btn-sm "  data-toggle="modal" data-target="#showLogin">LOGIN</button>
				<button class="btn-red  btn-sm "   data-toggle="modal" data-target="#showSignup">SIGN UP </button>
				
				</div>
				</div>
				</div>
				
				
	<div class="modal fade" id="showLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="logo-size"  src="<?=base_url('assets/images/bucket list logo-07.png')?>">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
  
                <div id="div-forms">
                
             
                    <?=form_open('Login')?>
		                <div class="modal-body">
				    		
				    		<p><input name="user" class="form-control" type="text" placeholder="username/Email" required></p>
				    		<p><input name="pwrd" class="form-control" type="password" placeholder="Password" required></p>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btns btn-lg btn-block">Login</button>
                            </div>
				    	    
				        </div>
                    </form>
                 
                    
                </div>
                
                
			</div>
		</div>
	</div>
	<!-- sign up form -->
	
	<div class="modal fade" id="showSignup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="logo-size"  src="<?=base_url('assets/images/bucket list logo-07.png')?>">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                
  
                <div id="div-forms">
                
             
                    <?=form_open('Login/signup')?>
		                <div class="modal-body">
				    
							<p>
							<div id="usr_verify" class="col-md-12 rmv-padding signup-field">
						
							<input type="text" id="user_name" placeholder="Username" class="form-control"  name="user_name" value="<?php echo set_value('user_name'); ?>" />
							</div>
							
							</p>		
							<p>
							<div id="usr_email" class="col-md-12 rmv-padding signup-field">
							<input type="text" id="email" placeholder="Example@yahoo.com" class="form-control"  name="email" value="<?php echo set_value('email'); ?>" />
							</div>
							
							</p>		
							<p>
							<div id="usr_password" class="col-md-12 rmv-padding signup-field">
							<p><input name="pwrd" id="pwrd" class="form-control" type="password" placeholder="Password" required></p>
							</div>
							</p>	
							<p>
							<div id="usr_password2" class="col-md-12 rmv-padding signup-field">
				    		<p><input name="confirm-pwrd" id="conpwrd" class="form-control" type="password" placeholder="Re-enter Password" required></p>
							</div>
							</p>								
                           
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" id="reg" class="btn btns btn-lg btn-block">SIGN UP</button>
                            </div>
				    	    
				        </div>
                    </form>
                 
                    
                </div>
                
                
			</div>
		</div>
	</div>
	
<script type="text/javascript">

$(document).ready(function(){
		$('#reg').prop('disabled', 'disabled');
        var uname=false;
        var uemail=false;
        var uword=false;
        var uword2=false;
 $("#user_name").keyup(function(){
  if($("#user_name").val().length >=5)
  {
  $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>Login/check_user",
   data: "name="+$("#user_name").val(),
   success: function(msg){
    if(msg=="true")
    {	

		$("#usr_verify").removeClass('has-error');
		$("#usr_verify").addClass('has-success');
		$("#usr_verify").append(' <span id="okay" class="glyphicon glyphicon-ok form-control-feedback"></span>');

		$('span[id^="notok"]').remove();
		
		uname = true;
		changeStatus();
	
    }
    else if(msg=="false")
    {
		$("#usr_verify").addClass('has-error');
		$("#usr_verify").append('<span id="notok" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');
				 uname=false;
				 changeStatus();
		$('span[id^="okay"]').remove();
    }
   }
  });
  }
  else 
  {
   	
		$("#usr_verify").removeClass('has-error');
		$("#usr_verify").removeClass('has-success');
		
		$('span[id^="notok"]').remove();		
		$('span[id^="okay"]').remove();
		 uname=false;
				 changeStatus();
			
  }
 });

 
 
 
  $("#email").keyup(function(){
  if($("#email").val().length >=5)
  {
  $.ajax({
   type: "POST",
   url: "<?php echo base_url();?>Login/check_user",
   data: "name="+$("#email").val(),
   success: function(msg){
    if(msg=="true")
    {	
		$("#usr_email").removeClass('has-error');
		$("#usr_email").addClass('has-success');
		$("#usr_email").append(' <span id="useremail" class="glyphicon glyphicon-ok form-control-feedback"></span>');

		uemail=true;
		changeStatus();
		$('span[id^="myemail"]').remove();
	
    }
    else if(msg=="false")
    {
		$("#usr_email").addClass('has-error');
		$("#usr_email").append('<span id="myemail" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');
			uemail=false;
			changeStatus();
		$('span[id^="useremail"]').remove();
		
    }
   }
  });
  }
  else 
  {
   	
		$("#usr_email").removeClass('has-error');
		$("#usr_email").removeClass('has-success');
			$('span[id^="myemailok"]').remove();
				uemail=false;
			    changeStatus();
		$('span[id^="myemail"]').remove();
		$('span[id^="useremail"]').remove();
  }
 });
 
 	$("#pwrd").keyup(function(){
        
        if($("#pwrd").val().length < 5)
        {
            
					$("#usr_password").removeClass('has-success');
					$("#usr_password").addClass('has-error');
					$("#usr_password").append(' <span id="okay5" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');
					$('span[id^="okay6"]').remove();
					uword=false;
					changeStatus();
                
          
        }
		 
            else{
             $("#usr_password").removeClass('has-error');
					$("#usr_password").addClass('has-success');
					$("#usr_password").append(' <span id="okay6" class="glyphicon glyphicon-ok form-control-feedback"></span>');
							
							$('span[id^="okay5"]').remove();
				uword=true;
				changeStatus();
            }
    });
    
    $("#conpwrd").keyup(function(){
        
        if($("#conpwrd").val().length >=4)
        {
            if($("#conpwrd").val()!=$("#pwrd").val())
            {
					$("#usr_password2").removeClass('has-success');
					$("#usr_password2").addClass('has-error');
					$("#usr_password2").append(' <span id="okay3" class="glyphicon glyphicon-warning-sign form-control-feedback"></span>');
			
					$('span[id^="okay4"]').remove();
                uword2=false;
				changeStatus();
                
            }
			
            else{
               $("#usr_password2").removeClass('has-error');
					$("#usr_password2").addClass('has-success');
					$("#usr_password2").append(' <span id="okay4" class="glyphicon glyphicon-ok form-control-feedback"></span>');
					$("#usr_password2").append(' <span id="okay4"></span>');
							$('span[id^="okay3"]').remove();
							$('span[id^="weak"]').remove();
		   uword2=true;
		   changeStatus();
            }
        }
		else{
			
			
			 uword2=false;
				changeStatus();
		}
	
    });
	
	function changeStatus(){
    if(!uname||!uemail||!uword||!uword2){
		$('#reg').prop('disabled', 'disabled');
      		
    } else{
			$('#reg').prop('disabled', false);
    }
}

		
		

		
});




</script>