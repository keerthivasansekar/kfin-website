<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>
	<div class="inner-content">
		<div class="container">

			<!-- ABOUT -->
			<div class="section-about space100">
				<div class="row">
					<div class="col-md-6">
						<div>
							<img src="images/other/2.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							<h3>Who We Are &amp; What We Do</h3>
							<p>Established in 2013, we are one of the most established and recognized Web/ Mobile Solution Company in India. With over a decade of experience, companies from all over the world have partnered with us for their interactive strategy and tactical capabilities. Our approach is both intelligent and down to earth. A love for the web, great design and the latest technologies means your project is more than just a job. We deliver future-focused online experiences, combined with creative thinking & technical excellence. </p>
						</div>
					</div>
				</div>
			</div>

			<!-- SERVICES -->
			<div class="section-services2 space40">
				<div class="row">
					<div class="col-md-4">
						<h3>We Provide<br>Truly Prominent Solutions.</h3>
						<p class="space30">We are a curious team of creative IT people who want to simplify the lives of entrepreneurs and enterprises by providing our skills and resources to build customized and reliable software solutions.</p>
						<a href="<?= base_url('contact-us') ?>" class="button one space30">Get Started!</a>
					</div>
					<!-- end section -->
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4 ss2-content">
								<i class="icon-lightbulb"></i>
								<h4>Our Mission</h4>
								<p>Be the World’s best Technology company. Achieve Business Assurance Goals through Engineering Assurance</p>
							</div>
							<!-- end section -->
							<div class="col-md-4 ss2-content">
								<i class="icon-sun"></i>
								<h4>Our Vision</h4>
								<p>Bring Real-time and absolute visibility into the technology and its operations as it progresses through each stage of the lifecycle.</p>
							</div>
							<!-- end section -->
							<div class="col-md-4 ss2-content">
								<i class="icon-presentation"></i>
								<h4>Our Goal</h4>
								<p>Build a culture that supports ktellects - our employees, who provide exceptional service to our customers</p>
							</div>
							<!-- end section -->
						</div>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<!-- TEAM -->
			<div class="section-team-block space100">
				<h2 class="content-head text-center">Meet our Team <em>Our industry experts help scale grow and succeed.</em></h2>
				<div class="col-md-6 left">
					<img src="images/team/10.jpg" class="img-responsive" alt="">
					<br>
					<h4>Keerthivasan</h4>
					<p class="smtfont">CEO</p>
					<div class="small-sep pull-right"></div>
				</div>
				<!-- end section -->
				<div class="col-md-6 right">
					<img src="images/team/11.jpg" class="img-responsive" alt="">
					<br>
					<h4>Javid Solkar</h4>
					<p class="smtfont">Marketing Head</p>
					<div class="small-sep pull-left"></div>
				</div>
				<!-- end section -->
				<div class="col-md-6 left">
					<img src="images/team/12.jpg" class="img-responsive" alt="">
					<br>
					<h4>Parvez Solkar</h4>
					<p class="smtfont">Branding Manager</p>
					<div class="small-sep pull-right"></div>
				</div>
				<!-- end section -->
				<div class="col-md-6 right">
					<img src="images/team/13.jpg" class="img-responsive" alt="">
					<br>
					<h4>Swetha Sivam</h4>
					<p class="smtfont">CTO</p>
					<div class="small-sep pull-left"></div>
				</div>
				<!-- end section -->
				<div class="clearfix"></div>
			</div>

			<!-- INFO / SKILLS -->
			<div class="section-info space50">
				<div class="col-md-6">
					<h4>Why Choose Us</h4>
					<div class="space30"></div>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne1">
									WE’RE GREAT LISTENERS
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseOne1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>We’ve been listening to our customers since we started the company over 8+ years ago. We know what they want and need. That’s why we created the best products out there.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo1">
									WE’RE PASSIONATE
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseTwo1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>We love hearing about how our products helped someone get their life back on track. And we love seeing happy faces after using them.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree1">
									WE’RE IMAGINATIVE
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseThree1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>We’ve got ideas and we’re not afraid to try them out. Because we know what works, and we know what doesn’t work. So we don’t have to guess. We just do it.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour1">
									WE’RE LOYAL
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>We are loyal to our customers and we want them to know they can trust us. Our loyalty is not just about being nice; it’s about doing what we say we’re going to do. We are loyal to our employees, who work hard everyday to make sure you get the best possible experience. We are loyal to each other, and we strive to build a company where everyone feels valued and respected. We are loyal to the environment, and we believe in sustainability. And finally, we are loyal to our community, and we believe in giving back to those around us.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive1">
									WE’RE DEDICATED
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseFive1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>As a company, we strive to be transparent about what we sell and how we sell it. That's why we've created this website where you can find detailed information about our products, learn about our company, and get answers to frequently asked questions.</p>
								</div>
							</div>
						</div>
						<div class="clearfix space10"></div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix1">
									WE’RE PERFECTIONISTS
									<span class="fa fa-plus"></span>
									</a>
								</h4>
							</div>
							<div id="collapseSix1" class="panel-collapse collapse">
								<div class="panel-body">
									<p>We strive to provide our customers with the best possible experience.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h4>Skills we are having</h4>
					<div class="space30"></div>
					<div id="skills">
						<div class="b-progress-bar" data-capacity="100" data-value="97">
							<div class="progress-label">Web Design - 97%</div>
							<div class="progress-scale">
								<div style="width: 97%;" class="progress-line"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="99">
							<div class="progress-label">Web Development - 99%</div>
							<div class="progress-scale">
								<div style="width: 86%;" class="progress-line m-2"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="78">
							<div class="progress-label">Graphic Design - 78%</div>
							<div class="progress-scale">
								<div style="width: 78%;" class="progress-line m-3"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="92">
							<div class="progress-label">Mobile Application - 92%</div>
							<div class="progress-scale">
								<div style="width: 65%;" class="progress-line m-4"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="81">
							<div class="progress-label">Internet Of Things - 81%</div>
							<div class="progress-scale">
								<div style="width: 65%;" class="progress-line m-4"></div>
							</div>
						</div>
						<div class="b-progress-bar" data-capacity="100" data-value="85">
							<div class="progress-label">DevOps - 85%</div>
							<div class="progress-scale">
								<div style="width: 65%;" class="progress-line m-4"></div>
							</div>
						</div>
					</div>
					<div class="gap" style="height: 20px;">
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

			<!-- TESTIMONIALS -->
			<section id="section-testimonials">
				<div class="container">
					<h2 class="content-head text-center">Testimonials <em>Our industry experts help scale grow and succeed.</em></h2>
					<div class="testimonial-box">
						<div id="testimonial" class="owl-carousel">
							<div class="quote-info">
								<img src="images/quote/1.jpg" class="img-responsive" alt="">
								<p>Wonderful website designing. Very friendly, available, and co-operative in dealings. Best personnel to design a website</p>
								<h2>Rahul Mani<br>Managing Director - St. Anthony's Institutions, Bangalore</h2>
							</div>
							<div class="quote-info">
								<img src="images/quote/2.jpg" class="img-responsive" alt="">
								<p>We have been associated with KFIN Solutions for not even a couple of months and we can see the difference (in a good way). The support staff has been super active and quite professional. Mr. Pradeep personally does care about his client's feedback. Their service cost is also quite affordable which hasn't been compromised with quality yet. Looking forward to have a stressless association in the future as well.
All the best team.</p>
								<h2>Vignesh<br>Brand Manager - UCAL, Chennai</h2>
							</div>
							<div class="quote-info">
								<img src="images/quote/3.jpg" class="img-responsive" alt="">
								<p>KFIN Solutions are very good at services like Web designing, web hosting, software development etc. I appreciate their quick response, interactions and team work. I would recommend everyone who wants avail their services.</p>
								<h2>Vanitha Deepak<br>CEO - Finnacle, Chennai</h2>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

<?= $this->endSection() ?>