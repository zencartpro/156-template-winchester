<?php
/**
 * Module Template - categories_tabs
 *
 * Template stub used to display categories-tabs output
 *
 * @package templateSystem
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart-pro.at/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_categories_tabs.php 2019-04-27 15:13:00Z webchills $
 */
?>

<div id="menu">
<ul class="slimmenu">


    <li class="test"><a href="javascript:void(0)" class="mshop"><?php echo HEADER_TITLE_CATEGORIES; ?></a>
<?php
    // load the UL-generator class and produce the menu list dynamically from there
    require_once (DIR_WS_CLASSES . 'categories_ul_generator.php');
$zen_CategoriesUL = new zen_categories_ul_generator;
$menulist = $zen_CategoriesUL->buildTree(true);
$menulist = str_replace('"level4"','"level5"',$menulist);
$menulist = str_replace('"level3"','"level4"',$menulist);
$menulist = str_replace('"level2"','"level3"',$menulist);
$menulist = str_replace('"level1"','"level2"',$menulist);
$menulist = str_replace('<li>','<li>',$menulist);
$menulist = str_replace("</li>\n</ul>\n</li>\n</ul>\n","</li>\n</ul>\n",$menulist);
echo $menulist;
?>                        
</li>



<li class="minfo-links"><a href="javascript:void(0)" class="minfo"><?php echo HEADER_TITLE_INFORMATION; ?></a>
    <ul class="level2">
    <li><a href="<?php echo zen_href_link(FILENAME_SHIPPING); ?>"><?php echo HEADER_TITLE_CUSTOMER_SERVICE; ?></a>
    <ul>
  <?php if (DEFINE_ABOUT_US_STATUS <= 1) { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_ABOUT_US); ?>"><?php echo BOX_INFORMATION_ABOUT_US; ?></a></li>
  <?php } ?>
  <?php if ($_SESSION['customer_id']) { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a></li>
   <li><a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a></li>
   <li><a href="<?php echo zen_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL'); ?>"><?php echo TITLE_NEWSLETTERS; ?></a></li>
    <?php } else { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGIN; ?></a></li>
   <li><a href="<?php echo zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_CREATE_ACCOUNT; ?></a></li>
   <?php } ?>
<?php if (DEFINE_SHIPPINGINFO_STATUS <= 1) { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_SHIPPING); ?>"><?php echo BOX_INFORMATION_SHIPPING; ?></a></li>
  <?php } ?>
  <?php if (DEFINE_PRIVACY_STATUS <= 1)  { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_PRIVACY); ?>"><?php echo BOX_INFORMATION_PRIVACY; ?></a></li>
<?php } ?>
<?php if (DEFINE_CONDITIONS_STATUS <= 1) { ?>
  <li><a href="<?php echo zen_href_link(FILENAME_CONDITIONS); ?>"><?php echo BOX_INFORMATION_CONDITIONS; ?></a></li>
     <?php } ?>
<?php if (DEFINE_WIDERRUFSRECHT_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_WIDERRUFSRECHT); ?>"><?php echo BOX_INFORMATION_WIDERRUFSRECHT; ?></a></li>
<?php } ?>
<?php if (DEFINE_ZAHLUNGSARTEN_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_ZAHLUNGSARTEN); ?>"><?php echo BOX_INFORMATION_ZAHLUNGSARTEN; ?></a></li>
<?php } ?>
<?php if (DEFINE_IMPRESSUM_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_IMPRESSUM); ?>"><?php echo BOX_INFORMATION_IMPRESSUM; ?></a></li>
<?php } ?>
    </ul>
    </li>
    <li><a href="javascript:void(0)"><?php echo TITLE_GENERAL; ?></a>
    <ul>
<?php if (DEFINE_SITE_MAP_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_SITE_MAP); ?>"><?php echo BOX_INFORMATION_SITE_MAP; ?></a></li>
<?php } ?>
<?php if (MODULE_ORDER_TOTAL_GV_STATUS == 'true') { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_GV_FAQ); ?>"><?php echo BOX_INFORMATION_GV; ?></a></li>
<?php } ?>
<?php if (DEFINE_DISCOUNT_COUPON_STATUS <= 1 && MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_DISCOUNT_COUPON); ?>"><?php echo BOX_INFORMATION_DISCOUNT_COUPONS; ?></a></li>
<?php } ?>
<?php if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_UNSUBSCRIBE); ?>"><?php echo BOX_INFORMATION_UNSUBSCRIBE; ?></a></li>
<?php } ?>
<?php if (DEFINE_PAGE_2_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_PAGE_2); ?>"><?php echo BOX_INFORMATION_PAGE_2; ?></a></li>
<?php } ?>
<?php if (DEFINE_PAGE_3_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_PAGE_3); ?>"><?php echo BOX_INFORMATION_PAGE_3; ?></a></li>
<?php } ?>
<?php if (DEFINE_PAGE_4_STATUS <= 1) { ?>
        <li><a href="<?php echo zen_href_link(FILENAME_PAGE_4); ?>"><?php echo BOX_INFORMATION_PAGE_4; ?></a></li>
<?php } ?>
    </ul>
    </li>
<?php if (SHOW_EZ_PAGES_MENU == 'true') { ?>
  <li><a href="javascript:void(0)"><?php echo TITLE_EZ_PAGES; ?></a>
    <ul>
  <?php require(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . 'ezpages_drop_menu.php'); ?>
    </ul>
    </li>
<?php } ?>
    </ul>
    </li>
    <li class="menu-contact"><a href="<?php echo zen_href_link(FILENAME_CONTACT_US, '', 'NONSSL'); ?>" class="mcontact"><?php echo TITLE_CONTACT; ?></a></li>

</ul>

</div>

<script src="<?php echo $template->get_template_dir('jquery.slimmenu.min.js',DIR_WS_TEMPLATE, $current_page_base,'jscript') . '/jquery.slimmenu.min.js' ?>" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>

	<?php if ($detect->isMobile() && !$detect->isTablet() or $detect->isMobile() && !$detect->isTablet() && $_SESSION['display_mode']=='isMobile' or $detect->isTablet() && $_SESSION['display_mode']=='isMobile' or $_SESSION['display_mode']=='isMobile') { ?>

<script type="text/javascript">
    $('ul.slimmenu').slimmenu(
			      {
			      resizeWidth: '800',
				  collapserTitle: '',
				  animSpeed: 'medium',
				  easingEffect: null,
				  indentChildren: false,
				  childrenIndenter: '&nbsp;'
				  });
</script>

<?php } else if ($detect->isTablet() or $detect->isMobile() && $_SESSION['display_mode']=='isTablet' or $detect->isTablet() && $_SESSION['display_mode']=='isTablet' or $_SESSION['display_mode']=='isTablet'){ ?>

<script type="text/javascript">
    $('ul.slimmenu').slimmenu(
			      {
			      resizeWidth: '800',
				  collapserTitle: '',
				  animSpeed: 'medium',
				  easingEffect: null,
				  indentChildren: false,
				  childrenIndenter: '&nbsp;'
				  });
</script>

<?php } else if ($detect->isMobile() && !$detect->isTablet() && $_SESSION['display_mode']=='isDesktop' or $detect->isTablet() && $_SESSION['display_mode']=='isDesktop' or $_SESSION['display_mode']=='isNonResponsive'){ ?>

<script type="text/javascript">
    $('ul.slimmenu').slimmenu(
			      {
			      resizeWidth: '0',
				  collapserTitle: '',
				  animSpeed: 'medium',
				  easingEffect: null,
				  indentChildren: false,
				  childrenIndenter: '&nbsp;'
				  });
</script>

<?php } else { ?>

<script type="text/javascript">
    $('ul.slimmenu').slimmenu(
			      {
			      resizeWidth: '800',
				  collapserTitle: '',
				  animSpeed: 'medium',
				  easingEffect: null,
				  indentChildren: false,
				  childrenIndenter: '&nbsp;'
				  });
</script>

  <?php } ?>

