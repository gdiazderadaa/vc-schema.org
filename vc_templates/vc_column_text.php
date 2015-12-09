<?php
$output  = $el_class = $css_animation =  $itemprop = $itemref = $id = '';

extract(shortcode_atts(array(
    'el_class' => '',
    'css_animation' => '',
    'css' => '',
	'itemprop' =>'',
	'itemref' => '',
	'id' => '',
), $atts));

$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_text_column wpb_content_element ' . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$css_class .= $this->getCSSAnimation($css_animation);
if ($itemprop != ''): $itemprop = 'itemprop="' . esc_attr( $itemprop ) . '"'; endif;
if ($itemref != ''): $itemref = 'itemref="' . esc_attr( $itemref ) . '"'; endif;
if ($id != ''): $id = 'id="' . esc_attr( $id ) . '"'; endif;
$output .= "\n\t".'<div class="' . esc_attr( $css_class ) . '" '. $itemprop . ' ' . $itemref . ' ' . $id . '>';
$output .= "\n\t\t".'<div class="wpb_wrapper">';
$output .= "\n\t\t\t" . wpb_js_remove_wpautop( $content , true );
$output .= "\n\t\t".'</div> ' . $this->endBlockComment('.wpb_wrapper');
$output .= "\n\t".'</div> ' . $this->endBlockComment('.wpb_text_column');

echo $output;