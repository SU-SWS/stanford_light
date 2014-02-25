<?php
function stanford_light_form_system_theme_settings_alter(&$form, &$form_state) {

// Style Container
  $form['style_container'] = array('#type' => 'fieldset',
    '#title' => t('Style'),
    '#description' => t('Use these settings to adjust the color palette and typography of your site.'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

// Color palettes
   $form['style_container']['color_palette'] = array(
    '#type'          => 'radios',
    '#title'         => t('Color Palette'),
    '#default_value' => theme_get_setting('color_palette'),
    '#options'       => array(
	  'color-default' => t('Sandstone - <strong><em>Default</em></strong>'),
      'color-bold' => t('Bold'),
	  'color-monochrome' => t('Monochrome'),
    ),
  );
  
// Typography
   $form['style_container']['typography'] = array(
    '#type'          => 'radios',
    '#title'         => t('Typography'),
    '#default_value' => theme_get_setting('typography'),
    '#options'       => array(
      'typography-default' => t('Professional - <strong><em>Default</em></strong>'),
	  'typography-trendy' => t('Trendy'),
	  'typography-writer' => t('Writer'),
    ),
  );

// Red bar / no red bar

// Header background image

// Slogan

// Logo

// Background image

}