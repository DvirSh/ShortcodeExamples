<?php
add_shortcode('star-wars-opening-with-ob', 'star_wars_opening_with_ob');
require_once('resources/star-wars-openings.php');

function star_wars_opening_with_ob($attributes, $content = "") {
	$attributesMap = shortcode_atts( array(
		'text-color' => 'black',
		'movie' => 'Episode IV'
	), $attributes);
	ob_start();	
	?>
	<style>
		@keyframes mymove {
			from {top: 400px;}
			to {top: -400px;}
		}
		.teleprompt {
			text-align: center;
			overflow-y: hidden;
			position :relative;
			-webkit-animation: mymove 25s infinite; /* Safari 4.0 - 8.0 */
			animation: mymove 25s infinite linear;
		}
		.container {
			overflow-y: hidden;
		}
	</style>
	<div class='container' style='color:<?php echo $attributesMap['text-color'] ?>'>
		<div class='teleprompt'>A long time ago in a galaxy far, far away....<br>
		<?php echo $content; ?><br>
		<?php echo opening($attributesMap['movie']); ?>
		</div></div>
	<?php
	return ob_get_clean();	
}
?>