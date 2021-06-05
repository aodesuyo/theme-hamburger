<footer class="l-footer p-footer">
    <?php wp_nav_menu( array(
            'theme_location'=>'footerMenu',
            'container' => 'false',
            'items_wrap' => '<ul class="p-footer__category">%3$s</ul>',
            'menu_class'=>'p-footer__category'
        )
        );
    ?>
    <?php dynamic_sidebar( 'footer_widget' ); ?>
    </footer>
    <script src="script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>