<?php
/*
 * Template Name: Pootle animation template
 * Description: A Page Template with a darker design.
 */

PP_Support_Page_Template::get_instance()->in_tpl();
?>
<script>
	var dt = new Date(), ppHour = dt.getUTCHours(),roughTime = 'day';
</script>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post();?>

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
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
			id="char-wilson" class="character wilson" alt="Wilson" data-0="right: 23%;" data-25p="right: 97%;">
		<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
			id="char-pootle" class="character pootle" alt="Pootle" data-0="left: 29%;" data-25p="left: 97%;">
		<script>
			if ( ppHour < 7 || ppHour > 17 ) {roughTime = 'night';}
			document.getElementById( 'char-wilson' ).src = '<?php echo plugin_dir_url( __FILE__ ) ?>assets/wilson-' + roughTime + '.png';
			document.getElementById( 'char-pootle' ).src = '<?php echo plugin_dir_url( __FILE__ ) ?>assets/pootle-' + roughTime + '.png';
		</script>
	</div>

	<h1 class="pp-supp" data-0="margin-top:0vh;" data-11p="margin-top:-16vh;" data-29p="margin-top:-160vh;">
		<span class="logo">Pootle<span style="font-family: 'Lobster', cursive">Press</span></span><br>
		<?php the_title(); ?>
		<br>
		<i class="fa fa-chevron-down scroll-down" data-0="margin-top:7vh;" data-11p="margin-top:16vh;" data-23p="margin-top:70vh;"></i>
	</h1>

</div>

<div class="col-full">
	<div class="content" data-bottom-top="background:rgba(255, 255, 255, 0)"
			 data-top="background:rgba(255, 255, 255, .88)">

			<?php the_content(); ?>

	</div>
</div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
