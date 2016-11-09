<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'Demo Contact Form';
    $to = 'contact@shukhibhava.com';
    $subject = 'Message from Contact Demo ';
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
}
// Check if name has been entered
/*$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $errName = "Only letters and white space allowed"; 
}*/

if (isset($_POST['submit'])){
	if(($_POST['name']=='') || !preg_match("/^[a-zA-Z ]*$/",$name)) {
    $errName = 'Only letters and white space allowed';
}
// Check if email has been entered and is valid
if (($_POST['email']=='') || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
//Check if message has been entered
if (($_POST['message']=='')) {
    $errMessage = 'Please enter your message';
}
//Check if simple anti-bot test is correct
if ($human!=($_POST['addition_value1']+$_POST['addition_value2']) ) {  
		$errHuman = 'Your anti-spam is incorrect';
	}

  
// If there are no errors, send the email
if (!isset($errName) && !isset($errEmail) && !isset($errMessage) && !isset($errHuman)) {
    $result = mail($to, $subject, $body, $from);
    if (isset($result)) {
        $result .= '<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
        $result .= '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
}
}
/**
 * if you want to send real mail, substitute mail for fakemail
 * with the same parameters.
 *
 * @param $to
 * @param $subject
 * @param $body
 * @param $from
 * @return string faking mail output.
 */
function fakemail($to, $subject, $body, $from) {
    $result = "<br/>Sending email to $to from $from with subject $subject and body <p>$body</p>";
    return $result;
}
function showPost($name) {
    if (isset($_POST[$name])) {
        echo htmlspecialchars($_POST[$name]);
    }
}
?>

<!DOCTYPE HTML>
<html>
	<title>PORTFOLIO|Shukhibhava</title>
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
			<meta name="keywords" content="shukhibhava,clients,india,hospital,associations">
		<meta name="description" content="Get to know shukhibhava's clients and what they say ">
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
		<script src="js/prefixfree.min.js"></script>
	
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
 <div class="logo"> <a href="index.php" title="Logo">Shukhibhava : Hospital & Health Care Consultants</a></div> 
 <div class="row rw2">
        
     <div class="new_helpline">
     <h6> <span>Contact Number</span> <br />040-2370 2370</h6>
     </div>
   </div>
</header> 
		 <!---start-content---->
		 <div class="content">
		 	<!----start-contact---->
		 	<div class="contact">
		 		<div class="wrap">
				<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Find Us Here</h3>
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d475.7830608407761!2d78.447005!3d17.4470506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90c189123579%3A0xbdff844c9b215402!2s204%2FB%2C+BK+Guda+Internal+Rd%2C+BK+Guda%2C+Sanjeeva+Reddy+Nagar%2C+Hyderabad%2C+Telangana+500873!5e0!3m2!1sen!2sin!4v1475066452191"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>204/B</p>
						   		<p>Near BK Guda Park,S.R Nagar </p>
						   		<p>Telangana ,INDIA</p>
				   		<p>Phone:040-23702370</p>
						<p>Mobile:9703659007,9885004340
				   		<p>PinCode:500038</p>
				 	 	<p>Email: <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=contact@shukhibhava.com">contact@shukhibhava.com</a></p>

				   		<p>Follow on: <span> <a href="https://www.facebook.com/Shukhibhava-PVT-LTD-1490777987615027/" target="_blank">Facebook </a></span>, <span> <a class="twitter" href="https://twitter.com/shukhibhava" target="_blank">Twitter </a></span></p>
				   </div>
				   </div>

				
				
				
				
				
				
							
  	
  		<!-- Form Code Start -->
									<div class="col span_2_of_3">
				  <div class="contact-form">
  				<!--<h1 class="page-header text-center">Contact us</h1>-->
				<form class="form-horizontal" name="myForm" method="post" action="contact.php">
				
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php showPost('name'); ?>">
	<div id="d" style="color:red;"><?php if (isset($errName)) echo "<p class='text-danger'>$errName</p>";?></div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php showPost('email'); ?>">
	<div id="d" style="color:red;"><?php if (isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>";?></div>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php showPost('message');?></textarea>
						<div style="color:red">	<?php if (isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>";?></div>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label" href='numbercode.php'><?php
						
						$a = mt_rand(1,9);
						$b = mt_rand(1,9);?><?=$a.'+'.$b.'='?> ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer" value="<?php showPost('human'); ?>">
							
                                      <input type='hidden' name='addition_value1' value=<?=$a?> >
                                        <input type='hidden' name='addition_value2' value=<?=$b?> >
							<?php if (isset($errHuman)) echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
						<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary" onclick="clearfields">
						
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php if (isset($result)) {echo $result;} else { echo "";}?>
						</div>
					</div>
				</form> 
			</div>
		</div>
	  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</div><div class="clear"> </div>
		 <!---End-content---->
	
	
	
		 <!---End-content---->
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