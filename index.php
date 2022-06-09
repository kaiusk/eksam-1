<?php
get_header();
?>
    <main>
        <section>
            <div class="wrap">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <div class="item">
                            <div class="tootaja">
                                <div class="pilt">
                                    <?php echo get_the_post_thumbnail(); ?>
                                </div>
                                <h2><?php the_title(); ?></h2>
                                <div class="amet"><?php echo get_post_meta(get_the_ID(), 'amet', true); ?></div>
                                <?php the_content(); ?>
                                <div class="email"><a
                                            href="<?php echo get_post_meta(get_the_ID(), 'email', true); ?>"><?php echo get_post_meta(get_the_ID(), 'kontakt', true); ?></a>
                                </div>
                            </div>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </section>
    </main>
<?php
get_footer();