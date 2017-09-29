<!-- Bucketwall content -->
<div class="col-md-5 default-space" >
	
	<div class="wall-post">
	<div class="col-md-1 rmv-padding">
	<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="post-photo">
	</div>
	<div class="col-md-11 rmv-padding">
	<input type="text" class="post-title" id="title" placeholder="Title" data-toggle="modal" data-target="#myModal" ></input>
	</div>
		<div class="col-md-12 rmv-padding text-right">
						<input class="post-button-modal" type="submit" value="POST"></input>
					</div>
	
	</div>
	
		<?php 
		$posts=array(
		array('postID'=>'1',
		'userPhoto'=>'jakecyruz.jpg',
	
		'name'=>'Jake Cyruz',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Bohol escapade',
		'BucketPhoto'=>'Bohol.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'prof.jpg',
	
		'name'=>'Dina Bona',
		'gender'=>'his',
		'action'=>'Achieved',
		'BucketTitle'=>'Paris Tour',
		'BucketPhoto'=>'eiffel.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'franky.jpg',
	
		'name'=>'Franky ho',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Tambay',
		'BucketPhoto'=>'night.jpg',
		),
			array('postID'=>'1',
		'userPhoto'=>'jakecyruz.jpg',
	
		'name'=>'Jake Cyruz',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Bohol escapade',
		'BucketPhoto'=>'Bohol.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'prof.jpg',
	
		'name'=>'Dina Bona',
		'gender'=>'his',
		'action'=>'Achieved',
		'BucketTitle'=>'Paris Tour',
		'BucketPhoto'=>'eiffel.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'franky.jpg',
	
		'name'=>'Franky ho',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Tambay',
		'BucketPhoto'=>'night.jpg',
		),
			array('postID'=>'1',
		'userPhoto'=>'jakecyruz.jpg',
	
		'name'=>'Jake Cyruz',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Bohol escapade',
		'BucketPhoto'=>'Bohol.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'prof.jpg',
	
		'name'=>'Dina Bona',
		'gender'=>'his',
		'action'=>'Achieved',
		'BucketTitle'=>'Paris Tour',
		'BucketPhoto'=>'eiffel.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'franky.jpg',
	
		'name'=>'Franky ho',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Tambay',
		'BucketPhoto'=>'night.jpg',
		),
			array('postID'=>'1',
		'userPhoto'=>'jakecyruz.jpg',
	
		'name'=>'Jake Cyruz',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Bohol escapade',
		'BucketPhoto'=>'Bohol.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'prof.jpg',
	
		'name'=>'Dina Bona',
		'gender'=>'his',
		'action'=>'Achieved',
		'BucketTitle'=>'Paris Tour',
		'BucketPhoto'=>'eiffel.jpg',
		),
		array('postID'=>'1',
		'userPhoto'=>'franky.jpg',
	
		'name'=>'Franky ho',
		'gender'=>'his',
		'action'=>'added',
		'BucketTitle'=>'Tambay',
		'BucketPhoto'=>'night.jpg',
		)
		
		);
		foreach($posts as $s){
		
		echo '
		<div class="timeline"> 
		<div class="col-md-12 timeline-space rmv-padding"> 
		<a class="align-top" href="#"><img src="'.base_url('assets/images/'.$s['userPhoto'].'').'"  class=" img-circle post-photo" />
		<span class="about-title" >'.$s['name'].'</a> '.$s['action'].' '.$s['BucketTitle'].' to '.$s['gender'].'  <strong>BucketList</strong> </span> 
		</div>
		<div class="col-md-3 rmv-padding">
		<a class="align-top" href="#"><img src="'.base_url('assets/images/'.$s['BucketPhoto'].'').'"  class="bucket-photo " /></a>
		</div>
			<div class="col-md-9 more">
					Scenic Bohol casts an enigmatic charm drawn from the many archaic mementos spread throughout the oval-shaped island: 
					from the Chocolate Hills and the tarsier to 16th century watchtowers and Jesuit Baroque mission churches.
					

			</div>
			<div class="col-md-12 reaction text-center">
				<div class="col-md-6 "><p class="react-effect"><span class="reaction-icon glyphicon glyphicon-thumbs-up"></span> Like</p></div>
				<div class="col-md-6 "><span class="reaction-icon glyphicon glyphicon-comment"></span> Comment</div>
			</div>		
		</div>';
		}
		?>
	
	
  
</div>
	


	
      <!-- Modal content-->
<div class="modal  position " id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
		
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     
 
		<div class="wall-post-modal">
					<div class="col-md-1 rmv-padding">
						<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="post-photo-modal">
					</div>
					<div class="col-md-11 rmv-padding">
						<input type="text" class="post-title-modal" id="title" placeholder="Title">
					</div>
					<div class="col-md-12 rmv-padding">
						<input type="text" class="post-title-modal datepicker" placeholder="MM/DD/YYYY">
					</div>
					<div class="col-md-12 rmv-padding">
						<textarea rows="6" class="post-description"> </textarea>
					</div>
					<div class="col-md-12 rmv-padding text-right">
						<input class="post-button-modal" type="submit" data-dismiss="modal" value="POST"></input>
					</div>
		
			</div>
	
      </div>
      
    </div>
 </div>
 <!--end-->


