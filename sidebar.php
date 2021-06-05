<nav class="l-colum-nav p-nav">
<button class="p-nav__btn">×</button>
    <h2 class=p-nav__title>Menu</h2>
    <?php  wp_nav_menu( array(
        'theme_location'=>'sidebar',
        'container' => 'false',
        'items_wrap' => '<ul class="c-nav__menu">%3$s</ul>',
        'menu_class'=>'c-nav__menu'
        )
    );?>
</nav>
