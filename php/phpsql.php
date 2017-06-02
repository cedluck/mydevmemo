<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpsql</title>
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
		 <nav class="navbar navbar-default navbar-fixed-top" >	     
          	<ul class="nav nav-pills nav-justified" id="navbar">
	          	<li><a class="label label-php" href="#SQL">Le langage SQL</a></li>
				<li><a class="label label-php" href="#injection">Failles d'injection SQL</a></li>
				<li><a class="label label-php" href="#inserer">Insérer</a></li>
				<li><a class="label label-php" href="#modifier">Modifier</a></li>
				<li><a class="label label-php" href="#supprimer">Supprimer</a></li>
				<li><a class="label label-php" href="#fonctionsSQL">Les fonctions</a></li>
				<li><a class="label label-php" href="#dateSQL">Les dates</a></li>
				<li><a class="label label-php" href="#fonctionsdateSQL">Fonctions des dates</a></li>
				<li><a class="label label-php" href="#jointure">Jointure</a></li>
				<li><a class="label label-php" href="#">Au début</a></li>
				<li><a class="label label-php" href="phpbdd.php">chapitre précédent...</a></li>
				<li><a class="label label-php" href="phpregex.php">chapitre suivant...</a></li>				
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<br/>
		    <br/>
			<!--title-->
			<h1><span class="label navbar-default">PHP : le langage SQL</span> <small>Accéder à la <a href="https://secure.php.net/manual/fr/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql" target="_blank">"concevez votre site web avec php et mysql"</a> de : <a href="https://openclassrooms.com/membres/mateo21" target="_blank">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="SQL"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("../html/regexhtml.php");?>
			<!--MAIN CONTENT-->
			<section>
				<!--SQL le langage des requêtes-->
				<h3>Le langage des requêtes : SQL</h3>
				<ul>
					<p><strong>SQL est un langage qui permet de communiquer avec MySQL. Par exemple :</strong></p>
<pre  class="pre-scrollable">
	SELECT * FROM nomTable
</pre>
					<p>ce traduit par « prends tous ce qu'il y a dans la table nomTable».<br/>
					- <code>SELECT</code> :  est un mot-clé qui détermine le type d'opération<br/>
					- <code>*</code> : indique le champ auxquel imputer cette opération (ici select)<br/>
					- <code>FROM</code> : fait la liaison entre le nom des champs et le nom de la table<br/>
					- <code>nomTable</code> : c'est le nom de la table dans laquelle SELECT pioche les entrées.</p>

					<p><strong>Préciser le nom d'un champ.</strong> Comme dans cette exemple : 
<pre  class="pre-scrollable">
	SELECT nom FROM jeux_video 
</pre>
					qui se traduit par « Sélectionner le champ "nom" dans la table "jeux_video" » </p>
					<p><strong>Ajouter des critères de sélection précis <code>WHERE</code> :</strong>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video WHERE possesseur='Patrick'
</pre>				
					qui se traduit par « Sélectionner tous les champs de la table "jeux_video" lorsque le champ "possesseur" est égal à Patrick »</p>
					<p><strong>Combiner plusieurs conditions avec <code>AND</code> et/ou <code>OR</code> :</strong>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video WHERE possesseur='Patrick' AND prix < 20
</pre>
					Traduction : « Sélectionner tous les champs de "jeux_video" lorsque le "possesseur "est Patrick ET lorsque le "prix" est inférieur à 20 ».</p>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video WHERE possesseur='Patrick' OR prix < 20
</pre>
					Traduction : « Sélectionner tous les champs de "jeux_video" lorsque le "possesseur" est Patrick OU lorsque le "prix" est inférieur à 20 ».</p>
					<p><strong>Ordonner les résultats de la requête <code>ORDER BY</code> :</strong>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video ORDER BY prix
</pre>				
					Traduction : « Sélectionner tous les champs de "jeux_video" et ordonne les résultats par "prix" croissants ».</p>
					<p><strong>On peut préciser dans quel sens on ordonne avec <code>DESC</code> :</strong>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video ORDER BY prix DESC
</pre>
					Traduction : « Sélectionner tous les champs de "jeux_video", et ordonner les résultats par "prix" décroissants ».</p>
					<p><strong>Ne sélectionner qu'une partie du résultat avec <code>LIMIT</code> :</strong>
<pre  class="pre-scrollable">
	SELECT * FROM jeux_video LIMIT 0, 20
</pre>
					Traduction : « Sélectionner les 20 premières entrées de tous les champs de la table "jeux_video" »</p>
					<p><em>Schéma du fonctionnement de <code>LIMIT</code></em> :</p>
					<img src="../png/phpchap4_13.png"/>
					<p><strong>Combinaison de toutes ces requêtes :</strong>
<pre  class="pre-scrollable">
	SELECT nom, possesseur, console, prix 
	FROM jeux_video 
	WHERE console='Xbox' OR console='PS2'
	ORDER BY prix 
	DESC 
	LIMIT 0,10
</pre>
					Traduction : «SELECTIONNER les champs "nom", "possesseur", "console" et "prix" de la TABLE "jeux_vidéo" là ou le champ "console" est égal à XboX OU égal à PS2, ORDONNER les par "prix" DECROISSANT, et AFFICHER les 10 premiers résultats»</p>
				</ul>
			</section>	
			<div id="injection"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--faille d'injection SQL-->
				<h3>Sécurité : les failles d'injection SQL</h3>
				<ul>
					<p>Si on veut utiliser une variable issue d'un formulaire dans une requête on pourrait le faire comme ceci :</p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;reponse = &dollar;bdd ->query
			('SELECT nom FROM jeux_video WHERE possesseur=\' '.&dollar;_POST['possesseur'].' \' ');
?&gt;</pre>";
Regex($texte);
?>
					<p class="alert alert-danger">CECI EST TRES MAUVAIS !!! </em> Un utilisateur malintentionné pourrait injecter une requête SQL dans l'array $_POST et endomager irrémédiablement la BDD.<br/></p>
					<p class="alert alert-warning">C'est ce qu'on appelle une <a href="https://fr.wikipedia.org/wiki/Injection_SQL"><strong>FAILLE D'INJECTION SQL</strong></a>.(<- voir page wikipédia)</p>
					<p><strong>La solution aux failles d'injection SQL, les requêtes préparées :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php

&dollar;req = &dollar;bdd ->prepare('SELECT nom FROM jeux_video WHERE possesseur = ? AND prix <= ?');
&dollar;req ->execute(array(&dollar;_GET['possesseur'], &dollar;_GET['prix_max']));

?&gt;</pre>";
Regex($texte);
?>	
					<p><code>prepare()</code> prépare la requête sans ses variables.<br/>
					<code>execute</code> remplace les <code>?</code> de la requête par les variables <code>$_GET</code> dans le bon ordre. Les "<code>?</code>" s'appel des marqueurs nom nominatif.</p>
					<p><strong>Avec des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php

&dollar;req = &dollar;bdd ->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
&dollar;req ->execute(array('possesseur' => &dollar;_GET['possesseur'], 'prixmax' => &dollar;_GET['prix_max']));

?&gt;</pre>";
Regex($texte);
?>
					<p>L'avantage des marqueurs nominatifs est qu'ils sont plus facile à gérer losqu'il y a beaucoup de variables, de plus ils n'ont pas besoin d'être déclarés dans le bon ordre.</p>
				</ul>
			</section>	
			<div id="inserer"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--INSERER des données-->
				<h3>Insérer des données dans une BDD</h3>
				<ul>
					<p><strong>Ajouter des entrées avec <code>INSERT INTO</code> :</strong></p>
<pre  class="pre-scrollable">
INSERT INTO nomTable(champ1, champ2, champ 3 etc...) VALUES('valeurChamp1', 'valeurChamp2', 'valeurChamp3', nombre, etc...)
</pre>
					<p>Les nombres n'ont pas besoin d'être entourés d'apostrophes.</p>
					<p><code>INSERT INTO</code> : c'est le mot-clé de l'opération.<br/>
					<code>nomTable</code> : le nom de la table dans laquelle on insère les entrées.<br/>
					<code>(...)</code> : entre parenthèses le nom des champs qui vont être insérés, séparés par une virgule.<br/>
					<code>VALUES</code> : indique qu'on va entrer les valeurs des champs.<br/>
					<code>(' ', ' ', ...)</code> : entre parenthèses les valeurs des champs <em>dans le même ordre qu'indiqué après nomTable.</em></p>
					<em>On peu se passer d'insérer le champ des "Id" : en effet MySQL le fait automatiquement grâce à la propriété <strong>auto_increment</strong>.</em>
					<br/>
					<p>On est pas obligé de lister les noms des champs après <code>INSERT INTO</code>, mais dans ce cas on devra préciser les  valeurs de tous les champs, y compris la valeur du champ des "Id" qui sera vide : <em>' '</em>.</p>
<pre  class="pre-scrollable">
INSERT INTO nomTable VALUES(' ', valeurChamp1', 'valeurChamp2', 'valeurChamp3', nombre, etc...)
</pre>
					<p><strong>Ecrire des données dans une BDD avec PHP</strong> :</p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception &dollar;e)
{
        die('Erreur : '.&dollar;e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
&dollar;bdd ->exec('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires)
						VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')');

echo 'Le jeu a bien été ajouté !';

?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Insérer des entrées avec des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;req = &dollar;bdd ->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max,
			commentaires)VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');

&dollar;req ->execute(array(
	'nom' => &dollar;nom,
	'possesseur' => &dollar;possesseur,
	'console' => &dollar;console,
	'prix' => &dollar;prix,
	'nbre_joueurs_max' => &dollar;nbre_joueurs_max,
	'commentaires' => &dollar;commentaires
	));

echo 'Le jeu a bien été ajouté !';
?&gt;</pre>";
Regex($texte);
?>
				</ul>
			</section>	
			<div id="modifier"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--Modifié des entrées-->
				<h3>Modifier des entrées avec <code>UPDATE</code></h3>
				<ul>
					<p><strong>Utilisation de UPDATE :</strong></p>
<pre  class="pre-scrollable">
UPDATE nomTable SET champ1 = valeur1, champ2 = nombre etc... WHERE ID = id
</pre>
					<p><code>UPDATE</code> : mot-clé qui permet de modifier une entrée.<br/>
					<code>nomTable</code> : le nom de la table.<br/>
					<code>SET</code> : sépare le nom de la table des champs à modifier.<br/>
					<code> champ1 = valeur1, champ2 ...</code> : modifie les valeurs des champs qu'on veut modifier. (entre apostrophes échappées pour les chaînes de caractères)<br/>
					<code>WHERE</code> : permet de dire à MySQL quelle entrée il doit modifier. On utilise souvent le champ des "Id" pour indiquer quelle entrée modifier.</p>
					<p class="alert alert-danger">ATTENTION : si le mot-clé WHERE n'est pas précisé, MySql ne saura pas qu'elle entrée modifier et affectera donc toutes les entrées !!!!</p>
					<p><strong>Modifier les entrée en PHP :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;nb_modifs = &dollar;bdd ->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo &dollar;nb_modifs . ' entrées ont été modifiées !';
?&gt;</pre>";
Regex($texte);
?>
					<p><code>UPDATE</code> renvoie le nombre d'entrées modifiées qu'on peut récupérer dans une varible (ici $nb_modifs)</p>
					<p><strong>Avec une requête préparer et des marqueurs nominatifs :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;req = &dollar;bdd ->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
&dollar;req ->execute(array (
	'nvprix' => &dollar;nvprix,
	'nv_nb_joueurs' => &dollar;nv_nb_joueurs,
	'nom_jeu' => &dollar;nom_jeu
	));
?&gt;</pre>";
Regex($texte);
?>
				</ul>
			</section>	
			<div id="supprimer"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--Suprimer des entrées-->
				<h3>Supprimer des entrées avec <code>DELETE</code></h3>
				<ul>
					<p><strong>Utilisation de DELETE :</strong></p>
<pre  class="pre-scrollable">
	DELETE FROM nomTable WHERE champ1 ='valeurChamp1'  champ2 ='valeurChamp2'
</pre>				
				<p><code>DELETE</code> : mot-clé qui permet de SUPPRIMER une entrée.<br/>
					<code>nomTable</code> : le nom de la table.<br/>
					<code>WHERE</code> : indique qu'elle(s) entrée(s) doi(ven)t être supprimée(s).</p>
					<p class="alert alert-danger">!!! ATTENTION : si WHERE n'est pas précisé toutes le entrées de la table seront éffacées !!!</p>
					<p><strong>En PHP :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;bdd ->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');
echo 'L'entrées a bien été supprimé.';
?&gt;</pre>";
Regex($texte);
?>

<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;req = &dollar;bdd ->prepare('DELETE FROM jeux_video WHERE nom_jeu=:nom_jeu');
&dollar;req ->execute(array (
	'nom_jeu' => &dollar;nom_jeu,
	));
?&gt;</pre>";
Regex($texte);
?>
				</ul>
				<!--Erreurs en SQL-->
				<h3>Repérer l'erreur SQL dans PHP</h3>
				<ul>
					<p><strong>Pour demander à PHP d'afficher une erreur sur une requête SQL :</strong></p>
<?php
$texte ="<pre  class=\"pre-scrollable\">&lt;?php
&dollar;reponse = &dollar;bdd ->query('SELECT nom FROM jeux_video') or die(print_r(&dollar;bdd ->errorInfo()));
?&gt;</pre>";
Regex($texte);
?>
					<p>Renvoie un message de ce type lorsqu'une erreur survient dans une requête SQL :</p>
<pre  class="pre-scrollable">
	You have an error in your SQL syntax near 'XXX'
</pre>
				</ul>
			</section>	
			<div id="fonctionsSQL"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--Fonctions SQL-->
				<h3>Les fonctions scalaires et d'agrégats de SQL</h3>
				<ul>
					<p> Le langage SQL permet d'effectuer des calculs directement sur des données à l'aide de fonctions toutes prêtes.</p>
					<p>Les fonctions SQL peuvent être classées en deux catégories :
					<ul>
					- <code>les fonctions scalaires</code> : elles agissent sur chaque entrée. Par exemple transformer en majuscules la valeur de chacune des entrées d'un champ, ou à l'inverse en minuscule.<br/>
					- <code>les fonctions d'agrégats</code> : lorsque vous utilisez ce type de fonctions, des calculs sont faits sur l'ensemble de la table pour retourner une valeur. Par exemple, calculer la moyenne des prix retourne une valeur : le prix moyen.
					</ul></p>
					<p class="alert alert-warning">Ces fonctions ne modifient pas la BDD mais renvoient des données transformées à PHP.</p>
					<p>Il faut utiliser les mot-clé <code>AS</code> pour donner un alias au champs transformés par les fonctions.</p>
					<p><strong>Fonctions scalaires :</strong></p>
					<pre  class="pre-scrollable">SELECT UPPER(nom) AS nom_maj FROM jeux_video <= AS donne nom_maj comme alias à nom</pre>
					<p><strong>Fonctions d'agrégats :</strong></p>
					<pre  class="pre-scrollable">SELECT AVG(prix) AS prix_moyen FROM jeux_video <= AS donne prix_moyen comme alias à prix</pre>

					<p><strong>Tableau des fonctions scalaires :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Fonction</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<th>UPPER</th><td>convertit le texte d'un champ en majuscules.</td><td>SELECT UPPER(nom) AS nom_maj FROM jeux_video</td>
						</tr>
						<tr>
							<th>LOWER</th><td>convertit le texte d'un champ en minuscule.</td><td>SELECT LOWER(nom) AS nom_min FROM jeux_video</td>
						</tr>
						<tr>
							<th>LENGTH</th><td>récupère la longueur des champs.</td><td>SELECT LENGTH(nom) AS longueur_nom FROM jeux_video</td>
						</tr>
						<tr>
							<th>ROUND()</th><td>arrondit la valeur des champs. (type numeric)<br/> paramètre : nomDuChamp, décimale après la virgule. </td><td>SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video</td>
						</tr>
					</table>
					<p><strong>Tableau des fonctions d'agrégats :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Fonction</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<th>AVG</th><td>Retourne la moyenne d'un champ contenant des nombres.</td><td>SELECT AVG(prix) AS prix_moyen FROM jeux_video</td>
						</tr>
						<tr>
							<th>SUM</th><td>Additionne les valeurs d'un champ.</td><td>SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'</td>
						</tr>
						<tr>
							<th>MAX</th><td>Retourne la valeur maximale d'un champ.</td><td>SELECT MAX(prix) AS prix_max FROM jeux_video</td>
						</tr>
						<tr>
							<th>MIN</th><td>Retourne la valeur minimale d'un champ.</td><td>SELECT MIN(prix) AS prix_min FROM jeux_video</td>
						</tr>
						<tr>
							<th>COUNT()</th><td>Compte le nombre d'entrées d'un champs.<br/>
							Prends en paramètre : *, NULL ou unChamp.</td><td>SELECT COUNT(*) AS nb_jeux FROM jeux_video</td>
						</tr>
						<tr>
							<th>COUNT(DISTINCT nomChamp)</th><td>Compte le nombre de valeurs distinctes sur un champ précis.</td><td>SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video</td>
						</tr>
					</table>
					<p><code>COUNT(DISTINCT ...)</code> permet de savoir combien de personnes différentes sont référencées dans la table.</p>
					<p><strong>Le groupement de données : <code>GROUP BY</code> et <code>HAVING</code></strong></p>
						<p>Exemple :</p>
						<pre  class="pre-scrollable">SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console</pre>
						<p>Cette requête va rendre le prix moyen des jeux pour chaque console :</p>
						<img src="../png/phpchap4_14.png"/><br/>
						<br/>
						<p><code>HAVING</code> est un peu comme <code>WHERE</code> mais agit une fois que les données sont regroupées. Exemple :</p>
						<pre  class="pre-scrollable">SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10</pre>
						<p>Cette requête va donner les prix moyen des jeux regrouper par console <em> dont le prix moyen est inférieur à 10 euros</em> :</p>
						<img src="../png/phpchap4_15.png"/><br/>
						<br/>
						<p>On peut avoir les deux mots-clé <code>WHERE</code> et <code>HAVING</code> dans la même requête :</p>
						<pre  class="pre-scrollable">SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur='Patrick' GROUP BY console HAVING prix_moyen <= 10</pre>
				</ul>
			</section>	
			<div id="dateSQL""></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--les dates en SQL-->
				<h3>Les dates en SQL</h3>
				<ul>
					<p><strong>Tableau des différents types de dates :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Type</th><th>Description</th>
						</tr>
						<tr>
							<th>DATE</th><td>Stocke une date au format AAAA-MM-JJ (Année-Mois-Jour).</td>
						</tr>
						<tr>
							<th>TIME</th><td>Stocke un moment au format HH:MM:SS (Heures:Minutes:Secondes) .</td>
						</tr>
						<tr>
							<th>DATETIME</th><td>Stocke la combinaison d'une date et d'un moment de la journée au format AAAA-MM-JJ HH:MM:SS.</td>
						</tr>
						<tr>
							<th>TIMESTAMP</th><td>Stocke le nombre de secondes passées depuis le 1er janvier 1970 à 00 h 00 min 00 s).</td>
						</tr>
						<tr>
							<th>YEAR</th><td>Stocke une année, soit au format AA, soit au format AAAA..</td>
						</tr>
					</table>
					<p><strong>Création d'un champ date sur phpMyAdmin :</strong></p>
					<img src="../png/phpchap5_1.png"/>
					<p class="alert alert-info">Conseil : nommer le champ autrement que "date" car cela peut créer de la confusion avec le mot clé <code>DATE</code> du langageSQL. Préférer "date_creation" ou "date_modification" par exemple.</p>
					<p><strong>Utilisation des champs de date dans SQL</strong></p>
					<p><code>DATE</code> :</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02'</pre>
					<p><code>DATETIME</code> :</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, date FROM minichat WHERE date = '2010-04-02 15:28:22'</pre>
					<p><strong>Utilisation plus précise des dates grâce aux opérateurs :</strong></p>
					<p>Donne les messages postés après la date du 02 avril 2010 à 15h 28mins et 22 sec.</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 15:28:22'</pre>
					<p>Donne les message postés entre le 02 et 18 avril 2010.</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' 
															AND date <= '2010-04-18 00:00:00'</pre>
					<p>Autre syntaxe :</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, date FROM minichat WHERE date BETWEEN '2010-04-02 00:00:00'
											 				AND '2010-04-18 00:00:00'</pre>
					<p><strong>Insérer une entrée contenant une date :</strong></p>
					<pre  class="pre-scrollable">INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', '2010-04-02 16:32:22')</pre>
				</ul>
			</section>	
			<div id="fonctionsdateSQL"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--les date en SQL-->
				<h3 >Fonctions de gestion des dates</h3>
				<ul>
					<p>Permettent d'extraire des informations et d'effectuer des opérations sur les dates :</p>
					<pre  class="pre-scrollable">INSERT INTO minichat(pseudo, message, date) VALUES('Mateo', 'Message !', NOW())</pre>
					<p><strong>Tableau des fonctions de gestion des dates :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Fonctions</th><th>Description</th><th>Exemple</th>
						</tr>
						<tr>
							<th>NOW()</th><td>Obtenir la date et l'heure actuelle.</td><td>...VALUES('Mateo', 'Message !', NOW())</td>
						</tr>
						<tr>
							<th>CUREDATE()</th><td>Obtenir uniquement la date actuelle.</td><td>...VALUES('Mateo', 'Message !', CUREDATE())</td>
						</tr>
						</tr>
						<tr>
							<th>CURTIME()</th><td>Obtenir uniquement l'heure actuelle.</td><td>...VALUES('Mateo', 'Message !', CURETIME())</td>
						</tr>
						</tr>
						<tr>
							<th>DAY()</th><td>Extrait le jour.</td><td>SELECT pseudo, message, DAY(date) AS jour FROM minichat</td>
						</tr>
						<tr>
							<th>MONTH()</th><td>Extrait le mois.</td><td>SELECT pseudo, message, MONTH(date) AS mois FROM minichat</td>
						</tr>
						<tr>
							<th>YEAR()</th><td>Extrait l'année.</td><td>SELECT pseudo, message, YEAR(date) AS année FROM minichat</td>
						</tr>
						<tr>
							<th>HOUR()</th><td>Extrait les heures.</td><td>SELECT pseudo, message, HOUR(date) AS heures FROM minichat</td>
						</tr>
						<tr>
							<th>MINUTE()</th><td>Extrait les minutes.</td><td>SELECT pseudo, message, MINUTE(date) AS minutes FROM minichat</td>
						</tr>
						<tr>
							<th>SECOND()</th><td>Extrait les secondes.</td><td>SELECT pseudo, message, SECOND(date) AS secondes FROM minichat</td>
						</tr>
					</table>
					<p><strong>Formater une date grâce à <code>Date_FORMAT</code> :</strong></p>
					<pre  class="pre-scrollable">SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat</pre>
					<p class="alert alert-info"><strong>'%d/%m/%Y %Hh%imin%ss'</strong> est le format "français".</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Symbole</th><th>Description</th>
						</tr>
						<tr>
							<th>%d</th><td>jour</td>
						</tr>
						<tr>
							<th>%m</th><td>mois</td>
						</tr>
						<tr>
							<th>%Y</th><td>année</td>
						</tr>
						<tr>
							<th>%H</th><td>heure</td>
						</tr>
						<tr>
							<th>%i</th><td>minute</td>
						</tr>
						<tr>
							<th>%s</th><td>seconde</td>
						</tr>
					</table>
					<p><strong>Ajouter et soustraire des dates grâce à <code>DATE_ADD</code> et <code>DATE_SUB</code> :</strong></p>
					<p>Ajouter une date d'expiration de 15 jours  :</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, DATE_ADD(date, INTERVAL 15 DAY) AS date_expiration FROM minichat</pre>
					<p>Remplacer ce qu'il y a après <code>INTERVAL</code> avec <code>MONTH</code>, <code>YEAR</code>,etc... pour avoir des intervales différents :</p>
					<pre  class="pre-scrollable">SELECT pseudo, message, DATE_ADD(date, INTERVAL 2 MONTH) AS date_expiration FROM minichat</pre>
					<p>Ici "date_expiration" sera "date" +<em> 2 MONTH</em></p>
					<p>De même si on veut soustraire des dates : </p>
					<pre  class="pre-scrollable">SELECT pseudo, message, DATE_SUB(date, INTERVAL 2 YEAR) AS date_first_message FROM minichat</pre>
				</ul>
			</section>	
			<div id="jointure"></div>
		    <br/>
		    <br/>
		    <hr>
			<section>
				<!--jointures entre tables-->
				<h3>Les jointures entre plusieurs table d'une BDD</h3>
				<ul>
					<p>Pour joindre 2 tables d'une même BDD il faut créer un champ de liaison des 2 tables comme dans le shéma suivant :</p>
					<img src="../png/phpchap5_2.png"/>
					<p>Ici les champs de liaison qui permettrent de faire la jointure sont : "ID_proprietaire" pour la table "jeux_video" et "ID" pour la table "proprietaires".</p>
					<p><strong>Les requêtes de jointure interne :</strong><br/>
					La jointure interne force les données d'une table à avoir une correspondance dans l'autre table.</p>
					<p>Jointure interne avec <code>WHERE</code> :</p>
<pre  class="pre-scrollable">SELECT jeux_video.nom, proprietaires.prenom
FROM proprietaires, jeux_video
WHERE jeux_video.ID_proprietaire = proprietaires.ID
</pre>
					<p>- A noter : dans <em>SELECT table1.champ, table2.champ</em>, on précise la table avec son champ pour éviter les ambiguïtés, en effet un champ peut avoir le même nom dans 2 tables différentes, comme le champ "nom" dans le shéma précédent. On a préciser le nom de la table du 2ieme champ afin de respecter la nomenglature, mais ce n'est pas obligatoire car le champ "prenom" n'est présent que dans une seul table.<br/>
					<em>WHERE table1.champDeReference = table2.champDeReference</em> : c'est ici que la jointure s'effectue.</p>
					<em>Il est fortement conseillé d'utiliser des alias pour les champs et pour les tables lorsqu'on fait des jointures.</em>
<pre  class="pre-scrollable">SELECT j.nom AS nom_jeu, p.prenom AS prenom_proprietaire
FROM proprietaires AS p, jeux_video AS j
WHERE j.ID_proprietaire = p.ID</pre>
					<p>- <em>j</em> devriendra l'alias de la table jeux_video<br/>
					- <em>p</em> deviendra l'alias de la table proprietaires<br/>
					- <em>nom_jeux</em> deviendra l'alias de jeux_video.nom (qu'on appelle j.nom)<br/>
					- <em>prenom_proprietaire</em> deviendra l'alias de proprietaire.prenom (qu'on appelle p.prenom)</p>
					<p>On peut se passer du mot-clé <em>AS</em> :</p>
<pre  class="pre-scrollable">SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p, jeux_video j
WHERE j.ID_proprietaire = p.ID</pre>
					<p>Jointure interne avec <code>JOIN</code> (nouvelle syntaxe) :</p>
<pre  class="pre-scrollable">SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID</pre>
					<p>- <em>FROM proprietaire p</em> récupère les données d'une table principale.<br/>
					- <em>INNER JOIN jeux_video j</em> fait une jointure interne avec la table secondaire.<br/>
					- <em>ON j.ID_proprietaire = p.ID</em> fait la liason entre les champs de liaison.</p>
					<p>Grâce à cette nouvelle syntaxe on peut filtrer, ordonner et limiter les résultats :</p>
<pre  class="pre-scrollable">SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
INNER JOIN jeux_video j
ON j.ID_proprietaire = p.ID
WHERE j.console = 'PC'
ORDER BY prix DESC
LIMIT 0, 10</pre>
					<p><strong>Les requêtes de jointure externe :</strong></p>
					<p>Les jointures externes permettent de récupérer toutes les données, même celles qui n'ont pas de correspondance.</p>
					<p>Récupérer toute la table de gauche avec <code>LEFT JOIN</code> :</p>
<pre  class="pre-scrollable">SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
LEFT JOIN jeux_video j
ON j.ID_proprietaire = p.ID	
</pre>
					<p>Ici "proprietaires" est appelée la « table de gauche » et "jeux_video" la « table de droite ». Le "LEFT JOIN" demande à récupérer tout le contenu de la table de gauche, donc tous les propriétaires, même si ces derniers n'ont pas d'équivalence dans la table "jeux_video". Lorsqu'un champ n'a pas de correspondance il apparaît quand même mais avec la valeur "NULL".</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>nom_jeux</th><th>prenom_proprietaire</th>
						</tr>
						<tr>
							<td>Super Mario Bros</td><td>Florent</td>
						</tr>
						<tr>
							<td>Sonic</td><td>Patrick</td>
						</tr>
						<tr>
							<td>...</td><td>...</td>
						</tr>
						<tr>
							<td>NULL</td><td>Cédric</td>
						</tr>
					</table>
					<p>Récupérer toute la table de droite avec <code>RIGHT JOIN</code> :</p>
					<p>Le "RIGHT JOIN" demande à récupérer toutes les données de la table dite « de droite », même si celle-ci n'a pas d'équivalent dans l'autre table. </p>
<pre  class="pre-scrollable">SELECT j.nom nom_jeu, p.prenom prenom_proprietaire
FROM proprietaires p
RIGHT JOIN jeux_video j
ON j.ID_proprietaire = p.ID</pre>
					<p>La table de droite est « jeux_video ». On récupèrerait donc tous les jeux, même ceux qui n'ont pas de propriétaire associé.</p>
					<p>Un jeux n'aura pas de propriétaire associé lorsque :
					<ul>
						- soit le champ "ID_proprietaire" contient une valeur qui n'a pas d'équivalent dans la table des propriétaires.<br/>
						- soit le champ "ID_proprietaire" vaut "NULL", c'est-à-dire que personne ne possède ce jeu.
					</ul></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>nom_jeux</th><th>prenom_proprietaire</th>
						</tr>
						<tr>
							<td>Super Mario Bros</td><td>Florent</td>
						</tr>
						<tr>
							<td>Sonic</td><td>Patrick</td>
						</tr>
						<tr>
							<td>...</td><td>...</td>
						</tr>
						<tr>
							<td>Bomberman</td><td>NULL</td>
						</tr>
					</table>
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