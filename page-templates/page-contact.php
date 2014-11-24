<?php
/*
 * Template Name: Contact us Sections Template
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

        <div class="welcome" >
                    <?php get_template_part( 'content', 'page' ); ?>
</div>
                    <?php
                    /*
                    // If comments are open or we have at least one comment, load up the comment template
                        comments_template();
                    endif;
                    */
                    ?>

                <?php endwhile; // end of the loop. ?></p>

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