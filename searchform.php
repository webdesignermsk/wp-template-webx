<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage webx
 */
?>
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
	  <input type="text" class="form-control" value="<?php echo get_search_query() ?>" name="s" placeholder="Строка для поиска" aria-label="Строка для поиска" aria-describedby="basic-addon-search">
	  <div class="input-group-append">
	    <button type="submit" class="btn btn-outline-secondary" type="button">Искать</button>
	  </div>
	</div>
</form>