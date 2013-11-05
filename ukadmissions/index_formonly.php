<!DOCTYPE HTML>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>University of Kentucky</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>	
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes"/>	
	<!-- Javascript to enable HTML 5 in IE -->
	<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<![endif]-->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/stylesv2.css" />
	<link rel="stylesheet" href="css/ie.css" />
	<link rel="stylesheet" media="all and (orientation:portrait)" href="css/portrait.css" />
	<link rel="stylesheet" media="all and (orientation:landscape)" href="css/landscape.css">
	<!-- STRAT : Script -->
	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="js/character-restriction.js"></script>
	<script type="text/javascript" src="js/jquery.history.min.js"></script>
	<script type="text/javascript" src="js/resize-background.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="js/common-functions.js"></script>
	<script type="text/javascript" src="js/slider_script.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
	<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
	<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
	<script type="text/javascript" src="js/student_form.js"></script>
	<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>
	<script type="text/javascript">
	var YOUTUBE_BASE = "http://www.youtube.com/embed/";
	var videoLinks = ["oD_huoDhols", "aTXFCTxz4GE", "O3qY09ZuD60", "OwACLP9BAfc","yNvJFCHRqHI","xM2MpGslbnM","J7c7hPhel7Y", "zd_tlGcv3Q4", "rUB3klvkMYM", "tZLBLL8IRn8"];
	var tweetTexts = [
		"Watching video on seeblue.com",
		"Watching video on seeblue.com",
		"Watching video on seeblue.com",
		"Watching video on seeblue.com",
		"Watching video on seeblue.com",
		"Watching video on seeblue.com"
	];
	var tweetURLs = [
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission"
	];
	var shareURLs = [
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission",
		"http://www.uky.edu/Admission"
	];
	
	$(document).ready(function() {
		
	});
	</script>
	<!-- END : Script -->
	</head>
	<body id="sample1" style="height:100px; overflow:hidden;" >
						<div class="form_wrap">
							<div class="form_left">
								<div class="form_container">
									<form class="studentForm">
									<div class="form">
										<h1>Get more information about going to UK</h1>
										<fieldset>
											<input type="text" name="fldName" value="Name" originalValue="Name" onfocus="if(this.value=='Name') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='Name'; }" class="input-text" />
											<input type="text" name="fldEmail" value="Email" onfocus="if(this.value=='Email') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='Email'; }" class="input-text" />
										</fieldset>
									</div>
									<div class="form">
										<h1>Get more information about going to UK</h1>
										<h2 class="inline">For the next school year will you be a</h2>
										<fieldset class="inline">
											<input type="radio" name="fldStudentStatus" value="Transfer" /> Transfer <input type="radio" name="fldStudentStatus" value="Freshman" /> Freshman
										</fieldset>
									</div>
									<div class="form">
										<h1>Get more information about going to UK</h1>
										<fieldset>
											<input type="text" name="fldAddress" value="Address" onfocus="if(this.value=='Address') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='Address'; }" class="input-text address" />
											<input type="text" name="fldCity" value="City" onfocus="if(this.value=='City') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='City'; }" class="input-text city" />
											<input type="text" name="fldState" value="St" onfocus="if(this.value=='St') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='St'; }" class="input-text state" maxlength="2" />
											<input type="text" name="fldZipCode" value="Zip" onfocus="if(this.value=='Zip') { this.value=''; }" onblur="if($.trim(this.value)=='') { this.value='Zip'; }" class="input-text zip-code" maxlength="5" />
										</fieldset>
									</div>
									<div class="form">
										<h1>Get more information about going to UK</h1>
										<fieldset>
											<input type="text" name="fldMobile" value="Phone" onfocus="if(this.value=='Phone') { this.value=''; }" onblur="if($.trim(this.value)=='') { 
this.value='Phone'; }" class="input-text mobile" /> <span class="optional">*optional</span>
											<input type="hidden" id="mobile-hidden" />
											<div class="select_wrap">
												<label for="fldMobileAllow">Allow UK to send SMS messages to this number?</label>
												<select name="fldMobileAllow">
													<option value="Yes">Yes</option>
													<option value="No">No</option>
												</select>
											</div>
										</fieldset>
									</div>
									</form>
								</div>
							</div>
							<div class="form_right">
								<a href="" class="nextLink"><img src="images/next-btn.png" alt="Next"></a>
								<ul class="carousel">
									<li class="active">1</li>
									<li>2</li>
									<li>3</li>
									<li>4</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
	<script type="text/javascript">
	  (function() {
		var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script>
</body>
</html>
