<?php
/**
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
</div>
	<footer class="footer">
    	<div class="container">
        	<div class="col-md-6">All rights reserved. <?php bloginfo( 'name' ); ?> - <?php the_time('Y'); ?> </div>
            <socialicons>
<div class="col-md-6 social_icons pull-right nopad">
<ul>
<li> <a href="<?php echo $options['facebook']; ?>" target="_blank"><i class="fa fa-facebook-official" ></i></a></li>
<li><a href="<?php echo $options['twitter']; ?>" target="_blank"> <i class="fa fa-twitter" ></i></a></li>
<li> <a href="<?php echo $options['googleplus']; ?>" target="_blank"> <i class="fa fa-google-plus" ></i></a></li>
<li> <a href="<?php echo $options['youtube']; ?>" target="_blank"><i class="fa fa-youtube-play" ></i></a></li>
</ul>
</div>
</socialicons> 
        </div>
    </footer>
</div>
<!------------------------ Back to top ------------------------------------>
<div id="back-top"> <a href="#top"> <span class="fa fa-arrow-circle-o-up"></span></a> </div>

<!--<div id="winSize"></div>-->
</main>

<!------------------------ CSS Library ------------------------------------>
<link href="<?php bloginfo('stylesheet_directory'); ?>/css/library.css" rel="stylesheet" />

<!------------------------ Jquery CDN ------------------------------------>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!------------------------ Javascript ------------------------------------>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/library.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<!------------------------ WOW Animation CDN------------------------------------>
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>new WOW().init();</script>

<?php wp_footer(); ?>
</body>
</html>
