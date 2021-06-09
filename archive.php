<?php get_header(); ?><!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <main>
        <div class="l-visual l-visual--archive c-visual--archive">
            <div class="c-visual__layer"></div>
                <?php the_archive_title( '<h2 class="c-visual__title">', '</span></h2>' ) ?>
            </div>  
                <article class="l-archive-wrapper">
                    <div class="c-common__text">
                        <?php echo category_description(); ?>
                    </div>
                    <ul class="l-archive-list">
                        <?php
                        if(have_posts()):
                        while(have_posts()):
                            the_post();
                            get_template_part('excerpt'); 
                        endwhile;
                        else:
                            echo '<p class="c-common__text">記事はありません</p>';
                        endif;
                        ?><!--カテゴリに記事があればループ開始、なければ記事はありませんと返す-->
                    </ul>
                </article>
                <?php humburger_pagenavi(); ?>
            </main>
        </div><!--l-colum-main-->
        <?php get_sidebar(); ?><!--sidebar.phpを読み込むテンプレートタグ（インクルードタグ）-->
    </div><!--l-colum-->
    <div class="p-nav__background"></div>
<?php get_footer(); ?><!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->
