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
					<p><span class="glyphicon glyphicon-pencil righter"></span></p>
					
					<div class="tab-pane fade in active">
						<form class="form-horizontal" method="post" action="">
    					<div class="form-group">
						<div class="info">
      					 	<label for="inputNickname" class="control-label info col-xs-3">Firstname</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
        					</div>
							<div class="info">
							<label for="inputNickname" class="control-label info  col-xs-3">Middle</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
        					</div>
							<div class="info">
							<label for="inputNickname" class="control-label info  col-xs-3">Lastname</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
        					</div>
							<div class="info">
							<label for="inputNickname" class="control-label col-xs-3">address</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
        					</div>
							<div class="info">
							<label for="inputNickname" class="control-label col-xs-3">Cellphone #;</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
        					</div>
							
						
							<div class="info">
							<label for="inputNickname" class="control-label col-xs-3">Birthday</label>
     					   	<div class="col-xs-6">
            				<input type="text" class="form-control" value="nickname"  id="inputEmail" placeholder="New Nickname" name="newdata">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
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