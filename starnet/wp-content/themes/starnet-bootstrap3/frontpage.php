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
        Upcoming Events
      </h4>
      <div id="calendar">
        <?php echo do_shortcode('[events limit=3 time=start]'); ?>
      </div>
    </section>
    <section class="col-xs-12 col-sm-6 col-md-12">
      <h4>
        Our Mission
      </h4>
      <p>
        We are committed to providing the highest quality products, systems, and services to our customers in the water &amp; wastewater industries.
      </p>
    </section>
    <section class="col-xs-12 col-sm-6 col-md-12">
      <h4>
        About Us
      </h4>
      <p>
        Starnet Technologies, Inc. has been providing solutions to the water and wastewater industry since 1995. We provide a wide range of services, including Engineering, Programming, Custom CAD Drawings, Systems Integration, Standard &amp; Custom Controls, and Telemetry &amp; SCADA Systems Installation.
      </p>
    </section>
  </div>
</aside>

<?php get_footer(); ?>