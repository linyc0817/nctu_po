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
}

add_action('init', ['NCTUPO', 'po_register_meta']);
?>
