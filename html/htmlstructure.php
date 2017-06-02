<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>htmlstructure</title>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <link href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="html_stylesheet.css"/>
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	</head>
	
	<body id="body">
		<!--header-->	
		<nav class="navbar navbar-default navbar-fixed-top">	     
	      	 </ul>
	          	<ul class="nav nav-pills nav-justified" id="navbar">
		          	<li><a class="label label-html" href="#structurante">Balises structurantes</a></li>
					<li><a class="label label-html" href="#structure">Schéma</a></li>
					<li><a class="label label-html" href="#headertags">Balise d'en-tête</a></li>
					<li><a class="label label-html" href="#">Au début</a></li>
					<li><a class="label label-html" href="htmlbases.php">chapitre précédent...</a></li>
					<li><a class="label label-html" href="htmltableform.php">chapitre suivant...</a></li>					
				</ul>
				<?php include("../navbars.php"); ?>	        		      
	    </nav>
		<div class="container">
			<!--title-->
			  	<h1><span class="label navbar-default">HTML5 : structure des pages</span> <small>Accéder à la <a href="https://www.w3.org/TR/html5/" role="button" target="_blank">documentation</a></small></h1>
				<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez à creer votre site web avec html5 et css3"</a> de : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com">openclassrooms</a>.</small>
		    <div id="structurante"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--balises structurant-->
				<h3>Les balises structurantes de HTML5</h3>
					
					<br/>
					<ul>
						<table  class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>Balise</th><th>Description</th>
							</tr>
							<tr>
								<td>&lt;header&gt;</td><td>En-tête</td>
							</tr>
							<tr>
								<td>&lt;nav&gt;</td><td>Liens principaux de navigation</td>
							</tr>
							<tr>
								<td>&lt;footer&gt;</td><td>Pied de page</td>
							</tr>
							<tr>
								<td>&lt;section&gt;</td><td>Section de page</td>
							</tr>
							<tr>
								<td>&lt;article&gt;</td><td>Article (contenu autonome)</td>
							</tr>
							<tr>
								<td>&lt;aside&gt;</td><td>Informations complémentaires</td>
							</tr>
							
						</table>
						<div id="structure"></div>
						<br/>
						<br/>
					</ul>
			</section>
			<hr>
			<section>
				<!--structures générale-->
				<h3>Schéma de la structure d'une page web</h3>
					<ul>
						<p>Ceci est à quoi la stucture d'une page html devrait ressembler.</p>
						<img src="../png/htmlstructure.png" title="structure d'une page en HTML5" alt="sturcture d'une page"/>
					</ul>
					<div id="headertags"></div>
			</section>
			<hr>
			<section>
				<!--balise d'entête-->
				<h3>Les balises de l'en-tête de page</h3>
					<br/>
					<ul>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>Balise</th><th>Description</th>
							</tr>
							<tr>
								<td>&lt;link /&gt;</td><td>Liaison avec une feuille de style</td>
							</tr>
							<tr>
								<td>&lt;meta /&gt;</td><td>Métadonnées de la page web (charset, mots-clés,etc.)</td>
							</tr>
							<tr>
								<td>&lt;script&gt;</td><td>Code JavaScript</td>
							</tr>
							<tr>
								<td>&lt;style&gt;</td><td>Code CSS</td>
							</tr>
							<tr>
								<td>&lt;title&gt;</td><td>Titre de la page</td>
							</tr>
						</table>
					</ul>
				</div>
			</section>
		</div>
		<br/>
		<br/>
		<!--footer-->
		<footer>
			<?php include("../footer.php");?>
		</footer>

		<script src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    	<script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 1000,
          origin:'top'
        });
        </script>
		</body>
</html>

