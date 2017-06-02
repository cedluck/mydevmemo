<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpbdd</title>
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
	          	<li><a class="label label-php" href="#lireecrire">Lire et écrire</a></li>
				<li><a class="label label-php" href="#bdd">Les bases de données</a></li>
				<li><a class="label label-php" href="#phpmyadmin">phpMyAdmin</a></li>
				<li><a class="label label-php" href="#lecturedonnees">Lire une BDD avec PHP</a></li>
				<li><a class="label label-php" href="#">Au début</a></li>			
				<li><a class="label label-php" href="phptransmission.php">chapitre précédent...</a></li>
				<li><a class="label label-php" href="phpsql.php">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">PHP : les bases de données</span> <small>Accéder à la <a href="https://secure.php.net/manual/fr/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql" target="_blank">"concevez votre site web avec php et mysql"</a> de : <a href="https://openclassrooms.com/membres/mateo21" target="_blank">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="lireecrire"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("../html/regexhtml.php");?>
			<!--MAIN CONTENT-->
			<section>
				<!--lire et écrire dans un fichier-->
				<h3>Lire et écrire des données dans un fichier</h3>
				<ul>
					<p>Les variables sont temporaires. Pour stocker des informations définitivement sur le site (comme les messages d'un forum) il faut les stocker sur un disque dur en créant un fichier.</p>
					<strong>Autoriser l'écriture de fichiers (chmod) avec un logiciel FTP (filezila) :</strong><br/>
					<img src="../png/phpchap4_2.png"/><br/>
					<p>On pourra ainsi changer les permissions dans un menu CHMOD :</p>
					<img src="../png/phpchap4_3.png"/><br/>
					<strong>Le code CHMOD du mode lecture et écriture est 777.</strong>
					<p><em>Consulter un tuto à propos du CHMOD : <a href="https://openclassrooms.com/courses/reprenez-le-controle-a-l-aide-de-linux/les-utilisateurs-et-les-droits#ss_part_5">Reprenez le contrôle à l'aide de Linux !</a></em></p>
					<strong>Lire et écrire dans un fichier :</strong>
					<p>Exemple d'un fichier qui permet de compter le nombre de fois qu'une page a été vue sur le site.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
&dollar;monfichier = fopen('compteur.txt', 'r+');//on ouvre le fichier en lecture et écriture 'r+'
 
&dollar;pages_vues = fgets(&dollar;monfichier); // On lit la première ligne (nombre de pages vues)
&dollar;pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek(&dollar;monfichier, 0); // On remet le curseur au début du fichier
fputs(&dollar;monfichier, &dollar;pages_vues); // On écrit le nouveau nombre de pages vues
 
fclose(&dollar;monfichier);
 
echo '&lt;p&gt;Cette page a été vue ' . &dollar;pages_vues . ' fois !&lt;/p&gt;';
?&gt;</pre>";
Regex($texte);
?>					
					<p><strong>Tableau des modes <code>fopen</code> :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Mode</th><th>Explication</th>
						</tr>
						<tr>
							<th>r</th><td>Ouvre le fichier en lecture seule.</td>
						</tr>
						<tr>
							<th>r+</th><td>Ouvre le fichier en lecture et écriture.</td>
						</tr>
						<tr>
							<th>a</th><td>Ouvre le fichier en écriture seule. Si le fichier n'existe pas, il est automatiquement créé.</td>
						</tr>
						<tr>
							<th>a+</th><td>Ouvre le fichier en lecture et écriture. Si le fichier n'existe pas, il est créé automatiquement. Attention : le répertoire doit avoir un CHMOD à 777 dans ce cas ! À noter que si le fichier existe déjà, le texte sera rajouté à la fin.</td>
						</tr>					
					</table>
					<p><strong>Fonctions qui écrivent et lisent :</strong></p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Fonction</th><th>Explication</th>
						</tr>
						<tr>
							<td><code>fgetc</code></td><td>lire carahtère par caractère.</td>
						</tr>
						<tr>
							<td><code>fgets</code></td><td>lire ligne par ligne.</td>
						</tr>
						<tr>
							<td><code>fputs</code></td><td>Ecrit la ligne dans le fichier.</td>
						</tr>
						<tr>
							<td><code>fseek</code></td><td>Replace le curseur en début de fichier.</td>
						</tr>
					</table>
					<?php
					$texte ="
<pre class=\"pre-scrollable\">// fseek s'utilise comme ça : 
fseek(&dollar;monfichir, 0) // 0 étant l'index du premier caractère du fichier.
</pre>";Regex($texte);
					?>

					<em>Si le fichier est ouvert avec le mode 'a 'ou 'a+', toutes les données écritent seront toujours ajoutées à la fin du fichier. La fonction 'fseek' n'aura donc aucun effet dans ce cas.</em>
				</ul>
			</section>	
			<div id="bdd"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--les BDD et SGBD-->
				<h3>Les base de données (BDD) comme MySQL</h3>
				<ul>
					<p>Les base de données (BDD) sont des systèmes qui enregistent les données de façon ordonnées afin que les informations fournies par ces données soit toujours classées et facilement accessibles.</em>
					<p><strong>Schéma d'une base de données :</strong></p>
					<img src="../png/phpchap4_1.png"/><br/>
					<p>Chaque BDD contient des tables et chaque table contient des champs (colonnes) et des entrées (lignes).</p><br/>
					<p><strong>Les SGBD (Systèmes de Gestion de Bases de Données)</strong><br/>
					Les SGBD sont les programmes qui se chargent du stockage de vos données.</p>
					On communique avec MySQL grâce au langage SQL. Ce langage est commun à tous les SGBD (avec quelques petites différences néanmoins pour certaines fonctionnalités plus avancées).</p>
					<p><strong>PHP fait la jonction entre vous et MySQL :</strong></p>
					<img src="../png/phpchap4_4.png"/><br/>
					<p>Autre SGBD : 
						<ul>
							- <em>PostgreSQL :</em> libre et gratuit comme MySQL, avec plus de fonctionnalités mais un peu moins connu ;<br/>
							- <em>QLite :</em> libre et gratuit, très léger mais très limité en fonctionnalités ;<br/>
							- <em>Oracle :</em> utilisé par les très grosses entreprises ; sans aucun doute un des SGBD les plus complets, mais il n'est pas libre et on le paie le plus souvent très cher ;<br/>
							- <em>Microsoft SQL Server :</em> le SGBD de Microsoft.
						</ul>
					</p>
				</ul>
			</section>	
			<div id="phpmyadmin"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--phpmyadmin-->
				<h3>phpMyAdmin</h3>
				<ul>
					<p>phpMyAdmin est une interface qui permet de visualiser les BDD. Accéder en tapant : http://localhost:8888/phpMyAdmin/index.php dans l'url du navigateur ou en cliquant sur les liens proposer par votre hébergeur de site.</p>
					<p><strong>L'accueil de phpMyAdmin :</strong></p>
					<img src="../png/phpchap4_5.png"/><br/>
					<p><strong>Créer une nouvelle BDD :</strong></p>
					<img src="../png/phpchap4_6.png"/><br/>
					<p>Interclassement permet de choisir un charset précis (utiliser de préférence utf8_general_ci).</p>
					<p><strong>Créer une nouvelle table :</strong></p>
					<img src="../png/phpchap4_7.png"/><br/>
					<p><strong>Renseigner les informations des champs :</strong></p>
					<img src="../png/phpchap4_8.png"/><br/>
					<p class="alert alert-warning"><strong>IMPORTANT !</strong> Toute table doit posséder un champ qui joue le rôle de clé primaire. La clé primaire permet d'identifier de manière unique une entrée dans la table. En général, on utilise le champ id comme clé primaire.</em></p>
					<p>Détails des colonnes :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Colonne</th><th>Description</th>
						</tr>
						<tr>
							<th>Champ</th><td>permet de définir le nom du champ (très important !) </td>
						</tr>
						<tr>
							<th>Type</th><td>le type de données que va stocker le champ (nombre entier, texte, date...)</td>
						</tr>
						<tr>
							<th>Taille/Valeurs </th><td>taille maximale du champ, notamment pour VARCHAR => 255 carctères</td>
						</tr>
						<tr>
							<th>Index</th><td>active l'indexation du champ. Utiliser l'index PRIMARY sur les champs de type id</td>
						</tr>
						<tr>
							<th>AUTO_INCREMENT (A_I)</th><td>permet au champ de s'incrémenter tou<strong>t seul à chaque nouvelle entrée</td>
						</tr>
					</table>
					<p><strong>Les types de champs MySQL</strong></p>
					<img src="../png/phpchap4_9.png"/><br/>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Catérgorie</th><th>Type</th><th>Description</th>
						</tr>
						<tr>
							<td></td><th>INT</th><td>nombre entier</td>
						</tr>
						<tr>
							<td></td><th>VARCHAR</th><td>texte court (entre 1 et 255 caractères)</td>
						</tr>
						<tr>
							<td></td><th>TEXT</th><td>long texte (on peut y stocker un roman sans problème)</td>
						</tr>
						<tr>
							<td></td><th>DATE</th><td>date (jour, mois, année).</td>
						</tr>
						<tr>
							<th>NUMERIC</th><th>TINYIN, SMALLINT...</th><td>les nombre : petits nombres entiers (TINYIN), gros nombres entiers (BIGINT), nombres décimaux, etc.</td>
						</tr>
						<tr>
							<th>DATE and TIME</th><th>DATE, DATETIME...</th><td>les dates et les heure : permettent de stocker une date, une heure, ou les deux à la fois.</td>
						</tr>
						<tr>
							<th>STRING</th><th>CHAR, VARCHAR...</th><td>les chaînes de caractères : types adaptés à toutes les tailles.</td>
						</tr>
						<tr>
							<th>SPATIAL</th><th>GEOMETRY, POINT...</th><td>bases de données spatiales utiles pour la cartographie.</td>
						</tr>
					</table>
					<p><strong>Opérations sur une table :</strong></p>
					<p>Sous l'onglet "structure" de phpMyAdmin on peut sélectionner les champ et éffectuer des opérations :</p>
					<br/>
					<img src="../png/phpchap4_10.png"/><br/>
					<br/>
					<p><strong>Supprimer, modifier, mettre le champ en primaire etc...</strong></p>
					<img src="../png/phpchap4_11.png"/><br/>
					<p><strong>Insérer un champ :</strong></p>
					<img src="../png/phpchap4_12.png"/><br/>
					<p>Le numéro d'id sera automatiquement créer grâce a l'option <code>auto_increment</code>.</p>
					<p><strong>Autre opérations :</strong></p>
					<p>D'autres opérations sont accessibles via leur onglet (SQL, Importer, Exporter...) :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Onglet</th><th>Description de l'opération</th>
						</tr>
						<tr>
							<th>SQL</th><td>permet d'éxécuter des requêtes SQL</td>
						</tr>
						<tr>
							<th>RECHERCHE</th><td>permet de faire une recherche dans chaque champ.</td>
						</tr>
						<tr>
							<th>EXPORTER</th><td>permet d'exporter la table sous forme de fichier .sql sur votre odinateur ou sur internet.</td>
						</tr>
						<tr>
							<th>IMPORTER</th><td>permet d'importer un fichier de requêtes SQL (.sql) dans votre BDD.</td>
						</tr>
						<tr>
							<th>PRIVILEGES</th><td>permet d'établir des règles de privilèges.</td>
						</tr>
						<tr>
							<th>OPERATIONS</th><td>permet de déplacer, changer les options, copier, maintenir, vider ou supprimer la table.</td>
						</tr>					
					</table>
				</ul>
			</section>	
			<div id="lecturedonnees"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--lecture de données-->
				<h3>Lire les données d'une BDD avec PHP</h3>
				<ul>
					<p><strong>Se connecter à la BDD avec l'extension PDO :</strong></p>
					<p>Après avoir vérifié que l'extension PDO est activée sur votre serveur web (voir fichier php.ini), voilà comment on peut accéder à une base de donnée en PHP :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
// Sous WAMP (Windows)
&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

// Sous MAMP (Mac ou Windows)
&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Tester la présence d'erreurs :</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception &dollar;e)
{
        die('Erreur : ' . &dollar;e ->getMessage());
}
?&gt;</pre>";
Regex($texte);
?>
					<p><strong>Traquer les erreurs :</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', 
					array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception &dollar;e)
{
        die('Erreur : ' . &dollar;e ->getMessage());
}
?&gt;</pre>";
Regex($texte);
?>					
					<p>Cela permet à PHP d'afficher les détails des erreurs commis lors d'une requête SQL.</p>
					<p><strong>Récupéréer les données d'une BDD.</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">
&dollar;reponse = &dollar;bdd ->query('Tapez votre requête SQL ici');		
</pre>";
Regex($texte);
?>
					<p>"$reponse" contient toute la réponse de MySQL en vrac, sous forme d'objet.</p>
					<p><strong>Afficher le résultat d'une requête.</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">
&dollar;donnees = &dollar;reponse ->fetch();		
</pre>";
Regex($texte);
?>
					<p>"$donnees" est un array qui contient champ par champ les valeurs des entrées. On fera donc $donnees['nomDuChamp'] pour obtenir la valeur du champ. <code>fetch()</code> rend false dans "$donnees" lorsqu'il ne rencontre pas ou plus de champs.</p>
					<p><strong>Fermer le curseur d'analyse des résultats après chaque requête :</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">
&lt;?php &dollar;reponse ->closeCursor(); ?&gt;
</pre>";
Regex($texte);
?>
					<p><strong>Code complet d'une requête en PHP :</strong></p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
try
{
	&dollar;bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '',
						array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)););
}
catch(Exception &dollar;e)
{
        die('Erreur : '.&dollar;e ->getMessage());
}

&dollar;reponse = &dollar;bdd ->query('Tapez votre requête SQL ici');

//fetch() cherche la prochaine entrée dans $.reponse et l'organise en ARRAY,<br/>					lorsqu'il n'y a plus d'entrée fetch() rend false.
while (&dollar;donnees = &dollar;reponse ->fetch())
{
	echo &dollar;donnees ['nomDuChamp'] . '&lt;br /&gt;';
}

&dollar;reponse ->closeCursor();

?&gt;</pre>";
Regex($texte);
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