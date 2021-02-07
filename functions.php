<?php
/**
 * Функции шаблона (function.php)
 * @package WordPress
 * @subpackage webx
 */
/*Подключаем необходимые снипперы*/
require_once('template/bs4navwalker.php');
require_once('template/bs4pagination.php');
require_once('template/bs4comments.php');

/*Заголовок в the_titile()*/
add_theme_support('title-tag');
/*Подключаем стили и скрипты */
add_action('wp_footer', 'add_scripts'); 
if (!function_exists('add_scripts')) {
	function add_scripts() { 
	    if(is_admin()) return false;
	    wp_deregister_script('jquery');
	    wp_enqueue_script('jquery', get_template_directory_uri().'/vendor/jquery/jquery.slim.min.js','','',true);
	    wp_enqueue_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.bundle.min.js','','',true);
	    wp_enqueue_script('main', get_template_directory_uri().'/vendor/main.js','','',true); // подключили кастомый файл js
	}
}
add_action('wp_print_styles', 'add_styles');
if (!function_exists('add_styles')) {
	function add_styles() {
	    if(is_admin()) return false;
	    wp_enqueue_style( 'bs', get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css' ); 
		wp_enqueue_style( 'main', get_template_directory_uri().'/style.css' );
	}
}
/*Разметка страниц*/
if (!function_exists('content_class_by_sidebar')) { // если ф-я уже есть в дочерней теме - нам не надо её определять
	function content_class_by_sidebar() { // функция для вывода класса в зависимости от существования виджетов в сайдбаре
		if (is_active_sidebar( 'sidebar' )) { // если есть
			echo 'col-lg-9'; // пишем класс на 80% ширины
		} else { // если нет
			echo 'col-lg-12'; // контент на всю ширину
		}
	}
}
/*Разделы для меню*/
register_nav_menus(array( // Регистрируем 2 меню
	'top' => 'Верхнее меню', // Верхнее
	//'bottom' => 'Нижнее меню' // Внизу
));

add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой
register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Сайдбар', // Название в админке
	'id' => "sidebar", // идентификатор для вызова в шаблонах
	'description' => 'Обычная колонка в сайдбаре', // Описалово в админке
	'before_widget' => '<div id="%1$s" class="card mb-2 widget %2$s"><div class="card-body">', // разметка до вывода каждого виджета
	'after_widget' => "</div></div>\n", // разметка после вывода каждого виджета
	'before_title' => '<h5 class="card-title">', //  разметка до вывода заголовка виджета
	'after_title' => "</h5>\n", //  разметка после вывода заголовка виджета
));

?>
