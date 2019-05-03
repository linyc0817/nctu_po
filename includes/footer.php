<footer class="site-footer">
    <div id="footer-menu-container" class="footer-menu-container">
    <?php
    require_once('NCTUPO_Bottom_Menu_Walker.php');
    wp_nav_menu( array(
        'menu' => 'footer-navbar',
        'theme_location' => 'bottom',
        'walker' => new NCTUPO_Bottom_Menu_Walker(),
        'container' => 'nav',
        'container_class' => 'footer-menu'
    ));
    ?>
    </div>
    <div class="footer-nav-btn">
        <div class="footer-nav-title">網頁導覽</div>
    </div>
    <!--
    <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    -->
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
