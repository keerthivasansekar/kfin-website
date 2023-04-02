<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<img src="images/bg/2.jpg" class="img-responsive" alt=""/>
			<div class="clearfix space30"></div>
			<p>Quisque nisi erat, laoreet vel venenatis sed, dapibus et tortor. Sed rhoncus est in urna facilisis aliquam. Donec vehicula mauris vitae aliquam iaculis. Quisque pharetra urna in ligula ultrices, in egestas metus commodo. Curabitur aliquet auctor metus, id iaculis purus vulputate sit amet. Mauris dictum odio lectus, quis ornare lacus dignissim id. Nullam a ante sodales, fermentum orci et, facilisis nibh. Phasellus nec felis libero. Suspendisse dignissim sit amet urna eu sodales. Donec vitae sodales velit.</p>
			<p>Phasellus sed feugiat leo. Nam vitae viverra tortor, eu mattis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam feugiat augue vel tellus tempus, vitae pretium velit venenatis. Donec eu posuere lectus. Quisque vel urna eu orci consectetur rutrum ac et ipsum. Donec convallis vestibulum orci at suscipit. Duis lobortis libero ut leo rutrum facilisis. Vivamus maximus facilisis fermentum. Fusce posuere luctus sem, eget rutrum tellus tincidunt finibus. Aenean id ligula ac velit hendrerit tempor ut at mi. Donec eu justo sed velit lacinia suscipit. Etiam dictum augue ante, non pulvinar turpis feugiat elementum. Aliquam malesuada, enim at suscipit convallis, ligula purus euismod sem, at mattis est turpis dapibus felis. </p>
			<blockquote class="style1">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet. Integer posuere erat a ante.</p>
				<small><b>Author Name</b></small>
			</blockquote>
			<p>In hac habitasse platea dictumst. Aenean sollicitudin, felis non sodales vestibulum, erat ipsum egestas tortor, vitae tincidunt augue quam quis ex. Phasellus ac laoreet leo. Vestibulum in dolor eget velit elementum iaculis. Aenean pulvinar leo sit amet venenatis euismod. Praesent cursus, felis in feugiat pellentesque, nisl nibh dapibus lacus, at feugiat arcu ante a dolor. Curabitur et egestas eros, quis blandit arcu.</p>
		</div>
	</div>


<?= $this->endSection() ?>