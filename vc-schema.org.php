<?php
/*
* Add schema.org's markup attributes "itemtype", "itemscope", "itemprop", "itemref" and "itemid"  to the row
*/
vc_add_param("vc_row", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemtype",
	"param_name" => "itemtype",
	"value" => "",
	"description" => "By adding itemtype, you are specifying what kind of an item is the content about. Note that itemscope will be automatically added. For further information plase check http://schema.org"
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemprop",
	"param_name" => "itemprop",
	"value" => "",
	"description" => "By adding itemprop, you are specifying that the HTML contained in the DIV is a property of the item previouslye defined. For further information plase check http://schema.org"
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemref",
	"param_name" => "itemref",
	"value" => "",
	"description" => "The itemref attribute can be used to to link another object entity tagged with the itemid attribute. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemid",
	"param_name" => "id",
	"value" => "",
	"description" => "The itemid attribute can be used to to create global identifiers for the object entity of the statement, to which we can then link to from the locally defined subject entity. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));
/*
* Add schema.org's markup attributes "itemtype", "itemscope", "itemprop", "itemref" and "itemid"  to the column
*/
vc_add_param("vc_column", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemtype",
	"param_name" => "itemtype",
	"value" => "",
	"description" => "By adding itemtype, you are specifying what kind of an item is the content about. Note that itemscope will be automatically added. For further information plase check http://schema.org"
));
vc_add_param("vc_column", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemprop",
	"param_name" => "itemprop",
	"value" => "",
	"description" => "By adding itemprop, you are specifying that the HTML contained in the DIV is a property of the item previouslye defined. For further information plase check http://schema.org"
));
vc_add_param("vc_column", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemref",
	"param_name" => "itemref",
	"value" => "",
	"description" => "The itemref attribute can be used to to link another object entity tagged with the itemid attribute. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));
vc_add_param("vc_column", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemid",
	"param_name" => "id",
	"value" => "",
	"description" => "The itemid attribute can be used to to create global identifiers for the object entity of the statement, to which we can then link to from the locally defined subject entity. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));
/*
* Add schema.org's markup attribute "itemprop", "itemref" and "itemid" to the column text
*/
vc_add_param("vc_column_text", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemprop",
	"param_name" => "itemprop",
	"value" => "",
	"description" => "By adding itemprop, you are specifying that the HTML contained in the DIV is a property of the item previouslye defined. For further information plase check http://schema.org"
));
vc_add_param("vc_column_text", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemref",
	"param_name" => "itemref",
	"value" => "",
	"description" => "The itemref attribute can be used to to link another object entity tagged with the itemid attribute. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));
vc_add_param("vc_column_text", array(
	"type" => "textfield",
	"group" => "Schema.org",
	"class" => "",
	"heading" => "Microdata itemid",
	"param_name" => "id",
	"value" => "",
	"description" => "The itemid attribute can be used to to create global identifiers for the object entity of the statement, to which we can then link to from the locally defined subject entity. For further information plase check http://www.w3.org/wiki/WebSchemas/InverseProperties"
));

function meta_tag_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'_itemprop' => '',
		'_content' => '',
		), $atts );

	return "<meta itemprop='{$a['_itemprop']}' content='{$a['_content']}' />";
}
add_shortcode( 'meta_tag', 'meta_tag_shortcode' );

function link_tag_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'_itemprop' => '',
		'_href' => '',
		), $atts );

	return "<link itemprop='{$a['_itemprop']}' href='{$a['_href']}' />";
}
add_shortcode( 'link_tag', 'link_tag_shortcode' );

	
add_action( 'vc_before_init', 'meta_tag_integrateWithVC' );
 
function meta_tag_integrateWithVC() {
   vc_map( 
	   array(
			"name" => __( "Schema.org Meta Tag", "my-text-domain" ),
			"base" => "meta_tag",
			"class" => "",
			"category" => __( "Content", "my-text-domain"),
			// 'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
			// 'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
			"params" => array(
					array(
						'type' => 'textfield',
						'holder' => 'div',
						'class' => '',
						'heading' => __( 'itemprop' ),
						'param_name' => '_itemprop',
						'value' => '',
						'description' => __( 'The microdata itemprop attribute' )
					),
					array(
						'type' => 'textfield',
						'holder' => 'div',
						'class' => '',
						'heading' => __( 'content' ),
						'param_name' => '_content',
						'value' => '',
						'description' => __( 'The microdata content attribute' )
					),
			)
		) 
    );
}

add_action( 'vc_before_init', 'link_tag_integrateWithVC' );

function link_tag_integrateWithVC() {
   vc_map( 
	   array(
			"name" => __( "Schema.org Link Tag", "my-text-domain" ),
			"base" => "link_tag",
			"class" => "",
			"category" => __( "Content", "my-text-domain"),
			// 'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
			// 'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
			"params" => array(
					array(
						'type' => 'textfield',
						'holder' => 'div',
						'class' => '',
						'heading' => __( 'itemprop' ),
						'param_name' => '_itemprop',
						'value' => '',
						'description' => __( 'The microdata itemprop attribute' )
					),
					array(
						'type' => 'textfield',
						'holder' => 'div',
						'class' => '',
						'heading' => __( 'href' ),
						'param_name' => '_href',
						'value' => '',
						'description' => __( 'The microdata href attribute' )
					),
			)
		) 
    );
}
?>