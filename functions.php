<?php
/**
 * Class as namespace
 */
class NCTUPO {
	// 佈景主題的選單功能
	public static function po_register_nav_menu() {
		register_nav_menu('top', __('Main menu', 'nctu_po'));
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
			get_template_directory_uri() . '/css/style.css',
		);
	}
	public static function po_enqueue_theme_script() {
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
			get_template_directory_uri() . '/css/guten-sidebar.css',
		);
	}
    public static function sidebar_enqueue_script() {
		wp_enqueue_style('po-guten-sidebar.css');
        wp_enqueue_script('po-guten-sidebar.js');
    }
}

add_action('init', ['NCTUPO', 'po_register_nav_menu']);

add_action('init', ['NCTUPO', 'po_register_theme_script']);
add_action('wp_enqueue_scripts', ['NCTUPO','po_enqueue_theme_script']);

add_action('init', ['NCTUPO', 'po_register_meta']);
add_action('init', ['NCTUPO', 'sidebar_register']);
add_action('enqueue_block_editor_assets', ['NCTUPO', 'sidebar_enqueue_script']);
?>
