<?php
/**
 * The main template file.
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<!-------------------------------------------Slider-------------------------------------------------->
<section class="section">
<slider>
<div class="slider">
  <div class="container"><div class="row">
    <div class="main-slider">
      <?php $index_query = new WP_Query(array( 'post_type' => 'home_slider', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
      <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
      <div class="inner-item" style="background:url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full');} ?>) no-repeat scroll right top #000 ; -o-background-size: cover;    -moz-background-size: cover;    -webkit-background-size:cover;    background-size: cover;" >
        <div class="caption">
          <?php the_content(); ?>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
 </div>
</div>
</slider>
</section>
<!-------------------------------------------Thumb Slider Started------------------------------------>
<section class="section">

<thumbslider>
<div class="slider-thumb">
<div class="container"><div class="row">
  <!-- Large Slide -->
  <div class="item-slider">
        <?php $index_query = new WP_Query(array( 'post_type' => 'home_slider', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
    		<div class="slick-slider-item"> <?php the_post_thumbnail( 'full', array( 'class' => 'avatar' ) ); ?> </div>
        <?php endwhile; wp_reset_postdata(); ?>
  </div>
  <!-- Thumb Slides --> 
  <div class="thumb-slider">
	    <?php $index_query = new WP_Query(array( 'post_type' => 'home_slider', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
      	<?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
		    <div class="slick-slider-item"> <?php the_post_thumbnail( 'medium', array( 'class' => 'avatar' ) ); ?> </div>
    	<?php endwhile; wp_reset_postdata(); ?>
    <!--/slick-slider-item-->
  </div>
  </div>
 </div>
</div>
</thumbslider>
</section>
<!-------------------------------------------Services Carousel------------------------------------>
<section class="section">

<services>
	
        <div class="container nopad">
        <div class="service">
        <?php $index_query = new WP_Query(array( 'post_type' => 'our_services', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        	<div class="loop">
            	<div class="pic"><?php the_post_thumbnail( 'full', array( 'class' => 'avatar' ) ); ?></div>
                <div class="title"><?php the_title(); ?></div>
                <div class="desc"><?php $content=get_the_content(); echo substr($content,0, 150); ?></div>
                <div class="more"><a href="<?php the_permalink(); ?>">Readmore</a></div>
            </div>    
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
    </div>
</services>

</section>
<!-------------------------------------------Testimonials Carousel------------------------------------>
<section class="section">

<testimonials>
	<div class="container nopad">
        <div class="testimonial">
        <?php $index_query = new WP_Query(array( 'post_type' => 'our_testimonials', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        	<div class="loop">
            	 <p><?php $content=get_the_content(); echo substr($content,0, 500); ?></p>
                 <div class="pic"><?php the_post_thumbnail( 'thumbnail', array( 'class' => 'avatar' ) ); ?></div>
                 <div class="title"><?php the_title(); ?></div>
            </div>    
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
    </div>
</testimonials>

</section>

<!-------------------------------------------Clients Carousel------------------------------------>
<section class="section">

<clients id="client">
	<div class="container nopad">
		<div class="client">
        <?php $index_query = new WP_Query(array( 'post_type' => 'our_clients', 'posts_per_page' => -1,'order'=>'DESC' )); ?>
        <?php while ($index_query->have_posts()) : $index_query->the_post(); ?>
        	<div class="loop">
            	<?php the_post_thumbnail( 'full', array( 'class' => 'avatar' ) ); ?>
            </div>    
        <?php endwhile; wp_reset_postdata(); ?>
		</div>
    </div>
</clients>
</section>





<?php // get_sidebar(); ?>
<?php get_footer(); ?>
