<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name" 							=> __("All Topic Tags", "ts_visual_composer_extend"),
		"base" 							=> "bbp-topic-tags",
		"icon" 							=> "icon-wpb-ts_vcsc_icon_bbpress_tagstopic", 
		"class" 						=> "", 
		"category" 						=> __('VC bbPress', "ts_visual_composer_extend"),
		"description"					=> __("Place a list of all topic tags", "ts_visual_composer_extend"),
		"admin_enqueue_js"				=> "",
		"admin_enqueue_css"				=> "",
		"show_settings_on_create" 		=> false,
		"params" 						=> array(
			array(
				"type"              	=> "messenger",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "messenger",
				"color"					=> "#006BB7",
				"weight"				=> "normal",
				"size"					=> "14",
				"value"					=> "",
				"message"            	=> __( "This element will display a list of all topic tags.", "ts_visual_composer_extend" ),
				"description"       	=> __( "", "ts_visual_composer_extend" )
			)
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>