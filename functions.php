<?php
/**
 * Class as namespace
 */
class NCTUPO {
    // 佈景主題自訂背景功能
    // 更改預設套在body的class，改為任何有.nctupo-bg class的元素
    public static function custom_background_cb() {
        $bg = set_url_scheme( get_background_image() );
?>
        <style>
        .nctupo-bg { 
            background-image: url(<?php echo $bg; ?>); 
            background-repeat: no-repeat;
            background-size: cover;
        }
        </style>
<?php
    }
    // 佈景主題的選單
    public static function po_register_nav_menu() {
        register_nav_menu('top', __('Main menu', 'nctu_po'));
        register_nav_menu('bottom', __('Bottom menu', 'nctu_po'));
    }
    // 佈景主題所使用的script和stylesheet
    // wp_enqueue_style 和 wp_enqueue_script裡使用wp_register裡註冊的名稱
    // PS: wordpress內建jquery，基本上不需要自己include，
    // 只要標示為dependency即可
    public static function po_register_theme_script() {
        wp_register_script(
            'po-global-script.js',
            get_template_directory_uri() . '/js/script.js',
            array('jquery')
        );
        wp_register_style(
            'po-global-style.css',
            get_template_directory_uri() . '/css/dist/style.css'
        );
    }
    public static function po_enqueue_theme_script() {
        wp_enqueue_style('dashicons');
        wp_enqueue_style('po-global-style.css');
        wp_enqueue_script('po-global-script.js');
    }

    // 頁面的post meta以及其使用的編輯界面相關script
    public static function po_register_meta() {
        register_meta('post', 'app-name', array(
            'object_subtype' => 'page',
            'type' => 'string',
            'description' => '',
            'single' => true,
            'show_in_rest' => true
        ));
    }
    public static function sidebar_register() {
        wp_register_script(
            'po-guten-sidebar.js',
            get_template_directory_uri() . '/js/guten-sidebar.js',
            array( 'wp-plugins', 'wp-edit-post', 'wp-element', 'wp-data' )
        );
        wp_register_style(
            'po-guten-sidebar.css',
            get_template_directory_uri() . '/css/dist/guten-sidebar.css'
        );
    }
    public static function sidebar_enqueue_script() {
        wp_enqueue_style('po-guten-sidebar.css');
        wp_enqueue_script('po-guten-sidebar.js');
    }
    public static function run() {
        // 頁面主題圖片功能
        add_theme_support('post-thumbnails', array('page'));
        set_post_thumbnail_size( 75, 75 );
        // 自訂背景
        add_theme_support('custom-background', array(
            'default-image' => get_template_directory_uri() . '/image/background.jpg',
            'wp-head-callback' => [self::class, 'custom_background_cb']
        ));

        add_action('init', [self::class, 'po_register_nav_menu']);

        add_action('init', [self::class, 'po_register_theme_script']);
        add_action('wp_enqueue_scripts', [self::class,'po_enqueue_theme_script']);

        add_action('init', [self::class, 'po_register_meta']);
        add_action('init', [self::class, 'sidebar_register']);
        add_action('enqueue_block_editor_assets', [self::class, 'sidebar_enqueue_script']);
    }
}

NCTUPO::run();

?>
