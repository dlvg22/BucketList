<?php 
$a=array(); 
$a=$masterlist;
?>
<div class="col-xs-5 col-xm-5 col-md-5 col-lg-5 col-xl-5 default-space" >
	
	<div class="wall-post">
	<div class="col-md-1 rmv-padding">
	<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="post-photo">
	</div>
	<div class="col-md-11 rmv-padding">
	<input type="text" class="post-title" id="title" placeholder="Add list here....." data-toggle="modal" data-target="#myModal" ></input>
	</div>
		<div class="col-md-12 rmv-padding text-right">
						<input class="post-button-modal" type="submit" data-toggle="modal" data-target="#myModal" value="POST"></input>
					</div>
	</div><br>
	
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
		$re=0;
		foreach($a as $master){
		
		echo '
		<div class="timeline"> 
		<div class="col-md-12 timeline-space rmv-padding"> 
		<a class="align-top" href="#"><img src="'.base_url('assets/images/').'"  class=" img-circle post-photo" />
		<span class="about-title" >'.$name2[$re].'</a> added to list, titled "'.$master[0]->title.'" to <strong>BucketList</strong> </span> 
		</div>
		<div class="col-md-3 rmv-padding">
		<a class="align-top" href="#"><img src="'.base_url('assets/images/').'"  class="bucket-photo " /></a>
		</div>
			<div class="col-md-9 more">Description: <br><em>"'.$master[0]->body.'"</em></div>
			<div class="col-md-12 reaction text-center">
				<div class="col-md-6 "><p class="react-effect"><span class="reaction-icon glyphicon glyphicon-thumbs-up"></span> Like</p></div>
				<div class="col-md-6 "><span class="reaction-icon glyphicon glyphicon-comment"></span> Comment</div>
			</div>		
		</div><br>';
		$re=$re+1;
		}
		?>
	
	
  
</div>
	


	
      <!-- Modal content-->
<div class="modal  position " id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
		
        <button type="button" class="close" data-dismiss="modal">&times;</button>
     	<?php
     		date_default_timezone_set('Singapore');
     		$date = date('m/d/Y H:i:s');
     	?>
 
		<div class="wall-post-modal">
					<form action="<?php echo base_url('bucket/addlist');?>" id="form1" method="post">
					<div class="col-md-1 rmv-padding">
						<img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="post-photo-modal">
					</div>
					<div class="col-md-11 rmv-padding">
						<input type="text" class="post-title-modal" id="title" placeholder="Title of new list......" name="listtitle">
					</div>
					<div class="col-md-12 rmv-padding">
						<input type="hidden" value="<?php echo $userinfo->userid; ?>" name="userid">
						<input type="hidden" value="<?php echo $date; ?>" name="datetime">
					</div>
					<div class="col-md-12 rmv-padding">
						<textarea rows="6" class="post-description" placeholder="Description here......" name="postbody"></textarea>
					</div>
					
					<div class="col-md-12 rmv-padding text-right">
						<input class="post-button-modal" type="submit" onClick="form1.submit();" value="POST"></input>
					</div>
					</form>
			</div>
	
      </div>
      
    </div>
 </div>
 <!--end-->


