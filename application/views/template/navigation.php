<div class="row topsider">
			<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xl-2 marker"> 
				<div id="logo" class="img-responsive">	
					<?xml version="1.0" encoding="utf-8"?>
				
					<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="px" y="0px"
						 viewBox="0 0 97 138" style="enable-background:new 0 0 97 138;" xml:space="preserve">
					<style type="text/css">
						 width="500"; height="40";
						.st0{fill:black;}
					</style>
					<path class="st0" d="M89.7,52.9L53.2,32.3L50,32.1V79l20-0.2L70.2,99H30V3.9c0,0-1.1-3.6-4.8-3.9L5.6-0.3c0,0-5.6-0.3-5.6,6.1v101.2
						c0,0-1,3.4,7.1,8.7l38.1,21.6c0,0,5.4,1.2,8.7-1L92,115.1c0,0,4.8-4,5-8.5l0.2-45.4C97.2,61.2,97.8,59,89.7,52.9z M74,98.9
						l-0.2-19.8l10,9.6L74,98.9z"/>
						 
					</svg>
				
				</div>
			</div>
			
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 col-xl-2 navi">
				<p>
					<a href=""><span class="glyphicon glyphicon-home" title="Home"></span></a>
					<a href=""><span class="glyphicon glyphicon-envelope" title="Messages"></span></a>
					<a href=""><span class="glyphicon glyphicon-bell" title="Notifications"></span></a>
				</p>		
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-5 sbar">
				<form action="<?php echo base_url('bucket/search');?>" id="form1" method="get">
  					<div class="input-group bar">
  					<input type="search"  class="form-control input searcher" name="search" placeholder="Search"/>
					<span class="input-group-addon barbutton" >
					<i class="glyphicon glyphicon-search" onClick="form1.submit();" type="button" ></i>
					</span>
				</div>
   				</form>
			</div>

			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 set">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<?php $name="franj"; ?>
				<p data-toggle="dropdown" class="dropdowner"><span id="name">
				<?php echo $name; ?></span> <img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="account-icon img-circle"  alt="Picture" /><span class="caret"></span></p>
				 <ul class="dropdown-menu" role="menu">
    			  <li role="presentation"><a role="menuitem" href="#"><span class="glyphicon glyphicon-User"></span> Profile</a></li>
    			  <li role="presentation"><a role="menuitem" href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
    			  <li role="presentation" class="divider"></li>
  			  	  <li role="presentation"><a role="menuitem" href="#"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>    
    			</ul>

				</div>

			</div>

</div>

  <script type="text/javascript">
  				$(document).ready(function(){
    $(".account-icon").click(function(){
    $(this).dropdown();});
});

		 
			 

  	$('.bar').click(function(e) {
   		$('.barbutton').addClass("ColoredButton");
  	});
	$('.bar').focusout(function() {
        $('.barbutton').removeClass("ColoredButton");
	});
	

</script>