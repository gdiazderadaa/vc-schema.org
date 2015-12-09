<?php
/** @var $this WPBakeryShortCode_VC_Row */
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = $full_width = $itemtype = $itemscope = $itemprop = $itemref = $id = '';
extract( shortcode_atts( array(
	'el_class' => '',
	'bg_image' => '',
	'bg_color' => '',
	'bg_image_repeat' => '',
	'font_color' => '',
	'padding' => '',
	'margin_bottom' => '',
	'full_width' => false,
	'css' => '',
	'itemtype' => '',
	'itemprop' =>'',
	'itemref' => '',
	'id' => '',
), $atts ) );

// wp_enqueue_style( 'js_composer_front' );
// wp_enqueue_style('js_composer_custom_css');

$el_class = $this->getExtraClass( $el_class );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'vc_row wpb_row ' . ( $this->settings( 'base' ) === 'vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle( $bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom );
?>
	<div 
	<?php if ($itemtype != ''): ?> itemscope <?php endif;?>
	<?php if ($itemtype != ''): ?> itemtype="<?php echo esc_attr( $itemtype ) ;?>" <?php endif;?>
	<?php if ($itemprop != ''): ?> itemprop="<?php echo esc_attr( $itemprop ) ;?>" <?php endif;?>
	<?php if ($itemref != ''): ?> itemref="<?php echo esc_attr( $itemref ) ;?>" <?php endif;?>
	<?php if ($id != ''): ?> id="<?php echo esc_attr( $id ) ;?>" <?php endif;?>
	class="<?php echo esc_attr( $css_class ) ; ?><?php if ( $full_width == 'stretch_row_content_no_spaces' ): echo ' vc_row-no-padding'; endif; ?>" <?php if ( ! empty( $full_width ) ) {
	echo ' data-vc-full-width="true"';
	if ( $full_width == 'stretch_row_content' || $full_width == 'stretch_row_content_no_spaces' ) {
		echo ' data-vc-stretch-content="true"';
	}
} ?> <?php echo $style; ?>><?php
echo wpb_js_remove_wpautop( $content );
?></div><?php echo $this->endBlockComment( 'row' );
if ( ! empty( $full_width ) ) {
	echo '<div class="vc_row-full-width"></div>';
}
