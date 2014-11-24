<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Ruskin Park
 */

get_header(); ?>

<div class="row clearfix">

    <div class="col-md-2 column subnav">

        <!-- sub nav content -->
        <ul class="list-unstyled">
        <?php dynamic_sidebar( 'NavSidebar' ); ?>
</ul>
        <!-- end subnav content -->


    </div>


    <div class="col-md-8 column">



        <!-- content block1 -->
        <div class="content-welcome" >

            <p>

                <?php while ( have_posts() ) : the_post(); ?>
            
                   <?php echo the_post_thumbnail('page-img' , array( 'class' => 'img-responsive' ) ); ?>
                    <?php get_template_part( 'content', 'page' ); ?>

                    <?php
                    /*
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    */
                    ?>

                <?php endwhile; // end of the loop. ?></p>

        </div>

        <!-- end content block1 -->


        <!-- content block1 -->
        <div class="clearfix"></div>    <div class="welcome" >


        </div>

        <!-- end content block1 -->





    </div>

    <div class="col-md-2 column">

        <!-- sub nav content -->




        <a class="twitter-timeline" href="https://twitter.com/RuskinParkSE5" data-widget-id="519784934190231554">Tweets by @RuskinParkSE5</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <?php get_sidebar(); ?>

        <!-- end subnav content -->


    </div>


</div>

<?php get_footer(); ?>