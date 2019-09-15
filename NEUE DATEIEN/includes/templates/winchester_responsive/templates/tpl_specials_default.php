<?php
/**
 * Page Template
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_specials_default.php for Winchester 2019-09-14 15:49:16Z webchills $
 */
 ?>
<div class="centerColumn" id="specialsListing">
<h1 id="specialsListingHeading"><?php echo $breadcrumb->last(); ?></h1>
<?php
require($template->get_template_dir('tpl_modules_product_listing.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_product_listing.php');
?>
</div>