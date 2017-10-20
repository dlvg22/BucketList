
        			<?php
        			$data=array('nickname'=>'edu'); //dummy data
					?>

					<div class="col-md-9 contents">
					<div class="col-md-12">
      					 	<label for="inputEmail" class="control-label col-xs-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Current Nickname</label>
							<div class="col-md-6">
							<p><?php echo $data['nickname']?></p>
							</div>
					</div>
					<form class="form-horizontal">
    					<div class="form-group">
      					 	<label for="inputEmail" class="control-label col-xs-3">New Nickname</label>
     					   	<div class="col-xs-6">
            				<input type="email" class="form-control" id="inputEmail" placeholder="New Nickname">
        					</div>
    					</div>
    					<div class="form-group">
        					<label for="inputPassword" class="control-label col-xs-3">Retype new Nickname</label>
       						<div class="col-xs-6">
    				        <input type="password" class="form-control" id="inputPassword" placeholder="New Nickname">
        					</div>
    					</div>
       					<div class="form-group">
   					    	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					</div>
    					</div>
					</form>
					</div>
				</div>
