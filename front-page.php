<?php get_header(); ?>



<div class="row clearfix">

    <div class="col-md-2 column">

        <!-- sub nav content -->


        <!-- end subnav content -->


    </div>


    <div class="col-md-8 column">



<div class="home-carousel visible-lg visible-md">
<?php echo do_shortcode('[image-carousel]'); ?>
</div>

        <!-- content block1 -->
        <div class="clearfix"></div>

        <div class="welcome" >

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



                <?php the_content(); ?>

            <?php endwhile; else: ?>



                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div>

        <!-- end content block1 -->





    </div>

    <div class="col-md-2 column">

        <!-- sub nav content -->

        <a href="http://www.greenflagaward.org.uk" target="_blank"> <img src="img/layout/green_flag_award_logo.png" class="img-responsive ruskin-banner" ></a>


        <a class="twitter-timeline" href="https://twitter.com/RuskinParkSE5" data-widget-id="519784934190231554">Tweets by @RuskinParkSE5</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

       <?php dynamic_sidebar( 'Sidebar' ); ?>

        <!-- end subnav content -->


    </div>


</div>


<?php get_footer(); ?>