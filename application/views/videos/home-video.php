<section class="section brands section section-pd" id="portfolio">
    <div class="container">
        <div class="row">
            <?php foreach ($videos as $video): ?>
            	<div class="col-lg-6">

	             	<figure class="ratio ratio-16x9">
	                    <iframe width="980" height="551" src="<?php echo str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $video->url) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	                </figure> 
            	</div>
            <?php endforeach ?>
        </div>
    </div>
</section>