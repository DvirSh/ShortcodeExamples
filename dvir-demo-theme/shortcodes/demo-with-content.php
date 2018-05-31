<?php
add_shortcode('demo-with-content', 'demo_content_tag_func');

function demo_content_tag_func($attributes, $content = "") {
	$attributesMap = shortcode_atts( array(
		'text-color' => 'black'
	), $attributes);
	?>
	<p style='color:<?php echo $attributesMap['text-color'] ?>'><?php echo $content ?></p>
	<?php
}
?>