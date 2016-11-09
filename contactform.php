<?PHP
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('hr@shukhibhava.com'); //<<---Put your email address here


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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
     		<title>Apply For Jobs</title>
		 <link  href="images/logo2.jpg" rel="icon" type="image/x-icon" />	
	<meta charset="utf-8"> 
	  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <link  href="images/favicon.ico" rel="icon" type="image/x-icon" />
  <link  rel="stylesheet" href="css/style_one.css" type="text/css">
  <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
    <!--menu start-->
    <link rel="stylesheet" href="css/menu_one.css">        
    <script src='js/jquery.min.js'></script>
    <script src="js/index_one.js"></script>
		 <!--<link href="bootstrap.min.css" rel="stylesheet" />-->			
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!--<link href="css/slider1.css" rel="stylesheet" type="text/css"  media="all" />  test-->
		 <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
		<meta name="keywords" content="shukhibhava,jobs,nurse job,job vacancy in hyderabad">
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-85394995-1', 'auto');
		  ga('send', 'pageview');

		</script>
		<meta name="description" content="shukhibhava,a well established business consultancy which take cares of every business need now launching into software solutions">
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
	

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css
         " rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
   
   
    <script>
         $(function() {
            $( "#tabs-1" ).tabs();
         });
      </script>
		
      <style>
	  
	  .ui-tabs .ui-tabs-panel{
		  border-width: 0;
    padding: 1em 14.4em;
    background: none;
	  }
         #tabs-1{font-size: 18px;}
         .ui-widget-header {
            background:#00adee;
            border: 1px solid #00adee;
            color: #FFFFFF;
            font-weight: bold;
         }
		 ul {
    list-style: none;
    margin: 0px;
    padding: 5px;
}
		 .disc{
			  list-style-type:disc;
			  font-size: medium;
		 }
		 .uldisc{
			     font-weight: bold;
		 }
      </style>
</head>
<body>	<!----start-wrap---->
		
    <!--header sec-->
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable = no" name="viewport">
<link rel="stylesheet" href="css/responsive_one.css"> 

 <header class="header-shadow">
  <div class="container menu-bg">
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
  <div class="logo"> <a href="index.php" title="Logo">Shukhibhava : Hospital & Health Care Consultants</a></div>
 <div class="row rw2">
   
    
     <div class="new_helpline">
     <h6> <span>Contact Number</span> <br />040-2370 2370</h6>
     </div>
   </div>
 
</header> 


	
	<br>
<!-- container for showing jobs start-->

<div class="w3-container ">
<h2><center > WE'RE HIRING</center></h2>
  <h3><center>At Shukhibhava, we're working on solving the challenges that take us a step closer to our mission every day</center></h3>

  <br>
  <br>

<div class="container">
<div id = "tabs-1">
         <ul>
            <li><a href = "#tabs-2">Select your Domian</a></li>
            <li><a href = "#tabs-3">Software Developer</a></li>
            <li><a href = "#tabs-4">Health Care</a></li>
			<li><a href = "#tabs-5">Business Development/Marketing</a></li>
			<li><a href = "#tabs-6">Apply</a></li>
         </ul>
			
         <div id = "tabs-2">
              <ul class="uldisc">Our small team is growing fast.We'd love your help in making Shukhibhava truly special.</ul>
			<li class="disc">  Shukhibhava is seeking thinkers, builders, and relentless doers. If that sounds like you, check out our current job openings. We’d like to hear from you.</li>
			  
				<li class="disc">Shukhibhava values the individual and strives to deliver an appropriate work-life balance because a motivated and happy person can add untold value to our clients and colleagues around the world. </li>
			 
			  <ul class="uldisc">How we do our work</ul>
			 	<li class="disc"> We innovate, experiment, and move at a fast pace. We’re a learning organization with a growth mindset, and we’re always looking for ways to improve our product and ourselves.</li>
			 	<li class="disc"> Every new member of the team changes what Shukhibhava is and what it will become.</li>
			   <ul class="uldisc">How we collaborate</ul>
			<li class="disc"> Passion and personality matter. You’ll work with creative and curious people across the globe, and we want you to feel comfortable being yourself every day you're here. </li>
			<li class="disc">  We want our employees to become part of our Digital community. We want them to deliver innovation to our clients. We want them breakthrough the normal to be the best at what they do.</li>
			
         </div>
			
         <div id = "tabs-3">
             <ul class="uldisc">PHP developer</ul>
			  	<li class="disc">We are looking for a PHP Developer responsible for managing front-end , back-end services and the interchange of data between the server.<br>
	Your primary focus will be the development of all server-side logic definition, UI development and maintenance of the data base, 
	and ensuring high performance and responsiveness to request from the front - end.</li>
	<li class="disc"> You will also be responsible for integrating the 
	front end elements built by co workers in to the application.</li>
		<li class="disc">Good knowledge of front-end technologies is necessary as well.</li>
		<li class="disc"> Construct, develop, code, debug and maintain applications.</li>
		<li class="disc"> Confirm to define software design methodology for the development and implementation of internet based application to support all aspects of website functionalities</li>
		<li class="disc"> Generate application test data as necessary and validate any data conversion requirements for final implementation and production roll out.</li>
		<li class="disc">Being responsible for the analysis, design and development of certain key business application.</li>
<ul class="uldisc">Desired Profile :</ul>
	<li class="disc">Minimum of 4+ years of experience in building secure, scalable & high-performance application.</li>
	<li class="disc"> Experience in web application, website, ecommerce portal, ERP application development.</li>
<ul class="uldisc">Skill Set :</ul> 
	<li class="disc">PHP, Laravel Wordpress, MySQL,HTML, Javascript, AJAX, CSS, XML, JQuery, development stackExperience ECommerce platforms such as Magento, Interspire, ZenCart </li>
	
	
				
					
         </div>
			
         <div id = "tabs-4">
           <ul class="uldisc">Nurse Fresher And Experienced<br></ul>
					<li class="disc"> Promotes and restores patients health by completing the nurse process.collaborating with physicions and multidisciplinary team members.providing physical and psychological support to patients and families.</li>
				<li class="disc"> Assess patient condition by monitoring vital signs.</li>
				<li class="disc">Administration of medication.</li>
				<li class="disc"> Administering oxygen & Maintaining oxygen supply</li>
				<li class="disc">Ability to understand and build Patient Relationships.</li>
				<li class="disc"> Ensuring patients endorsement, carrying out tasks assigned by ward incharge.</li>
				<li class="disc"> Monitoring vital signs, conducting ongoing assessments of patients and updating patient records/case sheets.</li>
				<li class="disc"> Planning and providing basic care according to the priority needs of the patients.</li>
				<li class="disc"> Accompanying consultants on rounds and carrying out their orders.</li>
				<li class="disc"> Maintaining personal hygiene of patients, administering medication using correct procedures.</li>
				<li class="disc"> Taking responsibility for admission, discharge and transfer of patients.</li>
				<li class="disc"> Maintaining safety of wards and providing a safe environment.</li>
				<li class="disc"> Maintaining good interpersonal relationships with staff, patients, families and
				community.</li>
				<li class="disc"> Reporting the condition of critical patients promptly to the persons concerned, both in verbal and written mode.</li>
				<li class="disc"> Maintaining records and reports related to nursing care, treatment and medicines correctly and promptly.</li>
			<li class="disc">	To perform Basis Nursing activities in a Pediatric/ General OPD set up on a daily basis. To Provide hands on care to child patients. Educating patients. Immunization & Record Maintenance. B.Sc/GNM with nursing registration. Good working environment
				</li>
											
			</div>
		 
		   <div id = "tabs-5">
           <ul class="uldisc">Marketing manager</ul>
			  <li class="disc">Experience Required: 1-4 years</li>
			 <li class="disc">Shukhibhava is looking for Marketing and sales executives with 1 to 4 years of experience.</li>
				<li class="disc">This position is a offsite position so should be willing to be on road</li>
					<li class="disc">Vendor Acquisition</li>
				<li class="disc">Customer acquisition.</li>
					<li class="disc">Bussiness Development.</li>
					<li class="disc">Generating Project & Retail Business through Architects, Interior Designers, Contractors etc.</li>
					<li class="disc">Overseeing the sales & marketing operations</li>
					<li class="disc">Identify new streams for revenue growth & developing sales plans to build consumer preference.</li>
					<li class="disc">Conducting competitor analysis.</li>
</div>
		 <div id="tabs-6">
		 <ul class="uldisc">Start your carrer with us </ul>
			
			<!-- Form Code Start -->
									<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

									<fieldset >

									<input type='hidden' name='submitted' id='submitted' value='1'/>
									<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
									<!--<div class='short_explanation'>* required fields</div>-->

									<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
									<div class='container'>
										<label for='name' >Your Full Name*: </label><br/>
										<input type='text' name='name' id='name' placeholder="Enter your name" value='' maxlength="50" /><br/>
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
										<label for='message' >Job applying for :</label><br/>
										<span id='contactus_message_errorloc'  class='error'></span>
										<textarea rows="10" cols="50" name='message' id='message' placeholder="please mention the job you are applying for" ><?php echo $formproc->SafeDisplay('message') ?></textarea>
									</div>
									<!--<div class='container'>
										<label for='photo' >Resume:</label><br/>
										<input type="file" name='photo' id='photo' /><br/>
										<span id='contactus_photo_errorloc' class='error'></span>
									</div>-->
									<div class='container'>
										<label for='resume' >Resume:</label><br/>
										<input type="file" name='resume' id='resume' /><br/>
										<span id='contactus_resume_errorloc' class='error'></span>
									</div>
									<div class='container'>
										<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
										<label for='scaptcha' >Enter the code above here:</label>
										<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
										<span id='contactus_scaptcha_errorloc' class='error'></span>
										<div class='short_explanation'>Can't read the image?
										<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
									</div>


									<div class='container'>
										<input type='submit' name='Submit' value='Submit' />
										<!--<input type='cancel' name='cancel' value='Cancel' onclick="document.getElementById('id01').style.display='none'"/>
										<button type="button" id="cancel"  onclick="document.getElementById('id01').style.display='none'">Cancel</button>-->
                                            <script>
									$("#cancel").click(function () {
									   $('#contactus')[0].reset();
										$("#name").text("");
									});
									</script>
									</div>
									</fieldset>
									</form>
						
						
				<!-- client-side Form Validations:
				Uses the excellent form validation script from JavaScript-coder.com-->

				<script type='text/javascript'>
				// <![CDATA[

					var frmvalidator  = new Validator("contactus");
					frmvalidator.EnableOnPageErrorDisplay();
					frmvalidator.EnableMsgsTogether();
					frmvalidator.addValidation("name","req",'<span style="color:red">Please provide your name</span>');

					frmvalidator.addValidation("email","req",'<span style="color:red">Please provide your email address</span>');

					frmvalidator.addValidation("email","email",'<span style="color:red">Please provide a valid email address</span>');
					
					frmvalidator.addValidation("phone","req",'<span style="color:red">Please provide your personal phone number</span>');

					frmvalidator.addValidation("message","maxlen=2048",'<span style="color:red">The message is too long!(more than 2KB!)</span>');

					<!--frmvalidator.addValidation("photo","file_extn=doc;docx;pdf;txt","Upload resume only. Supported file types are: doc,docx,pdf,txt");
					
					frmvalidator.addValidation("resume","file_extn=doc;docx;pdf;txt",'<span style="color:red">Upload resume only. Supported file types are: doc,docx,pdf,txt</span>');
					
					frmvalidator.addValidation("scaptcha","req",'<span style="color:red">Please enter the code in the image above</span>');

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
				</div>
      </div>
  </div>
 
								 
</div>


						
						
		
	  
	  

<!--container end -->






			 <!---start-footer---->
		 <div class="footer">
		 	<div class="wrap">
			
				 
		 		<div class="footer-grid">
		 			<h3>Quick links</h3>
		 			<ul>
			 			<a href="about.php">ABOUT US &nbsp|&nbsp</a>
			 			<a href="#">SERVICES&nbsp|&nbsp</a>
			 			<a href="portfolio.php">PORTFOLIO&nbsp|&nbsp</a>
			 			<a href="contact.php">CONTACT</a>
			 		</ul>
		 		</div>
				<div class="footer-grid">
		 			
		 			<ul>
								<a href='accreditation.php'>Accreditation&nbsp|&nbsp</a>
								<a href='softwaredevelopment.php'>Software Development&nbsp|&nbsp</a>
								 <a href='hospitalmanagement.php'>Hospital Management&nbsp|&nbsp</a>
								 <a href='projectmanagement.php'>Project Management&nbsp|&nbsp</a>
								 <a href='manpowersolutions.php'>Man power solutions&nbsp|&nbsp</a>
								 <a href='mediasolutions.php'>Media Solutions&nbsp|&nbsp</a>
								 <a href='financial.php'>Financial and Audit&nbsp|&nbsp</a>
								 <a href='businessdevelopment.php'>Business Development</a>
			 		</ul>
		 		</div>
				<div class="footer-grid1">
		 			
		 			<ul>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
						<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 			<a href="#">shukhibhava</a>
			 		</ul>
		 		</div>
				<!--
		 		<div class="footer-grid">
		 			<h3>OVERVIEW</h3>
		 			<ul>
			 			<li><a href="#">WHAT WE DO</a></li>
			 			<li><a href="#">NEWS</a></li>
			 			<li><a href="#">IT SOLUTIONS</a></li>
			 			<li><a href="#">SUPPORT</a></li>
			 		</ul>
		 		</div>
		 		<div class="footer-grid">
		 			<h3>FOR CLIENTS</h3>
		 			<ul>
			 			<li><a href="#">FORUMS</a></li>
			 			<li><a href="#">CLIENTS</a></li>
			 			<li><a href="#">PROMOTIONS</a></li>
			 			<li><a href="#">SIGN IN</a></li>
			 			<li><a href="#">SCHEDULE</a></li>
			 		</ul>
		 		</div>
		 		<div class="footer-grid">
		 			<h3>ARCHIVE</h3>
		 			<ul>
			 			<li><a href="#">JAN 2013</a></li>
			 			<li><a href="#">FEB 2013</a></li>
			 			<li><a href="#">MAR 2013</a></li>
			 			<li><a href="#">APR 2013</a></li>
			 			<li><a href="#">MAY 2013</a></li>
			 		</ul>
		 		</div>-->
				
		 		<div class="clear"> </div>
		 	</div>
		 </div>
		 <!---End-footer---->
		
		<!----End-wrap---->
			<!---start-copy-right----->
		 
		
				 <div class="copy-right">
						<div class="top-to-page">
								<a href="#top" > </a>
								<div class="clear"> </div>
							</div>
							<p style="text-align: inherit;">copyright &copy; <a href="http://shukhibhava.com/index.php">Shukhibhava</a></p>
					</div>
				 <!---End-copy-right---->

</body>
</html>