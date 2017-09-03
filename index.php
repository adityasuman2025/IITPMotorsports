<!---developer: Aditya Suman (www.mngo.in/aditya.php)---->
<?php
	
	$ip = $_SERVER["REMOTE_ADDR"];
	date_default_timezone_set('Asia/Kolkata');
	$time = date ("H:i:s", time());
	$date = date ("d M Y", time());
	
	
	$handleip =fopen('ip.txt', 'a');
	$handlecnt= fopen('count.txt', 'r');
	$currentcnt= fread($handlecnt, 1342177);
	fwrite($handleip, "$currentcnt :---> \t \t $ip  \t \t Time :--> \t $time \t \t Date:--> \t $date \n");
	
	
	$newcnt= $currentcnt + 1;
	$handlecnt= fopen('count.txt', 'w');
	fwrite($handlecnt, $newcnt);	
?>

<html>
<head>
	<title> IITP Motorsports</title>
	<link rel="icon" href="img/supra.png" />
	
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/jquery-ui.css"/>
	<link rel="stylesheet" href="css/jquery.bxslider.css"/>
	
	<meta name="viewport" content="width=device-width, initial-scale= 1">
	<meta charset="utf-8">
	<meta name="description" content="Team from IIT Patna is taking part in SUPRA SAEINDIA. IITP Motorsports, is a reputed team to design and manufacture one of the finest formula 1 racing cars from India. IIT Patna is recognized as an Institute of National Importance by the Government of India.">
	<meta name="keywords" content="IIT, IIT Patna, IITP, Motorsports, IITP Motorsports, SAE, SUPRA, SAEINDIA, MNgo, F1, Formula 1, Patna, Bihar, Bihta">
	<meta name="robots" content="index, follow">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="English">
	<meta name="revisit-after" content="1">
	<meta name="author" content="Aditya Suman">
</head>
<body>

<!-------preloader--------->
<div class="preloader_div">
	<img class="loader_logo" src="img/supra.1.png">
	
	<div class="loading">
		
		<img src="img/car_loader.png">
		<br>
		...loading...
		
	</div>
</div>

<!-------menu bar-------->
	<div id="header">
		<div id="supra_logo">
			<a href="index.php">
				<img src="img/supra.png"/>
			</a>
		</div>
		
		<div id="text_logo">
			<img src="img/motor.jpg"/>
		</div>
		
		<!--div id="iitp_logo">
			<a target="_blank" href="http://www.iitp.ac.in">
				<img src="img/iitp.png"/>
			</a>
		</div-->
	</div>
	
	<div class="menu_bar">
		<ul class="menu">
			<li><a href="index.php">HOME</a></li>
			<li><a href="gallery.html">GALLERY</a></li>
			<li><a href="team.html">TEAM</a></li>
			<li><a href="contact_us.html">CONTACTS</a></li>
			<li><a href="">SPONSORS</a></li>
		</ul>
		
		<div class="menu_mob">
			<img src="img/menu_mob.png"/>
			
			<ul class="visib">
				<li><a href="index.php">HOME</a></li>
				<li><a href="gallery.html">GALLERY</a></li>
				<li><a href="team.html">TEAM</a></li>
				<li><a href="contact_us.html">CONTACTS</a></li>
				<li><a href="">SPONSORS</a></li>
			</ul>	
				
		</div>
		
	</div>
	
	<br>
<!--slider header--->
	<div class="slideshow">
		<ul class="slider">
			<li>
				<img src="img/pic1.jpg"/>
				<div id="tags">
					TEAM SUPRA 2017
				</div>
			</li>
			<li>
				<img src="img/pic2.jpg"/>
				<div id="tags">
					MECHANICAL WORKSHOP
				</div>
			</li>
			<li>
				<img src="img/pic3.jpg"/>
				<div id="tags">
					SAE CLUB MEET
				</div>
			</li>
			<li>
				<img src="img/pic4.jpg"/>
				<div id="tags">
					JARVIS (OUR SUPRA CAR OF 2016) 
				</div>
			</li>
			<li>
				<img src="img/pic5.jpg"/>
				<div id="tags">
					TEAM SUPRA 2016
				</div>
			</li>
		</ul>
	</div>
	<br>
	<br><br>
	
<!--latest updates div--->
	<div class="updates">
		<h1 class="updates_head top_entry">
			Latest Updates
		</h1>
		
	</div>
	<br>
<!----------abouts div------------>
	<div class="about_div">
	<!--about iitp motorsports div--->	
		<div class="about_iitpmotor">
		
			<div class="iitpmotor_head top_entry">
				<b>IITP MOTORSPORTS</b>
			</div>
			
			<div class="iitpmotor_content">
				<div class="iitpmotor_img bottom_entry">
					<a href="http://iitpmotorsports.in"><img src="img/supra.1.png"/></a>
				</div>
				
				<div class="iitpmotor_text top_entry">
					IITP Motorsports, is a reputed team to design and manufacture one of the finest formula racing cars from India. Eventually, our car shall only 
					remain the best designed India car, but unfortunetly not the best manufactured one. 
					<br>
					Team from IIT Patna is taking part in SUPRA SAEINDIA since 2014. The project puts forward the task of designing, manufacturing,
					raising funds, marketing, logistics, extensive testing and racing, on the shoulders of our dedicated, skilled and determined team members.
				
				</div>
			</div>
		</div>
		<br>
		<br>
		
	<!--about sae div--->	

		<div class="about_sae">
		
			<div class="sae_head top_entry">
				<b>SUPRA SAEINDIA</b>
			</div>
			
			<div class="sae_content">
				<div class="sae_text top_entry">
					SUPRA SAEINDIA is a great event which gives a real platfrom to students to test their engineering skills and refine them by learning from their 
					little mistakes. Each team designs, manufactures, validates and races a formula 1 prototype. In 2008, Formula SAEINDIA was launched with the name of SUPRA SAEINDIA. This event provides a real world engineering challenge 
					for the SAEINDIA student members that reflects the steps involved in the entire process from design and engineering to production to marketing and 
					endurance.
				</div>
				
				<div class="sae_img bottom_entry">
					<a href="http://suprasaeindia.org"><img src="img/sae.png"/></a>
				</div>
				
			</div>
		</div>
		<br>
		<br>

	<!--about iitp div--->
		<div class="about_iitp">
		
			<div class="iitp_head top_entry">
				<b>IIT PATNA</b>
			</div>
			
			<div class="iitp_content">
				<div class="iitp_img bottom_entry">
					<a href="http://www.iitp.ac.in"><img src="img/iitp_img.png"/></a>
				</div>
				
				<div class="iitp_text top_entry">
					The Indian Institute of Technology Patna is an autonomous institue of education and research in science, engineering and technology located in 
					Patna, Bihar, India. It is recognized as an Institute of National Importance by the Government of India.
					<br>
					IIT Patna was ranked 10 in 2016 and 19 in 2017 in engineering category in National Institutional Ranking Framework (NIRF) published by MHRD.
					
				</div>
			</div>
		</div>
	
	</div>
	<div class="fb_box">
		<span>IITP Motorsports on facebook</span>
		<hr>
		<br>
		
		<div id="fb_iframe">
			<iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fteamsupraiitpatna&amp;width=300&amp;height=600&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=true&amp;show_border=false&amp;appId=416206288509930" scrolling="yes" frameborder="0" style="border:none; overflow:hidden; height: 1000px;" allowtransparency="true"></iframe>
		</div>
	</div>
	<br><br>
<!------partners div------>
	<div class="partners">
		<h1 class="part_head">Partners</h1>
		<a target ="_blank" href="https://incredibleindia.org/"><img  class="top_entry"  src="img/india.png"/></a>
		<a target ="_blank" href="http://www.ktm.com/in/"><img class="top_entry" src="img/ktm.jpg"/></a>
		<a target ="_blank" href="https://www.ketto.org/"><img  class="top_entry"  src="img/ketto.jpg"/></a>
		<a target ="_blank" href="https://www.centralbank.net.in/jsp/startMain.jsp"><img  class="top_entry" src="img/cbi.png"/></a>
		<a target ="_blank" href="http://bseidc.in/"><img class="top_entry" src="img/be.png"/></a>
		<a target ="_blank" href="http://eecd.in/"><img class="top_entry" src="img/estate.png"/></a>
		<a target ="_blank" href="http://brpnn.bih.nic.in/"><img class="top_entry" src="img/bihar.jpg"/></a>
		
	</div>
	<br><br>
	
<!---------footer---------->
	<div class="footer">
	
		<div id="address">
			<h2> Contact Us</h2>
			<hr>
			
			IITP Motorsports
			<br>
			Society of Automotive Engineers Club,
			<br>
			Department of Mechanical Engineering,
			<br>
			Indian Institute of Technology Patna
			<br>
			Bihta - 801103,
			Patna, Bihar.
			<br>
			Mobile: +91-9413182945
			<br>
			Email: iitpmotorsports@gmail.com 
		</div>
		
		<div id="web_address">
			<h2> Follow Us</h2>
			<hr>
			<p><a href="https://www.facebook.com/teamsupraiitpatna" target="_blank"> <img src="img/facebook.png"> Facebook </a></p>
			
			<p><a href="https://twitter.com/supraiitpatna" target="_blank"> <img src="img/twitter.png"> Twitter </a></p>
		</div>
		<br><br>
		
		<div id="final_footer">
			<span>copyright &copy 2017 IITP Motorsports<?php echo " | site visits: $currentcnt";?></span>
			<br>
			All Right Reserved
			<br>
			<span id="mngo">Site developed and managed by: <a target="_blank" href="http://www.mngo.in/aditya.php">Aditya Suman</a></span>
		</div>
	</div>
	
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="js/supra.js"></script>
	<script type="text/javascript">
			
		/*-----slideshow---*/
		$('.slider').bxSlider(
		{
			mode: 'horizontal',
			auto: true
		});
		
		/*-----preloader stuffs--------*/
		$(window).on('load',function()
		{
			$('.preloader_div *').delay(100).animate(
			{
				left: '10000px',
			}, 5000);
			
			$('.preloader_div').delay(200).fadeOut(1500);
		});
		
	</script>
	
</body>
</html>


<?php
	fclose($handlecnt);
	fclose($handleip);	
?>