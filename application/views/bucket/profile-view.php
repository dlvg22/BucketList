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
						<div class="info profile-space">
				
    					<div class="form-group">
						
    					<div class="edit" id="edit1">
						<div class="col-md-12" id="">
								<label for="">Firstname:</label>

								<span class="myinfo" id="ff"><?=($firstname!=null?$firstname:'Unset')?></span>
								<div class="pull-right">
							    <span class="edit-btn" id="fedit">Edit</span>
								</div> 
						</div> 
					 	<form action="<?php echo base_url('Edit_profile/addInfo')?>" method="POST">	
      					 	<div class="form" id="fname"> 
							
								<div class="col-md-7 col-md-offset-2">
									<input name="userID" id="id" type="hidden" value="<?=$userID?>">
									<input name="firstname" type="text" class="form-control" id="firstname" placeholder="First name" value="<?php echo $firstname;?>">

								</div>
								<button id="saveF" type="submit"  class="btn btn-primary">Save</button>
							</div>
							</form>
						</div>
				
					
						   <div class="edit" id="edit2">
						   			<form action="<?php echo base_url('Edit_profile/addInfo')?>" method="POST">	
						<?=form_open('Edit_profile/addInfo')?>
								<div class="col-md-12" id="">
								<label for="">Middle name:</label>
									<span class="myinfo1" id="mm"><?=($middlename!=null?$middlename:'Unset')?></span>
							    <span class="edit-btn  pull-right" id="medit">Edit</span>
						</div> 
							
      					 	<div class="form" id="mname"> 
							
								<div class="col-md-7 col-md-offset-2">
										<input id="#id" name="userID" type="hidden" value="<?=$userID?>">
									<input name="middle" type="text" class="form-control" id="Middle" placeholder="Middle name" value="<?php echo $middlename;?>">
								</div>
								<button id="saveM" class="btn btn-primary">Save</button>
							</div>
						</form>
						</div>
					<div class="edit" id="edit3">
							<div class="col-md-12">
								<label for="">Lastname:</label>
									<span class="myinfo2" id="ll"><?=($lastname!=null?$lastname:'Unset')?></span>
							    <span class="edit-btn pull-right" id="ledit">Edit</span>
						</div> 
							<?=form_open('Edit_profile/addInfo')?>
      					 	<div class="form" id="lname"> 
							
								<div class="col-md-7 col-md-offset-2">
									<input name="userID" type="hidden" value="$userID">	
									<input name="lastname"  type="text" class="form-control" id="lastname" placeholder="lastname" value="<?php echo $lastname;?>">
								</div>
								<button id="saveL" class="btn btn-primary">Save</button>
							</form>
							</div>	
						</div>
						
						<div class="edit" id="edit4">
						<div class="col-md-12" id="">
								<label for="">Nickname:</label>
									<span class="myinfo3" id="nn"><?=($alias!=null?$alias:'Unset')?></span>
							    <span class="edit-btn pull-right" id="niedit">Edit</span>
						</div> 
							<?=form_open('Edit_profile/addInfo')?>
      					 	<div class="form" id="myname"> 
							
								<div class="col-md-7 col-md-offset-2">
									<input name="userID" type="hidden" value="$userID">	
									<input name="Nickname" type="text" class="form-control" id="nickname" placeholder="Display name" value="<?php echo $alias;?>">
								</div>
								<button id="saveNN" class="btn btn-primary">Save</button>
							</div>	
							</div>	
							</form>					
						
						<div class="edit" id="edit5">
						
						<div class="col-md-12" id="">
								<label for="">Birthday:</label>
									<span class="myinfo4" id="bb"><?=($birthdate!=null?$birthdate:'Unset')?></span>
							    <span class="edit-btn pull-right" id="bday">Edit</span>
						</div> 
						
      					 	<div class="form" id="birth"> 
								<?=form_open('Edit_profile/addInfo')?>
								<div class="col-md-3 col-md-offset-2">
									<input name="userID" type="hidden" value="$userID">	
									<input name="birthday" type="text" class="form-control datepicker" id="birthday" placeholder="birthday" value="<?php echo $birthdate;?>">
								</div>
								<button id="saveB" class="btn btn-primary">Save</button>
							</div>	
						</div>
					</form>



						<div class="edit" id="edit6">
						<div class="col-md-12" id="">
								<label for="">Sex:</label>
									<span class="myinfo5" id="ss"><?=($sex!=null?$sex:'Unset')?></span>
							    <span class="edit-btn pull-right" id="gen">Edit</span>
						</div> 
						
      					 	<div class="form" id="gender"> 
						
								<div class="col-md-2 col-md-offset-2">
									<?=form_open('Edit_profile/addInfo')?>	
									<input name="userID" type="hidden" value="$userID">	
									<select class="form-control" id="sex">
										<option value="">---</option>
										<option <?=$sex=='Male'?'selected':''?>>Male</option>
										<option <?=$sex=='Female'?'selected':''?>>Female</option>
									</select>
								</div>
								<button id="saveS" class="btn btn-primary">Save</button>
							</form>
							</div>
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
		$('#mname').hide();
		$('#lname').hide();
		$('#myname').hide();
		$('#birth').hide();
		$('#gender').hide();
		$('#address').hide();
		
			$('#fedit').click(function(){  
				$('#fname').toggle();
				$('.myinfo').toggle();
					$('#mname').hide();
					$('#lname').hide();
					$('#myname').hide();
					$('#birth').hide();
					$('#gender').hide();
					$('#address').hide();
					$('#edit1').toggleClass('cheight');
				    $("#edit2").removeClass('cheight');
					$("#edit3").removeClass('cheight');
					$("#edit4").removeClass('cheight');
					$("#edit5").removeClass('cheight');
				    $("#edit6").removeClass('cheight');

					        $("#mm").show();
					        $("#ll").show();   
					        $("#nn").show();   
					        $("#bb").show();
					        $("#ss").show();
				
			});
			
		$('#medit').click(function(){  
			$('#mname').toggle();
			$('.myinfo1').toggle();
			$('#fname').hide();

			$('#lname').hide();
			$('#myname').hide();
			$('#birth').hide();
			$('#gender').hide();
			$('#address').hide();
			$('#edit2').toggleClass('cheight');
			 $("#edit1").removeClass('cheight');
			 $("#edit3").removeClass('cheight');
			 $("#edit4").removeClass('cheight');
			$("#edit5").removeClass('cheight');
			$("#edit6").removeClass('cheight');
			$("#ff").show(); 
				
					        $("#ll").show();   
					        $("#nn").show();   
					        $("#bb").show();
					        $("#ss").show();
			});
			
	$('#ledit').click(function(){  
		$('#lname').toggle();
		$('.myinfo2').toggle();
		$('#fname').hide();
		$('#mname').hide();
	
		$('#myname').hide();
		$('#birth').hide();
		$('#gender').hide();
		$('#address').hide();
		$('#edit3').toggleClass('cheight');
	     $("#edit1").removeClass('cheight');
		$("#edit2").removeClass('cheight');
		
		$("#edit4").removeClass('cheight');
		$("#edit5").removeClass('cheight');
		$("#edit6").removeClass('cheight');
		$("#ff").show(); 
		$("#mm").show();
	
		$("#nn").show();   
		$("#bb").show();
		$("#ss").show();
			});
			
		
			
	$('#niedit').click(function(){  
		$('#myname').toggle();
		$('.myinfo3').toggle();
		$('#fname').hide();
		$('#mname').hide();
		$('#lname').hide();
	
		$('#birth').hide();
		$('#gender').hide();
		$('#address').hide();
		$('#edit4').toggleClass('cheight');
		 $("#edit1").removeClass('cheight');
			 $("#edit2").removeClass('cheight');
					 $("#edit3").removeClass('cheight');
					  
					   $("#edit5").removeClass('cheight');
					    $("#edit6").removeClass('cheight');
					         $("#ff").show(); 
					        $("#mm").show();
					        $("#ll").show();   
					      
					        $("#bb").show();
					        $("#ss").show();
			});
	$('#bday').click(function(){  
		$('#birth').toggle();
		$('.myinfo4').toggle();
		$('#fname').hide();	
		$('#mname').hide();
		$('#lname').hide();
		$('#myname').hide();
		
		$('#gender').hide();
		$('#address').hide();
		$('#edit5').toggleClass('cheight');
		 $("#edit1").removeClass('cheight');
			 $("#edit2").removeClass('cheight');
					 $("#edit3").removeClass('cheight');
					  $("#edit4").removeClass('cheight');
					  
					    $("#edit6").removeClass('cheight');
					         $("#ff").show(); 
					        $("#mm").show();
					        $("#ll").show();   
					        $("#nn").show();   
					      
					        $("#ss").show();


			});
		$('#gen').click(function(){  
		$('#gender').toggle();	
		$('.myinfo5').toggle();
			$('#fname').hide();
		$('#mname').hide();
		$('#lname').hide();
		$('#myname').hide();
		$('#birth').hide();
		$('#address').hide();
		$('#edit6').toggleClass('cheight');
		 $("#edit1").removeClass('cheight');
			 $("#edit2").removeClass('cheight');
					 $("#edit3").removeClass('cheight');
					  $("#edit4").removeClass('cheight');
					   $("#edit5").removeClass('cheight');
					
					         $("#ff").show(); 
					        $("#mm").show();
					        $("#ll").show();   
					        $("#nn").show();   
					        $("#bb").show();
					   
		});


		</script>


		<script>
			//ajax posting

		</script>