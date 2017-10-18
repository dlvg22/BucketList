<div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 col-xl-3 default-space">

<div class="events borders">
	
	<span class="glyphicon glyphicon-pushpin icon-color "></span><b>Upcoming events</b>
	<a href="#"><div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xl-offset-1  text-center"><img id="event-photo" src="<?php echo base_url('assets/images/bohol.jpg'); ?>">
	<?php $event="Bohol escapade";
		$date="April 22,1998";
		echo '<b>'.$event.'</b><br/>';
		echo '<b>'.$date.'</b><br/>';
		
		?>
	</div> </a>
</div> 

<div class="home-list borders">

	<table class="table table-responsive table-hover rmv-padding">
	<thead>
	<tr>
	<th><span class="glyphicon glyphicon-th-list"> </span>&nbsp;BucketList </p></th>
	</tr>
	</thead>
	<tbody>

	<?php $myList=array('Dream','believe','Survive','star','struck');
		
		foreach($myList as $s){
			echo '<tr><td><img class="list-img-icon" src="'.base_url('assets/images/bohol.jpg').'"><a href="#">'.$s.'</a></td></tr>';
		}
	 ?>

	</tbody>
	</table>
</div>
</div>

</div>