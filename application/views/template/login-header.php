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
				<button class="btn-red2  btn-sm "  >SIGN UP </button>
				
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
				<button class="btn-red  btn-sm "  >SIGN UP </button>
				
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
 
	