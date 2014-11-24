        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="../../favicon.ico">

           <!--  <title><?php wp_title( '|', true, 'right' ); ?></title> -->

            <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>

            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


            <!-- Bootstrap core CSS -->
            <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>


            <script type="text/javascript" src="<?php get_template_directory(); ?>js/bootstrap.min.js"></script>



            <script type="text/javascript" src="js/scripts.js"></script>
            <link href="css/styles.css" rel="stylesheet">
            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

            <style title="text/css">



            </style>

            <?php wp_head(); ?>

        </head>

        <body <?php body_class(); ?>>
        <div class="greenbar"></div>
        <div class="container">
        
<!-- search form -->        
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="searchinput" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
    <!-- end search -->    
            
                    <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar" role="navigation" id="nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><div><span class="visible-xs">Ruskin Park</span><div class="sprite_logo" id="ruskenlogo"></div></div></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">

                          <!--  <?php wp_list_pages(array('title_li' => '')); ?>  -->

                          <!--
                            <li><a  class="icon leaf" href="about-us.html">About us</a></li>
                            <li ><a class="icon leaf-curvy" href="about-the-park.html">About the park</a></li>
                            <li><a   class="icon leaf-funny" href="whats-on.html">What's on</a></li>
                            <li><a   class="icon leaf-herb" href="news.html">News</a></li>
                            <li><a  class="icon leaf-oval" href="gallery.html">Gallery</a></li>
                            <li><a   class="icon leaf-thin" href="become-a-friend.html">Become a friend</a></li>
                            <li><a   class="icon leaf-thin-right" href="our-ther-friends.html">Our other friends</a></li>
                            <li><a href="contacts.html">Contacts</a></li>

                          
 -->

                            <li><a class="icon leaf <?php if ( is_page('1753')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1753">About us</a></li>
                              <li><a  class="icon leaf-thin <?php if ( is_page('1761')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1761">Join the friends</a></li>
                                  
                                  
                                   <li><a  class="icon leaf-herb <?php if ( is_page('2220')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=2220">News</a></li>
                                   
                              
                            <li><a  class="icon leaf-curvy <?php if ( is_page('1755')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1755">About the park</a></li>
                            
                            
                            <li><a  class="icon leaf-funny <?php if ( is_page('1757')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1757">What&#8217;s on</a></li>
                            
                       
                            
                            <li><a  class="icon leaf-oval <?php if ( is_page('1787')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1787">Gallery</a></li>
                            
                            
                                  <li><a  class="page_item page-item-1767 <?php if ( is_page('1767')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1767">Contacts</a></li>
                                  
                            
                            <li><a  class="icon leaf-thin-right <?php if ( is_page('1763')) { echo ' current_page_item'; } ?>" href="http://54.69.191.156/forp/?page_id=1763">Our other friends</a></li>
                            
                            
                    

                        </ul>
                         
    
                        
                        
                    </div><!--/.navbar-collapse -->
                </div>
            </div>
        </div> <!-- end container nav -->

        <!-- Begin page content -->
        <div class="container">