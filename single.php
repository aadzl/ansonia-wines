<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <div class="row">
            <div class="col-lg-6 col-lg-offset-1">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <img src="<?php echo get_post_meta( $post->ID, 'full_banner', True ); ?>" class="img-responsive"/>
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div id="byline">
                        <?php the_time('l, F j, Y') ?>
                    </div>
                    <?php the_content(); ?>
                </article>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar('post'); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>