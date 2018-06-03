<?php
add_shortcode('star-wars-opening', 'star_wars_opening');
require_once('resources/star-wars-openings.php');

function star_wars_opening($attributes) {
	$attributesMap = shortcode_atts( array(
		'text-color' => 'black',
		'movie' => 'Episode IV'
	), $attributes);
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
		<?php echo opening($attributesMap['movie']); ?>
		</div></div>
	<?php
}
?>