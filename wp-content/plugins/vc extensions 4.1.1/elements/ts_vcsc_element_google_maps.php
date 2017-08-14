<?php
    global $VISUAL_COMPOSER_EXTENSIONS;
	
    $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element = array(
		"name"                          => __( "TS Google Maps (Deprecated)", "ts_visual_composer_extend" ),
		"base"                          => "TS-VCSC-Google-Maps",
		"icon"                          => "icon-wpb-ts_vcsc_google_maps",
		"class"                         => "",
		"category"                      => __( "Deprecated", "ts_visual_composer_extend" ),
		"description" 		            => __("Place a Google Map", "ts_visual_composer_extend"),
		"admin_enqueue_js"            	=> "",
		"admin_enqueue_css"           	=> "",
		"deprecated" 					=> "4.0.0",
		"content_element"				=> $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_UseDeprecatedElements == "true" ? true : false,
		"params"                        => array(
			// Map Settings
			array(
				"type"                  => "seperator",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "seperator_1",
				"value"					=> "",
				"seperator"				=> "Map Settings",
				"description"           => __( "", "ts_visual_composer_extend" )
			),				
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Load Google Map API", "ts_visual_composer_extend" ),
				"param_name"            => "googlemap_api",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to load the Google Map API; disable only if the API is already loaded by another plugin or theme as it is required for the map.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),				
			array(
				"type"                  => "dropdown",
				"class"                 => "",
				"heading"               => __("Map Type", "ts_visual_composer_extend"),
				"param_name"            => "maptype",
				"admin_label"           => true,
				"value"                 => array(
					__("Road Map", "ts_visual_composer_extend")                  => "ROADMAP",
					__("Satellite Map", "ts_visual_composer_extend")             => "SATELLITE",
					__("Hybrid Map", "ts_visual_composer_extend")                => "HYBRID",
					__("Terrain Map", "ts_visual_composer_extend")               => "TERRAIN",
					__("Open Street Map", "ts_visual_composer_extend")           => "OSM",
				),
				"description"           => __( "Select the map type the map should initially be shown with.", "ts_visual_composer_extend" )
			),
			array(
				"type"			        => "dropdown",
				"class"			        => "",
				"heading"               => __( "Road Map Style", "ts_visual_composer_extend" ),
				"param_name"            => "mapstyle",
				"admin_label"           => true,
				"value"			        => array(
					__( "Default", "ts_visual_composer_extend") 				=> "style_default",
					__( "Apple Maps-Esque", "ts_visual_composer_extend") 		=> "style_apple_mapsesque",
					__( "Avocado World", "ts_visual_composer_extend") 			=> "style_avocado_world",
					__( "Become A Dinosaur", "ts_visual_composer_extend") 		=> "style_become_dinosaur",
					__( "Bentley", "ts_visual_composer_extend") 				=> "style_bentley",
					__( "Black And White", "ts_visual_composer_extend") 		=> "style_black_white",
					__( "Blue Essence", "ts_visual_composer_extend") 			=> "style_blue_essence",
					__( "Blue Gray", "ts_visual_composer_extend") 				=> "style_blue_gray",
					__( "Blue Water", "ts_visual_composer_extend") 				=> "style_blue_water",
					__( "Bright & Bubbly", "ts_visual_composer_extend") 		=> "style_bright_bubbly",
					__( "Clean Cut", "ts_visual_composer_extend") 				=> "style_clean_cut",
					__( "Cobalt", "ts_visual_composer_extend") 					=> "style_cobalt",
					__( "Cool Gray", "ts_visual_composer_extend") 				=> "style_cool_gray",
					__( "Countries", "ts_visual_composer_extend") 				=> "style_countries",
					__( "Flat Green", "ts_visual_composer_extend") 				=> "style_flat_green",
					__( "Flat Map", "ts_visual_composer_extend") 				=> "style_flat_map",
					__( "Gowalla", "ts_visual_composer_extend") 				=> "style_gowalla",
					__( "Greyscale", "ts_visual_composer_extend") 				=> "style_greyscale",
					__( "Hopper", "ts_visual_composer_extend") 					=> "style_hopper",
					__( "Icy Blue", "ts_visual_composer_extend") 				=> "style_icy_blue",
					__( "Light Monochrome", "ts_visual_composer_extend") 		=> "style_light_monochrome",
					__( "Lunar Landscape", "ts_visual_composer_extend") 		=> "style_lunar_landscape",
					__( "Map Box", "ts_visual_composer_extend") 				=> "style_mapbox",
					__( "Midnight Commander", "ts_visual_composer_extend") 		=> "style_midnight_commander",
					__( "Nature", "ts_visual_composer_extend") 					=> "style_nature",
					__( "Neutral Blue", "ts_visual_composer_extend") 			=> "style_neutral_blue",
					__( "Old Timey", "ts_visual_composer_extend") 				=> "style_old_timey",
					__( "Pale Dawn", "ts_visual_composer_extend") 				=> "style_pale_dawn",
					__( "Paper", "ts_visual_composer_extend") 					=> "style_paper",
					__( "Red Alert", "ts_visual_composer_extend") 				=> "style_red_alert",
					__( "Red Hues", "ts_visual_composer_extend") 				=> "style_red_hues",
					__( "Retro", "ts_visual_composer_extend") 					=> "style_retro",
					__( "Route XL", "ts_visual_composer_extend") 				=> "style_route_xl",
					__( "Shades of Grey", "ts_visual_composer_extend") 			=> "style_shades_grey",
					__( "Shift Worker", "ts_visual_composer_extend") 			=> "style_shift_worker",
					__( "Snazzy Maps", "ts_visual_composer_extend") 			=> "style_snazzy_maps",
					__( "Subtle", "ts_visual_composer_extend") 					=> "style_subtle",
					__( "Subtle Grayscale", "ts_visual_composer_extend") 		=> "style_subtle_grayscale",
					__( "Unimposed Topography", "ts_visual_composer_extend") 	=> "style_unimposed_topo",
					__( "Vintage", "ts_visual_composer_extend") 				=> "style_vintage",
				),
				"description"           => __( "Select the color style for the road map layout.", "ts_visual_composer_extend" )
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Map Height", "ts_visual_composer_extend" ),
				"param_name"            => "height",
				"value"                 => "400",
				"min"                   => "100",
				"max"                   => "2048",
				"step"                  => "1",
				"unit"                  => 'px',
				"admin_label"           => true,
				"description"           => __( "Define the height in pixel for the map.", "ts_visual_composer_extend" )
			),
			array(
				"type"		            => "textfield",
				"class"		            => "",
				"heading"               => __( "Coordinates", "ts_visual_composer_extend" ),
				"param_name"            => "coordinates",
				"value"                 => "",
				"admin_label"           => true,
				"description"	        => __( "Example: 40.7484963, -73.9855961 / Use the following link to find coordinates:", "ts_visual_composer_extend" ) . " <a href='http://www.gpsvisualizer.com/geocode' target='_blank'>http://www.gpsvisualizer.com/geocode</a>",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Use Metric Dimensions", "ts_visual_composer_extend" ),
				"param_name"            => "metric",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to use metric dimensions for distances and speeds.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Zoom Level", "ts_visual_composer_extend" ),
				"param_name"            => "markerzoom",
				"value"                 => "17",
				"min"                   => "0",
				"max"                   => "21",
				"step"                  => "1",
				"unit"                  => '',
				"admin_label"           => true,
				"description"           => __( "Define the initial zoom level for the map.", "ts_visual_composer_extend" )
			),				
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Require Activate on Mobile", "ts_visual_composer_extend" ),
				"param_name"            => "mobileactivate",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if the map should require activation on mobile devices to ease scrolling.", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Google Button", "ts_visual_composer_extend" ),
				"param_name"            => "showgoogle",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to provide a button to view the map on the official Google maps website.", "ts_visual_composer_extend" ),
			),	
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Make Map Full-Width", "ts_visual_composer_extend" ),
				"param_name"            => "mapfullwidth",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want attempt showing the map in full width (will not work with all themes).", "ts_visual_composer_extend" ),
				"dependency"        	=> ""
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Full Width Breakouts", "ts_visual_composer_extend" ),
				"param_name"            => "breakouts",
				"value"                 => "6",
				"min"                   => "0",
				"max"                   => "99",
				"step"                  => "1",
				"unit"                  => '',
				"description"           => __( "Define the number of parent containers the map should attempt to break away from.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "mapfullwidth", 'value' => 'true' )
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Additional Map Wrapper", "ts_visual_composer_extend" ),
				"param_name"            => "mapfullwrapper",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if the map should be wrapped with another div when breaking away from parent(s).", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "mapfullwidth", 'value' => 'true' )
			),
			// Directions / GeoLocation
			array(
				"type"                  => "seperator",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "seperator_2",
				"value"					=> "",
				"seperator"             => "Directions Module",
				"description"           => __( "", "ts_visual_composer_extend" ),
				"group"					=> "Directions",
			),	
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Directions Control Panel", "ts_visual_composer_extend" ),
				"param_name"            => "directions",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show a control panel to get directions to the specified address.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Directions",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Enable Geolocation", "ts_visual_composer_extend" ),
				"param_name"            => "geolocation",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want enable geolocation for the map to assist with directions.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "directions", 'value' => 'true' ),
				"group"					=> "Directions",
			),
			array(
				"type"			        => "dropdown",
				"class"			        => "",
				"heading"               => __( "GeoLocation Accuracy", "ts_visual_composer_extend" ),
				"param_name"            => "geolayer",
				"value"			        => array(
					__( "City Level", "ts_visual_composer_extend" )				=> "1",
					__( "Street Address", "ts_visual_composer_extend")			=> "0",
				),
				"description"           => __( "Select the level of accuracy the geolocation should attempt to achieve.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "geolocation", 'value' => 'true' ),
				"group"					=> "Directions",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Use AutoComplete", "ts_visual_composer_extend" ),
				"param_name"            => "autocomplete",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to use the autocomplete feature when entering addresses.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "directions", 'value' => 'true' ),
				"group"					=> "Directions",
			),	
			// Map Controls
			array(
				"type"                  => "seperator",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "seperator_3",
				"value"					=> "",
				"seperator"             => "Map Controls",
				"description"           => __( "", "ts_visual_composer_extend" ),
				"group"					=> "Map Controls",
			),	
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Pan Controls", "ts_visual_composer_extend" ),
				"param_name"            => "controls_pan",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show the map pan controls.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Zoom Controls", "ts_visual_composer_extend" ),
				"param_name"            => "controls_zoom",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show the map zoom controls.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Allow Mouse Wheel Zoom", "ts_visual_composer_extend" ),
				"param_name"            => "controls_wheel",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to allow users to use the mouse wheel to zoom in/out.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Scale Controls", "ts_visual_composer_extend" ),
				"param_name"            => "controls_scale",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show the map scale controls.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show StreetView Controls", "ts_visual_composer_extend" ),
				"param_name"            => "controls_street",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show the map streetview controls.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Map Style Selector", "ts_visual_composer_extend" ),
				"param_name"            => "controls_style",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want show the style selector for the roadmap type.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Map Controls",
			),
			// Marker Settings
			array(
				"type"                  => "seperator",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "seperator_4",
				"value"					=> "",
				"seperator"				=> "Marker Settings",
				"description"           => __( "", "ts_visual_composer_extend" ),
				"group"					=> "Marker Settings",
			),
			array(
				"type"		            => "textarea_html",
				"class"		            => "",
				"heading"               => __( "Marker Content", "ts_visual_composer_extend" ),
				"param_name"            => "content",
				"value"                 => "",
				"admin_label"			=> false,
				"description"           => __( "Enter the map marker tooltip content but keep its limited size in mind.", "ts_visual_composer_extend" ),
				"group"					=> "Marker Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Show Infowindow", "ts_visual_composer_extend" ),
				"param_name"            => "tooltipvisible",
				"value"                 => "false",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if the marker infowindow should be shown on map load.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Marker Settings",
			),
			array(
				"type"			        => "dropdown",
				"class"			        => "",
				"heading"               => __( "Marker Style", "ts_visual_composer_extend" ),
				"param_name"            => "markerstyle",
				"value"			        => array(
					__( "Google Default", "ts_visual_composer_extend")           => "default",
					__( "Marker Selection", "ts_visual_composer_extend" )        => "marker",
					__( "Custom Image", "ts_visual_composer_extend" )            => "image",
				),
				"description"           => __( "", "ts_visual_composer_extend" ),
				"group"					=> "Marker Settings",
			),
			array(
				"type"                  => "attach_image",
				"heading"               => __( "Custom Marker Image", "ts_visual_composer_extend" ),
				"param_name"            => "markerimage",
				"value"                 => "",
				"description"           => __( "Select the image you want to use as marker; should have a maximum equal dimension of 64x64.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "markerstyle", 'value' => 'image' ),
				"group"					=> "Marker Settings",
			),
			array(
				"type"		            => "mapmarker",
				"class"		            => "",
				"heading"               => __( "Map Marker", "ts_visual_composer_extend" ),
				"param_name"            => "markerinternal",
				"value"                 => "",
				"description"	        => __( "", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "markerstyle", 'value' => 'marker' ),
				"group"					=> "Marker Settings",
			),
			array(
				"type"              	=> "switch_button",
				"heading"               => __( "Marker Animation", "ts_visual_composer_extend" ),
				"param_name"            => "markeranimation",
				"value"                 => "true",
				"on"					=> __( 'Yes', "ts_visual_composer_extend" ),
				"off"					=> __( 'No', "ts_visual_composer_extend" ),
				"style"					=> "select",
				"design"				=> "toggle-light",
				"description"           => __( "Switch the toggle if you want to animate the marker when it enters the map.", "ts_visual_composer_extend" ),
				"dependency"            => "",
				"group"					=> "Marker Settings",
			),
			array(
				"type"			        => "dropdown",
				"class"			        => "",
				"heading"               => __( "Animation Type", "ts_visual_composer_extend" ),
				"param_name"            => "markeranimationtype",
				"value"			        => array(
					__( "Drop", "ts_visual_composer_extend")                 => "drop",
					__( "Bounce", "ts_visual_composer_extend" )              => "bounce",
				),
				"description"           => __( "Select the type of animation the marker should have when it enters the map.", "ts_visual_composer_extend" ),
				"dependency"            => array( 'element' => "markeranimation", 'value' => 'true' ),
				"group"					=> "Marker Settings",
			),
			// Other Settings
			array(
				"type"                  => "seperator",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "seperator_5",
				"value"					=> "",
				"seperator"				=> "Other Settings",
				"description"           => __( "", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Top", "ts_visual_composer_extend" ),
				"param_name"            => "margin_top",
				"value"                 => "20",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the top margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "nouislider",
				"heading"               => __( "Margin: Bottom", "ts_visual_composer_extend" ),
				"param_name"            => "margin_bottom",
				"value"                 => "20",
				"min"                   => "0",
				"max"                   => "200",
				"step"                  => "1",
				"unit"                  => 'px',
				"description"           => __( "Select the bottom margin for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Define ID Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_id",
				"value"                 => "",
				"description"           => __( "Enter an unique ID for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			array(
				"type"                  => "textfield",
				"heading"               => __( "Extra Class Name", "ts_visual_composer_extend" ),
				"param_name"            => "el_class",
				"value"                 => "",
				"description"           => __( "Enter a class name for the element.", "ts_visual_composer_extend" ),
				"group" 				=> "Other Settings",
			),
			// Load Custom CSS/JS File
			array(
				"type"                  => "load_file",
				"heading"               => __( "", "ts_visual_composer_extend" ),
				"param_name"            => "el_file",
				"value"                 => "",
				"file_type"             => "js",
				"file_path"             => "js/ts-visual-composer-extend-element.min.js",
				"description"           => __( "", "ts_visual_composer_extend" )
			),
		)
	);
	
	if ($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_LeanMap == "true") {
		return $VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element;
	} else {			
		vc_map($VISUAL_COMPOSER_EXTENSIONS->TS_VCSC_VisualComposer_Element);
	}
?>