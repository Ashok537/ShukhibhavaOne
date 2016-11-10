<!--
Author: shank
-->

<?PHP
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('mahboob.khan@shukhibhava.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

//$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('resume','doc,docx,pdf,txt',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("contactform.php");
   }
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>ACCREDITATION|SHUKHIBHAVA</title>
		 <link  href="images/logo2.jpg" rel="icon" type="image/x-icon" />	
	<meta charset="utf-8"> 
  <link  href="images/favicon.ico" rel="icon" type="image/x-icon" />
  <link  rel="stylesheet" href="css/style_one.css" type="text/css">
  <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <!--menu start-->
    <link rel="stylesheet" href="css/menu_one.css">        
    <script src='js/jquery.min.js'></script>
    <script src="js/index_one.js"></script>
    <link rel="stylesheet" href="css/example.css">
		 <!--<link href="bootstrap.min.css" rel="stylesheet" />-->			
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!--<link href="css/slider1.css" rel="stylesheet" type="text/css"  media="all" />  test-->
		 <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
			<meta name="keywords" content="accreditation,NABH,hospitals,NABL,NABH inspection">
		<meta name="description" content="Shukhibhava provides NABH,NABL&JCI Accreditation.">
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-85394995-1', 'auto');
		  ga('send', 'pageview');

		</script>
	
	    <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
      <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
		
	</head>
	<body>

		
    <!--header sec-->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">
<link rel="stylesheet" href="css/responsive_one.css"> 

 
 <header class="header-shadow">
  <div class=" menu-bg">
   <div class="row">
    <div class="menu_bg">
     <div class="container">
      <div class="main_main">
       <nav id="cssmenu"> 
        <div id="head-mobile">&nbsp;</div>
         <div class="button"></div>
          <ul>
	<li><a href="index.php">Home</a></li>
    
     </li>
    <li><a href="about.php">About</a></li>

	<li><a href="#">Services</a>
    <ul>
    <li><a href="accreditation.php">Accredition</a></li>
    <li><a href="softwaredevelopment.php">Software Development</a></li>
	<li><a href="hospitalmanagement.php">Hospital Management</a></li>
    <li><a href="projectmanagement.php">Project Management</a></li>
    <li><a href="manpowersolutions.php">Man Power Solutions</a></li>
    <li><a href="mediasolutions.php">Media Solutions</a></li>
	<li><a href="financial.php">Financial & Audit</a></li>
    <li><a href="businessdevelopment.php">Business Development</a></li>
    </ul>
	</li>
    <li><a href="portfolio.php">Portpolio</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="contact.php">Contact</a></li>
	<li><a href="https://sg2plcpnl0055.prod.sin2.secureserver.net:2096/cpsess3595393120/webmail/gl_paper_lantern/index.html?login=1&post_login=54377505116297">Employee Login</a></li>
 <li><a href="contactform.php">We're Hiring</a></li>
    
</ul> 
       </nav>
      </div>
        <div class="social-icon">
	   <ul>
    	<li class="facebook"><a href="https://www.facebook.com/shukhibhava/" title="Facebook">Facebook</a></li>
        <li class="twitter"><a href="https://twitter.com/shukhibhava" title="Twitter">Twitter</a></li>
		<li class="linkedin"><a href="https://www.linkedin.com/company/shukhibhava-consultancy-private-limited?trk=biz-companies-cyf" title="Linkedin">Linkedin</a></li>
        <li class="youtube"><a href="https://www.youtube.com/channel/UC7dPGqntD4ZT4Fz0q_Su8iQ" title="Youtube">Youtube</a></li>
       </ul>
      </div>	 
     </div>
    </div>
   
  </div>
 </div>
 <a href="index.php" title="Logo" style="float:left;width:auto; margin-top:15px;"><img src="images/logo.png" /></a>
 <div class="row rw2">
        
     <div class="new_helpline">
     <h6> <span>Contact Number</span> <br />040-2370 2370</h6>
     </div>
   </div>
</header> 
		 	<!---start-blog-page---->
		 	<div class="blog">
		 		<div class="wrap">
				
		 		<div class="single-page-artical">
								<div class="artical-content">
										<CENTER><img src="images/pic4.jpg" title="banner1"></CENTER>	

<div class="accredation-left">	
<p>									
A known fact that NABH-accreditation has become mandatory for every healthcare organization . All central Govt. Organization(eg.CGHS) will not empanel 
the hospital without NABH-accreditation. Even health insurance companies and the T.P. As also made NABH-Compulsory. Hence it is the need for all the 
hospitals to go for NABH Accreditation. For that the hospitals should meet the standards and fulfill the objective elements . <br><br>
Shukhhibhava under-taken the accreditation process ,by providing the all necessary materials,to establish intial assessment and periodic reassessments at 
regular intervals we take up the hospital planning , training , preparedness as per the accreditation standards 4th edition initially we make an internal 
survey of the hospital, analyze the requirement and isolate the deficiencies.<br><br>
We prepare an action plan to fill gaps ,we go through the existing policies and prepare fresh Policies where ever necessary we study the procedures 
adopted and update them. We also identify the Areas where improvement is needed and target them . Factors obstructing the smooth functioning of 
hospitals are identified and will be rectified by working alone with the staff. We assess and find out the pre preparedness of the hospital for NABH 
inspection. We will train all category of staff and totally prepare them according to the need and also according to process where ever needed the 
process will be evaluated and refined.<br><br>
We organize mock survey- conduct mock drills in various aspects and find out the readiness for inspection we organize internal assessment and 
evaluate the results. At the end of training process necessary modifications will be made if needed. Our consultants ensure good management practices 
are adopted in all aspects of the patient care through proper teaching and implementation of standards.<br><br>
We cover every step in the procedure from sinages at the entry point -reception -registration -OP consultation and treatment , prompt admission ensuring 
continuity of care of the patient , guidance, maintaining of good medical records and up to timely discharge of the patient. We will orient the
 staff inspect at documentation , as per the accreditation norms. We assist the hospital inform up the committees terms- guide them in terms of
 quality assurance. We train all the staff on NABH accreditation process Develop performance indicators , data collection and its analysis we prepare
 and fill up the self assessment tool kit finally we ensure that the hospital gets NABH Accreditation. We have the faculty consultants of senior medical
 consultants Experts in NABH accreditation assessment NABH/JAI coordinators . Experienced, senior quality control experts. Experimented clinical , medical 
 administration well versed with trained nursing and other paramedics staff
</p>
							   
	
	
	 <div class="artical-links">
		  						 	<!--<ul>
		  						 		<li><a href="#"><img src="images/blog-icon1.png" title="date"><span>sept 20, 2016</span></a></li>
										<!--
		  						 		<li><a href="#"><img src="images/blog-icon2.png" title="Admin"><span>admin</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon3.png" title="Comments"><span>No comments</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon4.png" title="Lables"><span>View posts</span></a></li>
		  						 		<li><a href="#"><img src="images/blog-icon5.png" title="permalink"><span>permalink</span></a></li>
										--
		  						 	</ul>-->
		  						 </div>
		  						 <div class="share-artical">
		  						 	<h3> Also share on</h3>
		  						 	<ul>
		  						 		<li><a href="https://www.facebook.com"><img src="images/facebook.png" title="facebook">Facebook</a></li>
		  						 		<li><a href="https://www.twitter.com"><img src="images/twiter.png" title="Twitter">Twiiter</a></li>
		  						 		<li><a href="https://www.linkedin.com"><img src="images/in.png" title="linked-in">Linked-in</a></li>
		  						 		<li><a href="https://plus.google.com/"><img src="images/google+.png" title="google+">Google+</a></li>
		  						 		<!--<li><a href="#"><img src="images/pintrest.png" title="pintrest">Pintrest</a></li>
		  						 		<li><a href="#"><img src="images/rss.png" title="rss">Rss</a></li>-->
		  						 	</ul>
		  						 </div>
								 <!--
		  						 <div class="artical-commentbox">
		  						 	<h3>leave a comment</h3>
		  						 	<div class="table-form">
									<form>
										<input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
										<input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
										<input type="text" class="textbox" value="Phone:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
										<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>	
									</form>
									<a href="#">submit comment</a>
								</div>
		  						 </div>
								 -->
							</div>
					</div>
				
				
	
			
			</div></div>	</div>
		 	<!---End-blog-page---->
			
			
	
	
	
														<!-- Form Code Start -->
									<div class="acc">
									<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

									<fieldset >
									
									<legend>Get Accreditation</legend>

									<input type='hidden' name='submitted' id='submitted' value='1'/>
									<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
									<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

									<div class='short_explanation'>* required fields</div>

									<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
									<div class='container'>
										<label for='name' >Your Full Name*: </label><br/>
										<input type='text' name='name' id='name' placeholder="Enter your name" value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
										<span id='contactus_name_errorloc' class='error'></span>
									</div>
									<div class='container'>
										<label for='email' >Email Address*:</label><br/>
										<input type='text' name='email' id='email' placeholder="sample@shukhibhava.com" value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
										<span id='contactus_email_errorloc' class='error'></span>
									</div>
									<div class='container'>
										<label for='Phone' >Phone Number*:</label><br/>
										<input type='text' name='phone' id='phone' placeholder="Enter your phonenumber" value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="10" /><br/>
										<span id='contactus_phone_errorloc' class='error'></span>
									</div>
									<div class='container'>
										<label for='message' >Send Your Message:</label><br/>
										<span id='contactus_message_errorloc'  class='error'></span>
										<textarea rows="10" cols="50" name='message' id='message' placeholder="please mention the job you are applying for" ><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
								


									<div class='container'>
										<input type='submit' name='Submit' value='Submit' />

									</div>
									</div>
									</fieldset>
									
									</form>
							</div>
				<!-- client-side Form Validations:
				Uses the excellent form validation script from JavaScript-coder.com-->

				<script type='text/javascript'>
				// <![CDATA[

					var frmvalidator  = new Validator("contactus");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();
					frmvalidator.addValidation("name","req","Please provide your name");

					frmvalidator.addValidation("email","req","Please provide your email address");

					frmvalidator.addValidation("email","email","Please provide a valid email address");
					
					frmvalidator.addValidation("phone","req","Please provide your personal phone number");

					frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

					<!--frmvalidator.addValidation("photo","file_extn=doc;docx;pdf;txt","Upload resume only. Supported file types are: doc,docx,pdf,txt");
					
					frmvalidator.addValidation("resume","file_extn=doc;docx;pdf;txt","Upload resume only. Supported file types are: doc,docx,pdf,txt");
					
					frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

					document.forms['contactus'].scaptcha.validator
					  = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
									document.images['scaptcha_img']);

					function SCaptcha_Validate()
					{
						return document.forms['contactus'].scaptcha.validator.validate();
					}

					frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

					function refresh_captcha_img()
					{
						var img = document.images['scaptcha_img'];
						img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
					}

				// ]]>
				</script>
				<!--validations end -->
				
				
		 
								
						
								   
	
		 	
		 	<div class="clear"> </div>
		 <!---End-content---->
		 <!---start-copy-right----->
		 
		
				 <div class="copy-right">
						<div class="top-to-page">
								<a href="#top" > </a>
								<div class="clear"> </div>
							</div>
							<p style="text-align: inherit;">copyright &copy; <a href="http://shukhibhava.com/index.php">Shukhibhava</a></p>
					</div>
				 <!---End-copy-right---->
		<!----End-wrap---->
	</div>
	</body>
</html>

