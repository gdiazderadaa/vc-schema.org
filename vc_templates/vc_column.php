<?php
/**
 * @var $this WPBakeryShortCode_VC_Column
 */
$output = $font_color = $el_class = $width = $offset = $itemtype = $itemscope = $itemprop = $itemref = $id ='';
extract( shortcode_atts( array(
	'font_color' => '',
	'el_class' => '',
	'width' => '1/1',
	'css' => '',
	'offset' => '',
	'itemtype' => '',
	'itemprop' =>'',
	'itemref' => '',
	'id' => '',
), $atts ) );

$el_class = $this->getExtraClass( $el_class );
$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );
$el_class .= ' wpb_column vc_column_container';
$style = $this->buildStyle( $font_color );
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width . $el_class, $this->settings['base'], $atts );
if ($itemtype != ''): $itemscope = 'itemscope'; endif;
if ($itemtype != ''): $itemtype = 'itemtype="' . esc_attr( $itemtype ) .'"'; endif;
if ($itemprop != ''): $itemprop = 'itemprop="' . esc_attr( $itemprop ) .'"'; endif;
if ($itemref != ''): $itemref = 'itemref="' . esc_attr( $itemref ) .'"'; endif;
if ($id != ''): $id = ' id="' . esc_attr( $id ) .'"'; endif;
$output .= "\n\t" . '<div class="' . $css_class . ' ' . vc_shortcode_custom_css_class( $css, ' ' ) . '"' . $style . ' ' . $itemscope . ' ' . $itemtype . ' ' . $itemprop . ' ' . $itemref . ' ' . $id .'>';
$output .= "\n\t\t" . '<div class="wpb_wrapper">';
$output .= "\n\t\t\t" . wpb_js_remove_wpautop( $content );
$output .= "\n\t\t" . '</div> ' . $this->endBlockComment( '.wpb_wrapper' );
$output .= "\n\t" . '</div> ' . $this->endBlockComment( $el_class ) . "\n";
echo $output;