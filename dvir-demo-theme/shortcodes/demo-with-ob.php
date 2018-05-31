<?php
add_shortcode('demo-with-ob', 'demo_ob_tag_func');

function demo_ob_tag_func($attributes, $content = "") {
	$attributesMap = shortcode_atts( array(
		'text-color' => 'black'
	), $attributes);
	ob_start();
	?>
	<p style='color:<?php echo $attributesMap['text-color'] ?>;'><?php echo $content ?></p>
	<?php
	return ob_get_clean();
}
?>