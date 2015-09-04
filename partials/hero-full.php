<?php 
$img = get_field('hero_image');
if( $img ) :
?>
<div
	style="
	background-image: url('<?php echo $img['url'] ?>');
	background-color: <?php the_field('background_color'); ?>;
	"
	class="wrapper hero-full"
	id="page-wrapper">
		<div class="titles contain">
			<h1 class="main-title"><?php the_field('main_title'); ?></h1>
			<h4 class="sub-title"><?php the_field('sub_title'); ?></h4>
		</div>
</div>

<?php endif; ?>