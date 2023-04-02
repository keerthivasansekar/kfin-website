<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content no-padding">
		<div class="container">
			<div class="clearfix space40"></div>
			<div class="row" id="team2">
				<h3 class="uppercase text-center no-margin">Our Awesome team</h3>
				<div class="space50"></div>
				<div class="col-md-3">
					<div class="staff-img">
						<img src="images/team/1.jpg" class="img-responsive" alt="">
						<div class="team-inner">
							<ul class="team-social">
								<li><a class="facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="pinterest" href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<h2>Keerthivasan</h2>
					<span>CEO</span>	
				</div>
				<div class="col-md-3">
					<div class="staff-img">
						<img src="images/team/2.jpg" class="img-responsive" alt="">
						<div class="team-inner">
							<ul class="team-social">
								<li><a class="facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="pinterest" href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<h2>Javid Solkar</h2>
					<span>Marketing Head</span>	
				</div>
				<div class="col-md-3">
					<div class="staff-img">
						<img src="images/team/3.jpg" class="img-responsive" alt="">
						<div class="team-inner">
							<ul class="team-social">
								<li><a class="facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="pinterest" href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<h2>Parvez Solkar</h2>
					<span>Branding Manager</span>	
				</div>
				<div class="col-md-3">
					<div class="staff-img">
						<img src="images/team/4.jpg" class="img-responsive" alt="">
						<div class="team-inner">
							<ul class="team-social">
								<li><a class="facebook" href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
								<li><a class="google" href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="pinterest" href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<h2>Swetha Sivam</h2>
					<span>Cheif Technical Officer</span>	
				</div>
			</div>
		</div>
		<div class="clearfix space90"></div>
		<div id="stats2" class="pattern-bg1 padding50">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="stats2-info">
							<p><span class="count">200</span></p>
							<h2>Completed Projects</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="stats2-info">
							<p><span class="count">150</span></p>
							<h2>Awards Received</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="stats2-info">
							<p><span class="count">387</span></p>
							<h2>Happy Clients</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="stats2-info">
							<p><span class="count">1540</span></p>
							<h2>Coffee Consumed</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix space90"></div>
		<div class="container">
			<div class="testimonial-box">
				<div id="testimonial" class="owl-carousel">
					<div class="quote-info">
						<img src="images/quote/1.jpg" class="img-responsive" alt="">
						<p>Established in 2013, we are one of the most established and recognized Web/ Mobile Solution Company in India.</p>
						<h2>Keerthivasan</h2>
					</div>
					<div class="quote-info">
						<img src="images/quote/2.jpg" class="img-responsive" alt="">
						<p>With over a decade of experience, companies from all over the world have partnered with us for their interactive strategy and tactical capabilities. Our approach is both intelligent and down to earth.</p>
						<h2>Javid Solkar</h2>
					</div>
					<div class="quote-info">
						<img src="images/quote/3.jpg" class="img-responsive" alt="">
						<p>We have been governed by our core values. These guiding principles helps us to define the culture and character of our company and to make valuable decisions.</p>
						<h2>Swetha Sivam</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="cllearfix space70"></div>
	</div>


<?= $this->endSection() ?>