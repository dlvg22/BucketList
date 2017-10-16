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

			$user="@papaFrank";
			$about="The algo you've usually see;";
			$location="Tondo,Manila Philippines";
			$birthday="April 22,1998";
			$work="Programmer/developer";

			


			?>
<div class="row sidebarprofile">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 default-space bigheader">
			<div class="photo-template ">
			<div ><img onclick="openModal();currentSlide(1)"  src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="user-image side-profilepict hover-shadow cursor" /></div>
			
			<div id="myModal" class="modal">
	
  <div class="modal-content slide">
	<span class="close cursor" data-dismiss="modal" aria-label="Close" aria-hidden="true" onclick="closeModal()">&times;</span>
    <div class="mySlides">
     
      <img src="<?php echo base_url('assets/images/franky.jpg'); ?>" style="width:100%" class="img-size">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" style="width:100%" class="img-size">
    </div>

    <div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" style="width:100%" class="img-size">
    </div>
    
    <div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	 <div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
	
	
	<div class="mySlides">
      
      <img src="<?php echo base_url('assets/images/big1.jpg'); ?>" style="width:100%" class="img-size">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

<div class="botpic">
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/franky.jpg'); ?>" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" onclick="currentSlide(4)">
    </div>
	 <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(5)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(6)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(7)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(8)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(9)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(10)">
    </div>
	<div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/big1.jpg'); ?>" onclick="currentSlide(11)">
    </div>
	   
  </div>

  </div>
</div>
			
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
		
	
	



