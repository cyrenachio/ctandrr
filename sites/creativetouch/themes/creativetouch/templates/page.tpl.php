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
.region-content{ width:955px; margin-bottom:30px; float:left; margin-top:10px;}
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
		<div>
			<img src="<?php echo base_path().path_to_theme();?>/images/banner.jpg" alt="">
			<!--<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 300px; padding: 0px;
                    text-align: left; line-height: 36px; font-family:Tahoma; font-weight:bold; font-size: 33px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
                </div>-->
		</div>
		
		<div>
			<img src="<?php echo base_path().path_to_theme();?>/images/banner.jpg" alt="">
			<!--<div style="position: absolute; width: 970px; height:130px; top: 110px; left: 300px; padding: 0px;
                    text-align: left; line-height: 36px; font-family:Tahoma; font-weight:bold; font-size: 33px;
                        color: #FFFFFF;">
                        Richer Recruitment Services hopes that the workers<br /> 
                        or helpers we bring in may help out and bring a smile<br />
                        to your esteem company, family and children.
                </div>-->
		</div>
	</div>
</div>
	<div class="switch" id="prev"><span></span></div>
	<div class="switch" id="next"><span></span></div>
 </div>

<!---->
	<div class="below-banner">
  <div class="below-content">
    <div class="title">ABOUT US</div>
    <div class="ab-content"> Creative Touch Design offers clients services throughout any or all phases of interior aspects of their HDBs, condominiums, retails and commercial spaces & corporate offices. </div>
    <div class="find-area">
      <div class="find-more"><a href="#">FIND OUT MORE</a><img src="images/arrow.jpg" /></div>
    </div>
  </div>
</div>


<!---->

<?php
	if (drupal_is_front_page()) { ?>
<div class="baner-area">
  <div class="Mainbanner-box">
    <div class="slider-container" id="slider-container">
      <div class="slider">
        <div> <img src="<?php echo base_path().path_to_theme();?>/images/banner.png" alt=""> </div>
        <div> <img src="<?php echo base_path().path_to_theme();?>/images/banner.png" alt=""> </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="banner-bottom">
    <div class="banner-box">
      <div class="shadow-top"></div>
      <div class="banner-detail-main">
        <div class="banner-detail">
          <?php if ($page['home_page_top']){ 
			print render($page['home_page_top']);
		}?>
        </div>
      </div>
      <div class="shadow-bottom"></div>
    </div>
  </div>
</div>
<?php } ?>
<div class="clear"></div>
<div class="content">
  <div class="content-area">
    <div id="<?php echo $path_alias;?>"> <a id="main-content"></a> <?php print render($title_prefix); ?>
      <?php 
	//check the home page...
	if (!drupal_is_front_page()) {
		if ($title): ?>
      <div class="page-title"><?php print $title; ?></div>
      <?php endif; 
		}
	?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
      <div class="tabs"> <?php print render($tabs); ?> </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?
		print render($page['content']);
	?>
    </div>
    <?php //if($path_alias == 'coursecrriculum' || $path_alias == 'courseoverview'):?>
    
    <!-- /.section, /#sidebar-second -->
     <?php 	if (count($page['course_overview_preschool'])!='0' || count($page['course_overview_prischool'])!='' || count($page['course_overview_teen'])!='' ){	 ?>
    <div class="sidebar">
    	<div class="top-accordian">
        <div class="head-side" id="curiover"><a href="<?php echo base_path().'courseoverview'?>">COURSE OVERVIEW</a></div>
       <div id="faqs-container" class="accordian">        
        <div class="head-side" id="curi"><a href="<?php echo base_path().'coursecrriculum'?>" id="curriculm">COURSE CURRICULM</a></div>
        <div class="accordian">
          <div class="school"><a href="#">Pre-School</a></div>
          <div class="accordian">
            <div class="accordian-wrap">
              <?php 
			if ($page['course_overview_preschool']){
				print render($page['course_overview_preschool']);
			}?>
            </div>
          </div>
          <div class="school"><a href="#">Primary School Children</a></div>
          <div class="accordian">
            <div class="accordian-wrap">
              <?php 
			if ($page['course_overview_prischool']){
				print render($page['course_overview_prischool']);
			}?>
            </div>
          </div>
          <div class="school"><a href="#">Teens and Youth</a></div>
          <div class="accordian">
            <div class="accordian-wrap">
              <?php 
			if ($page['course_overview_teen']){
				print render($page['course_overview_teen']);
			}?>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div class="books-area">
      		<div class="book-title">Free book</div>
            <div class="book-img"><a href="#"><img src="<?php echo base_path().path_to_theme();?>/images/book.png" /></a></div>
            <div class="book-detail">Loren Ispuum</div>
            <div class="book-sub">By Ispum Dolor</div>
            <div class="download-btn"><a href="#"><img src="<?php echo base_path().path_to_theme();?>/images/download-btn.png" /></a></div>
            
      </div>
    </div>
    <!-- /.section, /#sidebar-second -->
    <?php }
	
	//endif; ?>
    <?php //print render($page['sidebar_second']); ?>
  </div>
</div>

<!-- /#page, /#page-wrapper -->
<div class="clear"></div>
<div class="footer">
  <div class="camp-area">
    <div class="camp-wrap">
      <div class="camp-title">Our Camps & Workshops</div>
      <div class="camp-detail-area">
        <div class="box1">
          <div class="box-detail">
            <?php 
			if ($page['footer_firstcolumn']){
				print render($page['footer_firstcolumn']);
			}?>
          </div>
        </div>
        <div class="box1">
          <div class="box-detail">
            <?php
          if ($page['footer_secondcolumn']){ 
	      	print render($page['footer_secondcolumn']);
		  }
		  ?>
          </div>
        </div>
        <div class="box2">
          <div class="box-detail">
          <div class="f-logo">
            <?php
          if ($page['footer_thirdcolumn']){ 
	      	print render($page['footer_thirdcolumn']);
		  }
		  ?>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-wrap">
    <div class="footer-area">
      <div class="copy">
        <?php if ($page['footer_copyright']): print render($page['footer_copyright']); endif; ?>
      </div>
      <div class="clear"></div>
      <div class="footer-nav">
        <?php if ($page['footer_links']): print render($page['footer_links']); endif; ?>
      </div>
      <div class="designed">
        <?php if ($page['developed_by']): print render($page['developed_by']); endif; ?>
      </div>
    </div>
  </div>
</div>
<?php //print render($page['sidebar_second']); ?>
<!-- /.section, /#footer-wrapper --> 
<script>
	$("#slider-container").sliderUi({
		speed: 700,
		cssEasing: "cubic-bezier(0.285, 1.015, 0.165, 1.000)"
	});
	$("#caption-slide").sliderUi({
		caption: true
	});
</script> 
<script type="text/javascript">
 $(document).ready(function (){
    $("#curiover").addClass("highlight");
    $("div.head-side").click(function () {
        $("div.head-side").removeClass("highlight");
        
        if($(".head-side").is(":visible") ) {
            $(this).addClass("highlight");
        }
    });  
	$("div.accordian").accordion({
		autoHeight: false,
		collapsible: true,
		active: false,
		
	});
	
$('#block-menu-menu-side-pre-school a').on('click', function () {
  window.location.href = $(this).attr('href');
});
$('#block-menu-menu-side-primary-school-childre a').on('click', function () {
  window.location.href = $(this).attr('href');
});
$('#block-menu-menu-side-teens-and-youth a').on('click', function () {
  window.location.href = $(this).attr('href');
});
	/*$('.content a').on('click', function () {
  window.location.href = $(this).attr('href');
});*/

	<?php 
	if (count($page['course_overview_preschool'])!='0' || count($page['course_overview_prischool'])!='' || count($page['course_overview_teen'])!='' ){	 ?>
	//if('<?php echo $path_alias;?>'=='coursecrriculum' || '<?php echo $path_alias;?>'=='courseoverview'){
	 $('#<?php echo $path_alias;?>').addClass('left-content');
	//}
 <?php } ?>
 });
 </script> 
