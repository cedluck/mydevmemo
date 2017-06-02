<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>htmlbases</title>
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
          	<ul class="nav nav-pills nav-justified" id="navbar">
	          	<li><a class="label label-html" href="#structure" >Structure de base</a></li>
				<li><a class="label label-html" href="#caniuse">caniuse.com</a></li>
				<li><a class="label label-html" href="#balises">Balises HTML5</a></li>
				<li><a class="label label-html" href="#tableaubalise">Liste de balises</a></li>
				<li><a class="label label-html" href="#">Au début</a></li>
				<li><a class="label label-html" href="htmlstructure.php">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>	        	
	    </nav>
		<div class="container">	
				<!--title-->
				  	<h1><span class="label navbar-default">HTML5 : Les bases</span> <small>Accéder à la <a href="https://www.w3.org/TR/html5/" role="button" target="_blank">documentation</a></small></h1>
				<small>D'après <a href="https://openclassrooms.com/courses/	apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez à creer votre site web avec html5 et css3"</a> de : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com">openclassrooms</a>.
				</small>
			    <div id="structure"></div>
			    <br/>
			    <br/>
			    <hr>
		<!--highlight rules-->
		<?php include("regexhtml.php");?>
				<!--MAIN CONTENT-->
				<section>
					<!---sructure-->
					<h3>Structure de base d'une page HTML5</h3>
					<ul>
						<p>Copier/coller ce code à chaque nouvelle page dans l'éditeur de texte.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot; /&gt;
    &lt;title&gt;Titre&lt;/title&gt;
&lt;/head&gt;

&lt;body&gt;

&lt;/body&gt;
&lt;/html&gt;</pre>";
RegEx($texte);
?>
						
						<p><code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> et <code>&lt;body&gt;</code> sont des balises ditent de "premier niveau".</p>
					<div id="caniuse"></div>
					<br/>
					<br/>
					</ul>
				</section>
				<hr>
				<section>
					<!--CANIUSE-->
					<h3>Caniuse</h3>
					<ul>
						<br/>
						<img src="../png/caniuse.png"/>
						<div  id="balises"></div>
						<br/>
						<p>Le site <a href="http://caniuse.com"><em>caniuse.com</em></a> tient à jour une liste des fonctionnalités prises en charge par les différentes versions de chaque navigateur.
						</p>
						
					</ul>
				</section>
				<hr>
				<section>
					<!--balises-->
					<h3>Les différentes balise en HTML5</h3>
						<ul>
							<p>Voici quelques balises basiques en HTML5</p>
<?php
$texte = "
<pre class=\"pre-scrollable\">&lt;p&gt;Paragraphe&lt;/p&gt;

&lt;!--Ecrire un commentaire--&gt;

&lt;br/&gt;retour a la ligne

&lt;h1&gt;titre très important&lt;/h1&gt;

&lt;h2&gt;titre important&lt;/h2&gt;

&lt;h3&gt;titre moins important&lt;/h3&gt;

&lt;h4&gt;titre encore moins important&lt;/h4&gt;

&lt;h5&gt;titre pas important&lt;/h5&gt;

&lt;h6&gt;titre pas important du tout&lt;/h6&gt;

&lt;em&gt;mise en valeur italic&lt;/em&gt;

&lt;strong&gt;mise en valeur gras&lt;/strong&gt;

&lt;mark&gt;mise en valeur du texte&lt;/mark&gt;

&lt;ul&gt;début d'une liste &lt;!--indentation vers la droite--&gt;
	&lt;li&gt;élément(s) d'une liste&lt;/li&gt;
&lt;/ul&gt;fin d'une liste &lt;!--fin de l'indentation--&gt;

&lt;ol&gt;début d'une liste ordonnée &lt;!--indentation vers la droite--&gt;
	&lt;li&gt;élément(s) d'une liste ordonnée&lt;/li&gt;
&lt;/ol&gt;fin d'une liste ordonnée &lt;!--fin de l'indentation--&gt;

&lt;a href=&quot;autrePage.html&quot;&gt;non du lien&lt;/a&gt;

&lt;a href=&quot;#ancre&quot;&gt;non du lien&lt;/a&gt; &lt;!--ira à id=&quot;#ancre&quot;--&gt;

&lt;a href=&quot;#autrePage.html#ancre&quot;&gt;non du lien&lt;/a&gt; &lt;!--ira à id=&quot;#ancre de l'autre page&quot;--&gt;

&lt;a href=&quot;autrePage.html&quot; title=&quot;infobulle&quot; target=&quot;_blank&quot;&gt;non du lien&lt;/a&gt; _blank ouvre la page dans un autre onglet

&lt;a href=&quot;mailto:votrePseudo@votrEmail.com&quot;&gt;Envoyer moi un e-mail !&lt;/a&gt;

&lt;a href=&quot;monFichier.zip&quot;&gt;Téléchargez ce fichier&lt;/a&gt;

&lt;figure&gt;
	&lt;img src=&quot;images/nonImage.jpg&quot; alt=&quot;desciptionde l'image&quot; title=&quot;infobulle&quot;/&gt;
	&lt;figcaption&gt;text concernant l'image&lt;/figcaption&gt;
&lt;/figure&gt;</pre>";
RegEx($texte);
?>
						<div id="tableaubalise"></div> 
						<br/>
						<br/>
						</ul>
					</section>
					<hr>
					<section>					
					<!--TBALEAU DE BALISE-->
					<div></div>
					<h3>Tableau récapitulatif (et non exhaustif) des balises de structuration de texte</h3>
						<ul>
						<br/>
      						<table class="table table-striped table-bordered table-hover table-condensed">
								<tr>
									<th>Balise</th><th>Description</th>						
								</tr>
								<tr>
									<td>&lt;abbr&gt;</td><td>Abréviation</td>						
								</tr>
								<tr>
									<td>&lt;blockquote&gt;</td><td>Citation (longue)</td>						
								</tr>
								<tr>
									<td>&lt;cite&gt;</td><td>Citation du titre d'une œuvre ou d'un évènement</td>						
								</tr>
								<tr>
									<td>&lt;q&gt;</td><td>Citation (courte)</td>						
								</tr>
								<tr>
									<td>&lt;sup&gt;</td><td>Exposant</td>						
								</tr>
								<tr>
									<td>&lt;sub&gt;</td><td>Indice</td>						
								</tr>
								<tr>
									<td>&lt;audio&gt;</td><td>Son</td>						
								</tr>
								<tr>
									<td>&lt;video&gt;</td><td>Vidéo</td>						
								</tr>
								<tr>
									<td>&lt;source&gt;</td><td>Format source pour les balises <code>&lt;audio&gt;</code> et <code>&lt;video&gt;</code></td>						
								</tr>
								<tr>
									<td>&lt;hr /&gt;</td><td>Ligne de séparation horizontale</td>						
								</tr>
								<tr>
									<td>&lt;address&gt;</td><td>Adresse de contact</td>						
								</tr>
								<tr>
									<td>&lt;del&gt;</td><td>Texte supprimé</td>						
								</tr>
								<tr>
									<td>&lt;ins&gt;</td><td>Texte inséré</td>						
								</tr>
								<tr>
									<td>&lt;dfn&gt;</td><td>Définition</td>						
								</tr>
								<tr>
									<td>&lt;kbd&gt;</td><td>Saisie clavier</td>						
								</tr>
								<tr>
									<td>&lt;pre&gt;</td><td>Affichage formaté (pour les codes sources)</td>						
								</tr>
								<tr>
									<td>&lt;progress&gt;</td><td>Barre de progression</td>						
								</tr>
								<tr>
									<td>&lt;time&gt;</td><td>Date ou heure</td>						
								</tr>
								<tr>
									<td>&lt;dl&gt;</td><td>Liste de définitions</td>						
								</tr>
								<tr>
									<td>&lt;dte&gt;</td><td>Terme à définir</td>						
								</tr>
								<tr>
									<td>&lt;dd&gt;</td><td>Définition du terme</td>						
								</tr>
							</table>
							<br/>
							<br/>							
						</ul>
				</section>
			<br/>
			</div>
		</div>
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
				