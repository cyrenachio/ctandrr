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

drupal_add_css(path_to_theme() . '/css/tabs/tabsstyle.css', array('group' => CSS_THEME,'preprocess' => FALSE));

$images = '';
?>
<script type="text/javascript">

</script>
<header>
  <div class="header">
  <div class="header-wrap">
    <div class="logo">
      <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
      <?php endif; ?>
    </div>
    <div class="mobile-menu"> <a class="toggleMenu" href="#">&#9776;</a>
       <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array(
			  'links' => $main_menu,
			  'attributes' => array(
				'id' => 'main-mobile-links',
				'class' => array('nav', 'clearfix'),
			  ),
			  'heading' => array(
				'text' => t('Main menu'),
				'level' => 'h2',
				'class' => array('element-invisible'),
			  ),
			)); ?>
        <?php endif; ?>
    </div>
    <div class="nav-area">
      <div class="nav-desk">
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
      </div>
    </div>
  </div>
</div>
</header>
<?php if ($messages): ?>
<div id="messages">
  <div class="section clearfix"> <?php print $messages; ?> </div>
</div>
<!-- /.section, /#messages -->
<?php endif; ?>
<?php 
	//for gallery category   
   $categoryGArr = taxonomy_get_tree($vid = 2, $parent = 0, $max_depth = NULL, $load_entities = FALSE);
   ?>
<div class="content-area-inner">
  <div class="Main-content">
    <div class="inner-area">
      <div class="page-title">GALLERY</div>
      <div class="gallery-area">
      <ul id="tabs">
        <li class="active">All</li>
        <?php
        foreach($categoryGArr as $cat){
			echo '<li>'.$cat->name.'</li>';
		}
        ?>
      </ul>
      <ul id="tab">
        <li class="active">
        <div class="gallery-main">
          <?php
        foreach($categoryGArr as $cat){
			?>
          <?php
             $GalleryArr = taxonomy_select_nodes($tid = $cat->tid, $pager = TRUE, $limit = 10, $order = array('t.sticky' => 'DESC', 't.created' => 'DESC'));
			 foreach($GalleryArr as $key=>$image){
			 $images = node_load($nid = $image, $vid = NULL, $reset = FALSE);

			 //for URL
			 if(isset($images->field_portfolio_url[$images->language][0]['value'])){
				$P_URL = $images->field_portfolio_url[$images->language][0]['value'];
			 }else{
				 $P_URL = '#';
			 }
			 //for image
				if(isset($images->field_portfolio_image[$images->language][0]['uri'])){
				 $style = 'medium';
				  $style2 = 'large';
				 $filePath = $images->field_portfolio_image[$images->language][0]['uri'];
				 $imageSrc = image_style_url($style, $filePath);
				 $imageFullSrc = image_style_url($style2, $filePath);
				}else
				{
				 $imageSrc = base_path().path_to_theme().'/images/default.jpg';
				}
				?>
              <div class="gallery-box">
                <div class="img"> <a rel="all" href="<?php echo $imageFullSrc;?>" title="<?php echo $images->title;?>"><img title="<?php echo $images->title;?>" src="<?php echo $imageSrc;?>" /></a> </div>
                <div class="product-title"> <?php echo $images->title;?></div>
              </div>
          <?php
			 }
		}
			?>
            </div>
        </li>
        <?php
        foreach($categoryGArr as $cat){
			?>
        <li>
        <div class="gallery-main">
          <?php
             $GalleryArr = taxonomy_select_nodes($tid = $cat->tid, $pager = TRUE, $limit = 10, $order = array('t.sticky' => 'DESC', 't.created' => 'DESC'));
			 foreach($GalleryArr as $key=>$image){
			 $images = node_load($nid = NULL, $vid = $image, $reset = FALSE);
			 //for URL
			 if(isset($images->field_portfolio_url[$images->language][0]['value'])){
				$P_URL = $images->field_portfolio_url[$images->language][0]['value'];
			 }else{
				 $P_URL = '#';
			 }
			 //for image
				if(isset($images->field_portfolio_image[$images->language][0]['uri'])){
				 $style = 'medium';
				 $style2 = 'large';
				 $filePath = $images->field_portfolio_image[$images->language][0]['uri'];
				 $imageSrc = image_style_url($style, $filePath);
				 $imageFullSrc = image_style_url($style2, $filePath);
				 
				}else
				{
				 $imageSrc = base_path().path_to_theme().'/images/default.jpg';
				}
				?>
          <div class="gallery-box">
            <div class="img"> <a rel="<?php echo $name = str_replace(' ', '_',$cat->name);?>" href="<?php echo $imageFullSrc;?>"><img src="<?php echo $imageSrc;?>" /></a> </div>
            <div class="product-title"><?php echo $images->title;?></div>
          </div>
          <?php
			 }
			?>
            </div>
        </li>
        <?php
		}
        ?>
      </ul>
      <!--<div class="pagination clearfix"> <a href="#" style="padding:2px; margin:0px; border:0;"><img style="vertical-align:middle;" src="images/right-arrow-page.jpg" /></a> <a href="#" style="padding:0px; margin:0px; border:0;"><img style="vertical-align:middle;" src="images/right-arrow-page_2.jpg" /></a>&nbsp; <strong>1</strong> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a>&nbsp; <a href="#" style="padding:2px; margin:0px; border:0; "><img style="vertical-align:middle;" src="images/left-arrow-page_2.jpg" /></a> <a href="#" style="padding:0px; margin:0px; border:0;"><img style="vertical-align:middle;" src="images/left-arrow-page.jpg" /></a> </div>-->
    </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("ul#tabs li").click(function(e){
        if (!$(this).hasClass("active")) {
            var tabNum = $(this).index();
            var nthChild = tabNum+1;
            $("ul#tabs li.active").removeClass("active");
            $(this).addClass("active");
            $("ul#tab li.active").removeClass("active");
            $("ul#tab li:nth-child("+nthChild+")").addClass("active");
        }
    });		

$("a[rel=all]").fancybox({
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'titlePosition' 	: 'over',
	'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
	}
});
 <?php
foreach($categoryGArr as $cat){?>
		$("a[rel=<?php echo $name = str_replace(' ', '_',$cat->name);?>]").fancybox({
	'transitionIn'		: 'none',
	'transitionOut'		: 'none',
	'titlePosition' 	: 'over',
	'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
		return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
	}
});
		<?php
		}
        ?>


});
</script>
<footer>
  <div class="footer-top-black"></div>
  <div class="footer-bottom"></div>
  <div class="footer-wrap">
    <div class="copy-area">
      <?php if ($page['footer_copyright']): print render($page['footer_copyright']); endif; ?>
    </div>
    <div class="designed">
      <?php if ($page['developed_by']): print render($page['developed_by']); endif; ?>
    </div>
  </div>
</footer>
<script type="text/javascript" src="<?php echo base_path().path_to_theme();?>/js/script.js"></script>
