<?php
/**
 * Template Name: Contact Template
 *
 * The Contact Page of the Yestau Theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Yestau
 * @since 1.0.0
 */

get_header(); ?>



    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 medium-6 cell massive-margin">
                    <h3 class = "no-margin no-padding background-invert">Get in Touch</h3>
                    <p class = "no-padding">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad neque, voluptate! Libero molestiae nobis quas sed? Ab aut ea error est iure recusandae sed. Ducimus ipsa recusandae ut? Est, quod?</p>
                    <p class = "no-padding"><i class="far fa-envelope"></i> <span class = "no-margin no-padding">admin@charisinaction.org</span></p>
                    <p class = "no-padding"><i class="far fa-envelope"></i> <span class = "no-margin no-padding">stewartsinafrica@gmail.com</span></p>

                </div>
                <div class="small-12 medium-6 cell gray-background rounded-corners add-shadow margin-bottom add-padding tablet-massive-margin">
                    <h3 class = "no-margin no-padding background-invert">Say Something</h3>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile; else: ?>
                        <p>Sorry, no posts matched your criteria.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width margin-pull color-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 cell margin-top margin-bottom-large">
                    <h1 class = "header-margin">About Charis in Action</h1>
                    <p class = "no-padding no-margin primary-invert">We partner with, equip, and send missional servants to faithfully carry out the Great Commission. We believe the local church is the primary biblical sending organization. However, some churches and church leaders do not understand or embrace this commitment. We want to help followers of Jesus have a pathway to engage in the global mission of God.</p>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
