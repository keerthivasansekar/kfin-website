<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- INNER CONTENT -->
	<div class="inner-content mm-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center mm-content text-center">
					<h1>MAINTENANCE MODE</h1>
					<p class="lead">The website is undergoing some scheduled maintenance.<br>Please come back later.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="space50"></div>
				<hr>
				<div class="space50"></div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-4">
							<div class="feature-box">
								<div class="feature-box-icon">
									<i class="icon-support"></i>
								</div>
								<div class="feature-box-info">
									<h4>Whats this about?</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box">
								<div class="feature-box-icon">
									<i class="icon-clock2"></i>
								</div>
								<div class="feature-box-info">
									<h4>Come back later</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="feature-box">
								<div class="feature-box-icon">
									<i class="icon-mail3"></i>
								</div>
								<div class="feature-box-info">
									<h4>Get in Touch</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?= $this->endSection() ?>