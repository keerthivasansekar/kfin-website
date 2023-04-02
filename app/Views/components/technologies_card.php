<?php foreach ($technologies as $technology) : ?>
<div class="project-item <?= implode(" ", $technology['category']) ?>">
	<a href="javascript:void(0)">
		<div class="project-gal">
			<img src="images/technologies/<?= $technology['image_url'] ?>" class="img-responsive" alt="">
			<div class="overlay-folio2">
				<div class="project-info">
					<h2><?= $technology['name'] ?></h2>
				</div>
			</div>
		</div>
	</a>
</div>
<?php endforeach ?>