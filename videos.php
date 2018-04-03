<?php snippet('header') ?>

<?php $videos = $pages->find('videos')->dkm_videos()->toStructure() ?>

<section class="section">
  <div class="container">
    <div class="columns">
      <?php foreach($videos as $item): ?>
        <div class="column is-8 is-offset-2">
		  
		  <?php if($item->video_type() === 'vimeo'): ?>
          		
		  <div class="embed">
		  <iframe src="https://player.vimeo.com/video/<?= $item->video_id();?>?api=1&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" class="episode" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
		</div>

		<h1 class="is-size-2 is-size-4-mobile mt10"><?= $item->name() ?></h1>
		  
		  
		<?php endif; ?>
		<?php if($item->video_type() === 'youtube'): ?>
		  
		  
  			<div class="embed">
			<iframe src="https://www.youtube.com/watch?v=<?= $item->video_id();?>?api=1&color=ffffff&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" class="episode" webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
						</div>

						<h1 class="is-size-2 is-size-4-mobile mt10"><?= $item->name() ?></h1>
		  
		  <?php endif; ?>

      </div>
    <?php endforeach ?>
    </div>
  </div>
</section>



<?php snippet('footer') ?>
