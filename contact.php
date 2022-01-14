<?php
	include('form_handler.php');
?>

<head>

  <link rel="stylesheet" type="text/css" href="css/resetstyle.css?v=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css?v=1.4">

  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <meta name="description" content="Get in touch with our award winning team to perfect your home. At PWS we specialise in bespoke residential and domestic architectural design at all scales.">
  <title>Contact - PWS Architecture & Design</title>
	<script src="js/createjs.min.js"></script>
	<script src="js/TweenMax.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!--FAVICON-->
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

</head>
  <body>
    <header class="homeHeader">
      <div class="navigation-mobile">
    		<nav class="navBar">
    			<div class="hamburger-menu">
    				<div class="line line-1"></div>
    				<div class="line line-2"></div>
    				<div class="line line-3"></div>
    			</div>
    			<ul class="nav-list">
    				<li class="nav-list">
    					<a href="index.html" class="nav-link">Home</a>
    				</li>
    				<li class="nav-list">
    					<a href="about.html" class="nav-link">Meet the Team</a>
    				</li>
    				<li class="nav-list">
    					<a href="projects.html" class="nav-link">Projects</a>
    				</li>
    				<li class="nav-list">
    					<a href="contact.php" class="nav-link">Contact</a>
    				</li>
						<li class="nav-list">
    					<a href="live-demo.html" class="nav-link">3D Live Demo</a>
    				</li>
    			</ul>
    		</nav>
    	</div>
    </header>

<canvas id="projector">Your browser does not support the Canvas element.</canvas>

    <!--<img src="images/background.jpg" id="bg" alt="">-->


    <div class="mainImageOverlay">
      <a href="index">
  			<img class="leftLogo" src="images/Logo.jpg" alt="PWS ARCHITECT Logo">
			</a>
      <h1>CONTACT</h1>
      <div class="blurredBorderMain"></div>
    </div>
    <div class="mainImage">
      <img src="images/projectsMain.jpg" alt="">
    </div>

    <div class="underImageSVG">
      <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" preserveAspectRatio="none" viewBox="0 0 1200 109.99"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#111111" fill-opacity="1"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#111111" fill-opacity="1"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#111111" fill-opacity="1"></path>
      </svg>
    </div>


    <div class="container">
      <div class="topofContactPage">
        <h2>Based in North East England</h2>
        <p>If you would like to get in touch please contact us via email or phone, or send us a message using the contact form below.</p>


        <div class="contactMethods">
          <p>Phone - <a href="tel:01207260433">01207 260 433</a></p>
          <p>Email - <a href="mailto:info@pwsarchitecture.co.uk">info@pwsarchitecture.co.uk</a></p>
        </div>
      </div>


      <div class="socialIcons contactPageSocials">
        <a href="https://www.instagram.com/pwsarchitecture"  target=”_blank”><img src="images/instagram.png" alt="PWS Architect Instagram"></a>
        <a href="https://www.facebook.com/pwsarchitecture" target=”_blank”><img src="images/facebook.png" alt="PWS Architect Facebook"></a>
        <a href="https://www.pinterest.co.uk/648d24416fe41dd2458c099ad41a68/_saved/" target=”_blank”><img src="images/pinterest.png" alt="PWS Architect Pinterest"></a>
        <a href="https://www.houzz.co.uk/professionals/architects-and-architectural-designers/pws-architecture-design-pfvwgb-pf~1924955258?" target=”_blank”><img src="images/houzz.png" alt="PWS Architect Houzz"></a>
      </div>

      <div class="formHolder">
        <form id="email-form" method="post" action="<?php $_SERVER['PHP_SELF']?>">


					<div class="nameInputs">
	          <input type="text" name="first_name" value="<?php echo $first_name;?>" placeholder="First Name*">
						<input type="text" name="last_name" value="<?php echo $last_name;?>" placeholder="Last Name*">
					</div>
					<div class="error"><?php echo $first_name_error;?></div>
					<div class="error"><?php echo $last_name_error;?></div>



          <input type="text" name="email" value="<?php echo $email;?>" placeholder="Email*">
          <div class="error"><?php echo $email_error;?></div>

          <input type="text" name="address" value="<?php echo $address;?>" placeholder="Address (of Site)*">
          <div class="error"><?php echo $address_error;?></div>

					<input type="text" name="addresshome" value="<?php echo $addresshome;?>" placeholder="Address (Home) - If different from Site">
          <div class="error"><?php echo $addresshome_error;?></div>

          <input type="text" name="number" value="<?php echo $number;?>" placeholder="Contact Number*">
          <div class="error"><?php echo $number_error;?></div>

					<input type="text" name="contact" value="<?php echo $contact;?>" placeholder="Preferred Contact Method*">
          <div class="error"><?php echo $contact_error;?></div>

					<div class="selectContainer">
						<label for="where">Where did you find PWS?</label>
						<select class="" name="where">
							<option value="" disabled selected>Choose option</option>
							<option value="Social">Social Media</option>
							<option value="Houzz">Houzz</option>
							<option value="Google">Google Search</option>
							<option value="Friend">Friend</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="error"><?php echo $where_error;?></div>



					<h2>To help us help you here are some suggestions of information we might ask for</h2>
					<ul>
						<li>A description of your project: EG Kitchen extension, renovation, single story, barn conversion, new build etc.</li>
						<li>Your budget or size of project.</li>
					</ul>
          <textarea name="message" rows="8" cols="80" placeholder="Message*"></textarea>
          <div class="error"><?php echo $message_error;?></div>

          <div class="g-recaptcha" data-sitekey="6LfRGFcdAAAAAMACczeO2QPcEIyd7WOYr1lVhR83" data-size="compact"></div><br>
          <div class="error"><?php echo $recaptcha_error;?></div>


          <button type="submit" name="submit">Submit</button>

          <div class="sent">
              <p><?php echo $success;?></p>
          </div>

        </form>
      </div>
    </div>






    <footer>
      <div class="footerTop">
        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" preserveAspectRatio="none" viewBox="0 0 1200 109.99"><path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill" fill="#111111" fill-opacity="1"></path><path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill" fill="#111111" fill-opacity="1"></path><path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill" fill="#111111" fill-opacity="1"></path></svg>
      </div>
      <div class="footerBottom">
        <div class="footerLeft">
          <a href="index">
  					<img src="images/Logo.png" alt="PWS ARCHITECT Logo">
					</a>
        </div>
        <div class="footerCenter">
          <div class="footerCenterPositioning">
            <p>Phone - <a href="tel:01207260433">01207 260 433</a></p>
            <p>Email - <a href="mailto:info@pwsarchitecture.co.uk">info@pwsarchitecture.co.uk</a></p>
            <p><span>Copyright 2021 PWS Architecture | <a href="https://www.rhys-clark.com">Website by Rhys Clark</a></span></p>
          </div>
        </div>
        <div class="footerRight">
          <div class="socialIcons">
            <a href="https://www.instagram.com/pwsarchitecture"  target=”_blank”><img src="images/instagram.png" alt="PWS Architect Instagram"></a>
            <a href="https://www.facebook.com/pwsarchitecture" target=”_blank”><img src="images/facebook.png" alt="PWS Architect Facebook"></a>
            <a href="https://www.pinterest.co.uk/648d24416fe41dd2458c099ad41a68/_saved/" target=”_blank”><img src="images/pinterest.png" alt="PWS Architect Pinterest"></a>
            <a href="https://www.houzz.co.uk/professionals/architects-and-architectural-designers/pws-architecture-design-pfvwgb-pf~1924955258?" target=”_blank”><img src="images/houzz.png" alt="PWS Architect Houzz"></a>
          </div>
        </div>
      </div>
    </footer>

    <!--SCRIPTS-->
    <script type="text/javascript" src="js/master.js?version=1.1"></script>
    <script type="text/javascript" src="js/background.js"></script>
    <!--END OF SCRIPTS-->


  </body>
</html>
