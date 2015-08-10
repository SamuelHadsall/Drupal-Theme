<?php

function designhardware_js_alter(&$js) {
	if (!user_is_logged_in()) {
	  $path = 'http://code.jquery.com/jquery-1.11.0.min.js';
	
	  // Copy the current jQuery file settings and change
	  $js[$path] = $js['misc/jquery.js'];
	
	  // Update necessary settings
	  $js[$path]['version'] = 1.11;
	  $js[$path]['data'] = $path;
	
	  // Finally remove the original jQuery
	  unset($js['misc/jquery.js']);
	}
}

/**
* Override or insert variables into the html template.

function designhardware_preprocess_html(&$vars) {
  //include the js file in the header
  drupal_add_js('https://maps.googleapis.com/maps/api/js?sensor=false');
  //example :  drupal_add_js(path_to_theme().'/js/google-analytics.js');
}

/*function designhardware_preprocess_page(&$vars, $hook) {
	// Primary nav.
	$vars['primary_nav'] = FALSE;
	if ($vars['main_menu']) {
		// Build links.
		  $vars['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
		// Provide default theme wrapper function.
		  $vars['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
	}
}

/**
* Theme wrapper function for the primary menu links
*/
function designhardware_menu_tree__menu_quick_links(&$vars) {
  return '<ul>' . $vars['tree'] . '</ul>';
}

function designhardware_menu_link__menu_quick_links(array $variables) {
  //unset all the classes
  unset($variables['element']['#attributes']['class']);

  $element = $variables['element'];

  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

