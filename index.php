<!doctype html>
<html class="no-js" lang="cz">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AGAPO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/jquery.fullpage.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
	    <!-- Add your site or application content here -->
		<div id="fullpage">
			<div class="section" id="section:welcome">
				<?php include('include/welcome.php') ?>
			</div>
			<div class="section" id="section:news">
				<h1>Aktuality</h1>
			</div>
			<div class="section" id="section:users">
				<div class="slide">
					<h1>Pro užívatelov</h1>
				</div>
				<div class="slide">
					<h1>Pro Verejnosť</h1>
				</div>
				<div class="slide">
					<h1>Pro klienty</h1>
				</div>
				<div class="slide">
					<h1>Pro zamestnanci</h1>
				</div>
			</div>
			<div class="section" id="section:gallery">
				<h1>Galéria</h1>
			</div>
			<div class="section" id="section:us">
				<h1>O nás</h1>
			</div>
			<div class="section" id="section:contact">
				<h1>Kontakt, pronájem</h1>
			</div>
		</div>

	    <ul id="menu">
		    <li data-menuanchor="AGAPO"><a href="#AGAPO">A G A P O</a></li>
		    <li data-menuanchor="aktuality"><a href="#aktuality">Aktuailty</a></li>
		    <li data-menuanchor="uzivatelia"><a href="#uzivatelia">Pro užívatelov</a></li>
		    <li data-menuanchor="galeria"><a href="#galeria">Galéria</a></li>
		    <li data-menuanchor="onas"><a href="#onas">O nás</a></li>
		    <li data-menuanchor="kontakty"><a href="#kontakty">Kontakty</a></li>
	    </ul>

        <!-- Scripts -->
        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/vendor/jquery.fullpage.min.js"></script>
        <script src="/js/vendor/fontawesome-all.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
