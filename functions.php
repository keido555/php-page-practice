<?php
//カスタムメニュー
register_nav_menus( //メニュー機能をオンにする
array(
'place_global' => 'グローバル', //“メニュー英語名” =>”メニュー名”,
'place_utility' => 'ユーティリティ',
'place_sidebar' => 'サイドメニュー',
'place_footer' => 'フッター',
)
);

/*
function my_method() {
	wp_enqueue_script(
		'myscript',
		get_template_directory_uri() . '/js/wow.min.js',
		array(),
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'my_method');

function my_scripts_method() {
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/js/script.js',
		array(),
		false,
		true
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
*/

add_theme_support('post-thumbnails');
add_image_size('thumbside', 85, 85, true);


?>