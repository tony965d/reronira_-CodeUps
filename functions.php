<?php
/**
 * Functions
 */

/**
 * WordPress標準機能
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support
 */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	global $home;
	$home = esc_url(home_url('/'));

	global $campaign;
  $campaign = esc_url(home_url( '/campaign' ));

	global $about;
  $about = esc_url(home_url( '/about' ));

	global $information;
  $information = esc_url(home_url( '/information' ));

	global $blog_page;
  $blog_page = esc_url(home_url( '/blog' ));

	global $voice;
  $voice = esc_url(home_url( '/voice' ));

	global $price;
  $price = esc_url(home_url( '/price' ));

	global $faq;
  $faq = esc_url(home_url( '/faq' ));

	global $contact;
  $contact = esc_url(home_url( '/contact' ));

	global $privacy;
	$privacy = esc_url(home_url( '/privacy' ));

	global $termsOfService;
	$termsOfService = esc_url(home_url( '/terms' ));

	global $SiteMap;
	$SiteMap = esc_url(home_url( '/SiteMap' ));
	
	global $category;
	$category = esc_url(home_url( '/category' ));

}
add_action( 'after_setup_theme', 'my_setup' );



/**
 * CSSとJavaScriptの読み込み
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init() {
	
	wp_enqueue_style('swiper-css', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0', 'all' );
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@500&display=swap', array(), null );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/dist/assets/css/style.css', array(), '1.0.1', 'all' );
	
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.js', array('jquery'), '1.0.1', true ); 
	wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',array('jquery'), '1.0.1',true );
	wp_enqueue_script( 'inview-js', get_template_directory_uri() . '/dist/assets/js/jquery.inview.min.js' );
	wp_enqueue_script( 'script-js', get_template_directory_uri() . '/dist/assets/js/script.js', array( 'jquery' ), '1.0.1', true );
}
add_action('wp_enqueue_scripts', 'my_script_init');


///// JavaScriptファイルを遅延読み込みする /////
function add_defer( $tag ) {
	if (is_admin()){
			return $tag; 
	}
	if ( strpos( $tag, 'jquery.js' ) ){
			return $tag;
	}
	return str_replace( 'src', 'defer src', $tag );
}
add_filter( 'script_loader_tag', 'add_defer', 10 );


/**
 * メニューの登録
 *
 * @codex https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */
// function my_menu_init() {
// 	register_nav_menus(
// 		array(
// 			'global'  => 'ヘッダーメニュー',
// 			'utility' => 'ユーティリティメニュー',
// 			'drawer'  => 'ドロワーメニュー',
// 		)
// 	);
// }
// add_action( 'init', 'my_menu_init' );
/**
 * メニューの登録
 *
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_nav_menus
 */


/**
 * ウィジェットの登録
 *
 * @codex http://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/register_sidebar
 */
	function my_widget_init() {
		register_sidebar(
			array(
				'name'          => 'サイドバー',
				'id'            => 'sidebar',
				'before_widget' => '<div id="%1$s" class="p-widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="p-widget__title">',
				'after_title'   => '</div>',
			)
		);
	}
	add_action( 'widgets_init', 'my_widget_init' );


/**
 * アーカイブタイトル書き換え
 *
 * @param string $title 書き換え前のタイトル.
 * @return string $title 書き換え後のタイトル.
 */
function my_archive_title( $title ) {

	if ( is_home() ) { /* ホームの場合 */
		$title = 'ブログ';
	} elseif ( is_category() ) { /* カテゴリーアーカイブの場合 */
		$title = '' . single_cat_title( '', false ) . '';
	} elseif ( is_tag() ) { /* タグアーカイブの場合 */
		$title = '' . single_tag_title( '', false ) . '';
	} elseif ( is_post_type_archive() ) { /* 投稿タイプのアーカイブの場合 */
		$title = '' . post_type_archive_title( '', false ) . '';
	} elseif ( is_tax() ) { /* タームアーカイブの場合 */
		$title = '' . single_term_title( '', false );
	} elseif ( is_search() ) { /* 検索結果アーカイブの場合 */
		$title = '「' . esc_html( get_query_var( 's' ) ) . '」の検索結果';
	} elseif ( is_author() ) { /* 作者アーカイブの場合 */
		$title = '' . get_the_author() . '';
	} elseif ( is_date() ) { /* 日付アーカイブの場合 */
		$title = '';
		if ( get_query_var( 'year' ) ) {
			$title .= get_query_var( 'year' ) . '年';
		}
		if ( get_query_var( 'monthnum' ) ) {
			$title .= get_query_var( 'monthnum' ) . '月';
		}
		if ( get_query_var( 'day' ) ) {
			$title .= get_query_var( 'day' ) . '日';
		}
	}
	return $title;
};
add_filter( 'get_the_archive_title', 'my_archive_title' );


/**
 * 抜粋文の文字数の変更
 *
 * @param int $length 変更前の文字数.
 * @return int $length 変更後の文字数.
 */
function my_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'my_excerpt_length', 999 );


/**
 * 抜粋文の省略記法の変更
 *
 * @param string $more 変更前の省略記法.
 * @return string $more 変更後の省略記法.
 */
function my_excerpt_more( $more ) {
	return '...';

}
add_filter( 'excerpt_more', 'my_excerpt_more' );




// // カスタム投稿タイプ【ブログ】：メインクエリの変更（アーカイブページにて表示件数を9件にする）
// function change_set_blog($query) {
// 	if ( is_admin() || ! $query->is_main_query() ){
// 		return;
// 	}
// 	if ( $query->is_post_type_archive('blog') || is_tax(['blog_category'])) {
// 		$query->set( 'posts_per_page', '9' );
// 		return;
// 	}
// }
// add_action( 'pre_get_posts', 'change_set_blog' );


function change_set_blog($query) {
	if ( is_admin() || ! $query->is_main_query() )
			return;
	if ( $query->is_post_type_archive('blog') ) { //カスタム投稿タイプを指定
			$query->set( 'posts_per_page', '10' ); //表示件数を指定
	} 
}
add_action( 'pre_get_posts', 'change_set_blog' );




// function change_set_blog($query) {
// 	if ( is_admin() || ! $query->is_main_query() )
// 			return;

// 	if ( $query->is_post_type_archive('blog') ) { //カスタム投稿タイプを指定
// 			if ( wp_is_mobile() ) {
// 					// SPの場合（767px以下の画面幅）
// 					$query->set( 'posts_per_page', 6 ); //表示件数を6件に指定
// 			} else {
// 					// PCの場合
// 					$query->set( 'posts_per_page', 10 ); //表示件数を10件に指定
// 			}
// 		}
// 	}
// add_action( 'pre_get_posts', 'change_set_blog' );




// function change_set_voice($query) {
// 	if ( is_admin() || ! $query->is_main_query() )
// 			return;
// 	if ( $query->is_post_type_archive('voice') ) { //カスタム投稿タイプを指定
// 			$query->set( 'posts_per_page', '6' ); //表示件数を指定
// 	}
// }
// add_action( 'pre_get_posts', 'change_set_voice' );



function change_set_voice($query) {
	if ((is_post_type_archive('voice') || is_tax('voice_category')) && $query->is_main_query()) {
			$query->set('posts_per_page', 6); // 6 件表示に設定。必要に応じて変更してください。
	}
}

add_action('pre_get_posts', 'change_set_voice');



// //pタグの除去

remove_filter('the_content', 'wpautop');


// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
	return false;
}


// // the_content();のpタグを除去
// function remove_ptags_from_content($content) {
// 	$content = preg_replace('/<p[^>]*>/', '', $content);
// 	$content = str_replace('</p>', '', $content);
// 	return $content;
// }
// add_filter('the_content', 'remove_ptags_from_content');



// function get_other_post_titles() {
//     $post_titles = array();

//     // ここで他の記事を取得して配列にタイトルを追加する処理を行います
//     // 例: 最新5件の投稿を取得する場合
//     $args = array(
//         'post_type' => 'post',
//         'posts_per_page' => 5,
//     );

//     $query = new WP_Query($args);

//     if ($query->have_posts()) {
//         while ($query->have_posts()) {
//             $query->the_post();
//             $post_titles[] = get_the_title();
//         }
//     }

//     wp_reset_postdata();

//     return $post_titles;
// }





//Contact Form 7 のドロップダウンメニューを動的に表示する

	//Contact Form 7 のカスタマイズ
	function filter_wpcf7_form_tag( $scanned_tag, $replace ) {
		if(!empty($scanned_tag)){
						//nameで判別
						if($scanned_tag['name'] == 'drop-menu'){
								
						//カスタム投稿タイプの取得
						global $post;
						$args = array(
						'posts_per_page' => -1, 
						'post_type' => 'post',
						'order' => 'DESC',
						);

						$customPosts = get_posts($args);
						if($customPosts){
								foreach($customPosts as $post){
										setup_postdata( $post );
										$title = get_the_title();
										
										//$scanned_tagに情報を追加
										$scanned_tag['values'][] = $title;
										$scanned_tag['labels'][] = $title;
								}
						}
						wp_reset_postdata();
						}
			}
			return $scanned_tag; 
	}; 
	//wpcf7_add_form_tag と言う関数でショートコードと実際のフォームでどのように出力するかを決めている
	add_filter( 'wpcf7_form_tag', 'filter_wpcf7_form_tag', 11, 2 );
	add_filter('protected_title_format', 'remove_protected');
	function remove_protected($title) {
			return '%s';
	}

	

// 	function wpcf7_custom_item_error_position( $items, $result ) {
//     $class = 'wpcf7-custom-item-error';
//     $names = array( 'catalog' ); // name属性を指定

//     if ( isset( $items['invalid_fields'] ) ) {
//         foreach ( $items['invalid_fields'] as $k => $v ) {
//             $orig = $v['into'];
//             $name = substr( $orig, strrpos($orig, ".") + 1 );
//             if ( in_array( $name, $names ) ) {
//                 $items['invalid_fields'][$k]['into'] = ".{$class}.{$name}";
//             }
//         }
//     }
//     return $items;
// }
// add_filter( 'wpcf7_ajax_json_echo', 'wpcf7_custom_item_error_position', 10, 2 );






//WordPress管理画面の「投稿」を任意の名前に変更する方法
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'キャンペーン';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新規追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'キャンペーン';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );




///// WPのバージョンを非表示 /////
remove_action('wp_head', 'wp_generator');

