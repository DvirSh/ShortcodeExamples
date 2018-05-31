<?php
add_shortcode('sticky-note', 'sticky_note');
function sticky_note( $attributes, $content = false ){
  $attributesMap = shortcode_atts( array(
		'color' => 'blue'
	), $attributes);

  ob_start();
  ?>
  <style>
    .sticky-note {
      position: relative;
      transform: rotate(-0.5deg);
      max-width: 350px;
    }
    .sticky-note .tape {
      position: absolute;
      top: -15px;
      height: 0;
      width: 100%;
      text-align: center;
    }
    .sticky-note .tape:after {
      content: "";
      display: inline-block;
      height: 12px;
      width: 58px;
      background-color: inherit;
      opacity: 0.7;
    }
    .sticky-note .content {
      border: 1px solid #e8e8e8;
      padding: 20px;
      border-radius: 2px;
      background-color: #ffffcc;
    }
    .sticky-note .content p {
      margin-bottom: 0;
      transform: rotate(calc(0.5deg));
    }
    .sticky-note .content:after {
      z-index: -1;
      position: absolute;
      content: "";
      bottom: 17px;
      right: 2px;
      width: 66%;
      height: 10px;
      max-width: 300px;
      background: transparent;
      box-shadow: -4px 15px 10px #777;
      transform: rotate(2deg);
    }
  </style>
    <div class="sticky-note">
      <div class="tape" style="background-color: <?php echo $attributesMap[color]; ?>"></div>
      <div class="content">
        <p><?php echo $content; ?></p>
      </div>
    </div>
  <?php
  return ob_get_clean();
}
?>