<footer class="site-footer">

	<div class="dynamic-footer">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="page-footer">
    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
