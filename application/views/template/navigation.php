<!-- navigation bar -->
<div class="content-wrapper">
	<?php $name="Franky"; ?>
	<div class="container-fluid">
		<div class="row"> 
		<!-- logo and icon is not yet official -->
		<div class="col-md-12 navigation-header">
			<div class="col-md-1 navigation-title"><a href="#">BucketList</a></div> 
			<div class="col-md-4 navigation-title"> 
				<div class="input-group">
					<input type="text"  class="form-control input-sm" placeholder="Search"/>
					<span class="input-group-addon">
						<i class="glyphicon glyphicon-search"></i>
					</span>
				</div>
			</div>
				<div class="col-md-3 col-md-offset-3 navigation-tool">
				<div class=" col-md-2 icon-tool"><span class="glyphicon glyphicon-globe"></span></div>
				<div class=" col-md-2 icon-tool"><span class="glyphicon glyphicon-envelope"></span></div>
				<div class="col-md-6 col-md-offset-1  img-tool"><img src="<?php echo base_url('assets/images/franky.jpg'); ?>" class="img-icon img-circle" alt="Picture"  /><span id="name"><?php echo $name; ?></span></div>
				</div>
		</div>

