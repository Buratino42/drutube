<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
function drutubetheme_process_region(&$vars) {
  $theme = alpha_get_theme();
  $vars['main_menu'] = $theme->page['main_menu'];
  /*
  if (in_array($vars['elements']['#region'], array('menu'))) {
    

    switch ($vars['elements']['#region']) {
      
      case 'menu':
        
              break;

      
    }
  }
  */
}

/**
 * Replace invalid breadcrumb title.
 *
 * @param $vars
 */
function drutubetheme_preprocess_breadcrumb(&$vars) {
  if(current_path() == 'video'){
    $vars['breadcrumb'][1] = str_replace('[all items]', t('Video search'), $vars['breadcrumb'][1]);
  }
}
