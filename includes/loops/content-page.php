<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div id="app-root">
        Failed to load the page.
    </div>
    <?php
    $page_id = get_the_ID();
    $app_name = get_post_meta($page_id, 'app-name', true);
    wp_enqueue_script('app.js', get_template_directory_uri() . '/js/dist/' . $app_name . '.build.js');
    ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
