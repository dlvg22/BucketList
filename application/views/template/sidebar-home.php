<!-- home photo -->
<div class="row sidebarprofile">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 default-space bigheader">
			<div class="photo-template ">
			<div id="">
			<?php echo form_open_multipart('upload/do_upload');?>
			<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" id="usr-img" class="user-image side-profilepict" />
			<div id="upload" class="text-center"><span class="glyphicon glyphicon-camera"></span>Upload photo</div>
			</div>
			</form>
			<?php
			$name="Frank Ho";
			$user="@papaFrank";
			$about="!the algo you've usually see;";
			$location="Tondo,Manila Philippines";
			$birthday="April 22,1998";
			$work="Programmer/developer";
			
			echo '<p class="user-name">'.$alias.'</p>';
			echo '<p class="user-acc">'.'@'.$username.'</p>';
			// echo '<p>Facebook URL : "."<a href="'.$user_profile['link'].'" target='_blank'"."> https://www.facebook.com/".$user_profile['id']."</a></p>';

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

		
		<script>
		
		$(".photo-template").hover(function(){
			$("#upload").css('visibility', 'visible');
			
		});
		</script>

	



