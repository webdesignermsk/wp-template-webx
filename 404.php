<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage webx
 */
get_header(); // Подключаем header.php ?>
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<h1>Ой, это 404!</h1>
				<p>Вы зашли сильшком далеко, вернитесь обратно (:</p>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>