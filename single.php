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
        <? //php dynamic_sidebar( 'News' ); ?>
        <li><a href="#" onclick="history.go(-1);return false;">[Go Back]</a></li>
</ul>

       <br/>
       
       
<!--
        Recent posts
        <ul class="nav nav-pills nav-stacked">
            <?php // query_posts('posts_per_page=8');  while ( have_posts() ) : the_post();  ?>
               <a href="<?//php the_permalink(); ?>"><?//php the_title(); ?></a>
            <?//php endwhile; wp_reset_query();   ?>

        </ul>
-->

        <!-- end subnav content -->


    </div>


    <div class="col-md-8 column">



        <!-- content block1 -->
        <div class="content-welcome" >

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <p><em><?php the_time('l, F jS, Y'); ?></em></p>

                <?php the_content(); ?>

                <hr>
                <?php // comments_template(); ?>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

        </div>

        <!-- end content block1 -->


        <!-- content block1 -->
        <div class="clearfix"></div>    <div class="extra-content" >


        </div>

        <!-- end content block1 -->





    </div>

    <div class="col-md-2 column">

        <!-- sub nav content -->

    <a href="http://www.greenflagaward.org.uk" target="_blank"> <img src="img/layout/green_flag_award_logo.png" class="img-responsive ruskin-banner" ></a>


        <a class="twitter-timeline" href="https://twitter.com/RuskinParkSE5" data-widget-id="519784934190231554">Tweets by @RuskinParkSE5</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

        <?php get_sidebar(); ?>

        <!-- end subnav content -->


    </div>


</div>

<?php get_footer(); ?>