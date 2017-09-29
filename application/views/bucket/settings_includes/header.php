
	<title> Profile </title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/jayson.css"); ?>">

<div class="container-fluid ">
				
				<div class="row">
				<div class="col-md-12 navbar-header form-inline navbar ">
					<a class="navbar-brand" href="#">BUCKETLIST</a>
					<div class="nav navbar-nav form-inline">
					<div class="input-group">
						<input type="text" class="form-control">
						<div class="input-group-btn">
						<button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
					</div>
					<ul class="nav navbar-nav navbar-right ">
					<li><a href="#">HOME</a></li>
					<li><a href="#">LISTS</a></li>
					<li><a href="<?php echo base_url("bucket/profile"); ?>">PROFILE</a></li>
					<li><a href="<?php echo base_url("bucket/settings"); ?>">SETTINGS</a></li>
					</ul>

				</div>
				</div>
				
				<div class="row">
					<div class="col-md-3 menu">
				        <ul class="nav navbar-nav vertical-menu">
            			<li><a href="<?php echo base_url("bucket/settings"); ?>">Account Management</a></li>
            			<li><a href="<?php echo base_url("bucket/nickname"); ?>">Nickname</a></li>
            			<li><a href="<?php echo base_url("bucket/username"); ?>">Username</a></li>
            			<li><a href="<?php echo base_url("bucket/change_password"); ?>">Change Password</a></li>
            			<li><a href="<?php echo base_url("bucket/change_email"); ?>">Change Email</a></li>
                      	</ul>
        			</div>
        			