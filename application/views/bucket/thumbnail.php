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
<?php 
$story='Franky Story';
$btitle='Bohol Escapade';
$desc='Baby, Im dancing in the dark, with you between my arms
Barefoot on the grass, listening to our favorite song
I have faith in what I see
Now I know I have met an angel in person
And she looks perfect
I dont deserve this
You look perfect tonight';
?>
<div class="story-wrapper">
<div class="row">
<div class="col-md-3 tab">
  <div class="col-md-12 column">
    <img src="<?php echo base_url('assets/images/franky.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
	</div>
  <div class="col-md-12 column">
    <img src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
	
 </div>
  <div class="col-md-12 column">
    <img src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="col-md-12 column">
    <img src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
	<div class="col-md-8 story">
		
		<h3><?php echo $btitle ?></h3>
		<p><?php echo $desc; ?></p>
	</div>

<div id="myModal" class="modal">

  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="<?php echo base_url('assets/images/franky.jpg'); ?>" style="width:100%" class="img-size">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" style="width:100%" class="img-size">
    </div>

    <div class="mySlides">
      <div class="numbertext"></div>
      <img src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" style="width:100%" class="img-size">
    </div>
    
    <div class="mySlides"> 
      <div class="numbertext"></div>
      <img src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" style="width:100%" class="img-size">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/franky.jpg'); ?>" style="width:100%" onclick="currentSlide(1)" alt="<?php echo $story; ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy1.jpg'); ?>" style="width:100%" onclick="currentSlide(2)" alt="<?php echo $story; ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy2.jpg'); ?>" style="width:100%" onclick="currentSlide(3)" alt="<?php echo $story; ?>">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php echo base_url('assets/images/luffy3.jpg'); ?>" style="width:100%" onclick="currentSlide(4)" alt="<?php echo $story; ?>">
    </div>
  </div>
</div>
</div>