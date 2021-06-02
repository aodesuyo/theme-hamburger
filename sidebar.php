<nav class="l-colum-nav p-nav">
<button class="p-nav__btn">×</button>
    <?php if(has_nav_menu( 'sidebar' ){
         
        wp_nav_menu( array(
            'theme_location'=>'sidebar',
            'menu_class'=>'c-nav__menu'
        )
        )});
        ?>
            <!-- <h2 class=p-nav__title>Menu</h2>
            <dl class="c-nav__menu">
                <dt class="c-nav__menu-title">バーガー</dt>
                <dd class="c-nav__menu-item">ハンバーガー</dd>
                <dd class="c-nav__menu-item">チーズバーガー</dd>
                <dd class="c-nav__menu-item">テリヤキバーガー</dd>
                <dd class="c-nav__menu-item">アボカドバーガー</dd>
                <dd class="c-nav__menu-item">フィッシュバーガー</dd>
                <dd class="c-nav__menu-item">ベーコンバーガー</dd>
                <dd class="c-nav__menu-item">チキンバーガー</dd>
            </dl>
            <dl class="c-nav__menu">
                <dt class="c-nav__menu-title">サイド</dt>
                <dd class="c-nav__menu-item">ポテト</dd>
                <dd class="c-nav__menu-item">サラダ</dd>
                <dd class="c-nav__menu-item">ナゲット</dd>
                <dd class="c-nav__menu-item">コーン</dd>
            </dl>
            <dl class="c-nav__menu">
                <dt class="c-nav__menu-title">ドリンク</dt>
                <dd class="c-nav__menu-item">コーラ</dd>
                <dd class="c-nav__menu-item">ファンタ</dd>
                <dd class="c-nav__menu-item">オレンジ</dd>
                <dd class="c-nav__menu-item">アップル</dd>
                <dd class="c-nav__menu-item">紅茶（Ice/Hot）</dd>
                <dd class="c-nav__menu-item">コーヒー（Ice/Hot）</dd>
            </dl> -->
</nav>
