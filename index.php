<?php
get_header();
?>
    <main>
        <section>
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="people">
                        <div class="photo">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <div class="job"><?php echo get_post_meta(get_the_ID(), 'ametinimetus', true); ?></div>
                        <?php the_content(); ?>
                        <div class="email"><?php echo get_post_meta(get_the_ID(), 'email', true); ?></div>
                    </div>
                <?php }
            }
            ?>
        </section>
    </main>
<?php
get_footer();