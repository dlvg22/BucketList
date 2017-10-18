<div class="col-xs-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
	<div class="profilebody">
			<?=form_open_multipart('Cover_upload/displaycov', 'id="coverupload"');?>
			<div class="cover-wrapper"><img class="user-cover" src="<?php if($cp!='default'){echo base_url('Cover/'.$cp.'');}else{echo base_url('assets/images/'.$cp.'');}?>" />
			<div id="cover"  class="text-center">
			<span class="glyphicon glyphicon-camera cam"></span>&nbsp;Upload Cover
			<input type='file' id="choosecover" size="20" name="cphoto"></input>
			</form> 
			</div>
	
	
	
			</div>
	<ul class="nav nav-tabs ptab">
    <li class="active"><a href="#">Information</a></li>
    <li><a href="#">BucketList</a></li>
    <li><a href="#">Achievement</a></li>
    <li><a href="#">BucketMate</a></li>
	</ul>
<div class="tab-content">
		
					
					<div class="tab-pane fade in active">
						<form class="form-horizontal" method="post" action="">
    					<div class="form-group">
						
						<div class="info profile-space">
						<div class="col-md-12  edit" id="">
								<label for="">Firstname:</label>
								<span "myinfo"></span>
							    <span class="edit-btn">Edit:</span>
						</div> 
						<div class="col-md-1 edit-btn" id="">
					
						</div> 
      					 	<div class="form" id="fname"> 
								<div class="col-md-2 col-md-offset-1 ">
								<label for="">Firstname:</label>
								</div>
								<div class="col-md-5">
									
									<input name="firstname" type="text" class="form-control" id="firstname" placeholder="First name" value="<?php echo set_value('firstname');?>">
								</div>
							</div>
							
							
						</form>
					</div>
					</div>

  </div>
 
					


</div>

<script>
	
		   $('#cover').addClass('hideupload');
			$(".cover-wrapper").hover(function(){
			$("#cover").removeClass('hideupload');
			
		},function(){
			    $('#cover').addClass('hideupload');
			
			
		});
		
		
	
		</script>
		<script>
			$('#choosecover').change(function(){  
			$('#coverupload').submit();
			});
		</script>
		
		
		
		<script>
		$('#fname').hide();
			$('#edit-btn').click(function(){  
			$('#fname').show();
			});
		</script>