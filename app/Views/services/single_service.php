<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?= view_cell('App\Libraries\PageHeader::header', ['pageinfo' => $pageinfo]) ?>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<h2 class="uppercase text-center space30"><?= $service['name'] ?></h2>
			<img src="images/services/<?= $service['slug'] ?>.jpg" class="img-responsive" alt=""/>
			<div class="clearfix space30"></div>
			<?= $service['content'] ?> 
		</div>
	</div>

<?= $this->endSection() ?>