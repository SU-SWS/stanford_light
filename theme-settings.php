<?php
function stanford_light_form_system_theme_settings_alter(&$form, &$form_state) {

// Design Container
  $form['design_container'] = array('#type' => 'fieldset',
    '#title' => t('Customize design'),
    '#description' => t('Use these settings to adjust the style and typography of your site.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

// Styles
   $form['design_container']['styles'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose styles'),
    '#default_value' => theme_get_setting('styles'),
    '#options'       => array(
	  'styles-light' => t('Light - <strong><em>Default</em></strong>'),
	  'styles-dark' => t('Dark'),
	  'styles-bright' => t('Bright'),
	  'styles-plain' => t('Plain'),
	  'styles-rich' => t('Rich'),
	  'styles-contrast' => t('High Contrast'),
    ),
  );
    
// Fonts
   $form['design_container']['fonts'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose fonts'),
    '#default_value' => theme_get_setting('fonts'),
    '#options'       => array(
      'fonts-sans' => t('Sans Serif - <strong><em>Default</em></strong>'),
	  'fonts-serif' => t('Serif'),
	  'fonts-slab' => t('Slab Serif'),
    ),
  );

// Red bar / no red bar
   $form['design_container']['red_bar'] = array(
    '#type'          => 'radios',
    '#title'         => t('Enable red bar'),
    '#default_value' => theme_get_setting('red_bar'),
    '#options'       => array(
      'red-bar' => t('Show red bar above header - <strong><em>Default</em></strong>'),
	  '' => t('Do not show red bar above header'),
    ),
  );
  
// Header Background Container
  $form['header_background_container'] = array('#type' => 'fieldset',
    '#title' => t('Header Background'),
    '#description' => t('Use these settings to select a different header background image.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
// Header background image
  $form['header_background_container']['header_bg_style'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose image style'),
    '#default_value' => theme_get_setting('header_bg_style'),
    '#options'       => array(
      '' => t('Wallpaper pattern - <strong><em>Default</em></strong>'),
	  'photobg ' => t('Photo image'),
    ),
  );
  
 $form['header_background_container']['header_bg_classes'] = array(
    '#type'          => 'radios',
    '#title'         => t('Header background image'),
    '#default_value' => theme_get_setting('header_bg_classes'),
    '#options'       => array(
      '' => t('None - <strong><em>Default</em></strong>'),
	  'bodybg ' => t('Use my image (upload below):'),
    ),
  );
   
  // Default path for image
  $header_bg_path = theme_get_setting('header_bg_path');
  if (file_uri_scheme($header_bg_path) == 'public') {
    $header_bg_path = file_uri_target($header_bg_path);
  }
 
  // Helpful text showing the file name, disabled to avoid the user thinking it can be used for any purpose.
  $form['header_background_container']['header_bg_path'] = array(
    '#type' => 'hidden',
    '#title' => 'Path to background image',
    '#default_value' => $header_bg_path,
  );
  if (!empty($header_bg_path)) {
    $form['design_container']['header_bg_preview'] = array(
      '#markup' => !empty($header_bg_path) ? 
       theme('image', array('path' => theme_get_setting('header_bg_path'))) : '',
    );
  }

  // Upload field
  $form['header_background_container']['header_bg_upload'] = array(
    '#type' => 'file',
    '#title' => 'Upload background image',
    '#description' => 'You can upload the following image file types: *.jpg, *.gif, or *.png',
  );

// Slogan

// Logo

// Background image

// Border Style Override
$form['border_container'] = array();

}