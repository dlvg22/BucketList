<div class="row default-space searchbody">
	<div class="col-md-10 col-md-offset-1">
	<p>Search results for: <b><?php echo $search ?></b>......</p>
	<div class="panel-group">
	
		<?php if(!null==$profile): ?>
					<?php foreach ($profile as $profile){ ?>
						<div class="panel panel-default">
    						<div class="panel-heading"><?php echo $profile->nickname." ,  ".$profile->username;?></div>
    						<div class="panel-body"><?php echo $profile->about; ?></div>
  						</div>
					
				<?php } ?>
		<?php elseif ($profile==''):?>
			
				<p class="noresultsfound"><?php echo 'You have not searched for anything'?></p>
		<?php else: ?>
				<p class="noresultsfound"><?php echo 'No Results Found!'?></p>
		<?php endif; ?>
	</div>
	</div>
</div>