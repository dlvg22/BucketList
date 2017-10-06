        <div class="row">
        			<?php
        			$data=array('email'=>'dlvg22google.com','nickname'=>'edu', 'username'=>'eduardoeduardo'); //dummy data
					?>
          <div class="col-md-offset-2 col-md-8 contents">
					<h2>Account Settings</h2></br>
					<table class="table-responsive table">
          <tr><td>
					<div class="item">
					<p><b>Nickname: </b>&nbsp;<?php echo $data['nickname']; ?><span class="glyphicon glyphicon-pencil righter"></span></p>
					
					<span class="menu">
						<form class="form-horizontal">
    					<div class="form-group">
      					 	<label for="inputNickname" class="control-label col-xs-3">New Nickname</label>
     					   	<div class="col-xs-6">
            				<input type="name" class="form-control" id="inputEmail" placeholder="New Nickname">
        					</div>
    					  	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
        					<button class="btn btn-default closer">Cancel</button>
        					</div>
    					</div>
					</form>
					</span>
					</div></td>
		      </tr>

          <tr><td>
    			<div class="item">
					<p><b>Username: </b>&nbsp;<?php echo $data['username']; ?><span class="glyphicon glyphicon-pencil righter"></span></p>		
					<span class="menu">
						<form class="form-horizontal">
    					<div class="form-group">
      					 	<label for="inputUsername" class="control-label col-xs-3">New Username</label>
     					   	<div class="col-xs-6">
            				<input type="username" class="form-control" id="inputEmail" placeholder="New Username">
        					</div>
    					   	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button>
                    <button class="btn btn-default closer">Cancel</button>
        					</div>
    					</div>
					</form>
					</span>
					</div>
					</td></tr>
          <tr><td>
          <div class="item">
          <p ><b>Email: </b>&nbsp;<?php echo $data['email']; ?><span class="glyphicon glyphicon-pencil righter"></span></p>
        
          <span class="menu">
            <form class="form-horizontal">
              <div class="form-group">
                  <label for="inputEmail" class="control-label col-xs-3">New email</label>
                  <div class="col-xs-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="New Email">
                  </div>
                  <div class="col-xs-offset-3 col-xs-6s ">
                    <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-edit"></span> Change
                    </button>
                    <button class="btn btn-default closer">Cancel</button>
                  </div>
              </div>
          </form>
          </span>
          </div></td>
          </tr>
          <tr><td>
          <div class="item">
					<p><b>Change Password </b><span class="glyphicon glyphicon-pencil righter"></span></p>		
					<span class="menu">
						<form class="form-horizontal">
          				<div class="form-group">
      					 	<label for="inputPassword" class="control-label col-xs-3">Old Password</label>
     					   	<div class="col-xs-6">
            				<input type="password" class="input-md form-control" id="inputEmail" placeholder="Type old password here">
        					</div>
    					</div>
    					<div class="form-group">
        					<label for="inputPassword" class="control-label col-xs-3">New Password</label>
       						<div class="col-xs-6">
    				        <input type="password" class="input-md form-control" id="inputPassword" placeholder="Type new password here">
        					</div>
    					</div>
       					<div class="form-group">
   					    	<div class="col-xs-offset-3 col-xs-6s ">
            				<button type="submit" class="btn btn-primary">
            				<span class="glyphicon glyphicon-edit"></span> Change
            				</button><button class="btn btn-default closer">Cancel</button>
        					</div>
    					</div>
					</form>
					</span>
					</div>
				  
          </td></tr>
          </table>

        </div>
        </div>

        <script>
              $('.menu').hide();

              $('.item p').click(function(e){

              e.preventDefault();
              var $this = $(this).parent().find('.menu');
              $(".menu").not($this).hide();
              $(".menu").not($this).parent().removeClass("colored");
              $this.toggle();
              $(this).parent().toggleClass("colored");
              });

              $('.closer').click(function(e){
               e.preventDefault();
              $(".menu").hide();
              $(".item").removeClass("colored");
              });
              
        </script>
