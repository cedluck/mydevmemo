<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>phptabfonction</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">


		<link href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="php_stylesheet.css"/>
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	</head>
	
	<body>	
		<body id="body">
		<!--header-->
		 <nav class="navbar navbar-default navbar-fixed-top">	     
          	<ul class="nav nav-pills nav-justified" id="navbar">
	          	<li><a class="label label-php" href="#tableaux">Les tableaux</a></li>
				<li><a class="label label-php" href="#parcourir">Parcourir un array</a></li>
				<li><a class="label label-php" href="#recherche">Recherche dans un array</a></li>
				<li><a class="label label-php" href="#fonctions">Les fonctions en PHP</a></li>
				<li><a class="label label-php" href="#preexistantes">Fonctions pré-existantes</a</a>
				<li><a class="label label-php" href="#include">Les inclusions de pages</a></a>
				<li><a class="label label-php" href="#">Au début</a></li>
				<li><a class="label label-php" href="phpbases.php">chapitre précédent...</a></li>
				<li><a class="label label-php" href="phptransmission.php">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">PHP : tableaux et fonctions</span> <small>Accéder à la <a href="https://secure.php.net/manual/fr/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql" target="_blank">"concevez votre site web avec php et mysql"</a> de : <a href="https://openclassrooms.com/membres/mateo21" target="_blank">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div  id="tableaux"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("../html/regexhtml.php");?>
				<!--MAIN CONTENT-->
				<section>
				<!--tableaux-->
				<h3>Les tableaux en php</h3>
				<ul>
					<p>Les tableaux numérotés : les variables deviennent des <code>arrays</code>.<br/>
				Les <code>arrays</code> numérotés permettent de stocker une série d'éléments du même type.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
// La fonction ARRAY permet de créer un ARRAY
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5');
?>

/*Autre notation*/
&lt;?php
&dollar;variable[0] = 'valeur1';
&dollar;variable[1] = 'valeur2';
&dollar;variable[2] = 'valeur3';
?>

/*Php met automatiquement les numéros*/
&lt;?php
&dollar;variable[] = 'valeur1'; // Créera $.variable[0]
&dollar;variable[] = 'valeur2'; // Créera $.variable[1]
&dollar;variable[] = 'valeur3'; // Créera $.variable[2]
?>

/*AFFICHAGE D'UN TABLEAU NUMEROTE*/
&lt;?php
echo $.variable[1]; // affichera la variable 2
?>
</pre>";
ReGex($texte);
?>				
					<p>Les <code>tableaux/arrays</code> associatifs : des étiquettes (clés) à la place des numéros.<br/>
				Les arrays associatifs permettent de découper une donnée en plusieurs sous-éléments.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
// On crée une ARRAY $.variable
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');
?>
	
/*AUTRE NOTATION*/
&lt;?php
&dollar;variable['cle1'] = 'valeur1';
&dollar;variable['cle2'] = 'valeur2';
&dollar;variable['cle3'] = 'valeur3';
&dollar;variable['cle4'] = 'valeur4';
?>

/*AFFICHAGE D'UN TABLEAU ASSOCIATIF*/
&lt;?php
echo &dollar;variable['cle2']; // affichera la valeur 2
?></pre>";
ReGex($texte);
?>
				</ul>
			</section>
			<div id="parcourir"></div>
		    <br/>
		    <br/>
			<hr>
			<section>
				<!--parcourir les arrays-->
				<h3>Parcourir un array</h3>
				<ul>
					<p>Parcourir un <code>array numéroté</code> grâce a la boucle <code>for</code> : </p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5'); // On crée notre ARRAY $.variable

for (&dollar;numero = 0; &dollar;numero < 5; &dollar;numero++;) // Puis on fait une boucle pour tout afficher :
{
    echo &dollar;variable[$.numero] . '&lt;br /&gt;'; // affichera $.variable[0],$.variable[1] etc.
}
?></pre>";
ReGex($texte);
?>	
					<p>Parcourir tout type d'<code>arrays</code> grâce a la fonction <code>foreach</code> : </p>
<?php
$texte = "<pre class=\"pre-scrollable\">/*ARRAY NUMEROTE*/
&lt;?php
&dollar;variable = array ('valeur1', 'valeur2', 'valeur3', 'valeur4', 'valeur5');

foreach(&dollar;variable as &dollar;element)
{
    echo &dollar;element . '&lt;br />'; // affichera $.variable[0], $.variable[1] etc.
}
?>

/*ARRAY ASSOCIATIF*/
&lt;?php
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');

foreach(&dollar;variable as &dollar;element)
{
    echo &dollar;element . '&lt;br />'; // affichera $.variable[0], $.variable[1] etc.
}
?>

/*ON PEUT AUSSI RECUPERER LES CLES DES ELEMENTS*/
&lt;?php
/* création de l'ARRAY */
foreach(&dollar;variable as &dollar;cle => &dollar;element)
{
    echo '[' . &dollar;cle . '] vaut ' . &dollar;element . '&lt;br />';
}
?></pre>";
ReGex($texte);
?>	
					<p>Afficher rapidement un array avec <code>print_r</code> : afficher la totalité du contenu d'un array. Utile pour le débogage.</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
&dollar;variable = array (
    'cle1' => 'valeur1',
    'cle2' => 'valeur2',
    'cle3' => 'valeur3',
    'cle4' => 'valeur4');

echo '&lt;pre&gt;';
print_r(&dollar;variable);
echo '&lt;/pre&gt;';
?></pre>";
ReGex($texte);
?>	
					<p>Résultat :</p>
					<img src="../png/phpchap1_2.png"/>
				</ul>
			</section>
			<div id="recherche"></div>
		    <br/>
		    <br/>
			<hr>
			<section>
				<!--Recherche-->
				<h3>Recherche dans un <em>array</em>.</h3>
				<ul>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>fonctions</th><th>description</th>
						</tr>
						<tr>
							<td><code>array_key_exists</code></td><td>pour vérifier si une clé existe dans l'array</td>
						</tr>
						<tr>
							<td><code>in_array</code></td><td>pour vérifier si une valeur existe dans l'array</td>
						</tr>
					</table>
					<p>Ces deux fonctions renvoie un booléen qui permet de faire facilement un test :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">/*RECHERCHE DE L'EXISTANCE D'UNE CLE*/
if (array_key_exists('cle2', &dollar;variable)) // mettre le parametre cle entre guillemets
{
    echo 'La clé &quot;cle2&quot; se trouve dans l'array &dollar;variable !';
}

/*RECHERCHE DE L'EXISTANCE D'UNE VALEUR*/
if (in_array('valeur2', &dollar;variable)) // mettre le parametre valeur entre guillemets
{
    echo 'La valeur &quot;valeur2&quot; se trouve dans l'array &dollar;variable !';
}</pre>";
ReGex($texte);
?>
					<p>Récupérer la clé d'une valeur dans l'array : <code>array_search</code></p>
					Cette fonction renvoie false si elle ne trouve pas la valeur et :
					<ul>
						- soit le numéro de la clé dans un array numéroté.<br/>
						- soit la clé correspondante à la valeur recherchée dans un array associatif.
					</ul>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
/*créationde l'ARRAY (numéroté ou associatif)*/
$&dollar;position = array_search('valeur1', &dollar;variable); // dans un ARRAY numéroté
echo '&quot;valeur2&quot; se trouve en position ' . &dollar;position . '&lt;br />'; // affichera : &quot;&quot;valeur1&quot; se trouve en position 0

&dollar;cle = array_search('valeur4', &dollar;variable); // dans un ARRAY associatif
echo '&quot;valeur4&quot; correspond à la clé :' . &dollar;cle; / affichera : &quot;&quot;valeur4&quot; correspond a la clé : cle4
?></pre>";
ReGex($texte);
?>
				</ul>
			</section>
			<div id="fonctions"></div>
		    <br/>
		    <br/>
			<hr>
			<section>
				<!--Fonctions-->
				<h3 id="fonctions">Les fonctions en PHP</h3>
				<ul>
					<p>Créer un fonction avec ou sans paramètre(s) :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">/*FONCTION SANS PARAMETRE*/
&lt;?php
function fonctionSansParametre()
{
	echo 'Un text &lt;br/>';
}

/*FONCTION AVEC PARAMETRE*/
&lt;?php
function fonctionAvecParametre(&dollar;parametre1, &dollar;parametre2, &dollar;parametre3)
{
    echo 'Le parametre1 est ' . &dollar;parametre1 . 
     		', le parametre2 est ' . &dollar;parametre2 .
     		', le parametre3 est ' . &dollar;parametre3 .' !';
}
?></pre>";
ReGex($texte);
?>
					<p>Appeler une fonction avec ou sans paramètre(s) :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
fonctionSansParametre()
?>

&lt;?php
&dollar;unNombre = 5;
fonctionAvecParametre(&quot;par1&quot;, &dollar;unNombre, 10)
?></pre>";
ReGex($texte);
?>
					<p>Voici ce que cela donnera :</p>
					<img src="../png/phpchap1_3.png"/>

					<p>Fonction qui renvoie une valeur grâce à l'instruction <code>return</code> :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
/* FONCTION QUI MULTIPLI 2 nombres */
function multiplier(&dollar;nombre1, &dollar;nombre2)
{
   &dollar;resultat = &dollar;nombre1 * &dollar;nombre2; // calcul
   return &dollar;resultat; // indique la valeur à renvoyer, ici le résulatt de la multiplication
}

/* APPEL DE LA FONCTION */
&dollar;multiplication = multiplier(6, 9);
echo 'Le résultat de la multiplication de 6 et 9 est ' . &dollar;multiplication;
?></pre>";
ReGex($texte);
?>
					<img src="../png/phpchap1_4.png"/>
				</ul>
			</section>
			<div id="preexistantes"></div>
		    <br/>
		    <br/>
			<hr>
			<section>
				<!--fonction pré-existante-->
				<h3>Les fonctions prêtes à l'emploi de PHP</h3>
				<ul>

					<p>PHP offre de nombreusex fonctions dejà programmées qu'il suffit d'appeler :</p>
					<ul>
						<li>Une fonction qui permet de rechercher et de remplacer des mots dans une variable</li>
						<li>Une fonction qui envoie un fichier sur un serveur</li>
						<li>Une fonction qui permet de créer des images miniatures (aussi appelées thumbnails)</li>
						<li>Une fonction qui envoie un mail avec PHP (très pratique pour faire une newsletter !)</li>
						<li>Une fonction qui permet de modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc</li>
						<li>Une fonction qui crypte des mots de passe</li>
						<li>Une fonction qui renvoie l'heure, la date…</li>
						<li>Etc.</li>
					</ul>
					<p>Une liste des fonctions et leurs documentations est disponible <a href="http://fr.php.net/manual/fr/funcref.php" target="_blank"><em>ici</em></a>.</p>
					<p>Traitement des chaînes de caractères :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>fonction</th><th>description</th><th>paramètres</th>
						</tr>
						<tr>
							<td><code>strlen</code></td><td>retourne la longueur d'une chaîne de caractères (espaces compris).</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td><code>str_replace</code></td><td>remplace une chaîne de caractères par une autre.</td><td>1- la chaîne qu'on recherche entre guillemet<br/>
																												2- la chaîne qui remplace entre guillemet<br/>
																												3- la chaîne ou on fait la recherche entre guillemet</td>
						</tr>
						<tr>
							<td><code>str_shuffle</code></td><td>Mélange aléatoirement les caractères d'une chaîne</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td><code>strtolower</code></td><td>met tous les caractères d'une chaîne en minuscules.</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
						<tr>
							<td><code>strtoupper</code></td><td>met tous les caractères d'une chaîne en majuscules.</td><td>la chaîne de caractère entre guillemet</td>
						</tr>
					</table>
<?php
$texte = "<pre class=\"pre-scrollable\">/*EXEMPLE DE STR_REPLACEµ:
&lt;?php
&dollar;ma_variable = str_replace('b', 'p', 'bim bam boum');
 
echo &dollar;ma_variable;
?></pre>";
ReGex($texte);
?>
					<img src="../png/phpchap1_5.png"/>
					<p>Tableau des paramètres à envoyer à la fonction <code>date ()</code> (renvoie l'heure et la date) :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Paramètre (respecter les majuscules/minuscules)</th><th>Description</th>
						</tr>
						<tr>
							<td>H</td><td>Heure</td>
						</tr>
						<tr>
							<td>i</td><td>Minute</td>
						</tr>
						<tr>
							<td>d</td><td>Jour</td>
						</tr>
						<tr>
							<td>m</td><td>Mois</td>
						</tr>
						<tr>
							<td>Y</td><td>Année</td>
						</tr>						
					</table>
					<p>Ainsi :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php
&dollar;annee = date('Y');
echo &dollar;annee;
?></pre>";
ReGex($texte);
?>
					<p>Renvoie l'année : 2017.</p>
				</ul>
			</section>
			<div id="include"></div>
		    <br/>
		    <br/>
			<hr>
				<!--inclure des portions de page-->
				<h3>Inclusion de page(s)</h3>
				<ul>
					<p>Shéma du principe d'inclusion de page(s) :</p>
					<img src="../png/phpchap1_6.png" title="shéma tirer du cours concevez-votre-site-web-avec-php-et-mysq de openclassrooms" />
					<p>Le code PHP :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;?php include(&quot;adresseDeLaSectionAInclure.php&quot;); ?></pre>";
ReGex($texte);
?>
				</ul>
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