<?php

variable_set('install_profile', 'standard');

$theme_path = drupal_get_path('theme', 'druplex');
require_once $theme_path . '/includes/main-menu.inc';
require_once $theme_path . '/includes/fields.inc';


/**
 * Implements hook_html_head_alter()
 * Change the default meta character type tag with HTML5 version
 */
function druplex_html_head_alter(&$head_elements) {
   $head_elements['system_meta_content_type']['#attributes'] = array(
	   'charset' => 'UTF-8'
   );
}

/**
 * Implements hook_preprocess_html()
 *
 */
function druplex_preprocess_html(&$variables) {
  /**** Add the color css ****/
  $path = path_to_theme();
  $color = theme_get_setting('theme_color');
  
  drupal_add_css($path . '/css/colors/' . $color . '.css', array('group' => CSS_THEME, 'type' => 'file', 'id' => 'themeColor'));
  drupal_add_css($path . '/css/style-3.css', array('group' => CSS_THEME, 'type' => 'file'));
  
  // passing variables to the javascript files
  $layout_version = theme_get_setting('layout_version');
  
  $boxed_bColor   = theme_get_setting('boxed_bColor');
  $use_bPattern   = theme_get_setting('use_bPattern');
  $boxed_bPattern = theme_get_setting('boxed_bPattern');
  
  
  $header_bColor         = theme_get_setting('header_bColor');
  $header_tColor         = theme_get_setting('header_tColor');
  $header_tiColor        = theme_get_setting('header_tiColor');
  $header_lColor         = theme_get_setting('header_lColor');
                         
  $top_content_bColor    = theme_get_setting('top_content_bColor');
  $top_content_tColor    = theme_get_setting('top_content_tColor');
  $top_content_tiColor   = theme_get_setting('top_content_tiColor');
  $top_content_lColor    = theme_get_setting('top_content_lColor');
                         
  $featured_bColor       = theme_get_setting('featured_bColor');
  $featured_tColor       = theme_get_setting('featured_tColor');
  $featured_tiColor      = theme_get_setting('featured_tiColor');
  $featured_lColor       = theme_get_setting('featured_lColor');
                         
  $wide1_bColor          = theme_get_setting('wide1_bColor');
  $wide1_tColor          = theme_get_setting('wide1_tColor');
  $wide1_tiColor         = theme_get_setting('wide1_tiColor');
  $wide1_lColor          = theme_get_setting('wide1_lColor');
  $wide1_use_bImg        = theme_get_setting('wide1_use_bImg');
  $wide1_bImg            = theme_get_setting('wide1_bImg');
                         
  $wide2_bColor          = theme_get_setting('wide2_bColor');
  $wide2_tColor          = theme_get_setting('wide2_tColor');
  $wide2_tiColor         = theme_get_setting('wide2_tiColor');
  $wide2_lColor          = theme_get_setting('wide2_lColor');
                         
  $wide3_bColor          = theme_get_setting('wide3_bColor');
  $wide3_tColor          = theme_get_setting('wide3_tColor');
  $wide3_tiColor         = theme_get_setting('wide3_tiColor');
  $wide3_lColor          = theme_get_setting('wide3_lColor');
  $wide3_use_bImg        = theme_get_setting('wide3_use_bImg');
  $wide3_bImg            = theme_get_setting('wide3_bImg');
                         
  $wide4_bColor          = theme_get_setting('wide4_bColor');
  $wide4_tColor          = theme_get_setting('wide4_tColor');
  $wide4_tiColor         = theme_get_setting('wide4_tiColor');
  $wide4_lColor          = theme_get_setting('wide4_lColor');
  
  $before_footer_bColor  = theme_get_setting('before_footer_bColor');
  $before_footer_tColor  = theme_get_setting('before_footer_tColor');
  $before_footer_tiColor = theme_get_setting('before_footer_tiColor');
  $before_footer_lColor  = theme_get_setting('before_footer_lColor');
  
  $footer_four_bColor    = theme_get_setting('footer_four_bColor');
  $footer_four_tColor    = theme_get_setting('footer_four_tColor');
  $footer_four_tiColor   = theme_get_setting('footer_four_tiColor');
  $footer_four_lColor    = theme_get_setting('footer_four_lColor');
  
  $footer_bColor         = theme_get_setting('footer_bColor');
  $footer_tColor         = theme_get_setting('footer_tColor');
  $footer_tiColor        = theme_get_setting('footer_tiColor');
  $footer_lColor         = theme_get_setting('footer_lColor');
  

  $slider_color    = theme_get_setting('slider_color');
  $slider_use_bImg = theme_get_setting('slider_use_bImg');
  $slider_bImg     = theme_get_setting('slider_bImg');
  
  $settings = array('layout_version' => $layout_version,
                    'theme_color' => $color,
                    'boxed_bColor'   => $boxed_bColor,
                    'use_bPattern'   => $use_bPattern,
                    'boxed_bPattern' => $boxed_bPattern,
                    'header_bColor'         => $header_bColor,
                    'header_tColor'         => $header_tColor,
                    'header_tiColor'        => $header_tiColor,
                    'header_lColor'         => $header_lColor,
                    'top_content_bColor'    => $top_content_bColor,
                    'top_content_tColor'    => $top_content_tColor,
                    'top_content_tiColor'   => $top_content_tiColor,
                    'top_content_lColor'    => $top_content_lColor,
                    'featured_bColor'       => $featured_bColor,
                    'featured_tColor'       => $featured_tColor,
                    'featured_tiColor'      => $featured_tiColor,
                    'featured_lColor'       => $featured_lColor,
                    'wide1_bColor'          => $wide1_bColor,
                    'wide1_tColor'          => $wide1_tColor,
                    'wide1_tiColor'         => $wide1_tiColor,
                    'wide1_lColor'          => $wide1_lColor,
                    'wide1_use_bImg'        => $wide1_use_bImg,
                    'wide1_bImg'            => $wide1_bImg,
                    'wide2_bColor'          => $wide2_bColor,
                    'wide2_tColor'          => $wide2_tColor,
                    'wide2_tiColor'         => $wide2_tiColor,
                    'wide2_lColor'          => $wide2_lColor,
                    'wide3_bColor'          => $wide3_bColor,
                    'wide3_tColor'          => $wide3_tColor,
                    'wide3_tiColor'         => $wide3_tiColor,
                    'wide3_lColor'          => $wide3_lColor,
                    'wide3_use_bImg'        => $wide3_use_bImg,
                    'wide3_bImg'            => $wide3_bImg,
                    'wide4_bColor'          => $wide4_bColor,
                    'wide4_tColor'          => $wide4_tColor,
                    'wide4_tiColor'         => $wide4_tiColor,
                    'wide4_lColor'          => $wide4_lColor,
                    'before_footer_bColor'  => $before_footer_bColor,
                    'before_footer_tColor'  => $before_footer_tColor,
                    'before_footer_tiColor' => $before_footer_tiColor,
                    'before_footer_lColor'  => $before_footer_lColor,
                    'footer_four_bColor'    => $footer_four_bColor,
                    'footer_four_tColor'    => $footer_four_tColor,
                    'footer_four_tiColor'   => $footer_four_tiColor,
                    'footer_four_lColor'    => $footer_four_lColor,
                    'footer_bColor'         => $footer_bColor,
                    'footer_tColor'         => $footer_tColor,
                    'footer_tiColor'        => $footer_tiColor,
                    'slider_color'          => $slider_color,
                    'slider_use_bImg'       => $slider_use_bImg,
                    'slider_bImg'           => $slider_bImg,
                    'footer_lColor'         => $footer_lColor);

  drupal_add_js(array("settings" => $settings), 'setting');
}

/**
 * Override or insert variables into the page template.
 */
function druplex_preprocess_page(&$variables) {

  /**** General variables ****/ 
  $variables['breadcrumb_position'] = theme_get_setting('breadcrumb_position');
   
  /**** Creating the main menu and secondary tree ****/
  $variables['primary_nav'] = FALSE;
	if ($variables['main_menu']) {
		$variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
	}
	
	$variables['secondary_nav'] = FALSE;
	if ($variables['secondary_menu']) {
		$variables['secondary_nav'] = menu_tree(variable_get('menu_secondary_links_source', 'user-menu'));
	}
	
	/**** Configuring the classes for the Sidebars and Content regions ****/
	$variables['sidebar_class'] = 'col-md-3';
	$variables['content_class'] = 'col-md-6';
	if (($variables['page']['sidebar_first'] && !$variables['page']['sidebar_second']) ||
	    (!$variables['page']['sidebar_first'] && $variables['page']['sidebar_second'])) {
	   $variables['content_class'] = 'col-md-9';
	} elseif (!$variables['page']['sidebar_first'] && !$variables['page']['sidebar_second']) {
	   $variables['content_class'] = 'col-md-12';
	}
	
	/**** Configuring the classes for the Footers columns ****/
	//Define variables for easy code writing to calculate the classes for the Footer columns
	$f_first = $variables['page']['footer_firstcolumn'];
	$f_second = $variables['page']['footer_secondcolumn'];
	$f_third = $variables['page']['footer_thirdcolumn'];
	$f_fourth = $variables['page']['footer_fourthcolumn'];
	
	$footer_columns = 0;
	
	if ($f_first) { $footer_columns++; }
	if ($f_second) { $footer_columns++; }
	if ($f_third) { $footer_columns++; }
	if ($f_fourth) { $footer_columns++; }
	
	switch ($footer_columns) {
	   case 1: $variables['footer_class'] = 'col-md-12'; break;
	   case 2: $variables['footer_class'] = 'col-md-6'; break;
	   case 3: $variables['footer_class'] = 'col-md-4'; break;
	   case 4: $variables['footer_class'] = 'col-md-3'; break;
	   default: $variables['footer_class'] = 'col-md-3';
	}
	
	$variables['footer_columns'] = $footer_columns;
	
	/**** Footer variables from the theme settings ****/
	$variables['last_footer_class'] = 'col-md-6';
	
	$footer_left = $variables['page']['footer_left'];
	$footer_right = $variables['page']['footer_right'];
	
	if (!$footer_left || !$footer_right) { $variables['last_footer_class'] = 'col-md-12'; }
	
}

/**
 * Override or insert variables into the node template.
 */
function druplex_preprocess_node(&$variables) {
  
  $node = $variables['node'];
  $variables['date'] = format_date($node->created);
   
  $variables['field_image_class'] = 'col-md-12';
  if (!empty($node->{'field_image'})) {
    $variables['field_image_class'] = 'col-md-7';
  }
   
  if (variable_get('node_submitted_' . $node->type, TRUE)) {
    $variables['display_submitted'] = TRUE;
   
    $date = format_date($node->created, 'custom', 'M d, Y');
    $user = theme('username', array('account' => $node));
      
    $variables['submitted'] = '<ul class="submitted">';
    $variables['submitted'] .= '<li>' . $date . '</li>';
    $variables['submitted'] .= '<li>' . $user . '</li>';
      
    if (!empty($node->{'field_tags'})) {
      $tags = druplex_node_tags($node);
      $variables['submitted'] .= '<li>' . $tags . '</li>';
    }
      
    if ($node->comment == COMMENT_NODE_OPEN) {
      $comments = $node->comment_count . t(' comments');
      $variables['submitted'] .= '<li>' . $comments . '</li>';
    }
    
    $variables['submitted'] .= '</ul>';
  } else {
    $variables['display_submitted'] = FALSE;
    $variables['submitted'] = '';
  }
   
}

/**
 * Implements template_preprocess_maintenance_page
 */
function druplex_preprocess_maintenance_page(&$variables) {
  $path = path_to_theme();
  $color = theme_get_setting('theme_color');
  drupal_add_css($path . '/css/colors/' . $color . '.css', array('group' => CSS_THEME, 'type' => 'file'));
  drupal_add_css($path . '/css/style-responsive.css', array('group' => CSS_THEME, 'type' => 'file'));
  
  $variables['email_maintenance'] = theme_get_setting('email_maintenance');
}

/**
 * Implements theme_breadcrumb
 */
function druplex_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $delimiter = theme_get_setting('breadcrumb_delimiter');
  
  $output = "";
  
  if (!empty($breadcrumb)) {
    $output = '<div class="breadcrumb">'. implode($delimiter, $breadcrumb) . '</div>';
  }
  
  return $output;
}

/**
 * Implements theme_feed_icon
 */
function druplex_feed_icon($variables) {
  $text = t('Subscribe to !feed-title', array('!feed-title' => $variables['title']));
  
  $image = "<i class=\"fa fa-rss\"></i>";
  
  return l($image, $variables['url'], array('html' => TRUE, 'attributes' => array('class' => array('feed-icon'), 'title' => $text)));
}

/**
 * Theming the node images (apply a slider)
 */
function druplex_field__field_image($variables) {

  $output = '<div class="flexslider"><ul class="slides">';

  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li>' . drupal_render($item) . '</li>';
  }

  $output .= '</ul></div>';
  
  return $output;
}

/**
 * Theming the blog images (apply a slider)
 */
function druplex_field__field_blog_images($variables) {

  $output = '<div class="flexslider"><ul class="slides">';

  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li>' . drupal_render($item) . '</li>';
  }

  $output .= '</ul></div>';
  
  return $output;
}

/**
 * Theming the portfolio images (apply a slider)
 */
function druplex_field__field_portfolio_images($variables) {

  $output = '<div class="flexslider"><ul class="slides">';

  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li>' . drupal_render($item) . '</li>';
  }

  $output .= '</ul></div>';
  
  return $output;
}

/**
 * Theming the portfolio link
 */
function druplex_field__field_portfolio_link($variables) {

  $output = '';
  
  $link = $variables['items'];

  if (!empty($link)) {
    $output .= '<a href="' . drupal_render($link) . '">' . t('View project') . '</a>';
  }
  
  return $output;
}

/**
 * Theming the portfolio tags
 */
function druplex_field__field_portfolio_tag($variables) {

  $output = '<ul class="submitted"><li><i class="icon-tags"></i></li>';

  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li>' . drupal_render($item) . '</li>';
  }

  $output .= '</ul>';
  
  return $output;
}

/**
 * Implements hook_form_alter
 */
function druplex_form_alter(&$form, &$form_state, $form_id) {
  
  /* Button submit for most forms */
  if (!empty($form['actions']['submit'])) {
    $form['actions']['submit']['#attributes']['class'] = array('btn btn-primary');
  }
  
  if ($form['#id'] == 'comment-form') {
    
    if (!empty($form['author']['name'])) {
      $form['author']['name']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['author']['mail'])) {
      $form['author']['mail']['#attributes']['class'] = array('large-input');
      $form['author']['mail']['#description'] = '';
    }
    
    if (!empty($form['author']['homepage'])) {
      $form['author']['homepage']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['subject'])) {
      $form['subject']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['comment_body'])) {
      $form['comment_body']['#attributes']['class'] = array('extra-large-input');
    }

    if (!empty($form['actions']['preview'])) {
      $form['actions']['preview']['#attributes']['class'] = array('btn btn-primary');
    }
  }
  
  if ($form['#id'] == 'contact-site-form') {
    if (!empty($form['mail'])) {
      $form['name']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['mail'])) {
      $form['mail']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['subject'])) {
      $form['subject']['#attributes']['class'] = array('large-input');
    }
    
    if (!empty($form['message'])) {
      $form['message']['#prefix'] = '<div class="extra-large-input">';
      $form['message']['#suffix'] = '</div>';
    }
  }
  
  if ($form['#id'] == 'search-block-form') {
    if (!empty($form['actions']['submit'])) {
      $form['search_block_form']['#attributes']['placeholder'] = t('Search...');
      $form['actions']['submit']['#value'] = '';
    }
  }
  
  if ($form['#id'] == 'search-form') {
    if (!empty($form['basic']['keys'])) {
      $form['basic']['keys']['#title'] = '';
    }
    
    if (!empty($form['basic']['submit'])) {
      $form['basic']['submit']['#attributes']['class'] = array('btn btn-primary');
    }
  
    if (!empty($form['advanced']['submit'])) {
      $form['advanced']['submit']['#attributes']['class'] = array('btn btn-primary');
    }
  }
  
  if (!empty($form['#form_id']) && substr($form['#form_id'], 0, 10) === "simplenews") {
    if (!empty($form['submit'])) {
      $form['submit']['#attributes']['class'] = array('btn btn-primary');
    }
    
    if (!empty($form['subscribe'])) {
    	$form['subscribe']['#attributes']['class'] = array('btn btn-primary');
    }

    if (!empty($form['unsubscribe'])) {
      $form['unsubscribe']['#attributes']['class'] = array('btn btn-primary');
    }

    if (!empty($form['update'])) {
      $form['update']['#attributes']['class'] = array('btn btn-primary');
    }
    
    if (!empty($form['mail'])) {
      $form['mail']['#title'] = '';
      $form['mail']['#required'] = false;
      $form['mail']['#attributes']['placeholder'] = t('Enter your email address...');
    }
  }

}

/**
 * Implements theme_form_required_marker
 */
function druplex_form_required_marker($variables) {
  
  return '<small> (' . t('required') . ')</small>';
}