<?php get_header(); ?><!--header.phpを読み込むテンプレートタグ（インクルードタグ）-->
    <main>    
        <?php while (have_posts()):
        the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <div class="l-visual l-visual--single c-visual--single c-visual--page" style="background-image: url( '<?php echo $thumbnail_url; ?>' );">
            <?php the_title('<h1 class="c-visual__title">','</h1>'); ?>
        </div>
            <article class="l-post-wrapper c-post">
                <?php the_content() ?>
            </article>
            <?php endwhile;?>
            </div>
        </main>
        </div><!--l-colum-main-->
    <?php get_sidebar(); ?><!--sidebar.phpを読み込むテンプレートタグ（インクルードタグ）-->
</div><!--l-colum-->
    <div class="p-nav__background"></div>
<?php get_footer(); ?><!--footer.phpを読み込むテンプレートタグ（インクルードタグ）-->