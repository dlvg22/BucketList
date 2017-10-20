        <div class="row">
        		
          
          <div class="col-md-offset-2 col-md-8 contents">
					<h2>Account Settings</h2></br>
					<?php 
                $oldusername=$userinfo->username;
                $oldemail=$userinfo->email;
                $oldpassword=$userinfo->password;
          ?>
          <table class="table-responsive table">
          <tr><td>
    			<div class="item">
					<p><b>Username: </b>&nbsp;<?php echo $oldusername; ?><span class="glyphicon glyphicon-pencil righter"></span></p>		
					<div class="menu-settings">
						<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>bucket/update/<?php echo $oldusername; ?>/<?php echo 'username'; ?>">
    					<div class="form-group">
      					 	<label for="inputUsername" class="control-label col-xs-3">New Username</label>
     					   	<div class="col-xs-6">
            				<input type="username" class="form-control" id="inputEmail" placeholder="<?php echo $oldusername; ?>" name="newuser">
        					</div>
    					   	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
                    <button class="btn btn-default closer">Cancel</button>
        					</div>
    					</div>
					</form>
					</div>
					</div>
					</td></tr>
          <tr><td>
          <div class="item">
          <p ><b>Email: </b>&nbsp;<?php echo $userinfo->email; ?><span class="glyphicon glyphicon-pencil righter"></span></p>
        
          <div class="menu-settings">
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>bucket/update/<?php echo $oldusername; ?>/<?php echo 'email'; ?>">
              <div class="form-group">
                  <label for="inputEmail" class="control-label col-xs-3">New email</label>
                  <div class="col-xs-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="<?php echo $userinfo->email; ?>" name="newdata"/>
                  </div>
                  <div class="col-xs-offset-3 col-xs-6s ">
                     <button type="submit" class="btn btn-primary ">
                    <span class="glyphicon glyphicon-edit"></span>Change
                    </button>
                    <button class="btn btn-default closer">Cancel</button>
                  </div>
              </div>
          </form>
          </div>
          </div>
          </td></tr>
  
          <tr><td>
          <div class="item">
					<p><b>Change Password </b><span class="glyphicon glyphicon-pencil righter"></span></p>		
					<div class="menu-settings">
						<form class="form-horizontal" method="post" action="<?php echo base_url(); ?>bucket/update/<?php echo $oldusername; ?>/<?php echo 'password'; ?>">
          				
    					<div class="form-group">
        					<label for="inputPassword" class="control-label col-xs-3">New Password</label>
       						<div class="col-xs-6">
    				        <input type="password" class="input-md form-control" id="inputPassword" placeholder="Type new password here" name="newdata">
        					</div>
    					
   					    	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button><button class="btn btn-default closer">Cancel</button>
        					</div>
    					</div>
					</form>
					</div>
					</div>
				  
          </td></tr>
          </table>

        </div>
        </div>
      

<script>
    $('.menu-settings').hide();
    
    $('.item p').click(function(e){

              e.preventDefault();
              var $this = $(this).parent().find('.menu-settings');
              $(".menu-settings").not($this).hide();
              $(".menu-settings").not($this).parent().removeClass("colored");
              $this.toggle();
              $(this).parent().toggleClass("colored");
              });

              $('.closer').click(function(e){
               e.preventDefault();
              $(".menu-settings").hide();
              $(".item").removeClass("colored");
              });
	
</script>
  
