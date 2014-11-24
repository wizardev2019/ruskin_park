 <?php /* Template name: Custom Archives */ ?>
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
   <?php dynamic_sidebar( 'News' ); ?>
</ul>




        <ul class="nav nav-pills nav-stacked">
            <?php // wp_list_categories('orderby=name');   ?>
        </ul>








        <!-- end subnav content -->


    </div>


    <div class="col-md-8 column">



        <!-- content block1 -->
        <div class="content-welcome" >
	<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>
           
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

        <?php //get_sidebar(); ?>
   <?php dynamic_sidebar( 'Sidebar' ); ?>
        <!-- end subnav content -->
      <iframe allowtransparency="true" src="http://www.facebook.com/connect/connect.php?id=65693507237&amp;connections=0&amp;stream=1" style="border: none; width: 220px; height: 380px;" frameborder="1" scrolling="no"></iframe>

    </div>


</div>

<?php get_footer(); ?>