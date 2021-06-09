<?php get_header(); ?><!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <main>
        <div class="l-visual l-visual--archive c-visual--archive">
            <div class="c-visual__layer"></div>
                <h2 class="c-visual__title">Search:<br>
                <span class="c-visual__text"><?php the_search_query(); ?></span></h2>
            </div>
                <article class="l-archive-wrapper">
                    <h2 class="c-common__title c-common__title--xl">"<?php the_search_query(); ?>"を含む記事一覧</h2>
                    <?php if (! have_posts()): ?>
                        <p class="c-common__text">記事はありません</p>
                    <?php endif; ?> 
                    <ul class="l-archive-list">
                        <?php if (have_posts()):
                            while (have_posts()):
                                the_post();
                                get_template_part('excerpt');
                            endwhile;
                        endif;
                        ?><!--検索結果があればループ開始-->
                    </ul>
                </article>
                <?php humburger_pagenavi(); ?>
            </main>
        </div><!--l-colum-main-->
        <?php get_sidebar(); ?><!--sidebar.phpを読み込むテンプレートタグ（インクルードタグ）-->
    </div><!--l-colum-->
    <div class="p-nav__background"></div>
    <?php get_footer(); ?><!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->

