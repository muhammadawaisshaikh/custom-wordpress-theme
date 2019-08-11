<?php
/**
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/* We add some JavaScript to pages with the comment form
* to support sites with threaded comments (when in use).
*/
if ( is_singular() && get_option( 'thread_comments' ) )
wp_enqueue_script( 'comment-reply' );
global $options;global $logo;global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$favicon = $options['favicon'];
$copyright = $options['copyright'];
$twitter_link = $options['twitter_link'];
$facebook_link = $options['facebook_link'];
$googleplus_link = $options['googleplus_link'];
$rss_link = $options['rss_link'];
$email_link = $options['email_link'];
$phone_num = $options['phone_num'];
$fax_num = $options['fax_num'];
$email = $options['email'];
$flicker_link = $options['flicker_link'];
$header_caption = $options['header_caption'];
$linkedin = $options['linkedin'];
$youtube = $options['youtube'];
$size = 334;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false); 
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
$sizefavicon = 32;
		$options['favicon'] = wp_get_attachment_image($favicon, array($sizefavicon, $sizefavicon), false);
		$att_img = wp_get_attachment_image($favicon, array($sizefavicon, $sizefavicon), false); 
		$faviconSrc = wp_get_attachment_url($favicon);
		$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	 
	 
	 
wp_head();
?>


</head>

<div class="clear" style="clear:both"></div>

<body <?php body_class(); ?>>

<!-- -----------------------Push Responsive Menu   ---------------------- -->

<pushmenu>
<a id="hamburg" href="#"><div class="nav-cross">
  <span></span>
  <span></span>
  <span></span>
</div></a>
<div id="menuoverlay"></div>
<nav class="nav1">
          <div class="container">
          <div class="row">
          <formobile>
           <div class="push-logo"><?php echo $options['logo']; ?> </div>
          <div class="search-nav"><form method="get" id="searchform"   action="<?php bloginfo('url'); ?>/">
          <input type="submit" id="searchsubmit" value="Search" />
          <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search" />
        </form></div>
       
        </formobile>
   <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
   </div></div>
</nav>
</pushmenu>

<!-- -----------------------Push Responsive Menu   ---------------------- -->

<main>


<header>
  <div class="container">
    <div class="row">
    
<!-- -----------------------Logo  ---------------------- -->    
      <logo>
        <div class="col-md-3 padleft logo"> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo $options['logo']; ?> </a> </div>
      </logo>
 
<socialicons>
<div class="col-md-2 social_icons pull-right nopad">
<ul>
<li> <a href="<?php echo $options['facebook']; ?>" target="_blank"><i class="fa fa-facebook-official" ></i></a></li>
<li><a href="<?php echo $options['twitter']; ?>" target="_blank"> <i class="fa fa-twitter" ></i></a></li>
<li> <a href="<?php echo $options['googleplus']; ?>" target="_blank"> <i class="fa fa-google-plus" ></i></a></li>
<li> <a href="<?php echo $options['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play" ></i></a></li>
</ul>
</div>
</socialicons> 
 
<!-- -----------------------Search   ---------------------- -->      
      <search>
        <div class="col-md-9 searchform">
          <div class="row">
            <form method="get" id="searchform"   action="<?php bloginfo('url'); ?>/">
              <input type="submit" id="searchsubmit" value="Search" />
              <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search" />
            </form>
          </div>
        </div>
      </search>
<!-- -----------------------End Search  ---------------------- -->      
      
    </div>
  </div>
</header>

<!-- -----------------------Simple Navigation   ---------------------- -->
<nav class="nav">
  <div class="container">
    <div class="row">
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      
      <!-- -----------------------Search Toggle ---------------------- -->

<searchtoggle>
<div class="searchtoggle"><img src="<?php bloginfo('stylesheet_directory') ?>/images/search-icon.png" alt=""></div>
<div class="searchpanel">
<form method="get" id="searchform"  class="searchform"  action="<?php bloginfo('url'); ?>/">
    <input type="submit" id="searchsubmit" value="Search" />
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search" />
</form>
</div>
</searchtoggle>
      
    </div>
  </div>
</nav>
<!-- -----------------------Navigation End   ---------------------- -->

<div class="container">
  <div class="row">
  
<!-- -----------------------Sub Pages Top Banner   ---------------------- -->
<headerinner>
<?php 
if ( is_home() ||is_front_page() ) { ?>
<?php } else { ?>
<div class="inner-banner" style="background:url(
<?php
if ( has_post_thumbnail() ) { ?>
<?php echo get_the_post_thumbnail_url($post->ID,'full') ?>
<?php }
else { ?>
<?php bloginfo('stylesheet_directory'); ?>/images/default.jpg
<?php }
?>
) no-repeat scroll right top #000 ; -o-background-size: cover;    -moz-background-size: cover;    -webkit-background-size:cover;    background-size: cover;">
<h2><?php the_title(); ?></h2>
</div>
<?php }?>
</headerinner>
<!-- -----------------------Breadcrumb   ---------------------- -->    
<breadcrumb><?php custom_breadcrumbs(); ?></breadcrumb>


  </div>
</div>
