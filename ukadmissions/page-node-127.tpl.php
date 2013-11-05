
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--VIDEO/PHOTO Template /photo_video-->
<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" />
<meta name="viewport" content="width=1023" />
<meta name="HandheldFriendly" content="True" />
<title><?php if($title) print str_replace('{apply}', '', $title) . " | ";  ?> University of Kentucky Admissions</title>
<!-- CSS starts -->
<link href="/<?php print _ukadmissions_path(); ?>/css/reset.css" type="text/css" rel="stylesheet">
<link href="/<?php print _ukadmissions_path(); ?>/css/style.css" type="text/css" rel="stylesheet">
<link href="/<?php print _ukadmissions_path(); ?>/css/slider.css" type="text/css" rel="stylesheet">
<?php print $scripts; ?>
<?php print $styles; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!--[if IE]>
<link rel="stylesheet" type="text/css" href="/<?php print _ukadmissions_path(); ?>/css/styleie.css" />
<![endif]-->
<!-- CSS ends -->
<!--[if IE 6]>	
<script src="<?php print _ukadmissions_path(); ?>/js/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('body *');
</script>
<![endif]-->
<!-- Javascript starts -->
<!--[if lte IE 9]>
<script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/html5.js"></script>
<![endif]-->
<!-- Javascript ends -->
</head>
<body>
<div id="fb-root"></div>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
  
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

	
</script>

    <!-- container starts-->
    <div id="container">
    
        <!-- header starts -->
        <header id="header">
            <h1 id="logo"><a href="http://www.uky.edu" rel="home" title="University of Kentucky - See Blue"><img src="<?php print _ukadmissions_path(); ?>/images/logo.png" alt="University of Kentucky - See Blue" title="University of Kentucky - See Blue"></a></h1>
              <aside class="topRight">
                	<a href="http://applyuk.com" title="Apply"><img src="<?php print _ukadmissions_path(); ?>/images/apply.png" alt="Apply" title="Apply"></a>
                    <a href="http://www.uky.edu/Admission/VIP.htm" title="See Blue - VIP"><img src="<?php print _ukadmissions_path(); ?>/images/see-blue-vip.png" alt="See Blue - VIP" title="See Blue - VIP"></a>
                </aside>
        </header>
        <!-- header Ends -->
        
            <!--Banner Starts-->
            <section id="banner">
                <figure>
                  <div id="slider">
                    <ul>
                        <!--<li><h2>Matt Cutts, one of the<br>first employees at Google</h2>
                        	<div class="imges"><a href="#"><img src="<?php print _ukadmissions_path(); ?>/images/matts-seeblue.png" alt="Matt's See Blue Story" title="Matt's See Blue Story" class="seeBlue"></a><img src="<?php print _ukadmissions_path(); ?>/images/matts.png" alt="Matt Cutts" title="Matt Cutts"></div></li>				
                        <li><h2>Property of<br>Goldman Sachs</h2><img src="<?php print _ukadmissions_path(); ?>/images/obama.png" alt=""></li>
                        <li><h2>Random Cat, one of the<br>first cats to journey into space</h2><img src="<?php print _ukadmissions_path(); ?>/images/kitten.png" alt=""></li>
                        <li><h2>The Troll, one of the<br>finest comedians in history</h2><img src="<?php print _ukadmissions_path(); ?>/images/troll.png" alt=""></li>
                        <li><h2>Matt Cutts, one of the<br>first employees at Google</h2><img src="<?php print _ukadmissions_path(); ?>/images/matts.png" alt=""></li>			
                        <li><h2>Matt Cutts, one of the<br>first employees at Google</h2><img src="<?php print _ukadmissions_path(); ?>/images/matts.png" alt=""></li>-->
                        <?php print views_embed_view('slider', 'default'); ?>

                    </ul>
                  </div>  
            </figure>
      </section>
            <!--Banner Ends-->

                <!--Middle Starts-->
                <section id="content">
                	<section class="left">
                    	<div class="homeButton"><a href="<?php echo check_url($front_page); ?>" title="Home"></a></div>
                        
                        <!--Navigation Start-->
                        <nav id="search">
                        	<aside role="search">
                                <form action="/Admissions/search" method="get" id="searchForm">
                                  <figure><a href="javascript:void(0);"><img src="<?php print _ukadmissions_path(); ?>/images/search-img.gif" alt="Search" title="Search"></a></figure>
                                    <aside class="searchBox">
                                    	<div class="cancel-btn"><img src="<?php print _ukadmissions_path(); ?>/images/cross-btn.png" alt="Close" title="Close"></div>
                                    	<label><input id="edit-keys" name="keys" type="text" class="textBox" placeholder="search"></label>
                                        <div class="submitBox"><input type="submit" value="" class="submitBtn"></div>
                                    </aside>
                                </form>
                             </aside>
                        	<!--<ul id="nav">
                            <li><a href="#"><span>admissions</span></a></li>
                                <li><a href="#"><span>finances</span></a></li>
                                <li><a href="#"><span>academics</span></a>
                                <li><a href="#"><span>experience UK</span></a>
                                    <ul class="child">
                                        <li><a href="#">photos &amp; videos</a></li>
                                        <li><a href="#">visit UK</a>
                                             <ul class="grandchild">
                                              <li><a href="#">directions</a></li>
                                                <li><a href="#">download app</a></li>
                                                <li><a href="#">schedule visit</a></li>
                                                <li><a href="#">college visits</a></li>
                                                <li><a href="#">faq</a></li>
                                                <li><a href="#">online<br>campus tour</a></li>
                                            </ul>                                       
                                        </li>
                                        <li><a href="#">housing</a></li>
                                        <li><a href="#">dining</a></li>
                                        <li><a href="#">diversity</a></li>
                                        <li><a href="#">campus safety</a></li>
                                        <li><a href="#">strategic plan</a></li>
                                        <li><a href="#">uk news</a></li>
                                        <li><a href="#">campus calendar</a><span class="last"></span></li>
                                    </ul>
                                </li>
                                <li><a href="#"><span>resources</span></a></li>
                                <li class="last"><a href="#">see blue. VIP</a></li>
                            </ul>-->
                            <?php 
								//use template.php function to format the UL output to match the original mockup for the effects
								$tree = menu_tree_page_data('menu-left-vertical');
								echo "<ul id=\"nav\">";
								print menu_tree_output($tree);
								echo "</ul>";
								$tree = menu_tree_page_data('menu-left-secondary');
								echo "<ul id=\"nav_secondary\">";
								print menu_tree_output($tree);
								echo "</ul>";
							?>
                        </nav>
                        <!--Navigation End-->
                        
                    </section>
					
					
					<section class="videoHeaderWrap">
							
						</section>
                        <section class="video">
                           <figure class="theVideo"><iframe id="videoframe" width="898" height="500" src="" frameborder="0" allowfullscreen wmode="transparent"></iframe><span class="cancelBtn"></span></figure>
                           <figure class="photoVideoButton clearfix"><a title="photo &amp; videos" href="/Admission/photos-videos">photo &amp; videos</a></figure>
                        </section>
					
                    <section class="right">
                    	<section class="fbTwitButtons">
					<span class="social-sharing twitter">
									<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a>
								</span>
								<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
								<span class="social-sharing gplus">
								<g:plusone size="medium"></g:plusone>
								</span>
								<span class="social-sharing">
								<div class="fb-like" data-href="http://<?php print $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" data-send="true" data-layout="button_count" data-width="83" data-show-faces="true"></div>
								</span>
				</section>
                    <?php if($right_sidebar_top) { 
						// This is the video page. Sidebar is not possible. 
					?>
                        <article class="contentArea nosidebar">
                    <?php } else { ?>
						<article class="contentArea nosidebar">
					<?php }	?>
							<div class="clearfix">&nbsp;</div>
                        	<h2 class="videoheadertitle">Videos</h2>
                                <form action="/Admissions/photo_video">
                                    Sort: 
                                    <select id="sort" name="sort" onChange="this.form.submit()">
                                        <option value="created" <?php if($_REQUEST['sort'] == 'created') {echo "selected=\"selected\"";}?>>Created</option>
                                        <option value="duration" <?php if($_REQUEST['sort'] == 'duration') {echo "selected=\"selected\"";}?>>Duration</option>
                                        <option value="views" <?php if($_REQUEST['sort'] == 'views') {echo "selected=\"selected\"";}?>>Views</option>
                                    </select>
                                </form>
								<br />
						
                            <div style="clear:both;">
								
								<?php
								switch($_REQUEST['sort']) {
									case 'created':
										$sort = 'block_1';
										break;
									case 'duration':
										$sort = 'block_2';
										break;
									case 'views':
										$sort = 'block_3';
										break;
									default:
										$sort = 'default';
										break;
								}
                                ?>

								<?php print views_embed_view('video_grid', $sort); ?>
                                <?php //if($tabs) {print $tabs;} ?>
								<?php //print $content; ?>
                                <br />
                                <br />
                                <h2>Images</h2>
                                <br />
                                <?php print views_embed_view('image_grid', 'default'); ?>
                                
                                
                                
                            </div>

                        </article>
                        <aside class="sidebar">
                        	<!--<nav class="buttons clearfix">
                                <ul>
                                    <li class="apply"><a href="#" title="apply">apply</a></li>
                                    <li class="photos-videos"><a href="#" title="photo &amp; videos">photo &amp; videos</a></li>
                                    <li class="dates"><a href="#" title="dates and deadlines">dates and deadlines</a></li>
                                    <li class="chat-with-us"><a href="#" title="chat with us">chat with us</a></li>
                                    <li class="ask-the-cat"><a href="#" title="ask the cat">ask the cat</a></li>
                                </ul>
                            </nav>
                            <section class="input-txt clearfix">
                            	<input type="text" name="">
                                <a href="#" title="Ask"><img src="<?php print _ukadmissions_path(); ?>/images/ask-button.png" alt="Ask" title="Ask"></a>
                            </section>-->
                            <?php //print $right_sidebar_top; ?>
                        </aside>
                    </section>
                    <section class="going-uk-form">
                        <div id="signup-box" class="slider2">
<iframe style="overflow:hidden;" src="http://www.uky.edu/seeblue/index_formonly_admissions_update.php" width="897" height="90" style="overflow: hidden;"><p>Get More Info? Go to <a href="http://www.seeblue.com">seeblue.com</a></p></iframe>                         </div>
                    </section>
                    <section class="bottomContainer">
                    	<aside class="leftSide">
                        	<nav class="socialButtons">
                                <a href="http://youtube.com/user/universityofkentucky" title="You Tube" class="youTube"></a>
                                <a href="http://twitter.com/ukyadmission" title="Twitter" class="twitter"></a>
                                <a href="http://www.facebook.com/universityofkentuckyadmissions" title="Facebook" class="facebook"></a>
                                <!--<a href="http://www.flickr.com/photos/universityofkentucky" title="Flickr" class="flickr"></a>-->								
                                 <a href="http://applyuk.tumblr.com/" title="Tumblr" class="tumblr"></a>
								<a href="http://instagram.com/seeblue" title="Instagram" class="instagram"></a>
<!--                                <a href="http://uknow.uky.edu/content/rss-feeds" title="RSS" class="rss"></a>-->
                            </nav>
                        </aside>
                    	<section class="rightSide">
                        	<section class="upperSection clearfix">
                            	<article class="kentucky">
                                	<!--<figure><img src="<?php print _ukadmissions_path(); ?>/images/nasa-kentucky.jpg" alt="Nasa Kentucky" title="Nasa Kentucky"></figure>
                                    <article>
                                    	<h2>NASA Kentucky to Host Grand<br>Opening and Ribbon Cutting</h2>
                                        <p>As the university approaches the investiture ceremony of UK's 12th president,
Dr. Eli I. Capilouto, UKNow presents the second installment in a series of stories on presidential moments in the institution's history. With recent discussion between the new president and the Board of Trustees focusing on facility needs we look back at moments related to the growth of the...<a href="#">READ MORE</a> </p>
                                    </article>-->
										<?php print views_embed_view('footer_rss_import', 'default'); ?>

                                </article>
                                <aside class="uknow">
                                	<a href="http://uknow.uky.edu"><img src="<?php print _ukadmissions_path(); ?>/images/uknow.png" alt="UKNow" title="UKNow"></a>
                                	<div class="rollOverButton"><a href="http://uknow.uky.edu/" title="Visit">Visit</a></div>
                                </aside>
                            </section>
                            <section class="bottomSection">
                            	<nav>
                                	<h3>Admissions</h3>
                                    <!--<ul>
                                    	<li><a href="#">freshmen</a></li>
                                    	<li><a href="#">transfer</a></li>
                                    	<li><a href="#">international</a></li>
                                    	<li><a href="#">veteran</a></li>
                                    	<li><a href="#">graduate school</a></li>
                                    	<li><a href="#">readmission</a></li>
                                    	<li><a href="#">visiting (transient)</a></li>
                                    	<li><a href="#">non-degree (auditor)</a></li>
                                    	<li><a href="#">currently enrolled</a></li>
                                    	<li><a href="#">admitted students</a></li>
                                    	<li class="last"><a href="#">find your counselor</a></li>
                                    </ul>-->
									<?php
										$tree = menu_tree_page_data('menu-admissions');
										echo "<ul class=\"footmenu\">";
										print menu_tree_output($tree);
										echo "</ul>";
									?>
                                </nav>
                            	<nav>
                                	<h3>Finances</h3>
                                    <!--<ul>
                                    	<li><a href="#">tuition &amp; fees</a></li>
                                    	<li><a href="#">cost calculator</a></li>
                                    	<li><a href="#">financial aid</a></li>
                                    	<li><a href="#">scholarships</a></li>
                                    	<li><a href="#">student account services</a></li>
                                    	<li><a href="#">room &amp; board rates</a></li>
                                    </ul>-->
									<?php
										$tree = menu_tree_page_data('menu-finances');
										echo "<ul class=\"footmenu\">";
										print menu_tree_output($tree);
										echo "</ul>";
									?>
                                </nav>
                            	<nav>
                                	<h3>Academics</h3>
                                    <!--<ul>
                                    	<li><a href="#">majors &amp; programs</a></li>
                                    	<li><a href="#">registrar</a></li>
                                    	<li><a href="#">academic success</a></li>
                                    	<li><a href="#">bulletins</a></li>
                                    	<li><a href="#">education abroad</a></li>
                                    	<li><a href="#">more ways to learn</a></li>
                                    </ul>-->
									<?php
										$tree = menu_tree_page_data('menu-academics');
										echo "<ul class=\"footmenu\">";
										print menu_tree_output($tree);
										echo "</ul>";
									?>
                                </nav>
                            	<nav>
                                	<h3>Experience UK</h3>
                                    <!--<ul>
                                    	<li><a href="#">photos &amp; videos</a></li>
                                    	<li><a href="#">visit UK</a></li>
                                    	<li><a href="#">housing</a></li>
                                    	<li><a href="#">dining</a></li>
                                    	<li><a href="#">diversity</a></li>
                                    	<li><a href="#">campus safety</a></li>
                                    	<li><a href="#">strategic plan</a></li>
                                    	<li><a href="#">uk news</a></li>
                                    	<li><a href="#">campus calendar</a></li>
                                    </ul>-->
									<?php
										$tree = menu_tree_page_data('menu-experience-uk');
										echo "<ul class=\"footmenu\">";
										print menu_tree_output($tree);
										echo "</ul>";
									?>
                                </nav>
                            	<nav>
                                	<h3>Resources</h3>
                                    <!--<ul class="last">
                                    	<li><a href="#">high school students</a></li>
                                    	<li><a href="#">veterans resource center</a></li>
                                    	<li><a href="#">adult student services</a></li>
                                    	<li><a href="#">independent study program</a></li>
                                    	<li><a href="#">office of international affairs</a></li>
                                    	<li><a href="#">policies</a></li>
                                    	<li><a href="#">applications</a></li>
                                    	<li><a href="#">contact us</a></li>
                                    </ul>-->
									<?php
										$tree = menu_tree_page_data('menu-resources');
										echo "<ul class=\"last\">";
										print menu_tree_output($tree);
										echo "</ul>";
									?>
                                </nav>
                            </section>
                            
                            <!-- footer starts -->
                            <footer id="footer">
                            	<a href="#"><img src="<?php print _ukadmissions_path(); ?>/images/uk-logo.png" alt="University of Kentucky" title="University of Kentucky"></a>
                                <?php print $footer; ?>
                            </footer>
                            <!-- footer ends -->
                            
                        </section>
                    </section>
                </section>
                <!--Middle Ends-->

    </div>
    <!-- container ends-->
    
    <!--Jquery Start-->
	<script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/css_browser_selector.js"></script>
	<script type="text/javascript" src='/<?php print _ukadmissions_path(); ?>/js/jquery-1.4.2.min.js'></script>
    
	<script type="text/javascript">
		$(document).ready(function(){ 
			/*
			$("#nav ul.child li ul").addClass("grandchild");
			$("#nav ul.child").slideDown('slow', 'swing');
			$("#nav ul.grandchild").slideDown('slow', 'swing');			
			*/
			
			
			$(".imagefield-field_sliderimg").show();
			$("#nav ul.child li ul").addClass("grandchild");
			$("#nav ul.child").show();
			$("#nav ul.grandchild").show();

			var totalHeight=0;
			$("#search #nav").children().each(function(){
				totalHeight=totalHeight+$(this).height();
			});
			$('#nav_secondary li').each(function() {
				totalHeight += $(this).height();
			});
			var content_height = $('section.right').height();
			var nav_height = totalHeight;
			if((nav_height + 115) > content_height) {
				$('section.right').height(nav_height+200);
			}


			i = 0;
			$('.collapser').each(function() {
				$(this).attr('collapsedex', i);
				i++;
			});

			i = 0;
			$('.collapse_me').each(function() {
				$(this).attr('collapsedex', i);
				i++;
			});

			$('.collapser').click(function() {
				cdx = $(this).attr('collapsedex');
				$('.collapse_me[collapsedex=' +cdx+ ']').toggle();
				$(this).toggleClass('openpet');
				$(this).toggleClass('active');
				return false;
			});
			
			$('section.video').hide();	
			
			if(getURLParameter('e')=='1') { 
				$('section.video').show();
				var link = $('a[rel=lightcrazy]').attr('href');
				//alert(link);
				$('#videoframe').attr('src',link);
			}
		
			$('a[rel=lightcrazy]').click(function(event) { 
				event.preventDefault();	
				var link = $(this);
				//alert('DEEEEErrrrrr' + link.attr('href'));
				$('#videoframe').attr('src',link.attr('href'));
				$('section.video').show(); 	

			});
			$('section.video span.cancelBtn').click(function() { $('section.video').hide();  });  	
			function getURLParameter(paramName) {
				var searchString = window.location.search.substring(1),
					i, val, params = searchString.split("&");
						for (i=0;i<params.length;i++) {
							val = params[i].split("=");
							if (val[0] == paramName) {
							return unescape(val[1]);
					}
				}
				return null;
			}
					
		});
    </script>
	<script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/easySlider1.7.js"></script>
    <!--<script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/jquery.address-1.2.2.min.js"></script>-->
	<script type="text/javascript" src="<?php print _ukadmissions_path(); ?>/js/jquery.sudoSlider.js"></script>
	<script type="text/javascript">
        $(document).ready(function(){	
            $("#slider").easySlider({
                auto: true, 
                continuous: true,
				pause: 5000
            });
			/*
			jQuery("#signup-box").sudoSlider({ 
					prevNext: true,
					updateBefore: true,
					numeric: true,
					currentFunc: function(){ 
						//jQuery(this).children().stop().fadeTo(500, 1).text('Current slide');
					},
					uncurrentFunc: function(t){ 
						//jQuery(this).children().stop().fadeTo(500, 0.4).text(t);
					}
			});
			*/
        });	
    </script>
    <script type="text/javascript">
		$("#searchForm figure a img").click(function () {
		  $("aside.searchBox").slideToggle("slow");
		  $(this).toggleClass('opacity');	 
		});
		 $(".cancel-btn img").click(function () {
			$("aside.searchBox").slideUp("slow");
			$("#searchForm figure a img").toggleClass('opacity');
	     });
    </script>
    <!--Jquery End-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10864289-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    
</body>
</html>