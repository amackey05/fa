<!DOCTYPE html>
<head>
  <?php print $head; ?>
	
     <meta name="viewport" content="user-scalable=yes, width=device-width, target-densityDpi=320" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="HandheldFriendly" content="true" />

  <title><?php if($title) print str_replace('{apply}', '', $title) . " | ";  ?> University of Kentucky Admissions</title>
  
 
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script src="<?php print _framework_path(); ?>/js/easySlider1.7.js" type="text/javascript"></script>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- $('#searchicontrigger').css({'display':'none'}); -->
    <?php if ($_SERVER['QUERY_STRING'] == "") { ?>
 <style type="text/css"> 
#page-title   { 
clear: left; 
padding-left: 14px;
padding-top: 0px;
margin-top: -50px;

}
</style>


  <?php 
	}
	?>
<!-- Android -->
</head>

<body class="<?php print $body_classes; ?>">

  <div id="container" class="clearfix">

    <div id="skip-link">
      <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
      <?php if ($primary_links): ?>
        <a href="#navigation" class="element-invisible element-focusable"><?php print t('Skip to navigation'); ?></a>
      <?php endif; ?>
    </div>

    <header id="header" role="banner" class="clearfix">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <?php if ($site_name || $site_slogan): ?>
        <hgroup id="site-name-slogan">
          <?php if ($site_name): ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
          <?php if ($site_slogan): ?>
            <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php endif; ?>
        </hgroup>
      <?php endif; ?>
      
      <?php print $header; ?>
      
      <?php if ($search_box): ?><?php print $search_box ?><?php endif; ?>
      
	  <?php if ($primary_links || $secondary_links || !empty($navigation)): ?>
        <nav id="navigation" role="navigation" class="clearfix ">
          <?php if (!empty($navigation)): ?> <!--if block in $navigation region, override $primary_links and $secondary_links-->
            <?php print $navigation ?>
          <?php endif; ?>
          <?php if (empty($navigation)): ?> 
            <?php if (isset($primary_links)) : ?>
			  <?php print theme(array('links__system_main_menu', 'links'), $primary_links,
                array(
                  'id' => 'main-menu',
                  'class' => 'links clearfix',
                ),
                array(
                  'text' => t('Main menu'),
                  'level' => 'h2',
                  'class' => 'element-invisible',
                ));
              ?>
            <?php endif; ?>
            <?php if (isset($secondary_links)) : ?>
			  <?php print theme(array('links__system_secondary_menu', 'links'), $secondary_links,
                array(
                  'id' => 'secondary-menu',
                  'class' => 'links clearfix',
                ),
                array(
                  'text' => t('Secondary menu'),
                  'level' => 'h2',
                  'class' => 'element-invisible',
                ));
              ?>
            <?php endif; ?>
          <?php endif; ?>
        </nav> <!-- /#navigation -->
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif; ?>
    </header> <!-- /#header -->

    <section id="main" role="main" class="clearfix">
      <?php if (!empty($messages)): print $messages; endif; ?>
      <?php if (!empty($mission)): ?><div id="mission"><?php print $mission; ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print $content_top; ?>
      
     
      <?php if (!empty($tabs)): ?><div class="tabs-wrapper clearfix"><?php print $tabs; ?></div><?php endif; ?>
      <?php if (!empty($help)): print $help; endif; ?>
            
      		<?php
			
		  		
				if (!empty($title)): ?><h1 class="title" id="page-title">
				  <?php 
					// expand {apply} in the titles into the apply link 
					if(substr($title,-7,7)=="{apply}") 
						print substr($title,0,-7) . '<div class="button_apply"><a href="node/78">contact</a></div>'; 
					else print $title; 
				?>
				</h1><?php endif; 
			   $newdiv = '<div class="content">' . $mobile_images;
			  print str_replace('<div class="content">', $newdiv, $content); 
		  		
			   ?> 
      
   
      
      
      
      
    </section> <!-- /#main -->

    <?php if (!empty($left)): ?>
      <aside id="sidebar-left" role="complementary" class="sidebar clearfix">
        <?php print $left; ?>
      </aside> <!-- /sidebar-left -->
    <?php endif; ?>

    <?php if (!empty($footer_top)): ?>
      <div id="contactUK" class="clearfix">
        <?php print $footer_top; ?>
      </div> 
    <?php endif; ?>

    <footer id="footer" role="contentinfo" class="clearfix">
      <?php print $footer_message; ?>
      <?php if (!empty($footer)): print $footer; endif; ?>
      <?php print $feed_icons ?>
    </footer> <!-- /#footer -->

    <?php print $closure ?>

  </div> <!-- /#container -->


<!--  
 <script type="text/javascript" src="/sites/all/themes/framework/js/jquery.js"></script>

-->

    <script type="text/javascript" src="/<?php print _framework_path(); ?>/js/css_browser_selector.js"></script>
<!-- 
	<script type="text/javascript" src='/sites/all/themes/framework/js/jquery-1.4.2.min.js'></script>
--> 
 
  <script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".block-jquerymenu h2").click(function(){
		jQuery("ul.menu.jquerymenu").toggle("fast");
		jQuery(this).toggleClass("active");
		 
		return false;
	});
});
</script>

  <script type="text/javascript">
jQuery(document).ready(function(){
	$("#searchicontrigger").click(function(){
		$("#customsearch").toggle("fast");
		$(this).toggleClass("active");
		return false;
	});
});

jQuery(document).ready(function(){	


$('.rec_contact_trigger').click(function() {

				rdx = $(this).attr('recdex');

				$('.rec_hide[recdex=' +rdx+ ']').toggle();

				return false;

			});





	$("#slider").easySlider({
		auto: false,
		continuous: true,
		speed: 1000,
		pause: 3000,
		prevId: 'prevBtn',
		nextId: 'nextBtn',
		prevText: '<div id="slider-prev"><img src="<?php print _framework_path(); ?>/images/sliderPrev.png" alt="Go to the previous slide" /></div>',
		nextText: '<div id="slider-next"><img src="<?php print _framework_path(); ?>/images/sliderNext.png" alt="Go to the next slide" /></div>'

	});

});	
</script>


</body>
</html>
