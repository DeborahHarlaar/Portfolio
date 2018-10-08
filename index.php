<?php
	$error = "";
	if ($_POST) {

		if (!$_POST["email"]) {
			$error .="Deine E-Mail-Adresse ist notwendig.";
		}
		if (!$_POST["content"]) {
			$error .="Eine Nachricht ist notwendig.";
		}
		if (!$_POST["name"]) {
			$error .="Dein Name ist notwendig.";
		}

		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL === false)) {
			$error .="Diese E-Mail-Adresse ist ungültig.";
		}

		$eMailTo = "debbi@harlaar.de";
		$body = $_POST["content"];
		$subject = "Eine Nachricht von: ".$_POST["name"];
		$headers = "From: ".$_POST["email"];

		if (mail($eMailTo, $subject, $body, $headers)) {
			echo "Deine Nachricht wurde erfolgreich versandt.";
		}
	}

?>


<!DOCTYPE html>
<html lang="de">
	<head>
		<title>Deborah Harlaar</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
		<script type="text/javascript" src="javascript.js"></script>
		<meta charset="utf-8">
	</head>
	<body onload="nextStep();">
		<div id="header">
			<nav>
				<a href="#about">Über mich</a>
				<a href="#portfolio">Projekte</a>
				<a href="#skills">Skills</a>
				<a href="#contact">Kontakt</a>
			</nav>
			<h1>Deborah Harlaar<p></p><p id="typewriter"></p></h1>
		</div>

		<div class="content">
			<div id="about">
				<h2>Über mich</h2>
				<div class="about">
					<img src="images/DeborahHarlaar.jpg">
					<div class="text">
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  
						</p>

						<p>
							Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>  

						<p>
							Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse.
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="portfolio">
			<h2>Portfolio</h2>
			<div class="portfolioContent">
				<a href="http://architekturmustermann-com.stackstaging.com/index.html" class="flex ArchitekturMustermann">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
					</div>
				</a>
				<a href="http://red-thousend-winery-com.stackstaging.com/landingpage.html" class="flex Winery">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/029-javascript.svg">
					</div>						
				</a>
				<a href="http://weatherapp.com.stackstaging.com/index.html" class="flex WeatherApp">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/api.svg">
					</div>							
				</a>
				<a href="http://quotemachine.com.stackstaging.com/randomquote.html" class="flex QuoteMachine">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/api.svg">
					</div>
				</a>
				<a href="http://bakery-com.stackstaging.com/" class="flex bakery">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/029-javascript.svg">
					</div>
				</a>
				<a href="http://tierheim-com.stackstaging.com/" class="flex tierheim">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
					</div>
				</a>
				<a href="http://rezeptgenerator-com.stackstaging.com/" class="flex recipeGenerator">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/029-javascript.svg">
						<img class="icon" src="icons/027-php.svg">
						<img class="icon" src="icons/021-mysql.svg">
					</div>
				</a>
				<a href="http://gesellschaftsspiele-com.stackstaging.com/" class="flex brettspieldatenbank">
					<div class="beispiel">
						<img class="icon" src="icons/030-html-5.svg">
						<img class="icon" src="icons/031-css.svg">
						<img class="icon" src="icons/bootstrap.svg">
						<img class="icon" src="icons/027-php.svg">
						<img class="icon" src="icons/021-mysql.svg">
					</div>
				</a>
				<a href="images/design.jpg" class="flex design">
					<div class="beispiel">
						<div>
							<img class="icon" src="icons/photoshop.svg">
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="content">
			<div id="skills">
				<h2>Skills</h2>
				<div class="skills">
					<div class="skill">
						<p>HTML</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>CSS</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>Javascript</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>Bootstrap</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>Photoshop</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>PHP</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>MySQL</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
					<div class="skill">
						<p>APIs</p>
						<div>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
							<i class="far fa-star"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="contact">
			<h2>Kontakt</h2>
			<form method="post">
				<input type="text" name="name" placeholder="Name" required class="input"></input>
				<input type="email" name="email" placeholder="E-Mail-Adresse" required class="input"></input>
				<textarea name="content" placeholder="Ihre Nachricht" required></textarea>
				<input type="submit" value="Absenden" class="button"></input>
			</form>
			<div id="error"><?php echo $error; ?></div>
			<div id="post"></div>
<!--			<div class="icons">
				<i class="fab fa-2x fa-xing"></i>
				<i class="fab fa-2x fa-github"></i>
				<i class="fab fa-2x fa-twitter"></i>
			</div>-->
			<div class="footer">
				<div>
					<p>Deborah Harlaar</p>
					<p>E-Mail: deborah@harlaar.de</p>
					<p>Mobil: 0157/34212075</p>
					<div class="impressum">
						<a href="Impressum.html">Impressum</a>
					</div>
				</div>
		<!--		<div>
					<a href="Impressum.html">Impressum</a>
				</div>-->
			</div>
		</div>
	</body>
</html>