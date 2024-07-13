<div style="width:100%;background:#19a1e3;">
	<div>
		<h3 style="color: white;text-align: center;line-height: 130px;font-size: 40px;">Our Video Gallery</h3>
	</div>
</div>
<!-- START GALLERY SECTION -->
<section id="doctor" class="doctor-page" style="padding: 10px 0;">
	<div class="container">
		<div class="row">
			<?php
                    function convertToEmbedUrl($url)
                    {
                        if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
                            $video_id = $id[1];
                        } elseif (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
                            $video_id = $id[1];
                        } elseif (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
                            $video_id = $id[1];
                        } else {
                            return false;
                        }
                        return 'https://www.youtube.com/embed/' . $video_id;
                    }

                    foreach ($vdo_gallery as $row) {
                        $embed_url = convertToEmbedUrl($row['video']);
                        if ($embed_url) {
                            ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-4">
                                <div class="tp-service mb-30">
                                    <div class="tp-service__thumb">
                                        <iframe width="100%" height="315" 
                                            src="<?= htmlspecialchars($embed_url, ENT_QUOTES, 'UTF-8') ?>" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                            <h5 class="text-center"><?= $row['title']?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            echo "<div class='col-xl-6 col-lg-6 col-md-6 col-sm-6'><p>Invalid video URL</p></div>";
                        }
                    }
                    ?>
		</div>
	</div>
	<!--- END CONTAINER -->
</section>
<!-- END GALLERY SECTION -->