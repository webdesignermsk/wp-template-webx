<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage webx
 */
get_header(); ?> 
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar();?>">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('loop');  ?>
				<?php endwhile; 
				else: echo '<p>Нет записей.</p>'; endif; ?>	 
				<?php pagination();  ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer();?>