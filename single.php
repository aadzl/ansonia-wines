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
        
        <div class="row clearfix">
            <div class="span12" id="article-banner">
                <img src="<?php echo get_post_meta( $post->ID, 'full_banner', True ); ?>" />
            </div>
        </div>

        <div class="row">
            <div class="span6 offset3" id="header-meta">
                <h1 class="title"><?php the_title(); ?></h1>
                <h3 class="subtitle">This is the type of wine.</h3>
                <ul id="sharing">
                    <li>
                        <a href="#" id="purchase-link">purchase: $42</a>
                    </li>
                    <li>
                         <!--or share:-->&nbsp;
                    </li>
                    <li>
                         <!--or share:-->&nbsp;
                    </li>
                    <li>
                        <a href="https://twitter.com/intent/tweet/?url=<?php echo urlencode( get_permalink($post->ID) ); ?>&text=<?php echo urlencode( the_title("", "", False) ); ?>&via=ansoniawines" target="_blank">
                            <img src="/wp-content/themes/_s/img/twitter.png" id="twitter-icon" />
                        </a>
                    </li>
                    <li>
                        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                            <img src="/wp-content/themes/_s/img/facebook.png"  id="facebook-icon" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="span6 offset1">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
                <div id="footer-meta">
                    Posted <?php the_time('l') ?>
                    <?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
                </div>
            </div>
            <div class="span3 offset1">
                <?php get_sidebar(); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>