<?php

/**
 * Template Name: Blog Template
 * 
 */
?>

<?php
$blog_query_args = array(
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'post_per_page' => 3,
    'paged'         => get_query_var('paged')
);

$blog_query = new WP_Query($blog_query_args);
?>

<?php get_header(); ?>

<?php if ($blog_query->have_posts()) : ?>

    <div class="intro row">
        <div class="overlay"></div>
        <div class="col-sm-6 col-sm-offset-6">
            <h2 class="header-quote">Save time and lower</h2>
            <p>
                Your sweeping costs with the
            </p>
            <h1 class="header-title">Robot<br><span class="thin">Factory</span></h1>
        </div>
    </div> <!-- /.intro.row -->
    </div> <!-- /.container -->
    <div class="nutral"></div>
    </section> <!-- /#header -->

    <section id="product" class="product">
        <div class="container section-bg">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box">
                        <h2 class="title"><?php _e('Blog', 'softuni') ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                    <?php get_template_part('partials/content', 'blog') ?>
                <?php endwhile; ?>
            </div>
        </div>
        </div>
    </section>
    <div class="center">
        <?php
        $GLOBALS['wp_query'] = $blog_query;
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('Back', 'softuni'),
            'next_text' => __('Onward', 'softuni'),
        ));
        ?>
    </div>
<?php endif ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>