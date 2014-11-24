<?php
/*
 * Template Name: News Template
 */

get_header(); ?>

<div class="row clearfix">

    <div class="col-md-2 column subnav">

        <!-- sub nav content -->
        <ul class="list-unstyled">
        <?php dynamic_sidebar( 'News' ); ?>
</ul>
        <!-- end subnav content -->


    </div>


    <div class="col-md-8 column">



        <!-- content block1 -->
 <div class="content-welcome" >

            <h1>News Posts</h1>

            <?php

            query_posts('posts_per_page=1');
                while(have_posts()) : the_post(); ?>

             <div class="jumbotron">
                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <p><?php the_excerpt(); ?></p>

<?php echo the_post_thumbnail('large-thumb'); ?>

             </div>

                    <?php endwhile; wp_reset_query();   ?>









            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <p class="text-muted"><em><?php the_time('l, F jS, Y'); ?></em></p>
                <hr>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, there are no posts.'); ?></p>
            <?php endif; ?>

        </div>
        </div>

        <!-- end content block1 -->


        <!-- content block1 -->
        <div class="clearfix"></div>

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