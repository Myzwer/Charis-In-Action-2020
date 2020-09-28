<?php
/**
 * Template Name: Blog
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

    <div class="gray-background full-width">
        <div class="grid-container">
            <div class="small-12 center cell background-invert">
                <h4 class = "hero-small-font no-margin no-padding large-padding-mobile background-invert">We are</h4>
                <h1 class = " no-margin no-padding background-invert">Charis in Action</h1>
                <p class = "no-margin add-padding italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi consequatur dignissimos distinctio doloribus minima molestias necessitatibus nulla. Aliquam consectetur eum exercitationem, fugit ipsam ipsum nobis provident ratione sint sunt!</p>
            </div>
        </div>
    </div>

    <div class="full-width margin-top main-background">
        <div class="grid-container">
            <div class="grid-x featured-background featured-blog-card">
                <div class="small-12 medium-6 cell">
                    <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2248&q=80" alt="">
                    </div>
                <div class="small-12 medium-6 cell">
                    <h3>Blog Post Title</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc volutpat leo dignissim, rhoncus lacus vitae, hendrerit magna. Fusce aliquam finibus</p>
                    <button class="btn btn-v1 center">Read More >></button>
                </div>
            </div>
        </div>
    </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 cell center">
                    <h2 class = "background-invert margin-top">Recent Posts</h2>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-container blog-background">
        <div class="grid-x grid-padding-x">
            <?php
            if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            echo "<div class='small-12 medium-6 large-4 cell'>";
            ?>

            <div class = 'blog-card'>
                <a href = "<?php the_permalink(); ?>">


                    <?php
                    echo "<div class = 'card-thumbnail'>";
                    the_post_thumbnail();
                    echo "</div>";

                    echo "<div class='card-cat'>";

                    the_tags('', ', ', '<br />');

                    echo "</div>";

                    echo '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';

                    the_excerpt( '<p class = "blog-excerpt">', '</p>' );


                    echo "<div class = 'card-details'>";

                    echo "<span class='card-name'>";
                    the_author();
                    echo "</span>";
                    echo " | ";

                    echo "<span class='card-date'>";
                    echo get_the_date();
                    echo "</span>";


                    echo "</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    endwhile;
                    else:
                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                    endif;  ?>



            </div>
        </div>

    <div class="full-width main-background">
        <div class = "grid-container">
            <div class="grid-x grid-padding-x grid-margin-x">
                <div class="small-12 cell center">
                    <?php wpbeginner_numeric_posts_nav(); ?>
                </div>
            </div>
        </div>
    </div>









    </div>







<?php get_footer();
