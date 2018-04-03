<?php snippet('header') ?>

<?php $videos = $pages->find('videos')->dkm_videos()->toStructure() ?>

<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-8 is-offset-2">


				<?php if($videoURL): ?>

					<?php $episode = $videos->findBy('video_id', $videoURL); ?>

					<?php if($episode): ?>

						<div class="embed">
							<iframe src="https://player.vimeo.com/video/<?= $episode->video_id();?>?api=1&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" class="episode" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
						</div>

						<h1 class="is-size-2 is-size-4-mobile mt10"><?= $episode->name() ?></h1>

					<?php else: ?>

						<div class="has-text-centered m20">
							<span class="icon is-large">
								<i class="fa fa-warning"></i>
							</span>

							<h1 class="is-size-3 is-size-4-mobile mt10">
								Sorry, we couldn't find your video!
							</h1>
							<p>
								Please visit the <a href="<?= url() ?>/teachings">teachings page</a> to find all current teachings!
							</p>
						</div>

					<?php endif ?>

				<?php else: ?>

					<div class="has-text-centered m20">
						<span class="icon is-large">
							<i class="fa fa-warning"></i>
						</span>

						<h1 class="is-size-3 is-size-4-mobile mt10">
							Sorry, we couldn't find your video!
						</h1>
						<p>
							Please visit the <a href="<?= url() ?>/teachings">teachings page</a> to find all current teachings!
						</p>
					</div>

				<?php endif ?>


			</div>
    </div>
  </div>
</section>


<?php snippet('footer') ?>
