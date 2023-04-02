<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<img src="images/other/3.jpg" class="img-responsive" alt=""/>
				</div>
				<div class="col-md-5">
					<div class="clearfix space50"></div>
					<h3>Praesent pretium rutrum nibh volutpat</h3>
					<div class="clearfix space10"></div>
					<p>Lorem ipsum dolor sit amet scelerisque bibendum neque eget malesuada. Maecenas auctor mi ac facilisis condimentum. Nunc tincidunt viverra ullamcorper. Nunc nec feugiat magna. Suspendisse vestibulum ac eros sit amet condimentum. Etiam non lectus egestas, aliquet neque ut, viverra odio. Nulla id placerat mauris.</p>
					<p>Maecenas purus sapien, elementum rutrum dapibus etget purus bibendum mi mauris vel ligula. Nunc vel mauris id tellus pharetra vehicula et quis lectus. Curabitur id lectus mollis, tristique lectus rutrum, rhoncus ante. Sed dictum, ex id convallis placerat, ante odio tristique nisi, quis laoreet lorem lorem sed massa. Vivamus tristique feugiat lectus nec bibendum.</p>
				</div>
			</div>
			<!--careers top-->
			<div class="space60"></div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="uppercase text-center">Current jobs Openings</h3>
					<div class="space40"></div>
				</div>
			</div>
			<div class="row jobs-row">
				<div class="col-md-8">
					<div class="panel-group" id="accordion-career">
						<?php foreach ($jobs as $job) : ?>						
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="" data-toggle="collapse" data-parent="#accordion-career" href="#collapse<?= $job['id'] ?>">
									<i class="icon-search"></i> <?= $job['title'] ?> <br>
									<em>(<?= $job['experience'] ?>)</em>
									</a>
								</h4>
							</div>
							<div id="collapse<?= $job['id'] ?>" class="panel-collapse collapse">
								<div class="panel-body">
									<?= $job['description'] ?>
									<div class="clearfix space20"></div>
									<p><a href="<?= base_url('careers/apply') ?>" class="button btn-small color2">Apply Now</a></p>
								</div>
							</div>
						</div>
						<!--panel end-->
						<?php endforeach ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="our-office">
						<h5 class="uppercase no-margin">Check Our Work Premisis</h5>
						<div class="space20"></div>
						<ul class="workplace">
							<li><a class="mp-lightbox" href="images/other/work1.jpg"><img src="images/other/work1.jpg" class="img-responsive" alt=""/></a></li>
							<li><a class="mp-lightbox" href="images/other/work2.jpg"><img src="images/other/work2.jpg" class="img-responsive" alt=""/></a></li>
							<li><a class="mp-lightbox" href="images/other/work3.jpg"><img src="images/other/work3.jpg" class="img-responsive" alt=""/></a></li>
							<li><a class="mp-lightbox" href="images/other/work4.jpg"><img src="images/other/work4.jpg" class="img-responsive" alt=""/></a></li>
							<li><a class="mp-lightbox" href="images/other/work5.jpg"><img src="images/other/work5.jpg" class="img-responsive" alt=""/></a></li>
							<li><a class="mp-lightbox" href="images/other/work6.jpg"><img src="images/other/work6.jpg" class="img-responsive" alt=""/></a></li>
						</ul>
						<div class="clearfix space20"></div>
						<ul class="feature-list">
							<li><i class="icon-square-check"></i> Retirement Plans</li>
							<li><i class="icon-square-check"></i> Health insurance</li>
							<li><i class="icon-square-check"></i> Work from home</li>
							<li><i class="icon-square-check"></i> Modern Workplace</li>
							<li><i class="icon-square-check"></i> Gamerooms</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--job row end-->
		</div>
	</div>


<?= $this->endSection() ?>