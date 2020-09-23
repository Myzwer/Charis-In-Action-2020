<?php
/**
 * Template Name: Donate Template
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 *
 * @package WordPress
 * @subpackage Charis
 * @since 1.0.0
 */

get_header(); ?>

    <div class="grid-container full-width">
        <div class="grid-x grid-padding-x full-background hero" style =
        "background: linear-gradient(
      rgba(0, 0, 0, 0.45),
      rgba(0, 0, 0, 0.45)
    ),
    url(https://images.unsplash.com/photo-1547471080-7cc2caa01a7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2551&q=80);
        background-position: center center;">
            <div class="large-12 cell">
                <div class="content-middle content-middle-hero">
                    <h1 class = "center" >Make a Difference</h1>
                    <hr>
                    <h2 class = "page-tagline">Engage the World, Embrace the Kingdom, Empower the People</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="large-12 cell margin-pull featured-background">
                    <h3>How Can I Help?</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias atque eum perspiciatis placeat quisquam. Aliquam fugiat illo illum iure labore laudantium nostrum numquam reiciendis repellendus saepe, similique, velit vero voluptatum?</p>
                    <div class="center">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php get_footer();