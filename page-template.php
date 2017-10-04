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
		<img class="character wilson" src="<?php echo plugin_dir_url( __FILE__ ) ?>/../assets/wilson-apron.png"
				 alt="Wilson" data-0="right: 23%;" data-43p="right: 97%;">
		<img class="character pootle" src="<?php echo plugin_dir_url( __FILE__ ) ?>/../assets/pootle-pencil.png"
				 alt="Pootle" data-0="left: 29%;" data-43p="left: 97%;">
	</div>

	<h1 class="pp-supp" data-0="margin-top:0vh;" data-16p="margin-top:-16vh;" data-52p="margin-top:-160vh;">
		<span class="logo">Pootle<span style="font-family: 'Lobster', cursive">Press</span></span><br>
		support<br>
		<i class="fa fa-chevron-down scroll-down" data-0="margin-top:7vh;" data-16p="margin-top:16vh;" data-43p="margin-top:70vh;"></i>
	</h1>

</div>

<div class="col-full">
	<div class="content" data-bottom-top="background:rgba(255, 255, 255, 0)"
			 data-center-top="background:rgba(255, 255, 255, .88)">

		<?php while ( have_posts() ) : the_post();

			the_content();

		endwhile; // End of the loop. ?>
	</div>
</div>

<?php get_footer(); ?>
