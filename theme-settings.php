<?php

function druplex_form_system_theme_settings_alter(&$form, $form_state) {
  
	$theme_colors = array('aqua' => t('Aqua'),
						'blue' => t('Blue Jeans'),				
		                'aqua' => t('Aqua'),
		                'mint' => t('Mint'),
		                'grass' => t('Grass'),
		                'sun' => t('SunFlower'),
		                'lavender' => t('Lavender'),
		                'pink' => t('Pink Rose'),
		                'grape'    => t('Grape Fruit'));
	
	$background_colors = array('bg-color-theme'        => t('Theme Color'),
	                           'bg-col-white'        => t('White'),

                		       'bg-col-blueJeans1'	=> t('BlueJeans 1'),
                		       'bg-col-blueJeans2'	=> t('BlueJeans 2'),

                		       'bg-col-aqua1'	=> t('Aqua 1'),
                		       'bg-col-aqua2'	=> t('Aqua 2'),

                		       'bg-col-mint1'	=> t('Mint 1'),
                		       'bg-col-mint2'	=> t('Mint 2'),

                		       'bg-col-grass1'	=> t('Grass 1'),
                		       'bg-col-grass2'	=> t('Grass 2'),

                		       'bg-col-sunFlower1'	=> t('SunFlower 1'),
                		       'bg-col-sunFlower2'	=> t('SunFlower 2'),

                		       'bg-col-bitterSweet1' => t('BitterSweet 1'),
                		       'bg-col-bitterSweet2' => t('BitterSweet 2'),

                		       'bg-col-grapefruit1'	=> t('GrapeFruit 1'),
                		       'bg-col-grapefruit2'	=> t('GrapeFruit 2'),

                		       'bg-col-lavender1'	=> t('Lavender 1'),
                		       'bg-col-lavender2'	=> t('Lavender 2'),

                		       'bg-col-pinkRose1'	=> t('PinkRose 1'),
                		       'bg-col-pinkRose2'	=> t('PinkRose 2'),

                		       'bg-col-lightGray1'	=> t('LightGray 1'),
                		       'bg-col-lightGray2'	=> t('LightGray 2'),

                		       'bg-col-mediumGray1'	=> t('MediumGray 1'),
                		       'bg-col-mediumGray2'	=> t('MediumGray 2'),

                		       'bg-col-darkGray1'	=> t('Dark Gray 1'),
                		       'bg-col-darkGray2'	=> t('Dark Gray 2'));
	
	$text_colors = array('text-color-theme'      => t('Theme Color'),
	                     'text-color-white'      => t('White'),

	                     'text-col-lightGray1' => t('LightGray 1'),
	                     'text-col-lightGray2' => t('LightGray 2'),

	                     'text-col-mediumGray1' => t('MediumGray 1'),
	                     'text-col-mediumGray2' => t('MediumGray 2'),

	                     'text-col-darkGray1' => t('DarkGray 1'),
	                     'text-col-darkGray2' => t('DarkGray 2'),

	                     'text-color-custom'     => t('Custom'));

	$background = array('bg-img-1' => t('Polygon 1'),
						'bg-img-2' => t('Polygon 2'),
						'bg-img-3' => t('Polygon 3'),
						'bg-img-4' => t('Polygon 4'),
						'bg-img-5' => t('Polygon 5'),
						'bg-img-6' => t('Polygon 6'),
						'bg-img-7' => t('Polygon 7'),
						'bg-img-8' => t('Polygon 8'),
						'bg-img-9' => t('Polygon 9'),
						'bg-img-10' => t('Polygon 10'),
						'bg-img-11' => t('Packground Blur 1'),
						'bg-img-12' => t('Packground Blur 2'),
						'bg-img-13' => t('Packground Blur 3'),
						'bg-img-14' => t('Packground Blur 4'),
						'bg-img-14' => t('Packground Blur 5')
		);
	
	$form['settings'] = array(     
		'#type' => 'vertical_tabs',  
		'#title' => t('Special One Settings'),
		'#weight' => 2,              
		'#collapsible' => TRUE,      
		'#collapsed' => FALSE,       
	);                             
                                 

  /************************/
	/*** General Settings ***/
	/************************/

	$form['settings']['general'] = array(
		'#type' => 'fieldset',
		'#title' => t('General settings'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
	
	// Layout version
	$form['settings']['general']['layout'] = array(
		'#type' => 'fieldset',
		'#title' => t('Layout settings'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
	
	$form['settings']['general']['layout']['layout_version'] = array(
		'#type' => 'select',
		'#title' => t('Layout Version'),
		'#options' => array('fluid' => 'Fluid', 'boxed' => "Boxed"),
		'#default_value' => theme_get_setting('layout_version'),
		'#description' => t('Set the layout version of your theme.'),
	);
	
	$form['settings']['general']['layout']['theme_color'] = array(
		'#type' => 'select',
		'#title' => t('Theme Color'),
		'#options' => $theme_colors,
		'#default_value' => theme_get_setting('theme_color'),
		'#description' => t('Set the main color of your theme.'),
	);
	
	$form['settings']['general']['layout']['boxed_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Boxed Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('boxed_bColor'),
		'#description' => t('Set the background color for the boxed version.'),
	);
	
	
	// Breadcrumbs
	
	$form['settings']['general']['layout']['breadcrumb_position'] = array(
		'#type' => 'select',
		'#title' => t('Breadcrumb position'),
		'#options' => array(
		  'none' => t('-none-'),
		  'left' => t('Left'),
		  'right' => t('Right')
		),
		'#default_value' => theme_get_setting('breadcrumb_position')
	);
	
	$form['settings']['general']['layout']['breadcrumb_delimiter'] = array(
		'#type' => 'textfield',
		'#title' => t('Breadcrumb Delimiter'),
		'#default_value' => theme_get_setting('breadcrumb_delimiter'),
		'#size' => 10,
	);
	
	
	/************************/
	/*** Regions Settings ***/
	/************************/
	
	$form['settings']['regions'] = array(
		'#type' => 'fieldset',
		'#title' => t('Regions'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
	
	// Header region
	$form['settings']['regions']['header_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Header Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['header_region']['header_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('header_bColor'),
		'#description' => t('Set the Background Color for your Header Region.'),
	);
	
	$form['settings']['regions']['header_region']['header_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('header_tColor'),
		'#description' => t('Set the Text Color for your Header Region.'),
	);
	
	$form['settings']['regions']['header_region']['header_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('header_tiColor'),
		'#description' => t('Set the Color for your Titles in Header Region.'),
	);
	
	$form['settings']['regions']['header_region']['header_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('header_lColor'),
		'#description' => t('Set the Color for your Links in Header Region.'),
	);
	
	//Slider	
	$form['settings']['regions']['colors'] = array(
		'#type' => 'fieldset',
		'#title' => t('Slider settings'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['colors']['slider_color'] = array(
		'#type' => 'select',
		'#title' => t('Sequence Slider background color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('slider_color'),
		'#description' => t('Set the background color of your Sequence Slider.'),
	);

	$form['settings']['regions']['colors']['slider_use_bImg'] = array(
		'#type' => 'radios',
		'#title' => t('Do you want a background Image?'),
		'#options' => array('0' => t('No'), '1' => t('Yes')),
		'#default_value' => theme_get_setting('slider_use_bImg'),
		'#description' => t('If you want to use a background image instead of a background color choose \'Yes\'.'),
	);

	$form['settings']['regions']['colors']['slider_bImg'] = array(
		'#type' => 'select',
		'#title' => t('Sequence Slider Image Background'),
		'#options' => $background,
		'#default_value' => theme_get_setting('slider_bImg'),
		'#description' => t('Set the background image of your Sequence Slider.'),
	);

	// Top content region
	$form['settings']['regions']['top_content_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Top Content Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['top_content_region']['top_content_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('top_content_bColor'),
		'#description' => t('Set the Background Color for your Top Content Region.'),
	);
	
	$form['settings']['regions']['top_content_region']['top_content_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('top_content_tColor'),
		'#description' => t('Set the Text Color for your Top Content Region.'),
	);
	
	$form['settings']['regions']['top_content_region']['top_content_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('top_content_tiColor'),
		'#description' => t('Set the Color for your Titles in Top Content Region.'),
	);
	
	$form['settings']['regions']['top_content_region']['top_content_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('top_content_lColor'),
		'#description' => t('Set the Color for your Links in Top Content Region.'),
	);
	
	// Featured Region
	$form['settings']['regions']['featured_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Featured Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['featured_region']['featured_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('featured_bColor'),
		'#description' => t('Set the Background Color for your Featured Region.'),
	);
	
	$form['settings']['regions']['featured_region']['featured_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('featured_tColor'),
		'#description' => t('Set the Text Color for your Featured Region.'),
	);
	
	$form['settings']['regions']['featured_region']['featured_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('featured_tiColor'),
		'#description' => t('Set the Color for your Titles in Featured Region.'),
	);
	
	$form['settings']['regions']['featured_region']['featured_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('featured_lColor'),
		'#description' => t('Set the Color for your Links in Featured Region.'),
	);
	
	// Wide1 Region
	$form['settings']['regions']['wide1_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Content Wide1 Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['wide1_region']['wide1_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('wide1_bColor'),
		'#description' => t('Set the Background Color for your Content Wide1 Region.'),
	);
	
	$form['settings']['regions']['wide1_region']['wide1_use_bImg'] = array(
		'#type' => 'radios',
		'#title' => t('Do you want a background Image?'),
		'#options' => array('0' => t('No'), '1' => t('Yes')),
		'#default_value' => theme_get_setting('wide1_use_bImg'),
		'#description' => t('If you want to use a background image instead of a background color choose \'Yes\'.'),
	);

	$form['settings']['regions']['wide1_region']['wide1_bImg'] = array(
		'#type' => 'select',
		'#title' => t('Content Wide1 Region Image Background'),
		'#options' => $background,
		'#default_value' => theme_get_setting('wide1_bImg'),
		'#description' => t('Set the background image of your Content Wide1 Region.'),
	);
	
	$form['settings']['regions']['wide1_region']['wide1_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide1_tColor'),
		'#description' => t('Set the Text Color for your Content Wide1 Region.'),
	);
	
	$form['settings']['regions']['wide1_region']['wide1_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide1_tiColor'),
		'#description' => t('Set the Color for your Titles in Content Wide1 Region.'),
	);
	
	$form['settings']['regions']['wide1_region']['wide1_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide1_lColor'),
		'#description' => t('Set the Color for your Links in Content Wide1 Region.'),
	);
	
	// Wide2 Region
	$form['settings']['regions']['wide2_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Content Wide2 Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['wide2_region']['wide2_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('wide2_bColor'),
		'#description' => t('Set the Background Color for your Content Wide2 Region.'),
	);
	
	$form['settings']['regions']['wide2_region']['wide2_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide2_tColor'),
		'#description' => t('Set the Text Color for your Content Wide2 Region.'),
	);
	
	$form['settings']['regions']['wide2_region']['wide2_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide2_tiColor'),
		'#description' => t('Set the Color for your Titles in Content Wide2 Region.'),
	);
	
	$form['settings']['regions']['wide2_region']['wide2_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide2_lColor'),
		'#description' => t('Set the Color for your Links in Content Wide2 Region.'),
	);
	
	// Wide3 Region
	$form['settings']['regions']['wide3_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Content Wide3 Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['wide3_region']['wide3_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('wide3_bColor'),
		'#description' => t('Set the Background Color for your Content Wide3 Region.'),
	);
	
	$form['settings']['regions']['wide3_region']['wide3_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide3_tColor'),
		'#description' => t('Set the Text Color for your Content Wide3 Region.'),
	);
	
	$form['settings']['regions']['wide3_region']['wide3_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide3_tiColor'),
		'#description' => t('Set the Color for your Titles in Content Wide3 Region.'),
	);
	
	$form['settings']['regions']['wide3_region']['wide3_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide3_lColor'),
		'#description' => t('Set the Color for your Links in Content Wide3 Region.'),
	);
	
	// Wide4 Region
	$form['settings']['regions']['wide4_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Content Wide4 Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['wide4_region']['wide4_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('wide4_bColor'),
		'#description' => t('Set the Background Color for your Content Wide4 Region.'),
	);
	
	$form['settings']['regions']['wide4_region']['wide4_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide4_tColor'),
		'#description' => t('Set the Text Color for your Content Wide4 Region.'),
	);
	
	$form['settings']['regions']['wide4_region']['wide4_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide4_tiColor'),
		'#description' => t('Set the Color for your Titles in Content Wide4 Region.'),
	);
	
	$form['settings']['regions']['wide4_region']['wide4_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('wide4_lColor'),
		'#description' => t('Set the Color for your Links in Content Wide4 Region.'),
	);
	
	// Before Footer Region
	$form['settings']['regions']['before_footer_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Before Footer Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['before_footer_region']['before_footer_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('before_footer_bColor'),
		'#description' => t('Set the Background Color for your Before Footer Region.'),
	);
	
	$form['settings']['regions']['before_footer_region']['before_footer_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('before_footer_tColor'),
		'#description' => t('Set the Text Color for your Before Footer Region.'),
	);
	
	$form['settings']['regions']['before_footer_region']['before_footer_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('before_footer_tiColor'),
		'#description' => t('Set the Color for your Titles in Before Footer Region.'),
	);
	
	$form['settings']['regions']['before_footer_region']['before_footer_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('before_footer_lColor'),
		'#description' => t('Set the Color for your Links in Before Footer Region.'),
	);
	
	// Footer Four Columns Region
	$form['settings']['regions']['footer_four_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Footer Four Columns Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);

	$form['settings']['regions']['footer_four_region']['footer_four_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('footer_four_bColor'),
		'#description' => t('Set the Background Color for your Footer Four Columns Region.'),
	);
	
	$form['settings']['regions']['footer_four_region']['footer_four_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_four_tColor'),
		'#description' => t('Set the Text Color for your Footer Four Columns Region.'),
	);
	
	$form['settings']['regions']['footer_four_region']['footer_four_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_four_tiColor'),
		'#description' => t('Set the Color for your Titles in Footer Four Columns Region.'),
	);
	
	$form['settings']['regions']['footer_four_region']['footer_four_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_four_lColor'),
		'#description' => t('Set the Color for your Links in Footer Four Columns Region.'),
	);
	
	// Footer Region
	$form['settings']['regions']['footer_region'] = array(
		'#type' => 'fieldset',
		'#title' => t('Footer Region'),
		'#collapsible' => TRUE,
		'#collapsed' => TRUE,
	);
	
	$form['settings']['regions']['footer_region']['footer_bColor'] = array(
		'#type' => 'select',
		'#title' => t('Background Color'),
		'#options' => $background_colors,
		'#default_value' => theme_get_setting('footer_bColor'),
		'#description' => t('Set the Background Color for your Footer Region.'),
	);
	
	$form['settings']['regions']['footer_region']['footer_tColor'] = array(
		'#type' => 'select',
		'#title' => t('Text Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_tColor'),
		'#description' => t('Set the Text Color for your Footer Region.'),
	);
	
	$form['settings']['regions']['footer_region']['footer_tiColor'] = array(
		'#type' => 'select',
		'#title' => t('Title Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_tiColor'),
		'#description' => t('Set the Color for your Titles in Footer Region.'),
	);
	
	$form['settings']['regions']['footer_region']['footer_lColor'] = array(
		'#type' => 'select',
		'#title' => t('Link Color'),
		'#options' => $text_colors,
		'#default_value' => theme_get_setting('footer_lColor'),
		'#description' => t('Set the Color for your Links in Footer Region.'),
	);
	
	/************************/
	/*** Maintenance page ***/
	/************************/
	$form['settings']['maintenance'] = array(
		'#type' => 'fieldset',
		'#title' => t('Maintenance page'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
	
	$form['settings']['maintenance']['email'] = array(
		'#type' => 'fieldset',
		'#title' => t('Email settings'),
		'#collapsible' => TRUE,
		'#collapsed' => FALSE,
	);
	
	$form['settings']['maintenance']['email']['email_maintenance'] = array(
		'#type' => 'textfield',
		'#title' => t('Email for maintenance'),
		'#default_value' => theme_get_setting('email_maintenance'),
		'#size' => 50,
		'#maxlength' => 50,
	);
	
}