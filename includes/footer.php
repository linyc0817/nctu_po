<footer class="site-footer">
    <div class="page-footer">
        <div id="footer-menu-container" class="footer-menu-container">
            <?php
            wp_nav_menu( array(
                'menu' => 'footer-navbar',
                'theme_location' => 'bottom',
                'container' => 'nav',
                'container_class' => 'footer-navbar-menu'
            ));
            ?>
        </div>
        <div class="footer-nav-btn">
            <div class="footer-nav-title">網頁導覽</div>
        </div>
        <!--
        <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
        -->
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
