<?php

/**
 * @file
 * Employment Law's theme implementation to display a single Drupal page.
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
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */

$path = current_path();
$path_alias = drupal_lookup_path('alias',$path);
?>
<?php
if (drupal_is_front_page()) { ?>
<style type="text/css">
.region-content{ width:955px; margin-bottom:0px; float:left; margin-top:0px;}
</style>
<?php }?>

<header>
  <div class="header">
    <div class="header-wrap">
      <div class="logo"> <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
          <?php endif; ?></div>
      <div class="nav-area">
        <div class="nav">
        
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
           
            <!--<?php if ($secondary_menu): ?>
        <div id="secondary-menu" class="navigation"> <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?> </div>
        <!-- /#secondary-menu -->
            <?php endif; ?>
            
          <!--<ul>
            <li><a href="#">About </a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">GALLery</a></li>
            <li><a href="#">FAQ </a></li>
            <li><a href="#">Contact us</a></li>
          </ul>-->
        </div>
      </div>
    </div>
  </div>
</header>


<!-- /.section, /#header -->

<?php if ($messages): ?>
<div id="messages">
  <div class="section clearfix"> <?php //print $messages; ?> </div>
</div>
<!-- /.section, /#messages -->
<?php endif; ?>

<div class="banner"> 
<div class="slider-container" id="slider-container">
	<div class="slider">
		<!--<div>
			<img src="<?php echo base_path().path_to_theme();?>/images/banner.jpg" alt="">
			<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 300px; padding: 0px;
                    text-align: left; line-height: 36px; font-family:Tahoma; font-weight:bold; font-size: 33px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
                </div>
		</div>-->
		
		<!--<div>
			<img src="<?php echo base_path().path_to_theme();?>/images/banner.jpg" alt="">
			<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 300px; padding: 0px;
                    text-align: left; line-height: 36px; font-family:Tahoma; font-weight:bold; font-size: 33px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
            </div>-->
		</div>
	</div>
</div>
	<!--<div class="switch" id="prev"><span></span></div>
	<div class="switch" id="next"><span></span></div>-->
 </div>

<!---->
 <?php
	if (drupal_is_front_page()) { ?>
  <?php if ($page['home_slider']): print render($page['home_slider']); endif; ?>
  
<div class="below-banner">
  <div class="below-content">
  
  	<?php if ($page['home_page_top']){ 
			print render($page['home_page_top']);
	}?>
    </div>
  </div>
</div>
<?php } ?>

<!---->
<?php
if (!drupal_is_front_page()) { 
	$mystyle = 'style="background:none"';
}else{
	$mystyle = '';
}
?>
    
<div class="content-area" <?php echo $mystyle; ?>>
    <div class="Main-content">
    <?php if ($tabs): ?>
      <div class="tabs"> <?php print render($tabs); ?> </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      
      <?php print render($title_prefix); ?>
  
  <?php 
  if (!drupal_is_front_page()) { 
  if ($page): ?>
      <div<?php print $title_attributes; ?> class="page-title"><?php print $title; ?></div>
  <?php endif; 
  }
  ?>
  
  <?php print render($title_suffix); ?>
  
     <?php print render($page['content']); ?>
     
     <div class="services-area">
     	
        	<?php if ($page['home_services_area']){ 
			print render($page['home_services_area']);
	}?>
        
     </div>
    </div>
</div>
<!-- /#page, /#page-wrapper -->
<div class="clear"></div>

<footer>
  <div class="footer-top-black"></div>
  <div class="footer-bottom"></div>
  <div class="footer-wrap">
    <div class="copy-area"><?php if ($page['footer_copyright']): print render($page['footer_copyright']); endif; ?></div>
    <div class="designed"> <?php if ($page['developed_by']): print render($page['developed_by']); endif; ?></div>
  </div>
</footer>

