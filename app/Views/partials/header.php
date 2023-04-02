	<!-- TOPBAR -->
	<div id="top-bar" class="hidden-xs hidden-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="top-bar-content">
						<p>Have any questions? <span></span><i class="icon-mobile2"></i> +91 9986 966 922 <span></span>&bull;<span></span> <i class="icon-mail3"></i> Mail us - <a href="mailto:support@kfinsolutions.com">support@kfinsolutions.com</a></p>
					</div>
					<div class="nav-social-icons">
						<ul class="social-icons">
							<li class="facebook">
								<a href="https://www.facebook.com/kfinsolutions" target="_blank">
								<i class="fa fa-facebook"></i><i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="twitter">
								<a href="https://twitter.com/KfinSolutions" target="_blank">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="linkedin">
								<a href="https://linkedin.com/company/kfin-solutions/" target="_blank">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li class="github">
								<a href="https://github.com/orgs/kfinsolutions/" target="_blank">
								<i class="fa fa-github"></i>
								<i class="fa fa-github"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- HEADER -->
	<header id="header-main">
		<div class="container">
			<div class="navbar yamm navbar-default">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="<?= base_url() ?>" class="navbar-brand"><img src="images/basic/logo.png" width="60" alt="KFIN Logo"/></a>
				</div>

				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?= base_url() ?>">Home</a>
						</li>
						<li class="dropdown">
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
								About 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?= base_url("about-us") ?>">Company</a></li>
								<li><a href="<?= base_url("team") ?>">Team</a></li>
								<li><a href="<?= base_url("awards-and-recognizations") ?>">Awards and Recognizations</a></li>
							</ul>
						</li>
				  		<li>
							<a href="<?= base_url("/technologies") ?>">Technologies</a>
						</li>
						<li class="dropdown yamm-fw">
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
								Services 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="row">
											<ul class="col-sm-3">
												<h4>Web Designing</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'web-design']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Web Development</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'web-development']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>E-Commerce</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'e-commerce']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>DevOps</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'devops']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Internet of Things</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'iot']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>AI & ML</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'ai-ml']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Blockchain</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'blockchain']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Mobile Applications</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'mobile-application']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Software Testing</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'software-testing']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Chatbots</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'chatbot']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Digital Media Marketing</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'digital-media-marketing']) ?>
											</ul>
											<ul class="col-sm-3">
												<h4>Branding</h4>
												<?= view_cell('App\Libraries\Menu::servicesMenu', ['category' => 'branding']) ?>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown yamm-fw">
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
								Products 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu">
								<li>
									<div class="yamm-content">
										<div class="row">
											<ul class="col-sm-3">
												<?= view_cell('App\Libraries\Menu::productsMenu', ['offset' => 0]) ?>
											</ul>
											<ul class="col-sm-3">
												<?= view_cell('App\Libraries\Menu::productsMenu', ['offset' => 5]) ?>
											</ul>
											<ul class="col-sm-3">
												<?= view_cell('App\Libraries\Menu::productsMenu', ['offset' => 10]) ?>
											</ul>
											<ul class="col-sm-3">
												<?= view_cell('App\Libraries\Menu::productsMenu', ['offset' => 15]) ?>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle">
								Contact 
								<div class="arrow-up"><i class="fa fa-angle-down"></i></div>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="<?= base_url("/contact-us") ?>">Contact Us</a></li>
								<li><a href="<?= base_url("/careers") ?>">Careers</a></li>
								<li><a href="<?= base_url("/faq") ?>">FAQ</a></li>
							</ul>
						</li>
				  </ul>
				</div>
			</div>
		</div>
	</header>
