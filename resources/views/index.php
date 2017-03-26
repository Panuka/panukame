<? include "templates/html/header.php";?>
<div class="mainbody-section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="menu-item blue">
					<a href="https://twitter.com/JIoBsTeP" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
				</div>
				<div class="menu-item red">
					<a href="http://lastfm.ru/user/agentrol" target="_blank">
						<i class="fa fa-lastfm"></i>
					</a>
				</div>
				<div class="menu-item brown">
					<a href="https://www.instagram.com/panuka_/" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
				<div class="menu-item deep-blue">
					<a href="https://vk.com/panukaa" target="_blank">
						<i class="fa fa-vk"></i>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="home-slider">
					<div id="instagram-carousel" class="carousel slide" data-ride="carousel"
					     style="padding-bottom: 30px;">
						<ol class="carousel-indicators">
						</ol>
						<div class="carousel-inner">
							<?php
							foreach ($data as $img): ?>
								<div class="item">
									<div>
										<a href="<?=$img['link']?>" target="_blank"><img
												data-original="<?= $img['images']['standard_resolution']['url'] ?>"
												data-small="<?= $img['images']['low_resolution']['url'] ?>"
												class="img-responsive lazy" width="100" height="100" alt=""></a>
										<? if(strlen($img['location']['name'])): ?>
											<span class="location meta-top"><i class="fa fa-map-marker" aria-hidden="true"></i> <?= $img['location']['name'] ?></span>
										<? endif; ?>
										<span class="date meta-top"><?= date('d/m/Y', $img['created_time']) ?></span>
										<? if(strlen($img['caption']['text'])): ?>
											<div class="meta">
												<span class="text"> <?= $img['caption']['text'] ?></span>
											</div>
										<? endif; ?>
									</div>
								</div>
								<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="menu-item color">
					<a href="https://ru.linkedin.com/in/kirill-nikolaenko-2842ab75" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
				</div>
				<div class="menu-item red">
					<a href="https://www.youtube.com/user/JIobsTeP" target="_blank">
						<i class="fa fa-youtube"></i>
					</a>
				</div>
				<div class="menu-item github">
					<a href="https://github.com/Panuka" target="_blank">
						<i class="fa fa-github"></i>
					</a>
				</div>
				<div class="menu-item deep-blue">
					<a href="https://www.facebook.com/kirill.nikolaenko.9" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<? include "templates/html/footer.php";?>