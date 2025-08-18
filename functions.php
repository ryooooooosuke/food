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
	}	// TOPページテンプレート用のCSSを読み込み
	if (is_page_template('top.php')) {
		wp_enqueue_style('top-css', get_stylesheet_directory_uri() . '/css/top.css', [], '1.0.0');
		// anime.jsライブラリを読み込み
		wp_enqueue_script('anime-js', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js', [], '3.2.1', true);
		// カスタムアニメーションスクリプトを読み込み
		wp_enqueue_script('text-animation', get_stylesheet_directory_uri() . '/js/text-animation.js', ['anime-js'], '1.0.0', true);
		// フェードインアニメーションスクリプトを読み込み
		wp_enqueue_script('fade-in-animation', get_stylesheet_directory_uri() . '/js/fade-in-animation.js', [], '1.0.0', true);
		// FAQアコーディオンスクリプトを読み込み
		wp_enqueue_script('faq-accordion', get_stylesheet_directory_uri() . '/js/faq-accordion.js', [], '1.0.0', true);
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
