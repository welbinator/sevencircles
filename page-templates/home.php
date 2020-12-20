<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>

<main id="primary" class="site-main">


	<?php if (get_theme_mod('author-display') === 'Yes') { ?>
		<div class="row row-padding author">
			<div class="col-6 author-image">
				<img src="<?php echo wp_get_attachment_url(get_theme_mod('author-image')) ?>" alt="">
			</div>
			<div class="col-6 author-content">
				<?php
				$authortext = get_theme_mod('author-text');
				if ($authortext != '') {
					echo $authortext;
				} else {
					echo "Edit this in the customizer";
				}

				?>
			</div>
		</div>
	<?php } ?>

	<section class="hero">

		<div class="slider">

			<div class="slide">
				<img src="<?php echo get_theme_mod('first_slide') ?>" height="" width="">
			</div>
			<div class="slide">
				<img src="<?php echo get_theme_mod('second_slide') ?>" height="" width="">
			</div>
			<div class="slide">
				<img src="<?php echo get_theme_mod('third_slide') ?>" height="" width="">
			</div>

			<!-- <div class="slider-nav">

				<div class="prev"><i class="fas fa-caret-left"></i></div>
				<div class="next"><i class="fas fa-caret-right"></i></div>

			</div> -->

		</div>



	</section>


</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
