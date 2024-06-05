<div style="width:100%;background:#19a1e3;">
	<div>
		<h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Gallery</h3>
	</div>
</div>

<!-- START GALLERY SECTION -->
<section id="doctor" class="section-padding doctor-page">
	<div class="auto-container">
		<div class="row">
			<?php
			foreach ($gallery as $row) {
				?>
				<div class="col-lg-3 col-md-6 col-sm-12 col-12">
					<div class="single-doctor single-doctor-warp">
						<img style="height: 400px;object-fit: cover;" src="<?= setImage($row['image'], 'upload/gallery/') ?>" alt="Image" />
						<div class="single-doctor-info">
						</div>
						<div class="single-doctor-mask">
							<div class="single-doctor-mask-inner">
								<h5><?= $row['title'] ?></h5>
								<p><?= $row['description'] ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
<!-- END GALLERY SECTION -->