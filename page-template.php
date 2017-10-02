<?php
/*
 * Template Name: Test page template
 * Description: A Page Template with a darker design.
 */

PP_Support_Page_Template::get_instance()->in_tpl();

?>
<?php get_header(); ?>
<div id="hero">
	<div class="sky">
		<i class="fa fa-circle"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	</div>
	<div class="clouds">
		<i id="cloud1" class="fa fa-cloud"></i>
		<i id="cloud2" class="fa fa-cloud"></i>
		<i id="cloud3" class="fa fa-cloud"></i>
		<i id="cloud4" class="fa fa-cloud"></i>
		<i id="cloud5" class="fa fa-cloud"></i>
	</div>

	<div class="characters">
		<img class="character wilson" src="<?php echo plugin_dir_url( __FILE__ ) ?>/../assets/wilson-apron.png" alt="">
		<img class="character pootle" src="<?php echo plugin_dir_url( __FILE__ ) ?>/../assets/pootle-pencil.png" alt="">
	</div>

</div>

<div class="col-full">
	<div class="content" data-center-top="background:rgba(255, 255, 255, 0)"
			 data-top-top="background:rgba(255, 255, 255, .95)">

		<h1 class="pp-supp">
			<span class="logo">Pootle<span style="font-family: 'Lobster', cursive">Press</span></span><br>
			support<br>
			<i class="fa fa-chevron-down scroll-down"></i>
		</h1>

		<?php while ( have_posts() ) : the_post();

			the_content();

		endwhile; // End of the loop. ?>
	</div>
</div>

<?php get_footer(); ?>
