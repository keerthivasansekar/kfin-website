<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<div class="fsidebar fsidebar2" id="floating-sidebar">
				<div class="fs-info">
					<h3>Right Floating Sidebar</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed dui velit. Fusce pharetra leo lacinia leo rhoncus, eu consequat libero auctor. Morbi sit amet augue porta, egestas odio eget, vulputate purus. Nulla convallis porta scelerisque. Nullam at consectetur odio.</p>
					<p>Pellentesque vitae nisl non diam ornare sagittis. Vestibulum vestibulum ipsum id augue vulputate rhoncus. Quisque varius justo sed tempor tincidunt. Sed eu cursus purus, semper facilisis mi.</p>
					<div class="clearfix space20"></div>
					<ul class="project-meta">
						<li><i class="icon-tag2"></i>Illustration | Branding </li>
						<li><i class="icon-file2"></i><span class="project_client">Rebeccea - 2015</span></li>
						<li><a href="http://www.themeforest.net/" target="_blank"><i class="icon-link3"></i>http://www.themeforest.net</a></li>
					</ul>
				</div>
			</div>
			<div id="fs-content" class="fs-content2">
				<img src="images/projects/1/1.jpg" class="img-responsive" alt=""/>
				<div class="clearfix space30"></div>
				<img src="images/projects/1/2.jpg" class="img-responsive" alt=""/>
				<div class="clearfix space30"></div>
				<img src="images/projects/1/3.jpg" class="img-responsive" alt=""/>
				<div class="clearfix space30"></div>
				<img src="images/projects/1/4.jpg" class="img-responsive" alt=""/>
			</div>
		</div>
	</div>


<?= $this->endSection() ?>