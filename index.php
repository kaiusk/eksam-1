<?php
get_header();
if (have_posts()) { ?>
    <section>
        <div class="meetodid">
            <?php
            while (have_posts()) {
                the_post(); ?>
                <div class="meetod">
                    <h2><?php the_title(); ?></h2>
                    <div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="nupp">Loe edasi</a>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </section>
    <?php
}
get_footer();
?>
