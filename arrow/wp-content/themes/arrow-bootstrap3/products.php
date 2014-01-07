<?php
/* Template Name: Products */

 get_header();
 ?>

<article class="col-xs-12 col-md-7">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</article>

<aside class="col-xs-12 col-md-5">

<?php
//If the product has images, let's display them
//WordPress custom field name: images
$images = get_post_meta($post->ID, 'images', false);
if ($images) {
	sort($images); ?>

	<div id="gallery" class="row">
	  <section class="col-xs-12 col-sm-6 col-md-12">
	    <div id="full-size">

	    	<?php
					$count = 1;
					foreach($images as $image) {
						echo '<img src="'.$image.'" alt="" id="pic '.$count.'" />';
						$count = $count + 1;
					} ?>
	      
	    </div>
	  </section>

	  <section class="col-xs-12 col-sm-6 col-md-12">
	    <h4>Product Images</h4>

	    <?php
					$count = 1;
					foreach($images as $image) {
						$subimage = explode(".", $image);
						$image = ''.$subimage[0].'-thumb.'.$subimage[1].'';
						
						echo '<a href="#pic '.$count.'"><img src="'.$image.'" class="thumb" alt="" width="90" height="90" /></a>';
						$count = $count + 1;
					} ?>

	  </section>
	</div><!-- /#gallery -->

<?php
} ?>

</aside>

<?php get_footer(); ?>