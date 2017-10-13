<!-- home photo -->
<div class="row sidebarprofile">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 default-space bigheader">
			<div class="photo-template ">
			<div ><a href=""><img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="user-image side-profilepict" /></a></div>
			
			<?php
			$name="Frank Ho";
			$user="@papaFrank";
			$about="!the algo you've usually see;";
			$location="Tondo,Manila Philippines";
			$birthday="April 22,1998";
			$work="Programmer/developer";
			
			echo '<p class="user-name">'.$name.'</p>';
			echo '<p class="user-acc">'.$user.'</p>';
			?>
			</div>


		<div >
			<span class="glyphicon glyphicon-user about-title icon-color"></span>&nbsp;<strong>About</strong>
			<p class="text-center about-title"><?php echo $about; ?></p>
			<hr>						
			<p class="info-text"><span class="glyphicon glyphicon-home icon-color"></span>&nbsp;<?php echo $location; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-calendar icon-color"></span>&nbsp;<?php echo $birthday; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-pencil icon-color"></span>&nbsp;<?php echo $work; ?></p>
			<hr>
			<p class="specialfooter"><br>&copy;BucketList <a href="">About Us</a> <a href="">Developers</a> <a href="">Credits</a></p>
		
		</div>

		   

	</div>    

		
		

	



