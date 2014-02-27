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
  $form['header_bkg_container'] = array('#type' => 'fieldset',
    '#title' => t('Header Background'),
    '#description' => t('Use these settings to select a different header background image.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
// Header background image
 $form['header_bkg_container']['header_bkg'] = array(
    '#type'          => 'radios',
    '#title'         => t('Enable header background image'),
    '#default_value' => theme_get_setting('header_bg_classes'),
    '#options'       => array(
      '' => t('None - <strong><em>Default</em></strong>'),
	  'header-bkg' => t('Use my image (upload below):'),
    ),
  );
   
  // Default path for header background image
  $header_bkg_path = theme_get_setting('header_bkg_path');
  if (file_uri_scheme($header_bkg_path) == 'public') {
    $header_bkg_path = file_uri_target($header_bkg_path);
  }
 
  // Helpful text showing the file name, disabled to avoid the user thinking it can be used for any purpose.
  $form['header_bkg_container']['header_bkg_path'] = array(
    '#type' => 'hidden',
    '#title' => 'Path to background image',
    '#default_value' => $header_bkg_path,
  );
  if (!empty($header_bkg_path)) {
    $form['header_bkg_container']['header_bkg_preview'] = array(
      '#markup' => !empty($header_bkg_path) ? 
       theme('image', array('path' => theme_get_setting('header_bkg_path'))) : '',
    );
  }

  // Upload header background image field
  $form['header_bkg_container']['header_bkg_upload'] = array(
    '#type' => 'file',
    '#title' => 'Upload header background image',
    '#description' => 'You can upload the following image file types: *.jpg, *.gif, or *.png',
  );
  
  // Header background image style
  $form['header_bkg_container']['header_bkg_style'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose header background image style'),
    '#default_value' => theme_get_setting('header_bkg_style'),
    '#options'       => array(
      'header-bkg-image' => t('Photo image - <strong><em>Default</em></strong>'),
	  'header-bkg-wallpaper' => t('Wallpaper pattern'),
    ),
  );
  
  // Header background text color
  $form['header_bkg_container']['header_bkg_text'] = array(
    '#type'          => 'radios',
    '#title'         => t('Choose header text color'),
    '#default_value' => theme_get_setting('header_bkg_style'),
    '#options'       => array(
      'header-bkg-text-light' => t('Light - <strong><em>Default</em></strong>'),
	  'header-bkg-text-dark' => t('Dark'),
    ),
  );
  
// Slogan

// Logo

// Body background image Override
$form['background_container'] = array();

// Border Style Override
$form['border_container'] = array();

}