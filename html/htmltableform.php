<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>htmltableform</title>
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
					<li><a class="label label-html" href="#tableau">Les tableaux</a></li>
					<li><a class="label label-html" href="#baliseform">Formulaire basique</a></li>
					<li><a class="label label-html" href="#tabtype">Saisie enrichie</a></li>
					<li><a class="label label-html" href="#zonesoptions">Zones d'options</a></li>
					<li><a class="label label-html" href="#listederoulante">Listes Déroulantes</a></li>					
					<li><a class="label label-html" href="#finEnvoie">Regrouper/Envoyer</a></li>
					<li><a class="label label-html" href="#">Au début</a></li>
					<li><a class="label label-html" href="htmlstructure.php">chapitre précédent...</a></li>
				</ul>
				<?php include("../navbars.php"); ?>
			</nav>

			<div class="container">	
				<!--title-->

				<h1><span class="label navbar-default">HTML5 : tableaux et formulaires</span> <small>Accéder à la <a href="https://www.w3.org/TR/html5/" role="button" target="_blank">documentation</a></small></h1>

				<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez à creer votre site web avec html5 et css3"</a> de : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com">openclassrooms</a>.</small>
				<div id="tableau"></div>
				<br/>
				<br/>
				<hr>
			<!--highlight rules-->
			<?php include("regexhtml.php");?>
				<section>					
					<!--tableau-->
					<h3>Balises et codage d'un tableau</h3>
					<ul>
						<table class="table table-striped table-bordered table-hover table-condensed">
							<caption>Balise de tableau.</caption>
							<tr>
								<th>Balise</th><th>Description</th>
							</tr>
							<tr>
								<td>&lt;table&gt;</td><td>Tableau</td>
							</tr>
							<tr>
								<td>&lt;caption&gt;</td><td>Titre du tableau</td>
							</tr>
							<tr>
								<td>&lt;tr&gt;</td><td>Ligne de tableau</td>
							</tr>
							<tr>
								<td>&lt;th&gt;</td><td>Cellule d'en-tête</td>
							</tr>
							<tr>
								<td>&lt;td&gt;</td><td>Cellule</td>
							</tr>
							<tr>
								<td>&lt;thead&gt;</td><td>Section de l'en-tête du tableau</td>
							</tr>
							<tr>
								<td>&lt;tbody&gt;</td><td>Section du corps du tableau</td>
							</tr>
							<tr>
								<td>&lt;tfoot&gt;</td><td>Section du pied du tableau</td>
							</tr>
						</table>
						<p>Voici comment on fait un tableau en HTML5 :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;table&gt;
	&lt;caption&gt;Titre du tableau&lt;/caption&gt;
	&lt;tr&gt;
		&lt;th&gt;En-tête du tableau&lt;/th&gt;&lt;th&gt;En-tête du tableau&lt;/th&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;cellule&lt;/td&gt;&lt;td&gt;cellule&lt;/td&gt;
	&lt;/tr&gt;
	&lt;tr&gt;
		&lt;td&gt;cellule&lt;/td&gt;&lt;td&gt;cellule&lt;/td&gt;
	&lt;/tr&gt;
	etc...
&lt;/table&gt;</pre>";
RegEx($texte);
?>
					<div id="baliseform"></div>
					<br/>
					<br/>
					</ul>
				</section>

				<hr>
				<section>
				<!---les formulaire-->
					<h3 >Balises des formulaires en HTML5</h3>
					<ul>
						<table  class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>Balise</th><th>Description</th>
							</tr>
							<tr>
								<td>&lt;form&gt;</td><td>Formulaire</td>
							</tr>
							<tr>
								<td>&lt;fieldset&gt;</td><td>Groupe de champs</td>
							</tr>
							<tr>
								<td>&lt;legend&gt;</td><td>Titre d'un groupe de champs</td>
							</tr>
							<tr>
								<td>&lt;label&gt;</td><td>Libellé d'un champ</td>
							</tr>
							<tr>
								<td>&lt;input /&gt;</td><td>Champ de formulaire (texte, mot de passe, case à cocher, bouton, etc.)</td>
							</tr>
							<tr>
								<td>&lt;textarea&gt;</td><td>Zone de saisie multiligne</td>
							</tr>
							<tr>
								<td>&lt;select&gt;</td><td>Liste déroulante</td>
							</tr>
							<tr>
								<td>&lt;option&gt;</td><td>Élément d'une liste déroulante</td>
							</tr>
							<tr>
								<td>&lt;optgroup&gt;</td><td>Groupe d'éléments d'une liste déroulante</td>
							</tr>
						</table>
					<p>Voici comment on écrit un formulaire :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;!--Il faut le même nom pour lier un label (for=) à son champ (name=) --&gt;

&lt;form method=&quot;post&quot; action=&quot;traitement&quot;&gt;
	&lt;label for=&quot;nomDuChamp&quot;&gt;Titre du champ :&lt;/label&gt;
	&lt;input type=&quot;typeDuChamp&quot; name=&quot;nomDuChamp&quot; id=&quot;nomDuChamp&quot;
				placeholder=&quot;Ex : text&quot; size=&quot;unNombre&quot; maxlength=&quot;unNombre&quot; /&gt;
&lt;/form&gt;</pre>";
RegEx($texte);
			?>
							<p>L'attribut <code>method=".."</code> sert à indiquer la méthode d'envoie :
								<ul>
									<li><code>post</code> : envoie un grand nombre d'information.</li>
									<li><code>get</code> : envoie un nombre limitée à 255 caractères par l'adresse url de la page (à éviter).</li>
								</ul>
							</p>
							<p>L'attribut <code>action=".."</code> sert à indiquer la page où les informations seront envoyées.</p>
							<p>Sélection automatique d'un champ :
<?php
$texte = "<pre  class=\"pre-scrollable\">
&lt;input type=&quot;text&quot; name=&quot;nom&quot; id=&quot;nom&quot; <em>autofocus</em> /&gt;</pre>";
RegEx($texte);
?>						
							</p>
							<p>Rendre un champ obligatoire :
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;input type=&quot;text&quot; name=&quot;nom&quot; id=&quot;nom&quot; <em>required</em> /&gt;</pre>";
RegEx($texte);
?>	
							</p>
					<div id="tabtype"></div>
					<br/>
					<br/>
					</ul>
				</section>
				<hr>
				<section>
					<!--tableau des différent type de champ de saisie-->
					<h3 >Zone de saisie enrichie (balise input)</h3>
					<ul>
						<p>Voici les différents attributs <code>type</code> qu'on peut donner à la balise <code>&lt;input&gt;</code>.</p>
						<table  class="table table-striped table-bordered table-hover table-condensed">
							<tr>
								<th>Type</th><th>Description</th>
							</tr>
							<tr>
								<td>text</td><td>Champ de saisie mono-ligne</td>
							</tr>
							<tr>
								<td>textearea</td><td>Champ de saisie multi-ligne</td>
							</tr>
							<tr>
								<td>password</td><td>Champ de saisie où les caractères sont cachés</td>
							</tr>
							<tr>
								<td>url</td><td>Champ de saisie d'une adresse absolue</td>
							</tr>
							<tr>
								<td>tel</td><td>Saisie d'un numéro de téléphone</td>
							</tr>
							<tr>
								<td>number</td><td>Saisie un nombre entier (attributs <code>min</code> <code>max</code> et <code>step</code> possible)</td>
							</tr>
							<tr>
								<td>range</td><td>Saisie d'un nombre grâce à un curseur (attributs <code>min</code> <code>max</code> et <code>step</code> possible)</td>
							</tr>
							<tr>
								<td>color</td><td>Saisie d'une couleur grâce à  un nuancier</td>
							</tr>
							<tr>
								<td>date</td><td>Saisie d'une date selon différents formats : <code>date</code><code>time</code><code>week</code><code>month</code><code>datetime</code><code>datetime-local</code></td>
							</tr>
							<tr>
								<td>search</td><td>Saisie d'une recherche (options supplémentaires du navigateur)</td>
							</tr>
						</table>
						<div id="zonesoptions"></div>
						<br/>
						<br/>
					</ul>
				</section>
				<hr>
				<section>
					<!--Zone d'option-->
					<h3 >Les Zones d'options</h3>
					<ul>
						<p>Zone d'option de type <code>radio</code>.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;!--On garde le même nom à chaque input pour indiquer à quel groupe fait partie le bouton.--&gt;

&lt;form&gt;
	&lt;input type=&quot;radio&quot; name=&quot;<code>nom</code>&quot; value=&quot;valeur1&quot; id=&quot;id1&quot;/&gt; &lt;label for=&quot;valeur1&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom</code>&quot; value=&quot;valeur2&quot; id=&quot;id2&quot;/&gt; &lt;label for=&quot;valeur2&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom</code>&quot; value=&quot;valeur3&quot; id=&quot;id3&quot;/&gt; &lt;label for=&quot;valeur3&quot;&gt;texts&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom</code>&quot; value=&quot;valeur4&quot; id=&quot;id4&quot;/&gt; &lt;label for=&quot;valeur4&quot;&gt;text!&lt;/label&gt;			  
&lt;/form&gt;

&lt;form&gt;
	&lt;input type=&quot;radio&quot; name=&quot;<code>nom2</code>&quot; value=&quot;valeur5&quot; id=&quot;id5&quot;/&gt; &lt;label for=&quot;valeur5&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom2</code>&quot; value=&quot;valeur6&quot; id=&quot;id6&quot;/&gt; &lt;label for=&quot;valeur6&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom2</code>&quot; value=&quot;valeur7&quot; id=&quot;id7&quot;/&gt; &lt;label for=&quot;valeur7&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
   	&lt;input type=&quot;radio&quot; name=&quot;<code>nom2</code>&quot; value=&quot;valeur8&quot; id=&quot;id8&quot;/&gt; &lt;label for=&quot;valeur8&quot;&gt;text&lt;/label&gt;			  
&lt;/form&gt;</pre>";
RegEx($texte);
?>
						<p>Possibilité de rajouter l'attribut <code>checked</code> pour sélectioner un bouton par défaut.</p>
						<div id="listederoulante"></div>
						<br/>
						<br/>				
					</ul>
				</section>
				<hr>
				<section>
				<!--Listes déroulants-->
					<h3 >Les listes déroulantes</h3>
					<ul>
						<p>Utilisation de la balise <code>&lt;select&gt;</code> avec plusieurs groupes de choix (balise <code>&lt;optgroup&gt;</code>).</p>
<?php
$texte = "<pre class=\"pre-scrollable\">>&lt;!--L'attribut value sert a identifié le choix.--&gt;

&lt;form&gt;
   &lt;label for=&quot;nomDeListe&quot;&gt;text&lt;/label&gt;&lt;br/&gt;
       &lt;select name=&quot;nomDeListe&quot; id=&quot;id&quot;&gt;

          &lt;optgroup label=&quot;nomDuGroupe1&quot;&gt;
               &lt;option value=&quot;valeur1&quot;&gt;valeur1&lt;/option&gt;
               &lt;option value=&quot;valeur2&quot;&gt;valeur2&lt;/option&gt;
               &lt;option value=&quot;valeur3&quot;&gt;valeur3&lt;/option&gt;
               &lt;option value=&quot;valeur4&quot;&gt;valeur4&lt;/option&gt;
           &lt;/optgroup&gt;

           &lt;optgroup label=&quot;nomDuGroupe2&quot;&gt;
               &lt;option value=&quot;valeur5&quot;&gt;valeur5&lt;/option&gt;
               &lt;option value=&quot;valeur6&quot;&gt;valeur6&lt;/option&gt;
           &lt;/optgroup&gt;
&lt;/form&gt;</pre>";
RegEx($texte);
?>
						<p>Possibilité de rajouter l'attribut <code>selected</code> pour sélectioner une option par défaut.</p>
						<div id="finEnvoie"></div>
						<br/>
						<br/>
					</ul>
				</section>
				<hr>
				<section>
				<!--Finalisation et envoie du formulaire-->
				<h3>Regrouper les champs et les envoyer.</h3>
					<ul>
						<p>Regroupement de plusieurs types de saisies différentes avec <code>&lt;fieldset&gt;</code> et <code>&lt;legend&gt;</code>.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;form method=&quot;post&quot; action=&quot;traitement.php&quot;&gt;
 
   &lt;fieldset&gt;
       &lt;legend&gt;nomDuGroup1&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt; 
       &lt;p&gt;
	  &lt;label for=&quot;nom1&quot;&gt;text&lt;/label&gt;
          &lt;input type=&quot;text&quot; name=&quot;nom1&quot; id=&quot;nom1&quot; /&gt;
       &lt;/p&gt;
       &lt;p&gt;
       	  &lt;label for=&quot;email&quot;&gt;text&lt;/label&gt;
          &lt;input type=&quot;email&quot; name=&quot;email&quot; id=&quot;email&quot; /&gt;
       &lt;/p&gt;
   &lt;/fieldset&gt;
 
   &lt;fieldset&gt;
       &lt;legend&gt;nomDuGroup2&lt;/legend&gt; &lt;!-- Titre du fieldset --&gt;
       &lt;p&gt;      
           &lt;input type=&quot;radio&quot; name=&quot;nom2&quot; value=&quot;valeur1&quot; id=&quot;valeur1&quot; /&gt; &lt;label for=&quot;valeur1&quot;&gt;text&lt;/label&gt;
           &lt;input type=&quot;radio&quot; name=&quot;nom2&quot; value=&quot;valeur2&quot; id=&quot;valeur2&quot; /&gt; &lt;label for=&quot;valeur2&quot;&gt;text&lt;/label&gt;
       &lt;/p&gt;
 
       &lt;p&gt;
           &lt;label for=&quot;precisions&quot;&gt;text&lt;/label&gt;
           &lt;textarea name=&quot;nom3&quot; id=&quot;nom3&quot; cols=&quot;unNombre&quot; rows=&quot;unNombre&quot;&gt;&lt;/textarea&gt;
       &lt;/p&gt;
   &lt;/fieldset&gt;
&lt;/form&gt;</pre>";
RegEx($texte);
?>
						<p>Différents types de boutons d'envoie :
						<ul>
							<li>type=&quot;<code>submit</code>&quot; : bouton qui envoie vers la page indiquée par <code>action=".."</code>.</li>
							<li>type=&quot;<code>reset</code>&quot; : remise à zéro du formulaire.</li>
							<li>type=&quot;<code>image</code>&quot; : équivalent à submit mais prend une image (indiquer par l'attribut <code>src=".."</code>).</li>
							<li>type=&quot;<code>button</code>&quot; : bouton générique utilisé surtout pour JavaScript.</li>	
						</ul>
						</p>
					</ul>
				</section>
		</div>
		<br/>
		<br/>
		<!--footer-->
		<footer>>
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