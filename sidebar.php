<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage webx
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { ?>
<div id="sidebar" class="col-lg-3">
	<?php dynamic_sidebar('sidebar'); ?>
</div>
<?php } ?>