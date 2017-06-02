<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>csspropriétés</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="css_stylesheet.css"/>
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	</head>
	
	<body id="body">
		<!--header-->
		 <nav class="navbar navbar-default navbar-fixed-top">	     
          	<ul class="nav nav-pills nav-justified" id="navbar">	
				<li><a class="label label-css" href="#appliquer">Appliquer un media css</a></li>
				<li><a class="label label-css" href="#mobiles">Media et mobiles</a></li>
				<li><a class="label label-css" href="#">Au début</a></li>
				<li><a class="label label-css" href="cssflexbox.php">chapitre précédent...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>	        	
	    </nav>
			<div class="container">	
				<!--title-->
				  	<h1><span class="label navbar-default">CSS3 : media queries</span> <small>Accéder à la <a href="https://www.w3.org/Style/css3-selectors-updates/WD-css3-selectors-20010126.fr.html" role="button" target="_blank">documentation</a></small></h1>
				<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez a creer votre site web avec html5 et css3"</a> de : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com">openclassrooms</a>.
				</small>
				<div id="appliquer"></div>
			    <br/>
			    <br/>
			    <hr>

				<!--highlight rules-->
				<?php include("../html/regexhtml.php");?>
				<?php include("cssHighlight.php");?>
				<!--MAIN CONTENT-->
				<section>			
					<!--Dans une nouvelle feuille de style-->
					<h3 id="appliquer">Appliquer une règle de media query.</h3>
					<ul>
						<p>Code à mettre dans la balise <code>&lt;head&gt;</code> de la page avec la propriété <code>media=".."</code>.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;

        &lt;!-- Pour tout le monde --&gt;
        &lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot; /&gt;

        &lt;!-- Pour ceux qui ont une résolution inférieure à 1280px --&gt;
        &lt;link rel=&quot;stylesheet&quot; media=&quot;screen and (max-width: 1280px)&quot; href=&quot;petite_resolution.css&quot; /&gt; 

        &lt;title&gt;Media queries&lt;/title&gt;
    &lt;/head&gt;</pre>";
ReGex($texte);
	?>
	    			<br/>		
					<p>On peut aussi établir les règles dans la feuille de style déjà existante.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">
h1
{
    color: blue;
}

@media screen and (max-width: 1280px)
{
    h1 /*Rédigez vos propriétés CSS ici*/
	{
    	color: red;
	}
}

.class
{
    autrePropriete1: autreValeur1;
    autrePropriete2: autreValeur2;
}</pre>";
RegexCss($texte);
?>
					<p>Tableau des media (règles) disponibles.</p>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>media</th><th>description</th><th>valeur possible</th>
							</tr>
							<tr>
								<td>color</td><td>gestion de la couleur (en bits/pixel).</td><td></td>
							</tr>
							<tr>
								<td>height</td><td>hauteur de la zone d'affichage (fenêtre).</td><td></td>
							</tr>
							<tr>
								<td>width</td><td>largeur de la zone d'affichage (fenêtre).</td><td></td>
							</tr>
							<tr>
								<td>device-height</td><td>hauteur du périphérique.</td><td></td>
							</tr>
							<tr>
								<td>device-width</td><td>largeur du périphérique.</td><td></td>
							</tr>
							<tr>
								<td>orientation</td><td>orientation du périphérique (portrait ou paysage)</td><td></td>
							</tr>
							<tr>
								<td>media</td> <td>type d'écran de sortie.</td><td>screen : écran « classique »<br/>
																					handheld : périphérique mobile<br/>
																					print : impression<br/>
																					tv : télévision<br/>
																					projection : projecteur<br/>
																					all : tous les types d'écran</td>
							</tr>
					</table>
						 <p>Combinaison des <em>media</em> :</p>
						 <table class="table table-striped table-bordered table-hover table-condensed">
						 	<tr>
						 		<th>media</th><th>description</th>
						 	</tr>
						 	<tr>
						 		<td>only</td><td>"uniquement"</td>
						 	</tr>
						 	<tr>
						 		<td>and</td><td>"et"</td>
						 	</tr>
						 	<tr>
						 		<td>not</td><td>"non"</td>
						 	</tr>
						 </table>
						 <p>Exemple :</p>
<?php
$texte ="
<pre class=\"pre-scrollable\">/*Sur les écrans, lorsque la largeur de la fenêtre fait au maximum 1280px*/
@media screen and (max-width: 1280px)

/*Sur tous types d écrans, lorsque la largeur de la fenêtre est comprise entre 1024px et 1280px*/
@media all and (min-width: 1024px) and (max-width: 1280px)

/*Sur les téléviseurs*/
@media tv

/*Sur tous types d'écrans orientés verticalement*/
@media all and (orientation: portrait)</pre>";
RegexCss($texte);
?>
					<div id="mobiles"></div>
				    <br/>
				    <br/>				    
					</ul>
				</section>
				<hr>
				<section>
					<!--Dans une nouvelle feuille de style-->
					<h3>Media queries avec les mobiles</h3>
					<ul>
						<p>Les appareils mobiles utilisent un affichage simulé appelé <em>viewport</em>. Voici un tableau des différents <em>viewport</em> par défaut des navigateurs mobiles :</p>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>Navigateur</th><th>Largeur du <em>viewport</em> par défaut</th>
							</tr>
							<tr>
								<td>Opera Mobile</td><td>850 pixels</td>
							</tr>
							<tr>
								<td>iPhone Safari</td><td>980 pixels</td>
							</tr>
							<tr>
								<td>Android</td><td>800 pixels</td>
							</tr>
							<tr>
								<td>Windows Phone</td><td>1024 pixels</td>
							</tr>
						</table>
						<p>Il est préférable d'utiliser la règle <em>device-width</em> pour cibler un appareil mobile.<br/>
						Aucun navigateur mobile, à part Opera mobile, ne reconnait le media <em>handheld</em>, ils se comportent comme un <em>screen</em>.
						</p>
						<p>Modifier la largeur du viewport grâce a la balise <code>&lt;meta&gt;</code> dans l'en-tête de la page :</p>
						<?php $texte ="<pre class=\"pre-scrollable\">&lt;meta name=&quot;viewport&quot; content=&quot;width=320&quot; /&gt;</pre>";ReGex($texte);?>
						<p>Demander au <em>viewport</em> d'être de même largeur que l'écran :</p>
						<?php $texte ="<pre class=\"pre-scrollable\">&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width&quot; /&gt;</pre>";ReGex($texte);?>
					</ul>
				</section>
			</div>
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