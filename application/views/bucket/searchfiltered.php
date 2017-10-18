<div class="row default-space searchbody">
	<div class="col-md-8 col-md-offset-2">
	<p>Search results for: <b><?php echo $search ;?></b>......</p>
	<div class="panel-group">
		<?php $counter=0;
		?>
		<?php if(!null==$profile): ?>
					<?php foreach ($profile as $profile){ ?>
						<div class="panel panel-default">
							<?php foreach ($followers as $a) {
								if ($profile->userid == $a->mateid) {
									$counter=$counter+1;
								}
								else if($profile->userid == $a->userid){
									$counter=-1;
								}
							} ?>
    						<div class="panel-heading">
    						<div class="row">
    						<div class="col-md-10">		
    						<a href=""><?php echo $profile->firstname." ".$profile->middlename." ".$profile->lastname." ,&nbsp; <b>".$profile->nickname."</b>";?></a></div>
    						<div class="col-md-2">
    						<?php if ($counter==0){ echo '
    						<form method="post" action="'.base_url('bucket/addfollow').'?search='.$search.'">
    						<button type="submit" class="btn btn-default follower" name="follow" value="'.$profile->userid.'">Follow</button>
    						</form>'; }
    						else if($counter<0){ echo '
    						<form method="post" action="">
    						<button type="submit" class="btn btn-primary follower" disabled="Disabled" name="follow" value="'.$profile->userid.'">You</button>
    						</form>'; }
    						
    						else{ echo '
    						<form method="post" action="'.base_url('bucket/delfollow').'/?search='.$search.'">
    						<button type="submit" class="btn btn-danger follower" name="follow" value="'.$profile->userid.'">Followed</button>
    						</form>'; }?>
    						</div>
    						</div>
    						</div>
    						<div class="panel-body"><p><b>Birthday:&nbsp; </b><?php echo $profile->birthdate."<br><b>Sex:&nbsp;</b> ".$profile->sex."<br><b>Life quote:</b><em>&nbsp;\"&nbsp;".$profile->motto."&nbsp;\"</em>"; ?></p></div>
  						<?php $counter=0; ?>
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