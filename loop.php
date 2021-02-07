<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage webx
 */ 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">
		<div class="card-header">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<small class="text-muted float-right">Автор:  <?php the_author_posts_link(); ?></small>
		</div>
		<div class="card-body pb-2">
			<div class="row">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="col-sm-3">
						<a href="<?php the_permalink(); ?>" class="thumbnail">
							<?php the_post_thumbnail(); ?>
						</a>
					</div>
				<?php } ?>
				<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?>">
					<?php the_content(''); ?>
				</div>
			</div>
			<p class="card-text"><small class="text-muted">Опубликовано: <?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></small>  <small class="text-muted float-right">Категории: <?php the_category(',') ?></small></p>
		</div>
	</div>
</article>