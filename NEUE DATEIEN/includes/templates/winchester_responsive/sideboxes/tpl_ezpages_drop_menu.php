<?php
/**
 * Side Box Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_ezpages_drop_menu.php 2019-09-14 07:56:41Z webchills $
 */
  $content = "";$content .="\n";for ($i=1, $n=sizeof($var_linksList); $i<=$n; $i++) {$content .= '          <li><i class="icon-circle-arrow-right"></i><a href="' . $var_linksList[$i]['link'] . '">' . $var_linksList[$i]['name'] . '</a></li>' . "\n" ;} // end FOR loop
?>