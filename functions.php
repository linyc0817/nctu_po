<?php
function template_is($pageName='') {
    return is_page_template('page-templates/template-'.$pageName.'.php');
}
register_nav_menu('top-navbar', __('Main menu', 'bst'));
/**
 * Class as namespace
 */
class NCTUPO {
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

add_action('init', ['NCTUPO', 'po_register_meta']);
add_action('init', ['NCTUPO', 'sidebar_register']);
add_action('enqueue_block_editor_assets', ['NCTUPO', 'sidebar_enqueue_script']);
?>
