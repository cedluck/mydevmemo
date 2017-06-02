<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpbases</title>
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
	          	<li><a class="label label-php" href="#balisePHP">La balise PHP</a></li>
				<li><a class="label label-php" href="#variables">Les variables</a></li>
				<li><a class="label label-php" href="#conditions">Les conditions</a></li>
				<li><a class="label label-php" href="#conditionsmultiples">Les conditions multiples</a></li>
				<li><a class="label label-php" href="#switch">L'instruction SWITCH</a></li>
				<li><a class="label label-php" href="#boucles">Les boucles</a></li>
				<li><a class="label label-php" href="#">Au début</a></li>
				<li><a class="label label-php" href="phptabfonction.php">chapitre suivant...</a>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">PHP : les bases</span> <small>Accéder à la <a href="https://secure.php.net/manual/fr/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql" target="_blank">"concevez votre site web avec php et mysql"</a> de : <a href="https://openclassrooms.com/membres/mateo21" target="_blank">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="balisePHP"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("../html/regexhtml.php");?>
			<!--MAIN CONTENT-->
			<section>
				<!--balsie PHP-->
				<h3>La balise PHP</h3>
				<ul>
					<p>La balise PHP s'insère partout, même au mileu d'une balise html.</p>
<?php
$texte ="
<pre class=\"pre-scrollable\">&lt;?php 

	// un commentaire sur une ligne

	/* un commentaire
		sur plusieurs lignes */

    Ma première instruction; // ****POINT VIRGULE POUR MARQUER LA FIN DE L'INSTRUCTION****
    Ma deuxième instruction;

 ?&gt; // ****NE PAS FERMER LA BALISE DANS UN FICHIER 100% PHP****

 &lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;&lt;?php echo date('h:i:s'); ?&gt;&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot; /&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h2&gt;Titre&lt;/h2&gt;
        
        &lt;p&gt;
            Cette page contient du code HTML avec des balises PHP.&lt;br /&gt;
            &lt;?php echo '&lt;h1&gt;phrase est générée par PHP.&lt;/h1&gt;';?&gt; // balise h1 dans une balise PHP
        &lt;/p&gt;

        &lt;?php
           echo 'Cette phrase est aussi générée par PHP.';
        ?&gt;

    &lt;/body&gt;
&lt;/html&gt;</pre>";
Regex($texte);
?>				
				</ul>
			</section>	
			<div id="variables"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--les variables PHP-->
				<h3>Les variables dans PHP</h3>
				<ul>
					<p>Les différents types de variables</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>type</th><th>description</th>
						</tr>
						<tr>
							<td>Les chaînes de caractères (<code>string</code>)</td><td> texte écrit entre guillemets ou entre apostrophes</td>
						</tr>
						<tr>
							<td>Les nombres entiers (<code>int</code>)</td><td>1, 2, 3, .. -1, -2, -3 ...</td>
						</tr>
						<tr>
							<td>Les nombres décimaux (<code>float</code>) </td><td> nombre décimaux avec un . pour virgule, ex : 3.14</td>
						</tr>
						<tr>
							<td>Les booléens (<code>bool</code>) </td><td>variable vraie (<code>true</code>) ou fausse (<code>false</code>)</td>
						</tr>
						<tr>
							<td>Rien (<code>NULL</code>)</td><td>indique l'absence de donnée</td>
						</tr>

					</table>
					<p>Affecter une valeur à une variable (<code>$</code> avant le nom de la variable) : </p>
<?php
$texte ="
<pre class=\"pre-scrollable\">&lt;?php
&dollar;variable = valeur;
?&gt;

//les types de variable

&dollar;nom_de_variable = &quot;variable de type chaîne de caractères&quot;;
&dollar;nom_de_variable = 'variable de type chaîne de caractères';
&dollar;nom_de_variable = &quot;guillemets échapées \&quot; &quot;;
&dollar;nom_de_variable = 'guillemets échapées \' ';
&dollar;nom_de_variable = 'pas besoin d'échapper \" ';
&dollar;nom_de_variable = &quot;pas besoin d'échapper ' &quot;;

&dollar;nom_de_variable = 17; //nombre entier (int)
&dollar;nom_de_variable = 57.32; //nombre décimal (float)

&dollar;nom_de_variable = true; //booléen vrai
&dollar;nom_de_variable = false; //booléen faux

&dollar;nom_de_variable = NULL; //variable vide
</pre>";
Regex($texte);
?>
				<p>Afficher et concaténer des variables :</p>
<?php
$texte ="
<pre class=\"pre-scrollable\">&lt;?php
&dollar;variable = 17;
echo &dollar;variable ; //affichera 17
?&gt;</pre>";
Regex($texte);
?>
				<p>Concaténation :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
&dollar;variable = 17;
echo &quot;La variable&quot; ;
echo &dollar;variable ;
echo &quot; est un nombre entier&quot;;/* affiche : La variable 17 est un nombre entier*/
?&gt;

/*concaténation avec des guillemets doubles*/
&lt;?php
&dollar;variable = 17;
echo &quot;La variable &dollar;variable est un nombre entier&quot;;/* affiche : La variable 17 est un nombre entier*/
?&gt;

/*Concaténation avec des guillemets simples*/
&lt;?php
&dollar;variable = 17;
echo 'La variable '. &dollar;variable . ' est un nombre entier';/* affiche : La variable 17 est un nombre entier*/
?&gt;</pre>";
Regex($texte);
?>
				<p>Calculs simples en PHP</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
&dollar;nombre = 2 + 4; //$.nombre prend la valeur 6*/
&dollar;nombre = 5 - 1; //$.nombre prend la valeur 4
&dollar;nombre = 3 * 5; //$.nombre prend la valeur 15
&dollar;nombre = 10 / 2; //$.nombre prend la valeur 5

&dollar;nombre = 3 * 5 + 1; //$.nombre prend la valeur 16
&dollar;nombre = (1 + 2) * 2; //$.nombre prend la valeur 6

&dollar;nombre = 10;
&dollar;resultat = (&dollar;nombre + 5) * &dollar;nombre; // $.resultat prend la valeur 150

/*Modulo*/
&dollar;nombre = 10 % 5; // $.nombre prend la valeur 0 car la division tombe juste
&dollar;nombre = 10 % 3; // $.nombre prend la valeur 1 car il reste 1
?&gt;</pre>";
Regex($texte);
?>			
				<div id="conditions"></div>
			    <br/>
			    <br/>
				</ul>
			</section>
			<hr>
			<section>
				</ul>
				<!--conditions-->
				<h3>Les conditions</h3>
				<ul>
				<p>Tableau des symboles :</p>
				<table class="table table-striped table-bordered table-hover table-condensed">
					<tr>
						<th>Symbole</th><th>Signification</th>
					</tr>
					<tr>
						<td>==</td><td>Est égal à</td>
					</tr>
					<tr>
						<td>></td><td>Est supérieur à</td>
					</tr>
					<tr>
						<td><</td><td>Est inférieur à</td>
					</tr>
					<tr>
						<td>>=</td><td>Est supérieur ou égal à</td>
					</tr>
					<tr>
						<td><=</td><td>Est inférieur ou égal à</td>
					</tr>
					<tr>
						<td>!=</td><td>Est différent de</td>
					</tr>
				</table>
				<p>Ne pas confondre = (attribue une valeur) avec == (teste une condition).</p>
				<p>Condition <code>if</code>, <code>else</code> et <code>elseif</code> :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
/*instruction IF*/
&dollar;nombre = 8;
if&dollar;nombre <= 12)
{
    echo &quot;le nombre 8 est plus petit ou égal à 12!&quot;;
}
?&gt;

/*instruction IF .. ELSE*/
&dollar;age = unNombre;
if(&dollar;nombre <= 12) // SI unNombre est inférieur ou égal à 12
{
    echo &quot;le nombre unNombre est plus petit ou égal à 12!&quot;;
}
else
{
    echo &quot;le nombre unNombre est strictement plus grand que 12&quot;;
}
 ?&gt;

/*instruction IF .. ELSEIF.....ELSE*/
if(&dollar;autorisation_entrer == &quot;Oui&quot;) // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
}
elseif (&dollar;autorisation_entrer == &quot;Non&quot;) // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    // instruction si les 2 précédentes conditions ne sont pas remplie;
}
?&gt;</pre>";
Regex($texte);
?>
				<p>Le cas des booléens :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
if(&dollar;autorisation_entrer == true)
{
    // instructions à exécuter quand on est autorisé à entrer;
}
elseif (&dollar;autorisation_entrer == false)
{
    // instructions à exécuter quand on n'est pas autorisé à entrer;
}
?&gt;

/* peut s'écrire */
&lt;?php
if(&dollar;autorisation_entrer)
{
    // instructions à exécuter quand on est autorisé à entrer;
}
else
{
    // instructions à exécuter quand on n'est pas autorisé à entrer;
}

/*inversion de la valeur de le booléen dans la condition*/
&lt;?php
if(!&dollar;autorisation_entrer)
{
    // instructions à exécuter quand on n'est pas autorisé à entrer;
}
else
{
    // instructions à exécuter quand on est autorisé à entrer;
}
?&gt;</pre>";
Regex($texte);
?>
				
				</ul>
			</section>
			<div id="conditionsmultiples"></div>
			<br/>
		    <br/>
			<hr>
			<section>
				<!--conditions multiples-->
				<h3>Les conditions multiples</h3>
				<ul>
					<p>Mots-clé :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>Mot-clé</th><th>Signification</th><th>Symbole équivalent</th>
						</tr>
						<tr>
							<td>AND</td><td>Et</td><td>&&</td>
						</tr>
						<tr>
							<td>OR</td><td>Ou</td><td>||</td>
						</tr>
					</table>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
if(&dollar;age <= 12 AND &dollar;langue == &quot;français&quot;)
{
    echo &quot;Bienvenue sur mon site !&quot;;
}
elseif (&dollar;age <= 12 AND &dollar;langue == &quot;anglais&quot;)
{
    echo &quot;Welcome to my website!&quot;;
}
?&gt;
&lt;?php
if(&dollar;sexe == &quot;fille&quot; OR &dollar;sexe == &quot;garçon&quot;)
{
    echo &quot;Salut Terrien !&quot;;
}
else
{
    echo &quot;Euh, si t'es ni une fille ni un garçon, t'es quoi alors ?&quot;;
}
?&gt;
</pre>";
Regex($texte);
?>
				<p>Petite astuce :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
if(&dollar;variable == 23)
{ // ouverture de l'instruction

?&gt; // fermeture de la balise PHP

&lt;strong&gt;Bravo !&lt;/strong&gt; Vous avez trouvé le nombre mystère !

&lt;?php // réouverture de la balise PHP
} // fermeture de l'instruction

?&gt; // re fermeture de la balise PHP
</pre>";
Regex($texte);
?>
<p>Les ternaires :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
&dollar;age = 24;

if(&dollar;age &gt;= 18)
{
	&dollar;majeur = true;
}
else
{
	&dollar;majeur = false;
}
?&gt;
	
/* peut s'écrire*/
&lt;?php
&dollar;age = 24;

&dollar;majeur = (&dollar;age &gt;= 18) ? true : false;
?&gt;
</pre>";
Regex($texte);
?>		
			</ul>
		</section>	
		<div id="switch"></div>
	    <br/>
	    <br/>
		<hr>
		<section>
		<!--SWITCH-->
			<h3>L'instruction switch</h3>
			<ul>
				<p> Instruction permettant de remplacer les instructions <code>if elseif else</code> dans le cas ou <em>on a besoin de tester une égalité</em>.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
switch (&dollar;note) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $.note vaut 0
        echo &quot;Tu es vraiment un gros nul !!!&quot;;
    break;
    
    case 5: // dans le cas où $.note vaut 5
        echo &quot;Tu es très mauvais&quot;;
    break;
    
    case 7: // dans le cas où $.note vaut 7
        echo &quot;Tu es mauvais&quot;;
    break;
    
    case 10: // etc. etc.
        echo &quot;Tu as pile poil la moyenne, c'est un peu juste…&quot;;
    break;
    
    case 12:
        echo &quot;Tu es assez bon&quot;;
    break;
    
    case 16:
        echo &quot;Tu te débrouilles très bien !&quot;;
    break;
    
    case 20:
        echo &quot;Excellent travail, c'est parfait !&quot;;
    break;
    
    default:
        echo &quot;Désolé, je n'ai pas de message à afficher pour cette note&quot;;
?&gt;</pre>";
Regex($texte);
?>
			</ul>
		</section>	
		<div id="boucles"></div>
	    <br/>
	    <br/>						
		<hr>
		<section>
			<!--les boucles-->
			<h3>Les Boucles</h3>
			<ul>
				<p>Boucle <code>while</code> : à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
while (&dollar;continuer_boucle == true)
{
    // instructions à exécuter dans la boucle
}
?&gt;

/*Exemple*/
&lt;?php
&dollar;nombre_de_lignes = 1;

while (&dollar;nombre_de_lignes <= 100)
{
    echo 'Ceci est la ligne n°' . &dollar;nombre_de_lignes . '&lt;br /&gt;';
    &dollar;nombre_de_lignes++;
}
?&gt;</pre>";
Regex($texte);
?>			
			<p>Boucle <code>for</code> : à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois.</p>
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;?php
for(&dollar;nombre_de_lignes = 1; &dollar;nombre_de_lignes <= 100; &dollar;nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . &dollar;nombre_de_lignes . '&lt;br /&gt;';
}
?&gt;</pre>";
Regex($texte);
?>
				<p>Ce qui donne :</p>
				<img src="../png/phpchap1_1.png"/>
			</ul>
			</section>
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

