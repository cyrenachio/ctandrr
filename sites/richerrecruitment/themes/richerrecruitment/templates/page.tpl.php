<?php

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>

<header>
  <div class="header-container">
    <div class="top-bar"> </div>
    <div class="header-wrap">
      <div class="header-inner">
        <div class="logo-area">
          <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
          <?php endif; ?>
        </div>
        <div class="menu-area">
          <nav>
            <?php if ($main_menu): ?>
            <?php print theme('links__system_main_menu', array(
                                  'links' => $main_menu,
                                  'attributes' => array(
                                    'id' => 'main-menu-links',
                                    'class' => array('links', 'clearfix'),
                                  ),
                                  'heading' => array(
                                    'text' => t('Main menu'),
                                    'level' => 'h2',
                                    'class' => array('element-invisible'),
                                  ),
                                )); ?>
            <?php endif; ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <?php if ($messages): ?>
  <div id="messages">
    <div class="section clearfix"> <?php print $messages; ?> </div>
  </div>
  <!-- /.section, /#messages -->
  <?php endif; ?>
  <?php
	if (drupal_is_front_page()) { ?>
  <?php if ($page['home_slider']): print render($page['home_slider']); endif; ?>
  <?php } ?>
  <?php if ($tabs): ?>
  <div class="tabs"> <?php print render($tabs); ?> </div>
  <?php endif; ?>
  <?php print render($page['help']); ?>
  <?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
  <?php endif; ?>
  <?php
	if (drupal_is_front_page()) { ?>
  <div class="services">
    <div class="services-wrap"> <?php print render($page['content']); ?> </div>
  </div>
  <?php } else{?>
  <div class="container-wrap">
    <?php
  if($_SERVER['REQUEST_URI']=='/contact-us'){
	  $mystyle = 'style="width:100% !important"';
  }else
  {
	  $mystyle = '';
  }
  ?>
    <div class="content-area" <?php echo $mystyle; ?>>
      <?php
		print render($page['content']); ?>
    </div>
    <?php if ($page['sidebar_first']){?>
    <div class="right-side-area">
      <div class="nav-side-bar"> <?php print render($page['sidebar_first']); ?> </div>
    </div>
    <?php }?>
  </div>
  <?php } ?>
</div>
<footer>
  <div class="footer-wrap">
    <div class="footer-wrap-inner">
      <div class="footer-links">
        <div class="head"> Helpful Links </div>
        <div class="list">
          <?php 
			if ($page['footer_firstcolumn']){
				print render($page['footer_firstcolumn']);
			}?>
        </div>
      </div>
      <div class="connect-link" id="second-footer-column">
        <div class="head"> Connect with us </div>
        <div class="social-links">
          <?php 
			if ($page['footer_secondcolumn']){
				print render($page['footer_secondcolumn']);
			}?>
        </div>
      </div>
      <?php // if ($page['footer_thirdcolumn']){	print render($page['footer_thirdcolumn']); }?>
      <div class="licensed">
        <div class="head"> Licensed & Approved by </div>
        <?php 
			if ($page['footer_fourthcolumn']){
				print render($page['footer_fourthcolumn']);
			}?>
      </div>
    </div>
  </div>
  <div style="clear:both"></div>
  <div class="line"></div>
  <div style="clear:both"></div>
  <div class="footer-nav">
    <div class="footer-nav-wrap">
      <div class="copy-right">
        <?php if ($page['footer_copyright']): print render($page['footer_copyright']); endif; ?>
      </div>
      <div class="footer-menu">
        <?php if ($page['footer_links']): print render($page['footer_links']); endif; ?>
      </div>
      <div class="development-ref">
        <?php if ($page['developed_by']): print render($page['developed_by']); endif; ?>
      </div>
    </div>
  </div>
  </div>
</footer>
<div id="page-wrapper"> 
  <!-- text doc --> 
</div>
<!-- /#page, /#page-wrapper --> 