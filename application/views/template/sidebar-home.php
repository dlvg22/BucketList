<!-- home photo -->
<div class="col-md-2 col-md-offset-1 rmv-padding default-space">
			<div id="change"  class="photo-template emphasize-dark">
			
			<a href=""><img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="user-image " /></a>
			
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
				

				<div id="cphoto" class="change-hide change-photo text-center">
					<span class="glyphicon glyphicon-camera"></span> Change photo 
				</div>
		<div class="home-about borders">
			<span class="glyphicon glyphicon-user about-title icon-color"></span>&nbsp;<strong>About</strong>
			<p class="text-center about-title"><?php echo $about; ?></p>
			<hr>	
			<p class="info-text"><span class="glyphicon glyphicon-home icon-color"></span>&nbsp;<?php echo $location; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-calendar icon-color"></span>&nbsp;<?php echo $birthday; ?></p>
			<p class="info-text"><span class="glyphicon glyphicon-pencil icon-color"></span>&nbsp;<?php echo $work; ?></p>
			<hr>
		</div>   

			<div  class="friend-list borders">
					<div class="col-md-12 rmv-padding"> <label><a href="#">BucketMate</a></label></div>
									<?php 
							$friends =array(
							array('photo'=>'jakecyruz.jpg',
							'fname'=>'Jake Cyruz'),
							array('photo'=>'night.jpg',
							'fname'=>'Christine Eve'),
							array('photo'=>'prof.jpg',
							'fname'=>'Christina aguir'),
							array('photo'=>'sakura.jpg',
							'fname'=>'Sakura mo to'),
							array('photo'=>'Bohol.jpg',
							'fname'=>'Bohol na Friend'));

							foreach ($friends as $s){
							echo '<a href=""><div class="col-md-4 rmv-padding"><img id="image" src="'.base_url('assets/images/'.$s['photo'].'').'"/>';
							echo '<span class="text">'.$s['fname'].'</span></div></a>';
							
							}
							
							?>
			</div>	
	</div>    

		
		

	



