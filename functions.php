<? 
// テーマディレクトリのパス
define("DIR", get_template_directory_uri());



//ファイルの読み込みに関する記述をまとめた関数
function add_files(){
    wp_enqueue_style('style', DIR.'/assets/css/style.css', false, "5");
    wp_enqueue_script('script', DIR.'/assets/js/script.js',  false, "2", true);

    // 郵便番号から住所を取得する
    if(is_page('mail')){
        wp_enqueue_script('ajaxzip_main', 'https://ajaxzip3.github.io/ajaxzip3.js',  false, "1", true);
        wp_enqueue_script('ajaxzip_sub', DIR.'/assets/js/ajaxzip.js',  false, "1", true);
    }
}
add_action('wp_enqueue_scripts', 'add_files');




// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');



// リンクの定義
define("link_about", esc_url(home_url('about'))); // 会社概要
define("link_blog_list", esc_url(home_url('blog_list'))); // ブログ
define("link_faq", esc_url(home_url('faq'))); // よくある質問
define("link_flow", esc_url(home_url('flow'))); // 制作の流れ
define("link_mail", esc_url(home_url('mail'))); // お問い合わせ
define("link_map", esc_url(home_url('map'))); // サイトマップ
define("link_news", esc_url(home_url('news'))); // 更新情報
define("link_policy", esc_url(home_url('policy'))); // プライバシーポリシー
define("link_price", esc_url(home_url('price'))); // 料金表
define("link_reason", esc_url(home_url('reason'))); // 選ばれる理由
define("link_service", esc_url(home_url('service'))); // サービス案内
define("link_voice", esc_url(home_url('voice'))); // お客様の声
define("link_work", esc_url(home_url('work'))); // 実績
define("link_seo", esc_url(home_url('seo'))); // SEOコンサル



// サイドバーのウィジェット
function sidebar_widget(){
    register_sidebar( array(
        'name' => 'サイドバー',
        'id' => 'sidebar_area',
        'before_widget' => '<div class="sidebar__content">',
        'after_widget' => '</div>',
        'before_title' => '<p class="sidebar__title">',
        'after_title' => '</p>'
    ));
}
add_action('widgets_init','sidebar_widget');