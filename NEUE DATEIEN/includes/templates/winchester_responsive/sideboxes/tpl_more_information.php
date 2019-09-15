<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_more_information.php for Winchester 2019-06-20 15:49:16Z webchills $
 */
  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">' . "\n" ;
  $content .=  "\n" . '<ul style="margin: 0; padding: 0; list-style-type: none;">' . "\n" ;
  for ($i=0; $i<sizeof($more_information); $i++) {
    $content .= '<li><div class="betterMoreinformation">' . $more_information[$i] . '</div></li>' . "\n" ;
  }

  $content .= '</ul>' . "\n" ;
  $content .= '</div>';