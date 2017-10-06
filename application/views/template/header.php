<html>
	<head>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/Home.css"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/achievements.css"); ?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/profile.css"); ?>">
	<link href="<?php echo base_url('assets/css/default.css');?>" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<link href="<?php echo base_url("assets/css/style.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" >
	<link href="<?php echo base_url('bootstrap/css/bootstrap-theme.css'); ?>" rel="stylesheet" type="text/css" >
	<link href="<?php echo base_url('assets/css/mybootstrap.css'); ?>" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url('bootstrap/js/jquery.min.js');?>"> </script>
	<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"> </script>

  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">-->
   <link rel="stylesheet" href="<?php echo base_url("assets/css/settings.css"); ?>">
   <link rel="stylesheet" href="<?php echo base_url("assets/css/headerfooter.css"); ?>">
	 <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<<<<<<< HEAD
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
=======
 
>>>>>>> 6b5bcaaf111c1465145e26727c7165ba876f4303
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
  <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>

  <script src="<?php echo base_url('assets/js/jscript.js');?>"></script>

	</head>
<body>
<div class="row topsider">
			<div class="col-md-1 col-lg-1"> 
				<div id="logo" class="img-responsive">	
					<?xml version="1.0" encoding="utf-8"?>
				
					<!-- Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="px" y="0px"
						 viewBox="0 0 97 138" style="enable-background:new 0 0 97 138;" xml:space="preserve">
					<style type="text/css">
						 width="500"; height="40";
						.st0{fill:#231F20;}
					</style>
					<path class="st0" d="M89.7,52.9L53.2,32.3L50,32.1V79l20-0.2L70.2,99H30V3.9c0,0-1.1-3.6-4.8-3.9L5.6-0.3c0,0-5.6-0.3-5.6,6.1v101.2
						c0,0-1,3.4,7.1,8.7l38.1,21.6c0,0,5.4,1.2,8.7-1L92,115.1c0,0,4.8-4,5-8.5l0.2-45.4C97.2,61.2,97.8,59,89.7,52.9z M74,98.9
						l-0.2-19.8l10,9.6L74,98.9z"/>
						 
					</svg>
			
				</div>
			</div>
			<div class="col-md-2 col-lg-2 logo-text">
			<p>ucketlist</p>	
			</div>
			<div class="col-md-2 col-lg-2 navi">
				<p>
					<a href=""><span class="glyphicon glyphicon-home" title="Home"></span></a>
					<a href=""><span class="glyphicon glyphicon-envelope" title="Messages"></span></a>
					<a href=""><span class="glyphicon glyphicon-bell" title="Notifications"></span></a>
				</p>		
			</div>

			<div class="col-md-4 col-lg-4 sbar">
				<form>
  					<div class="input-group bar">
  					<input type="search"  class="form-control input" placeholder="Search"/>
					<span class="input-group-addon barbutton">
					<i class="glyphicon glyphicon-search"></i>
					</span>
				</div>
   				</form>
			</div>

			<div class="col-md-2 col-lg-2 ">
				<div class="col-md-12 col-lg-12 set">
				<?php $name="Franky"; ?>
				<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="account-icon img-circle " data-toggle="dropdown" alt="Picture" /><span id="name">
				<?php echo $name; ?></span>
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

				$(document).ready(function(){
    			$("search").search(function(){
   			     $(".barbutton").addClass("ColoredButton");
 			   });
				});	 
			 
</script>

<script >
  	$('.bar').click(function(e) {
   		$('.barbutton').addClass("ColoredButton");
  	});
	$('.bar').focusout(function() {
        $('.barbutton').removeClass("ColoredButton");
	});</script>