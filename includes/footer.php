<?php wp_enqueue_style('footer.css', get_template_directory_uri() . '/css/footer.css'); ?>
<footer class="site-footer">

	<div class="dynamic-footer">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="page-footer">
    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
