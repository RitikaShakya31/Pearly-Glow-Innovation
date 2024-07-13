<div style="width:100%;background:#19a1e3;">
	<div>
		<h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Photo Gallery</h3>
	</div>
</div>
<!-- START GALLERY SECTION -->
<section  class="section-padding ">
	<div class="container">
		<div class="row">
			<?php
			foreach ($gallery as $row) {
				?>
				<div class="col-lg-4 col-md-6 col-sm-12 col-12">
					<img class="gallery-img" title="<?= $row['title']?>" src="<?= setImage($row['image'], 'upload/gallery/') ?>" alt="Image" />
					
				</div>
			<?php } ?>
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
<!-- END GALLERY SECTION -->