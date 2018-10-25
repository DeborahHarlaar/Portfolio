<?php
	$error = "";
	$validmail = "";
	if ($_POST) {

		if (!$_POST["email"]) {
			$error .="Ihre E-Mail-Adresse ist notwendig.";
		}
		if (!$_POST["content"]) {
			$error .="Eine Nachricht ist notwendig.";
		}
		if (!$_POST["name"]) {
			$error .="Ihr Name ist notwendig.";
		}

		if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL === false)) {
			$error .="Diese E-Mail-Adresse ist ungültig.";
		}

		$eMailTo = "debbi@harlaar.de";
		$body = $_POST["content"];
		$subject = "Eine Nachricht von: ".$_POST["name"];
		$headers = "From: ".$_POST["email"];

		if (mail($eMailTo, $subject, $body, $headers)) {
			$validmail = "Ihre Nachricht wurde erfolgreich versandt.";
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
			<nav id="topNavigation" class="navigation">
				<a href="#about">Über mich</a>
				<a href="#portfolio">Projekte</a>
				<a href="#lebenslauf">Lebenslauf</a>
				<a href="#skills">Skills</a>
				<a href="#contact">Kontakt</a>
			</nav>
			<a href="javascript:void(0);" onclick="navBar()"><i class="fas fa-bars fa-2x" aria-hidden="true"></i></a>
			<h1>Deborah Harlaar<p></p><p id="typewriter"></p></h1>
		</div>

		<div class="content">
			<div id="about">
				<h2>Über mich</h2>
				<div class="about">
					<img src="images/DeborahHarlaar.jpg">
					<div class="text">
						<p>
							Mein Name ist Deborah Harlaar, ich bin 26 Jahre alt und wohne in Siegen. Ich bin am 28. September 1992 in Amsterdam geboren und später in Dortmund und dem Sauerland aufgewachsen.
						</p>

						<p>
							Seit 2014 beschäftige ich mich mit dem Bereich Webentwicklung. Zu Beginn habe ich mich ausschließlich im Frontendbereich beschäftigt, hauptsächlich mit HTML, CSS und Javascript. Inzwischen bin ich mit PHP und MySQL auch im Backenbereich unterwegs.
						</p>  

						<p>
							Seit 2018 bin ich bin ich auch als Webentwickler selbständig tätig.
						</p>
						<p>
							Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 
						</p>
					</div>
				</div>
			</div>
		</div>

		<div id="portfolio">
			<h2>Portfolio</h2>
			<div class="portfolioContent">
				<div class="flex ArchitekturMustermann">
					<div class="moreInformation">
						<h3>Architektur Mustermann</h3>
						<p>Eines meiner ersten Projekte. Eine simpele Seite mit HTML und CSS entwickelt. Diese Internetseite hat mehrere statische Unterseiten. Das ganze Projekt ist responsive. Sowohl Design als auch technische Umsetzung stammen von mir.</p>
						<p>HTML|CSS</p>
						<a target="_blank" rel="noopener noreferrer" href="http://architekturmustermann-com.stackstaging.com/index.html">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Architekt-Mustermann">Github</a>
					</div>
				</div>
				<div class="flex Winery">
					<div class="moreInformation">
						<h3>Landingpage</h3>
						<p>Eine einseitige Landingpage, die für mobile Endgeräte optimiert wurde. Von mir stammen Design und Entwicklung.</p>
						<p>HTML|CSS|Javascript</p>
						<a target="_blank" rel="noopener noreferrer" href="http://red-thousend-winery-com.stackstaging.com/landingpage.html">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/LandingPage">Github</a>
					</div>				
				</div>
				<div class="flex WeatherApp">
					<div class="moreInformation">
						<h3>Weather App</h3>
						<p>Diese Seite gibt das aktuelle Wetter am Standort des Nutzers aus. Ebenfalls lässt sich die Temperatureinheit von Celsius auf Fahrenheit umstellen. Diese Anwendung ist responsive. Das  Von mir stammen Design und technische Umsetzung</p>
						<p>HTML|CSS|Javascript|API</p>
						<a target="_blank" rel="noopener noreferrer" href="http://weatherapp.com.stackstaging.com/index.html">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/WeatherApp">Github</a>
					</div>							
				</div>
				<div class="flex QuoteMachine">
					<div class="moreInformation">
						<h3>Random Quote</h3>
						<p>Ein Generator, der zufällige Zitate generiert, die dann über Twitter teilbar sind. Von mir stammen Design und technische Umsetzung.</p>
						<p>HTML|CSS|Javascript|API</p>
						<a target="_blank" rel="noopener noreferrer" href="http://quotemachine.com.stackstaging.com/randomquote.html">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Random-Quote-Generator">Github</a>
					</div>
				</div>
				<div class="flex bakery">
					<div class="moreInformation">
						<h3>Bakery</h3>
						<p>Umsetzung eines bereits bestehendes Design. Für mobile Endgeräte optimiert. Von mir stammt die technische Umsetzung.</p>
						<p>HTML|CSS|Javascript</p>
						<a target="_blank" rel="noopener noreferrer" href="http://bakery-com.stackstaging.com/">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Bakery">Github</a>
					</div>
				</div>
				<div class="flex tierheim">
					<div class="moreInformation">
						<h3>Tierheim Mustermann</h3>
						<p>Eine </p>
						<p>HTML|CSS</p>
						<a target="_blank" rel="noopener noreferrer" href="http://tierheim-com.stackstaging.com/">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Tierheim">Github</a>
					</div>
				</div>
				<div class="flex recipeGenerator">
					<div class="moreInformation">
						<h3>Rezeptgenerator</h3>
						<p>Eine Datenbank für Rezepte. Nutzer können entweder in verschieden Kategorien suchen oder sich ein zufälliges Rezept ausgeben lassen. Ebenfalls können Nutzer neue Rezepte eingeben, die in der Datenbank gespeichert werden und ab dann auch in der jeweiligen Kategorie und zur Suche bereitstehen. Sowohl Design als auch technische Umsetzung stammen von mir.</p>
						<p>HTML|CSS|Javascript|PHP|MySQL</p>
						<a target="_blank" rel="noopener noreferrer" href="http://rezeptgenerator-com.stackstaging.com/">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Rezeptgenerator">Github</a>
					</div>
				</div>
				<div class="flex brettspieldatenbank">
					<div class="moreInformation">
						<h3>Brettspieldatenbank</h3>
						<p>Erstellung einer Datenbank, in der Brettspiele nach verschieden Kriterien gespeichert werden. Nutzer können ihre gewünschten Kriterien eingeben, und passende Spiele werden dann herausgegeben. Für die Gestaltung der Internetseite habe ich Bootstrap verwendet. Von mir stammt die technische Umsetzung.</p>
						<p>HTML|CSS|Bootstrap|PHP|MySQL</p>
						<a target="_blank" rel="noopener noreferrer" href="http://gesellschaftsspiele-com.stackstaging.com/">Internetseite</a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/DeborahHarlaar/Brettspieldatenbank">Github</a>
					</div>
				</div>
				<div class="flex design">
					<div class="moreInformation">
						<h3>Starterrätsel</h3>
						<p>Ein Design, für eine Internetseite. Mit Photoshop erstellt.</p>
						<p>Photoshop</p>
						<a target="_blank" rel="noopener noreferrer" href="images/design.jpg">Vollbild</a>
					</div>
				</div>
			</div>
		</div>

		<div class="content">
			<div id="lebenslauf">
				<h2>Lebenslauf</h2>
				<h3>Ausbildung</h3>
				<div class="item">
					<h4>1999 bis 2003</h4>
					<p>St. Urbanus Grundschule Dortmund-Huckarde</p>
				</div>
				<div class="item">
					<h4>2003 bis 2006</h4>
					<p>Stadtgymnasium Dortmund</p>
				</div>
				<div class="item">
					<h4>2006 bis 2007</h4>
					<p>Burggymnasium Altena</p>
				</div>
				<div class="item">
					<h4>2007 bis 2012</h4>
					<p>Märkisches Gymnasium Iserlohn</p>
					<p>Abschluss: Abitur im Juni 2012</p>
				</div>
				<div class="item">
					<h4>2013 bis 2018</h4>
					<p>Architekturstudium an der Universität Siegen</p>
				</div>
				<h3>Berufliche Laufbahn</h3>
				<div class="item">
					<h4>2009 bis 2011</h4>
					<p> Mitarbeit im evangelischen Kirchenkreis Iserlohn, als Mitarbeiterin des medienpädagogischen Projektes „Red Carpet Experience“</p>
				</div>
				<div class="item">
					<h4>10/2012 bis 09/2013</h4>
					<p>Bundesfreiwilligendienst im Klinikum Lüdenscheid</p>
				</div>
				<div class="item">
					<h4>seit 11/2017</h4>
					<p>Mitarbeiterin im IKEA Restaurant Siegen</p>
				</div>
			</div>
		</div>

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

		<div id="contact">
			<div class="content">
				<h2>Kontakt</h2>
				<form method="post">
					<input type="text" name="name" placeholder="Name" required class="input"></input>
					<input type="email" name="email" placeholder="E-Mail-Adresse" required class="input"></input>
					<textarea name="content" placeholder="Ihre Nachricht" required></textarea>
					<input type="submit" value="Absenden" class="button"></input>
				</form>
				<div id="error"><?php echo $error; ?></div>
				<div id="post"><?php echo $validmail; ?></div>
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
							<a href="impressum.html">Impressum</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>