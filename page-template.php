<?php
/*
 * Template Name: Pootle animation template
 * Description: A Page Template with a darker design.
 */

PP_Support_Page_Template::get_instance()->in_tpl();
$pp_supp_hour = gmdate( 'h' );;

$time = 'day';

if ( $pp_supp_hour < 7 || $pp_supp_hour > 17 ) {
	$time = 'night';
}
?>
<script>
	var ppHour = <?php echo $pp_supp_hour ?>
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
		<img class="character wilson" src="<?php echo plugin_dir_url( __FILE__ ) ?>assets/wilson-<?php echo $time ?>.png"
				 alt="Wilson" data-0="right: 23%;" data-43p="right: 97%;">
		<img class="character pootle" src="<?php echo plugin_dir_url( __FILE__ ) ?>assets/pootle-<?php echo $time ?>.png"
				 alt="Pootle" data-0="left: 29%;" data-43p="left: 97%;">
	</div>

	<h1 class="pp-supp" data-0="margin-top:0vh;" data-16p="margin-top:-16vh;" data-52p="margin-top:-160vh;">
		<span class="logo">Pootle<span style="font-family: 'Lobster', cursive">Press</span></span><br>
		<?php the_title(); ?>
		<br>
		<i class="fa fa-chevron-down scroll-down" data-0="margin-top:7vh;" data-16p="margin-top:16vh;" data-43p="margin-top:70vh;"></i>
	</h1>

</div>

<div class="col-full">
	<div class="content" data-bottom-top="background:rgba(255, 255, 255, 0)"
			 data-center-top="background:rgba(255, 255, 255, .88)">

			<?php the_content(); ?>

	</div>
</div>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
