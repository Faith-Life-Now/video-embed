<?php snippet('header') ?>

<?php $videos = $pages->find('videos')->dkm_videos()->toStructure() ?>

<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-8 is-offset-2">


		<?php if($videoURL): ?>

		<?php $episode = $videos->findBy('video_id', $videoURL); ?>

		<?php if($episode): ?>
		  
		  <?php if($item->video_type() === 'vimeo'): ?>
          		
		  <div class="embed">
		<iframe src="https://player.vimeo.com/video/<?= $episode->video_id();?>?api=1&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" class="episode" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
		</div>

		<h1 class="is-size-2 is-size-4-mobile mt10"><?= $episode->name() ?></h1>
		  
		  
		<?php endif; ?>
		<?php if($item->video_type() === 'youtube'): ?>
		  
		  <?= "Hey, I'm a You Tube video" ?>
		  
  			<div class="embed">
			<iframe src="https://www.youtube.com/watch?v=<?= $episode->video_id();?>?api=1&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" class="episode" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
						</div>

						<h1 class="is-size-2 is-size-4-mobile mt10"><?= $episode->name() ?></h1>
		  
		  <?php endif; ?>

</div>
    </div>
  </div>
</section>


<?php snippet('footer') ?>
