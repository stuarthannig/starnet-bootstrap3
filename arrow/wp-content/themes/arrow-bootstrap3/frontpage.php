<?php 
/*Template Name: Frontpage*/

get_header();

?>
<article class="col-xs-12 col-md-9">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</article>
		
<aside class="col-xs-12 col-md-3">
  <div class="row">
    <section class="col-xs-12 col-sm-6 col-md-12">
      <h4>
        Our Mission
      </h4>
      <p>
        To provide quality sewage and stormwater pumping station products, that are designed to protect operators and service technicians from safety hazards.
      </p>
    </section>
    <section class="col-xs-12 col-sm-6 col-md-12">
      <h4>
        About Us
      </h4>
      <p>
        Arrow was created as a division of Starnet Technologies, Inc. Arrow's prefabricated pumping stations offer solutions for typical pumping station applications.
      </p>
    </section>
  </div>
</aside>

<?php get_footer(); ?>