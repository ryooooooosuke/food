<?php

/* 子テーマのfunctions.phpは、親テーマのfunctions.phpより先に読み込まれることに注意してください。 */


/**
 * 親テーマのfunctions.phpのあとで読み込みたいコードはこの中に。
 */
// add_filter('after_setup_theme', function(){
// }, 11);


/**
 * 子テーマでのファイルの読み込み
 */
add_action('wp_enqueue_scripts', function () {

	$timestamp = date('Ymdgis', filemtime(get_stylesheet_directory() . '/style.css'));
	wp_enqueue_style('child_style', get_stylesheet_directory_uri() . '/style.css', [], $timestamp);	/* その他の読み込みファイルはこの下に記述 */
	// トップページ（フロントページまたはTOPテンプレート）でparticles.jsを読み込み
	if (is_front_page() || is_page_template('top.php')) {
		wp_enqueue_script('particles-js', get_stylesheet_directory_uri() . '/js/particles/particles.js', [], '2.0.0', true);
		wp_enqueue_script('particles-app', get_stylesheet_directory_uri() . '/js/particles/app.js', ['particles-js'], '1.0.0', true);
		wp_enqueue_style('particles-css', get_stylesheet_directory_uri() . '/css/particles.css', [], '1.0.0');
	}
	
	// TOPページテンプレート用のCSSを読み込み
	if (is_page_template('top.php')) {
		wp_enqueue_style('top-css', get_stylesheet_directory_uri() . '/css/top.css', [], '1.0.0');
	}
}, 11);


/**
 * トップページのbodyタグ直下にparticles-jsのdivを追加
 */
add_action('wp_body_open', function () {
	if (is_front_page() || is_page_template('top.php')) {
		echo '<div id="particles-js"></div>';
	}
});
