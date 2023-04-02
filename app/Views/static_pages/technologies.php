<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<section id="portfolio-section">
				<ul class="filter no-margin-top" data-option-key="filter">
					<li><a class="selected" href="#filter" data-option-value="*">All</a></li>
					<li><a href="#" data-option-value=".web-design">Web Design</a></li>
					<li><a href="#" data-option-value=".web-development">Web Development</a></li>
					<li><a href="#" data-option-value=".devops">DevOps</a></li>
					<li><a href="#" data-option-value=".iot">IOT</a></li>
					<li><a href="#" data-option-value=".mobile-application">Mobile Apps</a></li>
					<li><a href="#" data-option-value=".illustration">Illustration</a></li>
					<li><a href="#" data-option-value=".print">Print</a></li>
				</ul>
				<div id="portfolio-home" class="isotope gutter folio-boxed-4col">
					<?= view_cell('App\Libraries\TechnologiesCard::cardView') ?>
				</div>
			</section>
		</div>
	</div>


<?= $this->endSection() ?>