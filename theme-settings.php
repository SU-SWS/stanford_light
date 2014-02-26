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
	  'fonts-slab' => t('Slab'),
    ),
  );

// Red bar / no red bar

// Header background image

// Slogan

// Logo

// Background image

}