<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<h3 class="text-center space30">Common Support questions index</h3>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<!--Nav Tabs-->
					<ul class="nav-tabs left" role="tablist">
						<li class="active"><a href="#pre-sale" role="tab" data-toggle="tab"><span>01</span>Pre-sale questions</a></li>
						<li><a href="#install" role="tab" data-toggle="tab"><span>02</span>Installation</a></li>
						<li><a href="#support" role="tab" data-toggle="tab"><span>03</span>Support</a></li>
						<li><a href="#custom" role="tab" data-toggle="tab"><span>04</span>Customization</a></li>
					</ul>
					<!--Tabs Content-->
					<div class="tab-content">
						<!--Tab01-->
						<div class="tab-pane fade in active" id="pre-sale">
							<div id="accordion01">
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion01" href="#collapse01">
										1.&nbsp;How lorem ipsum dolor sit amet adipiscing elit ?
										</a>
									</div>
									<div id="collapse01" class="panel-collapse collapse in">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion01" href="#collapse02" class="collapsed">
										2.&nbsp;Where imperdiet auctor velit quis auctor?
										</a>
									</div>
									<div id="collapse02" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion01" href="#collapse03" class="collapsed">
										3.&nbsp;Where fusce eget aliquet arcu?
										</a>
									</div>
									<div id="collapse03" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion01" href="#collapse04" class="collapsed">
										4.&nbsp;How eget blandit mattis justo felis?
										</a>
									</div>
									<div id="collapse04" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Tab02-->
						<div class="tab-pane fade" id="install">
							<div id="accordion02">
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion02" href="#collapse05">
										1.&nbsp;What quis ligula ut sem convallis?
										</a>
									</div>
									<div id="collapse05" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion02" href="#collapse06" class="collapsed">
										2.&nbsp;Why posuere metus at urna euismod?
										</a>
									</div>
									<div id="collapse06" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion02" href="#collapse07" class="collapsed">
										3.&nbsp;Where fusce eget aliquet arcu?
										</a>
									</div>
									<div id="collapse07" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion02" href="#collapse08" class="collapsed">
										4.&nbsp;How eget blandit mattis justo felis?
										</a>
									</div>
									<div id="collapse08" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Tab03-->
						<div class="tab-pane fade" id="support">
							<div id="accordion03">
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion03" href="#collapse09" class="collapsed">
										1.&nbsp;How lorem ipsum dolor sit amet adipiscing elit ?
										</a>
									</div>
									<div id="collapse09" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion03" href="#collapse10" class="collapsed">
										2.&nbsp;Where imperdiet auctor velit quis auctor?
										</a>
									</div>
									<div id="collapse10" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion03" href="#collapse11">
										3.&nbsp;Where fusce eget aliquet arcu?
										</a>
									</div>
									<div id="collapse11" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Tab04-->
						<div class="tab-pane fade" id="custom">
							<div id="accordion04">
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion04" href="#collapse12">
										1.&nbsp;How lorem ipsum dolor sit amet adipiscing elit ?
										</a>
									</div>
									<div id="collapse12" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion04" href="#collapse13" class="collapsed">
										2.&nbsp;Where imperdiet auctor velit quis auctor?
										</a>
									</div>
									<div id="collapse13" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion04" href="#collapse14" class="collapsed">
										3.&nbsp;Where fusce eget aliquet arcu?
										</a>
									</div>
									<div id="collapse14" class="panel-collapse collapse">
										<div class="panel-body">
											Mauris posuere metus at urna euismod iaculis. Aliquam quis ligula ut sem convallis luctus nec ut nulla. Donec efficitur porttitor eros id blandit. Aliquam tincidunt viverra tempor. Curabitur vehicula mauris justo, id ultricies tellus ullamcorper at.                             
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix space40"></div>
			<div class="text-center">
				<h4>For any other queries. Contact us here.</h4>
				<div class="space30"></div>
				<a href="<?= base_url("/contact-us") ?>" class="button color2 btn-center">Contact Support</a>
			</div>
		</div>
	</div>


<?= $this->endSection() ?>