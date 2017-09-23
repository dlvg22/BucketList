
        			<?php
        			$data=array('username'=>'eduardoeduardo'); //dummy data
					?>

					<div class="col-md-9 contents">
          <p>This will also change your login information.*Insert rule here to be edited on how to create a proper username*</p>
          </br>
					<div class="col-md-12">
      					 	<label for="inputEmail" class="control-label col-xs-offset-1 col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      					 	Username</label>
							<div class="col-md-onset-1 col-md-6">
							<p><?php echo $data['username']?></p>
							</div>
					</div>
					<form class="form-horizontal">
    					<div class="form-group">
      					 	<label for="inputEmail" class="control-label col-xs-3">New Username</label>
     					   	<div class="col-xs-6">
            				<input type="email" class="form-control" id="inputEmail" placeholder="New Username">
        					</div>
    					</div>
    					<div class="form-group">
        					<label for="inputPassword" class="control-label col-xs-3">Retype new Username</label>
       						<div class="col-xs-6">
    				        <input type="password" class="form-control" id="inputPassword" placeholder="Retype Username">
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
