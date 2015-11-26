<?php
/*
* Add schema.org's markup attributes "itemtype", "itemscope and "itemprop  to the row
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
/*
* Add schema.org's markup attributes "itemtype", "itemscope and "itemprop  to the column
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
/*
* Add schema.org's markup attribute "itemprop to the column text
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
?>