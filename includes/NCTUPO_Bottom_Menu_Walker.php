<?php
class NCTUPO_Bottom_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth=0, $args=array()) {
    }
    function start_el(&$output, $item, $depth=0, $args=array(), $id=0) {
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        $title_sections = explode('|', $item->title, 3);
        while(count($title_sections) < 3)array_push($title_sections, '');

        // 關於item的內容：
        // https://www.ibenic.com/understanding-wordpress-menu-items/
        $thumbnail = get_the_post_thumbnail($item->object_id, 'post-thumbnail');
        $output .= '<li class="' . $class_names . '">';
        $output .= '<div class="item-content-wrapper">';

        $output .= '<div class="thumbnail-wrapper">' . $thumbnail . '</div>';
        $output .= '<div class="item-title">' . $title_sections[0] 
            . '<br />' . $title_sections[1] . '</div>';
        $output .= '<div class="item-description">' . $title_sections[2] . '</div>';

        $output .= '</div>';
    }
}
?>
