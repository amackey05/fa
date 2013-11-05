<?php drupal_set_header('Content-Type: text/css; charset: utf-8'); ?>


/* Reset CSS Start */

a{ color:#024087; text-decoration:none; font-weight:normal; }

a:hover{ text-decoration:underline; }

input, label, textarea, select, button {font:12px Arial, Helvetica, sans-serif; vertical-align:middle; color:#000;}

input[type="text"], textarea{-webkit-appearance:none;}

/********** =headings  ***********/

/*h1, h2, h3, h4, h5, h6 {font-weight: bold;}*/

h1{} /* define font size, font family, line height & color */

h2{color:#fff; font-size:35px; color:#444444; font-family:"HelveticaNeueLTStd45Light", "Helvetica Condensed","Arial Narrow", Helvetica, Arial; line-height:40px; font-weight:normal;}

h3{ font-size:18px; color:#444444; font-family:"Lucida Sans", "Lucida Grande", sans-serif; line-height:20px;}

h4{
	font-size:16px; font-weight:300; color: #000; line-height:20px;
} 

/********** =misc  ***********/

.clearfix:after { clear: both; content: ' '; display: block; font-size: 0; line-height: 0; visibility: hidden; width: 0; height: 0;}

.clearfix {display: block;}

#edit-body hr, .contentArea hr { border: 0; height: 1px; color: #cccccc; background-color:#cccccc; }



/* Reset CSS Start */



/* Index Page Start */



@font-face {

    font-family: 'HelveticaNeueLTStd45Light';

    src: url('../fonts/helvetica-condensed-webfont.eot');

    src: url('../fonts/helvetica-condensed-webfont?#iefix') format('embedded-opentype'),

         url('../fonts/helvetica-condensed-webfont.woff') format('woff'),

         url('../fonts/helvetica-condensed-webfont.ttf') format('truetype'),

         url('../fonts/helvetica-condensed-webfont.svg#HelveticaNeueLTStd45Light') format('svg');

    font-weight: normal;

    font-style: normal;



}



/* Container Start */

#container{width:1000px; margin:0 auto; position:relative;}



	/* Header Start */

	header#header{width:1000px; float:left; position:relative; z-index:999;}

	header#header h1#logo{width:255px; height:99px; float:left; background:url(../images/logo-bg.png) left top no-repeat; position:relative; left:-71px;}

	header#header h1#logo img{margin-left:71px;}

	header#header aside.topRight{right:0; position:absolute;}

	header#header aside.topRight a{margin-left:6px;}

	/* Header End */

	

	/* Banner Start */

	section#banner{width:1000px; float:left; position:absolute; left:0; top:0; overflow:hidden;}

	section#banner figure{width:898px; float:left; overflow:hidden; left:102px; position:relative;}

	/*section#banner figure h2{text-align:right; padding:160px 0 0 95px; float:left; color:#fff; width:420px;}*/
	
	section#banner figure h2{text-align:right; padding:160px 0 0 70px; float:left; color:#fff; width:420px; font-weight:normal;}

	section#banner figure h2 a {color:#fff;}

	section#banner figure img.seeBlue{position:relative; float:left; right:270px; top:163px; z-index:200;}

	/*section#banner figure img{float:right; position:absolute; top:8px; right:45px; z-index:100;}*/
	
	section#banner figure img{float:right; position:absolute; top:8px; right:0px; z-index:100;}

	/* Banner End */	

	

	/* Middle Start */

	section#content{width:1000px; height:auto; float:left; position:relative; top:190px;}

	section#content .left{width:102px; float:left;}

	section#content .left .homeButton{float:right; margin-top:-1px;}

	section#content .left .homeButton a {width:42px; height:42px; background-image:url(../images/roll-over-buttons.png); background-position:0 -202px; display:block;}

	section#content .left .homeButton a:hover{background-position:0 -245px;}

	section#content .left nav#search{width:102px; height:32px; float:left; margin-top:20px; display:block; border-top:1px solid #6ba1ce; border-bottom:1px solid #004f91; border-top-left-radius:5px; -moz-border-top-left-radius:5px; -ms-border-top-left-radius:5px; -webkit-border-top-left-radius:5px; -o-border-border-top-left-radius:5px; border-radius:5px 0 0 0; behavior:url(PIE.htc); position:relative; background:#0862ad;}

	

		/* Search form */

		section#content .left nav#search aside{height:21px; padding:5px; position:relative;}

		section#content .left form#searchForm .searchBox{width:220px; height:37px; padding:8px 0 4px 12px; border-left:1px solid #044278; background:#0861ab; border-top-right-radius:6px; -moz-border-top-right-radius:6px; -ms-border-top-right-radius:6px; -webkit-border-top-right-radius:6px; -o-border-border-top-right-radius:6px; border-bottom-right-radius:6px; -moz-border-bottom-right-radius:6px; -ms-border-bottom-right-radius:6px; -webkit-border-bottom-right-radius:6px; -o-border-border-bottom-right-radius:6px; box-shadow:0 1px 4px #959595; -moz-box-shadow:0 1px 4px #959595; -o-box-shadow:0 1px 4px #959595; -webkit-box-shadow:0 1px 4px #959595; -ms-box-shadow:0 1px 4px #959595; behavior:url(PIE.htc); position:absolute; display:none; left:102px; top:0; border-radius:0 6px 6px 0;}

		.ipad section#content .left form#searchForm .searchBox{width:225px;}

		.iphone section#content .left form#searchForm .searchBox{width:225px;}

		section#content .left form#searchForm input.textBox{width:166px; height:29px; float:left; border:none; font-size:13px; padding-left:5px; line-height:28px; -webkit-appearance:none; border-top:1px solid #d6d6d6; font-family:"Lucida Sans", "Lucida Grande", sans-serif; border-radius:0; font-size:18px; color:#bfbfbf;}

		.ipad section#content .left form#searchForm input.textBox{height:23px; line-height:13px;}

		.iphone section#content .left form#searchForm input.textBox{height:23px; line-height:13px;}

		section#content .left form#searchForm .searchBox .cancel-btn{float:right; position:relative; top:-3px; right:5px; cursor:pointer;}

		section#content .left form#searchForm .submitBox{width:29px; height:31px; background:#fff; float:left; border-top:1px solid #d6d6d6; border-left:1px solid #e2e2e2;}

		section#content .left form#searchForm .submitBox input.submitBtn{width:10px; height:10px; background:url(../images/search.gif) right top no-repeat; border:none; outline:none; cursor:pointer; margin:11px 0 0 9px; padding:0;}

		section#content .left form#searchForm input.submitBtn:focus{outline:none;}

		/* Search form */

	.opacity{opacity:0.3; filter:alpha(opacity=30);}

	/* Navigation Start */

	#nav li, #nav_secondary li {width:102px; background:#0660ab; float:left; line-height:30px; padding:0; margin:0; color:#fff; border-bottom:1px solid #004f91; border-top:1px solid #6ba1ce; display:block; cursor:pointer;}

	#nav li a, #nav_secondary li a {
		width:107px;
		color:#fff;
		display: block;
		margin:0;
		padding:0 0 0 9px; 
		line-height:16px;
	} 

	
	#nav li a:hover, #nav_secondary li a:hover{
		/*width:102px;*/
		/*background:url(../images/menu-hover.png) left top repeat-x;*/
		display:block;
		text-decoration:none;
		position:relative;
		background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #1b6eb2), color-stop(50%, #1b6eb3), color-stop(100%, #045ea9));
		background-image: -webkit-linear-gradient(top, #1b6eb2, #1b6eb3, #045ea9);
		background-image: -moz-linear-gradient(top, #1b6eb2, #1b6eb3, #045ea9);
		background-image: -o-linear-gradient(top, #1b6eb2, #1b6eb3, #045ea9);
		background-image: linear-gradient(top, #1b6eb2, #1b6eb3, #045ea9);
	}
	#nav li a.active, #nav_secondary li a.active {
		display:block;
		text-decoration:none;
		position:relative;
		-moz-border-radius: 0 4px 0 0;
		-webkit-border-radius: 0 4px 0 0;
		-o-border-radius: 0 4px 0 0;
		-ms-border-radius: 0 4px 0 0;
		-khtml-border-radius: 0 4px 0 0;
		border-radius: 0 4px 0 0;
		background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #18609c), color-stop(50%, #18609d), color-stop(100%, #035090));
		background-image: -webkit-linear-gradient(top, #18609c, #18609d, #035090);
		background-image: -moz-linear-gradient(top, #18609c, #18609d, #035090);
		background-image: -o-linear-gradient(top, #18609c, #18609d, #035090);
		background-image: linear-gradient(top, #18609c, #18609d, #035090);
	}
	#nav li a.active:hover, #nav_secondary li a.active:hover {
		-moz-border-radius: 0 4px 0 0;
		-webkit-border-radius: 0 4px 0 0;
		-o-border-radius: 0 4px 0 0;
		-ms-border-radius: 0 4px 0 0;
		-khtml-border-radius: 0 4px 0 0;
		border-radius: 0 4px 0 0;
	}
	
	#nav li.expanded a.active, #nav_secondary li.expanded a.active {
		width:122px;
	}
	#nav ul.child li a.active, #nav_secondary ul.child li a.active {
		-moz-border-radius: 0;
		-webkit-border-radius: 0;
		-o-border-radius: 0;
		-ms-border-radius: 0;
		-khtml-border-radius: 0;
		border-radius: 0;
	}
	#nav ul.child li a.active, #nav_secondary ul.child li a.active {
		width:auto !important;
	}
	
	#nav li a .link_corner, #nav_secondary li a .link_corner {
		position:absolute;
		right: -1px;
		bottom: -16px;
		background: url(/sites/dib.uky.edu.studentaccount/themes/ukadmissions/images/menu-hover-rt_small.png) 0 0 no-repeat;
		width: 15px;
		height: 16px;
		display:none;
	}
	
	#nav li.expanded a.active .link_corner, #nav li.last a .link_corner,
	#nav_secondary li.expanded a.active .link, #nav_secondary li.last a .link_corner {
		background-position:0 -3px;
	}

	#nav li a:hover .link_corner, #nav li a.active .link_corner,
	#nav_secondary li a:hover .link_corner, #nav_secondary li a.active .link_corner  {
		display:block;
	}

ul.child li a .link_corner { background:none !important; }
ul.child li a:hover .link_corner { display:none !important; }
	

	/*

	#nav li a span{width:102px; cursor:pointer; float:left; display:block; padding:0; height:33px; position:absolute;}

	#nav li a span:hover{width:108px; height:49px; background:url(../images/menu-hover-rt.png) right 0 no-repeat; display:block;}

	*/



	/*span does other stuff so changed this to a class to control the little drop shadow thingie*/

	/*#nav li .child_link{width:102px; cursor:pointer; float:left; display:block; padding:0; height:33px; position:absolute;}*/



	/*#nav li .branch_link {width:101px; height:33px; color:#fff; display: block; margin:0; padding:0 0 0 9px; }*/


	#nav li .branch_link, #nav_secondary li .branch_link {
		width:90px;
		word-wrap:break-word;
		line-height:18px;
		padding:8px 0;
	}
	#nav li .branch_link:hover, #nav_secondary li .branch_link:hover{
		display:block;
		text-decoration:none;
		position:relative;
	}

	#nav li .branch_link span:hover, #nav_secondary li .branch_link span:hover{width:108px; height:49px; background:url(../images/menu-hover-rt.png) right 0 no-repeat; display:block;}



	#nav li ul .branch_link:hover, #nav_secondary li ul .branch_link:hover{width:108px; height:auto; background:none; display:block;}



	#nav li .child_link a, #nav_secondary li .child_link a { line-height:13px; height:49px; width:90px; } 

	#nav li .child_link, #nav_secondary li .child_link {
		width:90px;
		padding:8px 0;
	}
	#nav li .child_link:hover, #nav_secondary li .child_link:hover {
		height:auto;
		display:block; 
	}
	
	ul.child li .child_link {
		padding:0 !important;
	}

	#nav li ul .child_link:hover, #nav_secondary li ul .child_link:hover{width:90px; height:auto; background:none; display:block;}



	#nav li ul .branch_link span:hover, #nav_secondary li ul .branch_link span:hover{width:90px; height:auto; background:none; display:block;}





	/* Targeting the first level menu */
	#nav_secondary {
		padding-top:40px;
	}
	
	#nav_secondary li.leaf.first {
		-moz-border-radius: 4px 0 0 0;
		-webkit-border-radius: 4px 0 0 0;
		-o-border-radius: 4px 0 0 0;
		-ms-border-radius: 4px 0 0 0;
		-khtml-border-radius: 4px 0 0 0;
		border-radius: 4px 0 0 0;
		border-bottom:0;
	}
	#nav_secondary li.leaf.first .link_corner{
		bottom:-15px;
	}

	#nav, #nav_secondary {display: block; clear:both; width:103px; z-index: 100; position: relative;}

	#nav > li > a, #nav_secondary > li > a {  }

	

	/* Targeting the second level menu */

	#nav li ul, #nav_secondary li ul { background:#004177; color: #333; /*display: none;*/ margin:0; width:117px; position: relative; }

	#nav li ul li, #nav_secondary li ul li { width: 100%; padding:0; color:#ffffff; font-size:11px; line-height:20px;}

	#nav li ul li a, #nav_secondary li ul li a {height:auto; background: none; border: none; line-height:13px; margin: 0; padding: 4px; color:#ffffff; }



	#nav li ul li .branch_link, #nav_secondary li ul li .branch_link {height:auto; background: none; border: none; line-height:20px; margin: 0; color:#ffffff; }



	#nav li ul li a:hover, #nav_secondary li ul li a:hover { background: #004177;}

	#nav li ul li span.last, #nav_secondary li ul li span.last{width:117px; height:16px; display:block; background:url(../images/menu-hover-3rd-rt.png) right bottom no-repeat; position:absolute;}

	#nav li ul li ul li span.last, #nav_secondary li ul li ul li span.last{width:117px; height:16px; display:block; background:none; position:absolute;}



	/* A class of current will be added via jQuery */

	

	/* CSS fallback */

	#nav li:hover > ul.child, #nav_secondary li:hover > ul.child { display: block; }

	#nav li ul li, #nav_secondary li ul li{border:none; background:#004177; height:auto;}

	#nav li ul li ul.grandchild, #nav_secondary li ul li ul.grandchild{background:#082135; position:relative;}

	#nav li ul li ul.grandchild li, #nav_secondary li ul li ul.grandchild li{height:auto; background:#082135; position:relative; border:none;}

	#nav li ul li ul.grandchild li a:hover, #nav_secondary li ul li ul.grandchild li a:hover { background:none; text-decoration:underline;}

    	/*lww fix*/
        #nav li ul li ul.grandchild li a, #nav_secondary li ul li ul.grandchild li a{ line-height:0.92em; padding:6px;}
        #nav li ul li.leaf ul li a, #nav_secondary li ul li.leaf ul li a{ line-height:0.92em; padding:6px;}

        /* --- */


	#nav li.last, #nav li.last a:hover, #nav_secondary li.last, #nav_secondary li.last a:hover{border-bottom-left-radius:5px; border-radius:0 0 0 5px; -moz-border-bottom-left-radius:5px; -ms-border-bottom-left-radius:5px; -webkit-border-bottom-left-radius:5px; -o-border-border-bottom-left-radius:5px; behavior:url(PIE.htc); position:relative;}

	/* Navigation End */
	

	section#content .right{width:898px; float:right; background:#fff; padding:15px 0 28px;}

	/*section#content .right .fbTwitButtons{float:right; padding:0 15px 0 0;}*/
	
	section#content .right .fbTwitButtons{float:right; padding:0 15px 0 0;}

	section#content .right .contentArea{width:559px; float:left; padding-left:53px; padding-top:10px;}



	/*section#content .right .wideContent{width:800px; float:left; padding-left:53px;}*/



	section#content .right .contentArea h2{display:block; font-size:33px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; padding-top:3px; }

	

	section#content .right .contentArea p{width:510px; clear:left; padding-top:7px;}

	

	/*section#content .right .wideContent p{width:751px; clear:both; padding-top:7px;}*/







	

	section#content .contentArea .listing{padding-top:25px; overflow:hidden;}

	section#content .contentArea .block ul li h3 a{color:#444444;}

	section#content .contentArea .block ul li h3 a:hover{color:#007dd4; text-decoration:none;}

	section#content .contentArea .block ul li{width:230px; float:left; padding:0 54px 30px 0;}

	section#content .contentArea .block ul li:hover{padding:0 54px 30px 0;}

	section#content .contentArea .block ul li img{clear:both; margin-top:4px; border:8px solid white;}

	section#content .contentArea .block ul li img:hover{/*max-height:66px; min-width:213px;*/ border:8px solid #147acf; 
			padding:0px;
	}

	section#content .contentArea .block ul li.last{padding-right:0;}

	/*section#content .sidebar{float:right; padding-top:64px;}*/
	
	section#content .sidebar{float:right; padding-top:64px; width:286px;}

	section#content .sidebar_major_minor{float:right; padding-top:165px; width:286px;}

	section#content .sidebar .buttons{float:right;}

	section#content .sidebar .buttons ul li{width:207px; height:63px; float:left; clear:both; display:block; color:#fff; font-size:20px; padding-left:79px; line-height:59px; cursor:pointer;}

	/*section#content .sidebar .buttons ul li.apply{height:64px; background-image:url(../images/sprite-buttons.png); background-position:0 0;}*/
	section#content .sidebar .buttons ul li:first-child{
				height:64px; background-image:url(../images/sprite-buttons.png); background-position:0 0; 
				-webkit-border-top-left-radius: 3px;
				-moz-border-radius-topleft: 3px;
				border-top-left-radius: 3px;
	}

	section#content .sidebar .buttons ul li:last-child{
				height:64px; background-image:url(../images/sprite-buttons.png); background-position:0 0; 
				-webkit-border-bottom-left-radius: 3px;
				-moz-border-radius-bottomleft: 3px;
				border-bottom-left-radius: 3px;
	}

	section#content .sidebar .buttons ul li.apply{
		background-image:url(../images/sprite-buttons.png); background-position:0 0; 
	}


	section#content .sidebar .buttons ul li.photos-videos{background-image:url(../images/sprite-buttons.png); background-position:0 -64px;}

	section#content .sidebar .buttons ul li.dates{background-image:url(../images/sprite-buttons.png); background-position:0 -128px;}

	section#content .sidebar .buttons ul li.chat-with-us{height:61px; background-image:url(../images/sprite-buttons.png); background-position:0 -192px;}

	section#content .sidebar .buttons ul li.ask-the-cat{background-image:url(../images/sprite-buttons.png); background-position:0 -254px;}

	section#content .sidebar .buttons ul li.apply:hover{background-image:url(../images/sprite-buttons.png); background-position:0 -324px;}

	section#content .sidebar .buttons ul li.photos-videos:hover{background-image:url(../images/sprite-buttons.png); background-position:0 -388px;}

	section#content .sidebar .buttons ul li.dates:hover{background-image:url(../images/sprite-buttons.png); background-position:0 -452px;}

	section#content .sidebar .buttons ul li.chat-with-us:hover{background-image:url(../images/sprite-buttons.png); background-position:0 -516px;}

	section#content .sidebar .buttons ul li.ask-the-cat:hover{background-image:url(../images/sprite-buttons.png); background-position:0 -578px;}

	section#content .sidebar .buttons ul li a{text-decoration:none; color:#fff; display:block;}

	section#content .sidebar .input-txt{
		width:286px; 
		height:42px; 
		clear:both; 
		top:-1px; 
		border-bottom-left-radius:3px; 
		-moz-border-bottom-left-radius:3px; 
		-ms-border-bottom-left-radius:3px; 
		-webkit-border-bottom-left-radius:3px; 
		-o-border-border-bottom-left-radius:3px; 
		border-radius:0 0 0 3px; 
		background:-webkit-gradient(linear, 0 0, 0 bottom, from(#003a6a), to(#00559d)); 
		background:-webkit-linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		background:-moz-linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#003a6a', endColorstr='#00559d');
		-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#003a6a', endColorstr='#00559d')";
		background:-ms-linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		background:-o-linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		background:linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		-pie-background: linear-gradient(#003a6a, #00559d, #00559d, #00559d); 
		behavior:url(PIE.htc); position:relative;}

	section#content .sidebar .input-txt input[type="text"]{width:190px; height:23px; border:1px solid #cccccc; color:#101c27; font-size:14px; padding-left:3px; line-height:21px; margin:7px 10px;}

	section#content .sidebar .input-txt img{position:relative; top:-25px; right:17px; float:right;}

	section.bottomContainer{width:1000px; float:left; padding-top:18px;}

	section.bottomContainer .leftSide{width:103px; float:left;}

	section.bottomContainer .rightSide{width:897px; height:auto; overflow:hidden; float:right; background:url(../images/footer-bg.png) left top repeat-y; border-top:1px solid #6ba1ce;}

	section.bottomContainer .leftSide nav.socialButtons{border-right: 1px solid #004689;}

	section.bottomContainer .leftSide nav.socialButtons a{height:34px; display:block;}

	section.bottomContainer .leftSide nav.socialButtons a:hover{text-decoration:none;}

	section.bottomContainer .leftSide nav.socialButtons a.youTube{background-image:url(../images/roll-over-buttons.png); background-position:0 -289px;}

	section.bottomContainer .leftSide nav.socialButtons a.youTube:hover{background-position:0 -324px;}

	section.bottomContainer .leftSide nav.socialButtons a.twitter{background-image:url(../images/roll-over-buttons.png); background-position:0 -359px;}

	section.bottomContainer .leftSide nav.socialButtons a.twitter:hover{background-position:0 -394px;}

	section.bottomContainer .leftSide nav.socialButtons a.facebook{background-image:url(../images/roll-over-buttons.png);background-position:0 -429px;}

	section.bottomContainer .leftSide nav.socialButtons a.facebook:hover{background-position:0 -464px;}

	section.bottomContainer .leftSide nav.socialButtons a.flickr{background-image:url(../images/roll-over-buttons.png); background-position:0 -499px;}

	section.bottomContainer .leftSide nav.socialButtons a.flickr:hover{background-position:0 -534px;}

	section.bottomContainer .leftSide nav.socialButtons a.rss{background-image:url(../images/roll-over-buttons.png); background-position:0 -569px;}

	section.bottomContainer .leftSide nav.socialButtons a.rss:hover{background-position:0 -604px;}

	section.bottomContainer .rightSide .upperSection{width:866px; height:auto; overflow:hidden; padding:15px 16px; background:url(../images/bottom-container-bg.png) left top repeat-x; border-bottom:1px solid #004f91;}

	.rightSide .upperSection article.kentucky{width:696px; float:left;}

	.rightSide .upperSection article.kentucky figure{width:212px; float:left;}

	.rightSide .upperSection article.kentucky article{width:auto; height:138px; float:left; overflow:hidden;}

	.rightSide .upperSection article.kentucky article h2{clear:both; font-size:20px; font-weight:bold; font-family:"Lucida Sans", "Lucida Grande", sans-serif; color:#fff; line-height:22px; padding-bottom:13px;}

	.rightSide .upperSection article.kentucky article p{width:475px; color:#b4cfe7;}

	.rightSide .upperSection article.kentucky article p a{color:#fff; text-transform:uppercase;}

	.rightSide .upperSection article.kentucky article p a:hover{color:#fff;}

	.rightSide .upperSection aside.uknow{width:143px; float:left; border-left:1px solid #5392c7; padding:25px 0 0 23px; text-align:center;}

	.rightSide .upperSection .rollOverButton{width:50px; margin:0 auto; display:block; padding-top:7px; color:#101c27; text-shadow:0 1px 1px #fff; -moz-text-shadow:0 1px 1px #fff; -webkit-text-shadow:0 1px 1px #fff; -ms-text-shadow:0 1px 1px #fff; -o-text-shadow:0 1px 1px #fff; behavior:url(PIE.htc);}

	.rightSide .upperSection .rollOverButton a{width:48px; display:block; height:31px; padding-top:17px; background-image:url(../images/roll-over-buttons.png); font-weight:bold; font-size:11px; color:#101c27;}

	.rightSide .upperSection .rollOverButton a:hover{color:#101c27; background-position:0 -50px; text-decoration:none;}

	section.bottomContainer .rightSide .bottomSection{padding:10px;}

	section.bottomContainer .rightSide .bottomSection nav{width:175px; float:left;}

	section.bottomContainer .rightSide .bottomSection nav h3{color:#fff; font-size:15px; padding:0 29px; font-weight:normal;}

	section.bottomContainer .rightSide .bottomSection nav ul{border-right:1px solid #5393c9; height:auto; padding:0 29px 0; margin-top:13px; /*min-height:220px;*/}

	section.bottomContainer .rightSide .bottomSection nav ul li{display:block; clear:both; line-height:14px; padding-bottom:5px; color:#b4d0e9;}

	section.bottomContainer .rightSide .bottomSection nav ul li a{color:#b4d0e9;}

	/*section.bottomContainer .rightSide .bottomSection nav ul li a:hover, section.bottomContainer .rightSide .bottomSection nav ul li a.active{color:#fff; text-decoration:none; background:url(../images/nav-bullet.png) left 5px no-repeat; padding-left:10px; position:relative; margin-left:-10px;}*/

	/*section.bottomContainer .rightSide .bottomSection nav ul li a:hover{color:#fff; text-decoration:none; background:url(../images/nav-bullet.png) left 5px no-repeat; padding-left:10px; position:relative;  margin-left:-10px;}*/

	section.bottomContainer .rightSide .bottomSection nav ul li a:hover{color:#fff; text-decoration:none; background:url(../images/nav-bullet.png) left 5px no-repeat; position:relative;}



	section.bottomContainer .rightSide .bottomSection nav ul li .child_link:hover, section.bottomContainer .rightSide .bottomSection nav ul li .child_link.active{color:#fff; text-decoration:none; background:url(../images/nav-bullet.png) left 5px no-repeat; padding-left:10px; position:relative; margin-left:-10px;}

	section.bottomContainer .rightSide .bottomSection nav ul li .child_link:hover{color:#fff; text-decoration:none; background:url(../images/nav-bullet.png) left 5px no-repeat; padding-left:10px; position:relative;  margin-left:-10px;}



	section.bottomContainer .rightSide .bottomSection nav ul.last{border:none; padding:0 0 15px 30px;}

	section.bottomContainer .rightSide .bottomSection nav ul li.last{padding-bottom:0;}

	

	/* Slider JQuery Start */

	.going-uk-form { float:right; background-color:#FFFFFF; width:898px; padding:0; margin-top:18px;}

	.going-uk-form #signup-box { padding:0; float:left; width:890px; position:relative; height: 90px; /*height:auto !important; */}

	.going-uk-form #controls { float:right; width:72px; padding:14px 0 0; background:url(../images/btn-done.png) left 14px no-repeat;}

	.signup-step-1 { padding:15px 18px 0; width:788px; float:left;}

	.signup-head { font-size:20px; color:#444444; font-style:italic; line-height:24px; padding-bottom:8px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; }

	.signup-name { float:left; width:344px; height:30px; border:1px solid #707070; border-radius:3px; -webkit-border-radius:3px; -o-border-radius:3px; -ms-border-radius:3px; -moz-border-radius:3px; behavior:url(PIE.htc); position:relative; margin-right:17px; padding:5px 0 0 5px;}

	.signup-email {float:left; width:411px; height:30px; border:1px solid #707070; border-radius:3px; -webkit-border-radius:3px; -o-border-radius:3px; -ms-border-radius:3px; -moz-border-radius:3px;  padding:5px 0 0 5px; behavior:url(PIE.htc); position:relative;}

	.signup-head span { font-style:normal;}

	#controls .controls { padding:7px 0 0 3px; width:49px; height:11px; overflow:hidden;}

	#controls li { float:left; width:7px; height:7px; padding:0 5px 10px 0;}

	#controls li a { display:block; width:7px; height:7px; background:url(../images/signup-inactive.png) left top no-repeat;}

	#controls li a:hover, #controls li.current a { background:url(../images/signup-active.png) left top no-repeat;}

	.going-uk-form #controls .prevBtn { display:none !important; }

	.going-uk-form #controls .nextBtn { display:block !important; background:url(../images/btn-next.png) left top no-repeat; width:50px; height:51px; }

	.going-uk-form #controls .nextBtn:hover {background:url(../images/btn-next-h.png) left top no-repeat;}

	.signup-name .textBox, .signup-email .textBox, .signup-address .textBox, .signup-city .textBox, .signup-st .textBox, .signup-zip .textBox  { font-size:18px; color:#c1c1c1; width:95%; border:0 none; height:24px;}

	.ipad .signup-name .textBox, .ipad .signup-email .textBox, .ipad .signup-address .textBox, .ipad .signup-city .textBox{height:18px; width:92%;}

	.iphone .signup-name .textBox, .iphone .signup-email .textBox, .iphone .signup-address .textBox, .iphone .signup-city .textBox{height:18px; width:92%;}

	.ipad .signup-zip .textBox{height:18px; width:83%;}

	.iphone .signup-zip .textBox{height:18px; width:83%;}

	.ipad .signup-st .textBox{height:18px; width:57%;}

	.iphone .signup-st .textBox{height:18px; width:57%;}

	.going-uk-form div.inline { display:inline-block; font-size:16px; color:#AAAAAA; margin:2px 0;}

	.going-uk-form fieldset.inline { display:inline-block; }

	.signup-address, .signup-city {float:left; width:260px; height:28px; border:1px solid #707070; border-radius:3px; -webkit-border-radius:3px; -o-border-radius:3px; -ms-border-radius:3px; -moz-border-radius:3px; margin-right:17px; padding:5px 0 0 5px; behavior:url(PIE.htc); position:relative;}

	.ipad .signup-address, .ipad .signup-city{padding:3px 0 3px 5px;}

	.iphone .signup-address, .iphone .signup-city{padding:3px 0 3px 5px;}

	.signup-st {float:left; width:40px; height:30px; border:1px solid #707070; border-radius:3px; -webkit-border-radius:3px; -o-border-radius:3px; -ms-border-radius:3px; -moz-border-radius:3px; margin-right:17px; padding:5px 0 0 5px; behavior:url(PIE.htc); position:relative;}

	.ipad .signup-st{padding:3px 0 3px 0;}

	.iphone .signup-st{padding:3px 0 3px 0;}

	.signup-zip {float:left; width:103px; height:30px; border:1px solid #707070; border-radius:3px; -webkit-border-radius:3px; -o-border-radius:3px; -ms-border-radius:3px; -moz-border-radius:3px; margin-right:17px; padding:5px 0 0 5px; behavior:url(PIE.htc); position:relative;}

	.ipad .signup-zip{padding:3px 0 3px 0;}

	.iphone .signup-zip{padding:3px 0 3px 0;}

	.signup-optional { float:left; width:100px; }

	.select_wrap { float:left; width:300px;}

	/* Slider JQuery End */

	

	/* Middle End */



	/* footer Start */

	footer#footer{width:897px; clear:both; margin:0 auto; text-align:center; padding-top:21px;}

	footer#footer .copyright{padding:15px 0 7px; text-align:center; line-height:20px; color:#fff; font-size:11px;}

	/* footer End */



/* Container End */



/* Index Page End */

/*-----------------------------------------------------------------------*/



	/* Video Page Start */

	section#content .right.paddingBottom{padding-bottom:0;}

	section#content .video{width:898px; float:left; padding-bottom:20px;}

	section#content .cancelBtn{width:41px; height:40px; position:absolute; float:right; top:0; right:-1px; background:url(../images/cancel-btn.png) left top no-repeat; cursor:pointer;}

	section#content .photoVideoButton{width:898px; height:63px; background:url(../images/vid-photos-videos.png) left top no-repeat; color:#fff; font-size:20px; text-align:center; font-weight:bold; padding-left:43px; line-height:56px; margin:-4px 0 0;}

	section#content .photoVideoButton:hover{background-position:0 -67px;}

	section#content .photoVideoButton a{color:#fff; font-weight:bold;}

	section#content .photoVideoButton a:hover{color:#fff; text-decoration:none;}

	section#content .right .contentArea h2.video{width:125px; padding-bottom:18px;}

	section#content .right .contentArea select.nameOptions{width:112px; float:left; font-size:12px; color:#444444; line-height:20px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; padding-left:3px; margin-top:16px;}

	section#content .right .videoListing{width:847px; float:left;}

	section#content .right .videoListing .blockListing ul li{width:372px; display:inline-block; position:relative; float:left; padding:0 50px 29px 0;}

	section#content .right .videoListing .blockListing ul li img{clear:both;}

	section#content .right .videoListing .blockListing ul li a.playButton{width:48px; height:49px; float:right; position:absolute; right:72px; top:185px; background-image:url(../images/roll-over-buttons.png); background-position:0 -102px; cursor:pointer; z-index:2;}

	section#content .right .videoListing .blockListing ul li a.playButton:hover{background-position:0 -151px;}

	section#content .right .videoListing .blockListing ul li .titleName{width:362px; height:47px; float:left; padding:7px 0 0 10px; background:-webkit-gradient(linear, 0 0, 0 bottom, from(#00345f), to(#005196)); background:-webkit-linear-gradient(#00345f, #005196, #005196, #005196); background:-moz-linear-gradient(#00345f, #005196, #005196, #005196); background:-ms-linear-gradient(#00345f, #005196, #005196, #005196); background:-o-linear-gradient(#00345f, #005196, #005196, #005196); background:linear-gradient(#00345f, #005196, #005196, #005196); -pie-background: linear-gradient(#00345f, #005196, #005196, #005196); behavior:url(PIE.htc); position:relative; border-bottom:1px solid #dfdfdf; border-bottom-left-radius:3px; -moz-border-bottom-left-radius:3px; -ms-border-bottom-left-radius:3px; -webkit-border-bottom-left-radius:3px; -o-border-border-bottom-left-radius:3px; border-bottom-right-radius:3px; -moz-border-bottom-right-radius:3px; -ms-border-bottom-right-radius:3px; -webkit-border-bottom-right-radius:3px; -o-border-border-bottom-right-radius:3px;}

	section#content .right .videoListing .blockListing ul li .titleName h3{color:#fff; font-size:18px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; font-weight:normal;}

	section#content .right .videoListing .blockListing ul li .titleName p{width:auto; clear:both; font-size:12px; color:#fff; padding-top:2px;}

	section#content .right .videoListing .blockListing ul li.last{padding-bottom:0;}

	/* Video Page End */

	/*-----------------------------------------------------------------------*/

	

	/* Major &amp; Minor page Start */

	.contentMajor h2{  padding-top:8px !important;}

	.contentMajor{width:480px; float:left; padding-left:48px;}

	.contentMajor h2{font-size:33px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; padding-top:10px;}

	.contentMajor p{width:510px; clear:both;  padding:10px 0 10px 20px;}

	.contentMajor h2 span{ float:left;}

	.contentMajor h2 a{width:76px; height:25px; float:left; font-size:15px; padding:0 0 0 10px; line-height:25px; font-weight:bold; color:#1362af; margin:8px 0 0 20px; display:block; background-image:url(../images/roll-over-buttons.png); background-position:-5px -640px; text-align:center;}

	.contentMajor h2 a:hover{background-position:-5px -666px; color:#fff; text-decoration:none;}

	.applyMajor{ float:left; padding:10px 0 0 15px;}

	

	.majorSheet{ font-size:17px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; padding:5px 0 0;  position: relative; margin-left: -50px;}

	.majorSheet ul { border-bottom:#cccccc solid 1px; height:43px; width:785px; padding-left: 0px !important; }

	.majorSheet li.active{background:url(../images/major-arrow.gif) 20px bottom no-repeat;}

	.majorSheet li.last{ padding-right:0;}

	.majorSheet li{ float:left; list-style:none; padding:10px 13px 0 0; height:43px; }

	.majorSheet li a{ color:#999999;}

	.majorSheet li.active a{ color:#196cb1;}

	.majorSheet li a:hover{ text-decoration:none;}

	

	.majorCollege{ clear:left; font-size:17px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; margin-left: -50px;}

	.majorCollege ul { border-bottom:#cccccc solid 1px; height:40px; width:785px; padding-left: 0px !important;}

	.majorCollege li.active{background:url(../images/major-arrow.gif) 20px bottom no-repeat;}

	.majorCollege li.last{ padding-right:0;}

	.majorCollege li{ float:left; list-style:none; padding:10px 13px 0 0; height:40px; }

	.majorCollege li a{ color:#999999;}

	.majorCollege li.active a{ color:#196cb1;}

	.majorCollege li a:hover{ text-decoration:none;}

	

	.accHeader, .collapser{ margin: 0 0 0 -50px !important; cursor:pointer;  padding-left: 20px !important; padding-top: 5px !important; padding-bottom: 5px !important; background:url(../images/ac-arrow.gif) 0px 6px no-repeat; margin-top:1px;  display: block; color:#999999 !important; font-size:18px; line-height:30px; font-weight:normal; }


	.openpet, .collapser.openpet{cursor: pointer; background:url(../images/active-arrow.gif) left 6px no-repeat; padding-left:20px; margin-top:1px;  display: block; color:#1268af !important; font-size:18px; line-height:30px; padding-bottom:2px;}

	

	.accContent p { padding:10px 0; margin-left: -50px !important;  padding-left:20px !important;}

	.accContent h4 a{ color:#1268af; font-size:16px; padding: 10px 0 0 0; font-weight:normal; margin-left: -30px !important; display: block;}

	.accContent ul{ border-left:#cccccc solid 1px; margin:10px 0 20px -25px; }

	.accContent ul li{ line-height:26px; list-style:none;}

	.accContent ul li a{color:#222222; font-size:14px; }

	

	.howToDeclare{ float:right; width:271px; }



	.howToDeclare .declareBg{background:url(../images/major-bg.gif) left top repeat-y; width:271px;}

	.howToDeclare .declareHead{background:url(../images/header.jpg) left top no-repeat;}

	.howToDeclare .declareBottom{background:url(../images/major-bottom.png) left bottom no-repeat;}

	.declareBottom h4{ text-align:center; font-size:18px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; color:#fff; padding:20px 0 25px;}

	.declareBottom  p{ color:#fff; font-size:12px; padding:0 25px 17px 15px; width:231px; }

	.declareBottom  p.notes{ font-size:11px;}

	.declareBottom  p a{ text-decoration:underline; color:#fff;}

	.majorWrap{ float:left; width:570px;}

	/* Major &amp; Monor page End */

	/*-----------------------------------------------------------------------*/





/*wwbtc changes*/	

	.rss_image {float:left; padding-right:15px;}

	.rightSide .upperSection .rss_title h2{font-size:20px; font-family:"Lucida Sans", "Lucida Grande", sans-serif; color:#fff; line-height:22px; padding-bottom:13px;}

	.rightSide .upperSection .rss_title h2 a{color:white;}

	.rightSide .upperSection .rss_teaser p{color:#b4cfe7;}

	.rightSide .upperSection .rss_teaser a{color:white;}

	section.bottomContainer .rightSide .bottomSection nav ul li {

		list-style:none;

	}

	.imagefield-field_sliderimg {display:none;}

	

	.views-admin-links {

		display:none;

	}

	

	ul.child, ul.grandchild {

		display:none;

	}

	

	section#content .right .nosidebar {width:830px; }

	section#content .right .nosidebar p{ width:780px; }



	section#content .sidebar.ask_the_cat .buttons ul li.ask-the-cat{background-position:10px -254px;}

	section#content .sidebar.ask_the_cat .buttons ul li.ask-the-cat:hover{background-position:10px -578px;}

	section#content .sidebar .input-txt input[type="text"]{width:190px; height:23px; border:1px solid #cccccc; color:#101c27; font-size:14px; padding-left:3px; line-height:21px; margin:7px 10px;}

	section#content .sidebar .input-txt img{position:relative; top:-25px; right:17px; float:right;}

	section#content .sidebar .input-txt input[type="image"]{position:relative; top:-25px; right:17px; float:right;}



	.view-video-grid table, .view-image-grid table {

		width:100%;

	}



	.view-video-grid table tr, .view-image-grid table tr {

		height:225px;

	}	



	#lightboxFrame {

		overflow:hidden;

	}

	

	.videoheader {

		/*padding-bottom:10px;*/
		left: 250px;
		position: absolute;
		top: -35px;
	}
	
	#imageData #bottomNav #frameHoverNav {
		width:90px;
		margin-left:325px;
		bottom:70px;
		display:none;
	}
	
	.emvideo-modal-iframe .content {
		padding:8px 0 0 8px;
	}

/* Editor Functions */



div.image { float: right; padding: 20px; display:block; clear:none; } 

div.image img { align: right; } 

div.image .caption { display:block; width:96%; font-style:italic; text-align:right; padding:8px 16px 8px 8px;}





/* Buttons Sprites for A links */ 

#edit-body ul.plain, ul.plain  { padding:6px 0 0 24px;  }

#edit-body ul.plain li, ul.plain li { list-style:disc; padding:6px 13px 2px 6px; }
/*
.contentArea h3 { font-size:18px; color:#1168b0; font-family:"Lucida Sans", "Lucida Grande", sans-serif; line-height:20px; font-weight: normal; padding: 10px 0 0 0; }

.contentArea ul.important li { list-style:none; border-left:1px solid #cccccc; padding:2px 0 2px 8px; }

.contentArea ul.important { padding: 13px; }

p.bold { font-weight:bold; }

.contentArea p { line-height: 18px; }

.contentArea ol li { list-style:decimal; padding:6px 13px 6px 0; line-height: 18px; }

.contentArea ol { padding: 0 0 8px 24px; }

.pie-element {

  behavior: url("../stylesheets/PIE.htc");

  position: relative;

}*/



/*#edit-body ul, .contentArea ul  { padding:6px 0 0 24px;  }*/

#edit-body ul, .contentArea ul  { padding:6px 0 0 25px;  }

.contentArea .accContent ul  { padding:6px 0 0 0px;  }

.listing ul  { padding:6px 0 0 0px; list-style:none;  }

.listing .block { display:inline-block; }

#edit-body ul li, .contentARea ul li { list-style:disc; padding:6px 13px 2px 6px; }

#edit-body h3, .contentArea h3 { font-size:18px; color:#1168b0; font-family:"Lucida Sans", "Lucida Grande", sans-serif; line-height:20px; font-weight: normal; padding: 16px 0 7px 0; }

#edit-body ul li, .contentArea ul.important li { list-style:none; border-left:1px solid #cccccc; padding:2px 0 2px 8px; }

#edit-body ul, .contentArea ul.important { padding: 13px; }

p.bold { font-weight:bold; }

#edit-body p, .contentArea p { line-height: 18px; }

#edit-body ol li, .contentArea ol li { list-style:decimal; padding:6px 13px 6px 0; line-height: 18px; }

#edit-body ol, .contentArea ol { padding: 0 0 8px 24px; }

.pie-element {

  behavior: url("../stylesheets/PIE.htc");

  position: relative;

}







.button {

  display: inline-block;

  /*cursor: pointer;*/

  -moz-box-sizing: border-box;

  -webkit-box-sizing: border-box;

  -ms-box-sizing: border-box;

  box-sizing: border-box;

  -moz-border-radius: 3px;

  -webkit-border-radius: 3px;

  -o-border-radius: 3px;

  -ms-border-radius: 3px;

  -khtml-border-radius: 3px;

  border-radius: 3px;

  background: #1266ac;

  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #1669ae), color-stop(50%, #1266ac), color-stop(100%, #035ca5));

  background-image: -webkit-linear-gradient(top, #1669ae 0%, #1266ac 50%, #035ca5 100%);

  background-image: -moz-linear-gradient(top, #1669ae 0%, #1266ac 50%, #035ca5 100%);

  background-image: -o-linear-gradient(top, #1669ae 0%, #1266ac 50%, #035ca5 100%);

  background-image: linear-gradient(top, #1669ae 0%, #1266ac 50%, #035ca5 100%);

  padding: 5px 10px;

  color: #fff;

  margin: 5px;

}

.button:hover {

  background: #2e7fc6;

  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #2e7fc6), color-stop(50%, #277bc3), color-stop(100%, #1d75bf));

  background-image: -webkit-linear-gradient(top, #2e7fc6 0%, #277bc3 50%, #1d75bf 100%);

  background-image: -moz-linear-gradient(top, #2e7fc6 0%, #277bc3 50%, #1d75bf 100%);

  background-image: -o-linear-gradient(top, #2e7fc6 0%, #277bc3 50%, #1d75bf 100%);

  background-image: linear-gradient(top, #2e7fc6 0%, #277bc3 50%, #1d75bf 100%);



}

.button.long {

  padding: 3px 20px;

}

.button a {

  -moz-box-sizing: border-box;

  -webkit-box-sizing: border-box;

  -ms-box-sizing: border-box;

  box-sizing: border-box;

  display: block;

  min-height: 18px;

  font-size: 16px;

  text-shadow: -1px -1px rgba(0, 0, 0, 0.3);



  color:#ffffff;

}

.button a:hover { text-decoration:none; }

.button a.icon {

  padding: 0 0 0 25px;

  background: url(../images/icons_sprite.png) 0 0 no-repeat;

}

.button .icon {

  padding: 0 0 0 25px;

  background: url(../images/icons_sprite.png) 0 0 no-repeat;

}

.button .icon.link {  background-position: -2px 0; }
.button .icon.cap {  background-position: -2px -20px; }
.button .icon.stars {   background-position: -2px -40px; }
.button .icon.calculator {  background-position: -2px -63px; }
.button .icon.steeple {   background-position: -2px -83px; }
.button .icon.uk {  background-position: -2px -102px;}
.button .icon.people {  background-position: -2px -122px;}
.button .icon.download {  background-position: -2px -143px;}
.button .icon.paw {  background-position: -2px -162px;}
.button .icon.check {  background-position: -2px -182px;}
.button .icon.money {  background-position: -2px -203px;}
.button .icon.book {  background-position: -2px -222px;}
.button .icon.print {  background-position: -2px -242px;}
.button .icon.play {  background-position: -2px -267px;}



#edit-body .button a:hover { text-decoration:none; }

#edit-body .button a.icon {

  padding: 0 0 0 25px;

  background: url(https://dib.uky.edu/Admission/sites/dib.uky.edu.Admission/themes/ukadmissions/images/icons_sprite.png) 0 0 no-repeat;

}

#edit-body .button .icon {

  padding: 0 0 0 25px;

  background: url(https://dib.uky.edu/Admission/sites/dib.uky.edu.Admission/themes/ukadmissions/images/icons_sprite.png) 0 0 no-repeat;

}

#edit-body .button .icon.link {  background-position: -2px 0; }
#edit-body .button .icon.cap {  background-position: -2px -20px; }
#edit-body .button .icon.stars {   background-position: -2px -40px; }
#edit-body .button .icon.calculator {  background-position: -2px -63px; }
#edit-body .button .icon.steeple {   background-position: -2px -83px; }
#edit-body .button .icon.uk {  background-position: -2px -102px;}
#edit-body .button .icon.people {  background-position: -2px -122px;}
#edit-body .button .icon.download {  background-position: -2px -143px;}
#edit-body .button .icon.paw {  background-position: -2px -162px;}
#edit-body .button .icon.check {  background-position: -2px -182px;}
#edit-body .button .icon.money {  background-position: -2px -203px;}
#edit-body .button .icon.book {  background-position: -2px -222px;}
#edit-body .button .icon.print {  background-position: -2px -242px;}
#edit-body .button .icon.play {  background-position: -2px -267px;}


.blueheader { background: url(../images/h5-arrow.png) left center no-repeat; min-height:46px; display:table-cell; overflow: hidden; vertical-align:middle; }


h4.blueheader {
	background: url(../images/h5-arrow.png) left center no-repeat; min-height:46px; overflow: hidden; vertical-align:middle;	
	padding: 6px 0 8px 26px; font-size:16px; font-weight:300; color: #000; line-height:20px; display:table-cell;  } 


#edit-body h4.blueheader {
	background: url(https://dib.uky.edu/Admission/sites/dib.uky.edu.Admission/themes/ukadmissions/images/h5-arrow.png) left center no-repeat; min-height:46px; overflow: hidden; vertical-align:middle;	
	padding: 6px 0 8px 26px; font-size:16px; font-weight:300; color: #000; line-height:20px; display:table-cell;  } 

.button a.link {  background-position: -2px 0; }

.button a.cap {  background-position: -2px -20px; }

.button a.stars {   background-position: -2px -40px; }

.button a.calculator {  background-position: -2px -63px; }

.button a.steeple {   background-position: -2px -83px; }

.button a.uk {  background-position: -2px -102px;}

.button a.people {  background-position: -2px -122px;}

.button a.download {  background-position: -2px -143px;}

.button a.paw {  background-position: -2px -162px;}

       a.button_apply {width:76px; height:25px;  font-size:15px; padding:0 0 0 10px; line-height:25px; font-weight:bold; color:#1362af; margin:-5px 0 0 10px; display:inline-block; clear:none; background-image:url(../images/roll-over-buttons.png); background-position:-5px -640px; text-align:center; vertical-align:middle; }

           a.button_apply:hover{background-position:-5px -666px; color:#fff; text-decoration:none;}



div.image { float: right; padding: 20px; display:block; clear:none; }

div.image img { align: right; }

div.side_image {clear:none; width:249px;}

div.side_image img {padding-bottom:20px;}


div.image .caption { display:block; width:96%; font-style:italic; text-align:right; padding:8px 16px 8px 8px;}

div.side_image .caption { display:block; width:96%; font-style:italic; text-align:right; padding:8px 16px 8px 8px;}

section#content .right .nosidebar {width:830px; }

section#content .right .nosidebar p{ width:780px; }

#nav li a span:hover{width:108px; height:49px; background:url(../images/menu-hover-rt.png) right 0 no-repeat; display:block;}







#edit-body, #whizzyedit-body, #whizzyedit-body html, #whizzyedit-body html body {

background-image: url("");

background: #fff;

background-repeat:no-repeat;

background-position:top center;

background-attachment:auto;

-o-background-size: 1% auto, auto;

-moz-background-size: 1% auto, auto;

-webkit-background-size: 1% auto, auto;

background-size: 1% auto, auto;

}



.contentArea p { clear:none; }

.social-sharing {float:left;}


	section#content aside.seebluevip-form{width:285px; float:right; margin-top:10px; position:relative;}
	section#content .seebluevip-form-in{width:285px; height:236px; overflow:hidden; float:left; background:url(../images/see-blue-vip-img.gif) left top no-repeat;}
	section#content aside.seebluevip-form .top{padding:10px 0 10px 7px; height:auto; clear:both; background:url(../images/seeblue-border.gif) left bottom repeat-x;}
	section#content .seebluevip-form-in .middle{width:285px; height:auto; float:left; padding:15px 0 20px;}
	section#content .seebluevip-form-in .middle strong{fonts-size:14px; color:#fff; font-style:italic; padding-left:10px;}
	section#content .seebluevip-form-in .middle form.seebluevip{clear:both; padding:8px 0 0 10px;}
	section#content .seebluevip-form-in .middle form.seebluevip ul{clear:both; margin-bottom:11px; overflow:hidden;}
	section#content .seebluevip-form-in .middle form.seebluevip ul li{display:inline; float:left;}
	section#content .seebluevip-form-in .middle form.seebluevip ul li.text{width:91px; color:#fff; font-size:14px; line-height:19px;}
	section#content .seebluevip-form-in .middle form.seebluevip ul li input{width:168px; height:16px; line-height:16px; padding-left:3px; font-size:12px;}
	section#content aside.seebluevip-form .bottom{width:275px; height:30px; float:left; padding:10px 0 0 10px; color:#9ebed7; font-size:11px; background:url(../images/see-blue-vip-bottom.gif) left top no-repeat;}
	section#content aside.seebluevip-form .bottom a{color:#9ebed7; text-decoration:underline;}
	section#content aside.seebluevip-form .bottom a:hover{color:#9ebed7; text-decoration:none;}
	section#content aside.seebluevip-form .rollOverButton1{width:48px; height:50px;display:block; background-image: url(../images/roll-over-buttons.png);position:absolute; bottom:10px; right:10px; z-index:2; cursor:pointer;}
	section#content aside.seebluevip-form .rollOverButton1 input[type="submit"]{width:48px; height:50px; display:block; font-size:13px; border:none; outline:none; display:block; color:#101C27; padding:0 0 0 2px; font-weight:bold; text-shadow:0 1px 1px #fff; -moz-text-shadow:0 1px 1px #fff; -webkit-text-shadow:0 1px 1px #fff; -ms-text-shadow:0 1px 1px #fff; -o-text-shadow:0 1px 1px #fff; behavior:url(PIE.htc); background:none; cursor:pointer;}
	section#content aside.seebluevip-form .rollOverButton1:hover{background-position: 0 -50px; color:#101C27; text-decoration:none;}


.recruiter_contain {
	padding-top:20px;
}

.recruiter_info {
	padding-left:30px;
}

section#content .right .contentArea .recruiter_info p {
	line-height:18px;
	width:600px;
	text-align:left;
}

.recruiter_blue {
	color: #1168B0;
    font-family: "Lucida Sans","Lucida Grande",sans-serif;
    font-size: 20px;
	font-weight:bold;
}

.recruiter_black {
    font-family: "Lucida Sans","Lucida Grande",sans-serif;
    font-size: 20px;
	font-weight:bold;
}

.view-filters {
	border-bottom: 1px solid #CCCCCC;
	border-top: 1px solid #CCCCCC;
}

.lightbox2-alt-layout-data #bottomNavClose, .lightbox2-alt-layout #bottomNavClose {
	margin-top:10px;
}

#edit-body ol.demo_ol, .demo_ol {
	list-style:decimal;
	font-size:20px;
	color:#006eaf;
	padding: 3px 0 3px 15px;
	margin: 0 0 0 15px;
}

#edit-body .demo_ol span, .demo_ol span {
	font-size:12px;
	color:#222;
}

.blue_ul {
	list-style:decimal;
	font-size:20px;
	color:#006eaf;
	padding: 10px 0 10px 25px;
	margin: 0 0 0 25px;
}

.blue_ul li {
	font-size:12px;
	color:#222;
}

.emvideo-modal, .imagefield-lightbox2-image_grid_view img {
	padding-right:50px;
}

#frameContainer body {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
	background:none;
	background-color:black;
}

.collapse_me {
	display:none;
	/*padding-left:50px;*/
}

.collapser{ margin: 0 0 0 0px !important; cursor:pointer;  padding-left: 20px !important; padding-top: 5px !important; padding-bottom: 5px !important; background:url(../images/ac-arrow.gif) 0px 6px no-repeat; margin-top:1px;  display: block; color:#999999 !important; font-size:18px; line-height:30px; font-weight:normal; }

#edit-body .collapser{ margin: 0 0 0 0px !important; cursor:pointer;  padding-left: 20px !important; padding-top: 5px !important; padding-bottom: 5px !important; background:url(https://dib.uky.edu/Admission/sites/dib.uky.edu.Admission/themes/ukadmissions/images/ac-arrow.gif) 0px 6px no-repeat; margin-top:1px;  display: block; color:#999999 !important; font-size:18px; line-height:30px; font-weight:normal; }


#edit-body .collapse_me {
	display:block;
}

section#content .right .contentArea p.video_grid_caption {
	width:228px;
	padding-top:0px;
}

footer#footer .copyright a {
	color:white;
	text-decoration:underline;
}

.content td {
	border:1px #888888 solid;
	padding:0.1em 0.3em;	
}

.transferbutton .button {
	padding:10px 10px;
}

.rec_hide {
    display: none;
}