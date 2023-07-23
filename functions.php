<?php
//ウィジェット
function my_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',     /* ←追加したいウィジェットの名前 */
        'description' => 'サイドバーウィジェット',  /* ←追加したいウィジェットの概要 */
        'id' => 'sidebar',           /* ←追加したいウィジェットのID */
        'before_widget' => '<div id="%1$s" cladd="widget %2$s">', /* ←追加したいウィジェットを囲う開始タグ */
        'after_widget' => '</div>', /* ←追加したいウィジェットを囲う閉じタグ */
        'before_title' => '<div class="widget-title">',   /* ←追加したいウィジェットのタイトルを囲う開始タグ */
        'after_title' => '</div>'    /* ←追加したいウィジェットのタイトルを囲う閉じタグ */
    ));
}
add_action('widgets_init', 'my_widgets_init');

function my_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
}
add_action("after_setup_theme", "my_setup");

function my_script_init()
{
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js", array(), "3.11.1", false);
    wp_enqueue_script("ScrollTrigger", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js", array(), "3.11.1", false);
    wp_enqueue_style("my", get_template_directory_uri() . "/assets/css/style.min.css", array(), filemtime(get_theme_file_path("assets/css/style.min.css")), "all");
    //wp_enqueue_script("swiper", "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array(), "8.4.7", true);
    wp_enqueue_script("drawer", get_template_directory_uri() . "/assets/js/drawer.min.js", array("jquery"), filemtime(get_theme_file_path("assets/js/drawer.js")), true);
    wp_enqueue_script("accord", get_template_directory_uri() . "/assets/js/accord.min.js", array("jquery"), filemtime(get_theme_file_path("assets/js/accord.js")), true);
    if (is_page('contact')) {
        wp_enqueue_script("form", get_template_directory_uri() . "/assets/js/form.min.js", array("jquery"), filemtime(get_theme_file_path("assets/js/form.js")), true);
    }
    if (is_front_page()) {
        wp_enqueue_script("scroll", get_template_directory_uri() . "/assets/js/scroll.min.js", array("jquery"), filemtime(get_theme_file_path("assets/js/scroll.js")), true);
        wp_enqueue_script("loading", get_template_directory_uri() . "/assets/js/loading.min.js", array("jquery"), filemtime(get_theme_file_path("assets/js/loading.js")), true);
    }
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_menu_init()
{
    register_nav_menus(
        array(
            "global" => "ヘッダーメニュー",
            "drawer" => "ドロワーメニュー"
            // "footer" => "フッターメニュー"
        )
    );
}
add_action("init", "my_menu_init");

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
    return false;
}

/**
 * アーカイブタイトル書き換え
 */
function my_archive_title($title)
{

    if (is_category()) { // カテゴリーアーカイブの場合
        $title = single_cat_title('', false);
    } elseif (is_tag()) { // タグアーカイブの場合
        $title = single_tag_title('', false);
    } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
        $title = post_type_archive_title('', false);
    } elseif (is_tax()) { // タームアーカイブの場合
        $title = single_term_title('', false);
    } elseif (is_author()) { // 作者アーカイブの場合
        $title = get_the_author();
    } elseif (is_date()) { // 日付アーカイブの場合
        $title = '';
        if (get_query_var('year')) {
            $title .= get_query_var('year') . '年';
        }
        if (get_query_var('monthnum')) {
            $title .= get_query_var('monthnum') . '月';
        }
        if (get_query_var('day')) {
            $title .= get_query_var('day') . '日';
        }
    }
    return $title;
};
add_filter('get_the_archive_title', 'my_archive_title');

function my_the_post_category($anchor = true)
{
    $category = get_the_category();
    if ($category[0]) {
        if ($anchor) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
        } else {
            echo $category[0]->cat_name;
        }
    }
}

function my_get_tag_items($id = 0)
{
    global $post;

    if ($id == 0) {
        $id = $post->ID;
    }

    $post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            echo '<div class="entry-tag-item"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div>';
        }
    }
}

/**
 * 検索結果から固定ページを除外する
 */
function my_posts_search($search, $wp_query)
{

    // 検索結果ページ・メインクエリ・管理画面以外の3つの条件が揃った場合
    if ($wp_query->is_search() && $wp_query->is_main_query() && !is_admin()) {

        // 検索結果を投稿タイプに絞る
        $search .= " AND post_type = 'post' ";

        return $search;
    }

    return $search;
}
add_filter('posts_search', 'my_posts_search', 10, 2);

function my_shortcode($attrs, $content = '')
{
    return '<div class="entry-btn"><a class="btn" href="' . $attrs['link'] . '">' . $content . '</a></div>';
}

add_shortcode('btn', 'my_shortcode');

function my_searchform_shortcode($attrs, $content = '')
{
    return get_search_form(false);
}

add_shortcode('search_form', 'my_searchform_shortcode');

add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes($existing_mimes = array())
{
    $existing_mimes['ico'] = 'images/ico';
    return $existing_mimes;
}
/*
// Breacrumb navXT のトップページの表記を書き換える
add_filter('bcn_breadcrumb_title', 'nskw_bcn_breadcrumb_title_filter', 10, 2);
function nskw_bcn_breadcrumb_title_filter($title, $type = null)
{
    if ('home' === $type[0]) {
        $title = 'ホーム';
    }
    return $title;
}

// Contact Form7の送信ボタンをクリックした後の遷移先設定
add_action('wp_footer', 'add_origin_thanks_page');
function add_origin_thanks_page()
{
    $contact = home_url('/contact/thanks/');
    $download = home_url('/download/thanks/');
    echo <<< EOC
     <script>
       var thanksPage = {
         65: '{$contact}',
         5: '{$download}',
       };
     document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = thanksPage[event.detail.contactFormId];
     }, false );
     </script>
     EOC;
}

//$_SESSIONを使える様にする
function init_sessions()
{
    if (!session_id()) {
        session_start();
    }
}
add_action('init', 'init_sessions');
*/