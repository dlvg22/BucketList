<script>


function openModal() {
  document.getElementById('myModal').style.display = "block";
 
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
		
<!-- home photo -->

<div class="col-md-2 col-md-offset-1 rmv-padding default-space">

			<div class="photo-template" id="point">
			<div class="cursor"><img src="<?php echo base_url('assets/images/franky.jpg'); ?>" onclick="openModal();currentSlide(1)" class="user-image" />
			</div>

			
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


				<div id="myModal" class="modal">
					<span class="close cursor" onclick="closeModal()">&times;</span>
					<div class="modal-content">

					<div class="mySlides">
					<div class="numbertext "></div>
						<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="img-size">
					</div>

				<div class="mySlides">
				<div class="numbertext"></div>
					<img src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" class="img-size">
				</div>

				<div class="mySlides">
					<div class="numbertext"></div>
						<img src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" class="img-size">
				</div>

				<div class="mySlides">
					<div class="numbertext"></div>
						<img src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" class="img-size">
				</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
					
					 <div class="caption-container">
						<p id="caption"></p>
					</div>

	<div class="column">
		<img class="demo cursor" src="<?php echo base_url('assets/images/franky.jpg'); ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo $name; ?>">
    </div>
    <div class="column">
		<img class="demo cursor" src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo $name; ?>">
    </div>
    <div class="column">
		<img class="demo cursor" src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo $name; ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo $name; ?>">
    </div>
				
			</div>
		</div>

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
	


		

	



