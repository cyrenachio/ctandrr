<?php

/**
 * Add body classes if certain regions have content.
 */
function richerrecruitment_preprocess_html(&$variables) {
	
	$options = array(
    'group' => JS_THEME,
	);
	drupal_add_css(path_to_theme() . '/css/responsive.css', array('group' => CSS_THEME,'preprocess' => FALSE));
	
	drupal_add_js(drupal_get_path('theme', 'richerrecruitment'). '/js/jquery-1.11.1.min.js', $options);
	drupal_add_js(drupal_get_path('theme', 'richerrecruitment'). '/js/jquery-migrate-1.2.1.js', $options);
	
	

	

  if (!empty($variables['page']['top_search'])){
    $variables['classes_array'][] = 'top_search';
  }
  
  if (!empty($variables['page']['home_slider'])){
    $variables['classes_array'][] = 'home_slider';
  }
  
  if (!empty($variables['page']['home_page_top'])){
    $variables['classes_array'][] = 'home_page_top';
  }
   
  if (!empty($variables['page']['footer_firstcolumn'])){
    $variables['classes_array'][] = 'footer_firstcolumn';
  }
  
  if (!empty($variables['page']['footer_secondcolumn'])){
	  $variables['classes_array'][] = 'footer_secondcolumn';
  }
  if (!empty($variables['page']['footer_thirdcolumn'])){
		$variables['classes_array'][] = 'footer_thirdcolumn';
  }
  if (!empty($variables['page']['footer_fourthcolumn'])){
		$variables['classes_array'][] = 'footer_fourthcolumn';
  }
  
  if (!empty($variables['page']['footer_copyright'])) {
    $variables['classes_array'][] = 'footer_copyright';
  }
  
  if (!empty($variables['page']['footer_links'])) {
    $variables['classes_array'][] = 'footer_links';
  }
  
  if (!empty($variables['page']['developed_by'])) {
    $variables['classes_array'][] = 'developed_by';
  }
  
  
  
  
}


/**
 * Implements template_preprocess_hook().
 */
function richerrecruitment_preprocess_nivo_slider_wrapper(&$variables) {
  $variables['theme'] = variable_get('nivo_slider_theme', 'default');
  $variables['banners'] = nivo_slider_slider();
  $variables['html_captions'] = variable_get('nivo_slider_banner_html_captions', '');
}


function richerrecruitment_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 40;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/magglass.png');

    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function richerrecruitment_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Override or insert variables into the page template.
 */
function richerrecruitment_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
}

/**
 * Override or insert variables into the node template.
 */
function richerrecruitment_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

/**
 * Override or insert variables into the block template.
 */
function richerrecruitment_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

/**
 * Implements theme_menu_tree().
 */
function richerrecruitment_menu_tree($variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function richerrecruitment_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '"' . $variables['attributes'] .'>' . $output . '</div>';

  return $output;
}