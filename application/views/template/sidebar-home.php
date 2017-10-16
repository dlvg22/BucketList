<!-- home photo -->
<div class="row sidebarprofile">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 default-space bigheader">
			<div class="photo-template ">
			<div id="">
			<?=form_open_multipart('Upload/displaypic', 'id="upload_now"');?>
			<img src="<?php if($dp!='default'){echo base_url('upload/'.$dp.'');}else{echo base_url('assets/images/'.$dp.'');}?>" id="usr-img" class="user-image side-profilepict" />
		
			<div id="upload"  class="text-center">
			<span class="glyphicon glyphicon-camera cam"></span>
			<input type='file' id="choosefile" size="20" name="disp"></input>
			</form> 
			</div>
	
			</div>
					

			<?php
			$name="Frank Ho";
			$user="@papaFrank";
			$about="!the algo you've usually see;";
			$location="Tondo,Manila Philippines";
			$birthday="April 22,1998";
			$work="Programmer/developer";
			
		
			// echo '<p>Facebook URL : "."<a href="'.$user_profile['link'].'" target='_blank'"."> https://www.facebook.com/".$user_profile['id']."</a></p>';

			?>
			</div>

		<div class="home-about" >
			<p class="user-name"><?=$alias?></p>
			<p class="user-acc"><?='@'.$username?></p>
			<span class="glyphicon glyphicon-user about-title icon-color"></span>&nbsp;<strong>About</strong>
			<p class="text-center about-title"><?php echo $about; ?></p>
			<hr>						
			<p class="info-text"><span class="glyphicon glyphicon-home icon-color"></span>&nbsp;<?php echo $location; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-calendar icon-color"></span>&nbsp;<?php echo $birthday; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-pencil icon-color"></span>&nbsp;<?php echo $work; ?></p>
			<hr>
			<p class="specialfooter"><br>&copy;BucketList <a href="">About Us</a> <a href="">Developers</a> <a href="">Credits</a></p>
		
		</div>


			
			
			
	
	
	
	
	
			<?php if($this->session->userdata('error')!= null):?>
	
		

	<div class="modal fade" id="errormodal" role="dialog">
    <div class="modal-dialog">
    

      <div class="modal-content">
        <div class="modal-body">
          <p><?php print_r($_SESSION['error']);?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
	</div>
	
	
		<script type="text/javascript">
		$(document).ready(function () {
			$('#errormodal').modal('show');});
</script>
	
	<?php endif;?>



		 		 

	</div>  
	

			<script>
	
				    $('#upload').addClass('hideupload');
		$(".photo-template").hover(function(){
			$("#upload").removeClass('hideupload');
			
		},function(){
			    $('#upload').addClass('hideupload');
			
			
		});
		
		
	
		</script>
		<script>
			$('#choosefile').change(function(){  
			$('#upload_now').submit();
			});
		</script>
		
	
	



