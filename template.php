<?php
// $Id: template.php,v 1.25 2010/11/20 04:03:51 webchick Exp $

/**
 * Override or insert variables into the html template.
 */
function rhubarb_preprocess_html(&$vars) {
  // Add conditional CSS for IE8 and below.
  drupal_add_css(path_to_theme() . '/css/ie8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  // Add conditional CSS for IE6.
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}