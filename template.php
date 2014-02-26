<?php
function stanford_light_preprocess_page(&$vars) {
  // theme option variables
  $color_palette = theme_get_setting('color_palette'); 
  $typography = theme_get_setting('typography');
  
  // color palette variables
  if ($color_palette == 'color-default') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_color_sandstone.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 500, 'preprocess' => FALSE));
  }
  if ($color_palette == 'color-bold') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_color_bold.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 500, 'preprocess' => FALSE));
  }
  if ($color_palette == 'color-monochrome') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_color_monochrome.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 500, 'preprocess' => FALSE));
  }
  
  // typography variables
  if ($typography == 'typography-default') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_typography_professional.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 600, 'preprocess' => FALSE));
  }
  if ($typography == 'typography-trendy') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_typography_trendy.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 600, 'preprocess' => FALSE));
  }
  if ($typography == 'typography-writer') {
  drupal_add_css(path_to_theme() . '/css/stanford_light_typography_writer.css', array('group' => CSS_THEME, 'media' => 'all', 'weight' => 600, 'preprocess' => FALSE));
  }
  
  $vars['styles'] = drupal_get_css();
}