<?php 
/*Template Name: Contact*/

get_header();

?>
<article class="col-xs-12 col-md-6">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
</article>
		
<aside class="contact-map col-xs-12 col-md-6 hidden-xs">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=8520+Hollander+Dr,+Franksville,+WI+53126&amp;sll=42.774000,-87.889439&amp;sspn=0.00816,0.013797&amp;gl=us&amp;ie=UTF8&amp;hq=&amp;hnear=8520+Hollander+Dr,+Franksville,+Racine,+Wisconsin+53126&amp;t=m&amp;z=14&amp;ll=42.774000,-87.889439&amp;output=embed"></iframe>
    <br />
    <small><a href="http://maps.google.com/maps?q=8520+Hollander+Drive+Franksville,+WI&hl=en">View Larger Map</a></small>
</aside>

<aside class="contact-map-alt col-xs-12 visible-xs">
    <p>
      <strong>Mailing Address:</strong>
      <br />P.O. Box 374
      <br />Franksville, WI 53126
    </p>

    <p>
      <strong>Building Address:</strong>
      <br /><a href="http://maps.google.com/maps?q=8520+Hollander+Drive+Franksville,+WI&hl=en">8520 Hollander Dr‎ive
      <br />Caledonia, WI 53126</a>
    </p>
</aside>

<?php get_footer(); ?>