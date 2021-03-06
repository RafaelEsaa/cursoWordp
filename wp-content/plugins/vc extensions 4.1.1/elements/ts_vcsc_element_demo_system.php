<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
	// System Information
	$VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                      	=> __( "TS System Information", "ts_visual_composer_extend" ),
		"base"                      	=> "TS_VCSC_System_Information",
		"icon" 	                    	=> "icon-wpb-ts_vcsc_demo_elements",
		"class"                     	=> "",
		"category"                  	=> __( "VC Demos", "ts_visual_composer_extend" ),
		"description"               	=> __("Place a summary of system information", "ts_visual_composer_extend"),
		"show_settings_on_create" 		=> false,
		"admin_enqueue_js"        		=> "",
		"admin_enqueue_css"       		=> "",
		"params"                    	=> array(
			array(
				"type"              	=> "messenger",
				"heading"           	=> __( "", "ts_visual_composer_extend" ),
				"param_name"        	=> "messenger",
				"color"					=> "#006BB7",
				"weight"				=> "normal",
				"size"					=> "14",
				"value"					=> "",
				"message"            	=> __( "This element will display a summary of system information as they relate to your specific WordPress install and server setup.", "ts_visual_composer_extend" ),
				"description"       	=> __( "", "ts_visual_composer_extend" )
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>