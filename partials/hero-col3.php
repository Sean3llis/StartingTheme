<div class="wrapper hero-col3" id="page-wrapper">
	<div class="row">
	<?php 
	if( have_rows('hero_tiles') ) :
		while( have_rows('hero_tiles') ) : the_row();
		$img = get_sub_field('hero_image');
	?>

		<div class="col-sm-4">
			<div class="tile" style="
				background-image: url('<?php echo $img['url']; ?>');
				background-color: <?php the_field('background_color'); ?>;">
				<div class="titles">
					<div class="main-title">
						<?php the_sub_field('main_title'); ?>
					</div>
					<?php if( get_sub_field('cta') ) : ?>
						<a href="<?php the_sub_field('link') ?>" class="cta">
							<?php the_sub_field('cta_text'); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>

	<?php endwhile; endif; ?>
	<div class="clearfix"></div>
	</div>
</div>