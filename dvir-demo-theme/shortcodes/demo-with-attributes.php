<?php
add_shortcode('demo-with-attributes', 'demo_atts_tag_func');

function demo_atts_tag_func($attributes) {
	$attributesMap = shortcode_atts( array(
		'text-color' => 'blue'
	), $attributes);
	?>
	<p style='color:<?php echo $attributesMap['text-color'] ?>'>Hello PressForWord!</p>
	<?php
}
?>