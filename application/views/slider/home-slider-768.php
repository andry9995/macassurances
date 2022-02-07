<section id="home-768">
	<div class="container-fluid">
		<div class="slider-768-container">
			<?php foreach ($APISlider as $slide): ?>
				<div class="slider-768-item">
					<div class="slider-768-text">
						<div class="slider-768-title"><?php echo $slide->titre; ?></div>
						<div class="slider-768-subtitle"><?php echo $slide->sous_titre; ?></div>
						
					</div>
					<img src="<?php echo $slide->img; ?>" class="slider-768-img">
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>