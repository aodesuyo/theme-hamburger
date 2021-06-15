    <li class="c-archive-card">
        <img class="c-archive-card__visual" src=<?php echo get_the_post_thumbnail_url(); ?>>
        <div class="c-archive-card__wrapper">
            <?php the_title
                ( '<h3 class="c-common__title c-common__title--white"><a href="'.esc_url( get_permalink()).'">','</a></h3>');
            ?>
            <div class="c-archive-card__desc">
                <p class="c-common__text c-common__text--white"><?php echo get_the_excerpt(); ?></p>
            </div>
            <button class="c-archive-card__btn"><a href="<?php echo get_permalink();?>">詳しく見る</a></button>
        </div>
    </li>
