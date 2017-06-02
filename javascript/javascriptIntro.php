<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>javascript</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" >
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="javascript_stylesheet.css"/>
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	</head>
	
	<body id="body">
		<!--header-->
		 <nav class="navbar navbar-default navbar-fixed-top">	     
	      	<ul class="nav nav-pills nav-justified" id="navbar">
	          	<li><a class="label label-javas" href="#environnement">L'environnement</a></li>
				<li><a class="label label-javas" href="#typeNombre">Nombres / chaînes</a></li>
				<li><a class="label label-javas" href="#affVal">Affichage / commentaires</a></li>
				<li><a class="label label-javas" href="#declareVar">Variables / Expressions</a></li>
				<li><a class="label label-javas" href="#convType">Conversions / saisies</a></li>				
				<li><a class="label label-javas" href="#instructions">IF, ELSE / ELSE IF</a></li>
				<li><a class="label label-javas" href="#opeLog">Opérateurs logiques</a></li>
				<li><a class="label label-javas" href="#instructionSwitch">SWITCH</a></li>
				<li><a class="label label-javas" href="#boucles">Boucles</a></li>
				<li><a class="label label-javas" href="#">Au début</a></li>
				<li><a class="label label-javas" href="javascriptpoo.php">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">INTRODUCTION A JAVASCRIPT</span> <small>Accéder à la <a href="http://www.toutjavascript.com/reference/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-coder-avec-javascript" target="_blank">"apprenez à coder avec javascript"</a> de : <a href="https://openclassrooms.com/membres/bpesquet" target="_blank">Baptiste Pesquet.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="environnement"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("regexjavascript.php");?>
		<!--MAIN CONTENT-->
			<section>					
				<!--environnement-->
				<h3>L'environnement de travail</h3>
				<ul>
					<p>Il y a plusieurs manières de travailler avec <em>JavaScript</em> :<br/>
					<br/>
					On peut soit coder avec <em>Javascript</em> en ligne grâce à <em><a  href="https://jsfiddle.net">JSFidle</a></em>, <em><a  href="http://jsbin.com/">JS Bin</a></em> ou <em><a  href="https://codepen.io/">CodePen</a></em>.<br/>
					<br/>
					Ou on peut créer son propre environnement de travail avec un IDE (Eclipse, WebStorm, VisualStudio) ou un éditeur de texte comme Sublime Text, Atom ou <em><a  href="http://brackets.io/">Brackets</a></em>.<br/>
					Il faut utiliser l'outil de dévelopement des navigateurs. Celui de Firefox est recommandé (touche alt -> outils -> Développement Web -> Outils de développement).</br>
					Associé votre page HTML avec le code <em>Javascript</em> grâce a la balise <code><<span style ="color:fuchsia">script</span> src="..."></code>  dans la balise <code>&lt;body&gt;</code> de votre code HTML comme ceci :</br/>
					</p><img src="../png/jschap1_0.png"/>
					<p>Il est recommandé de créer un dossier html et un dossier js pour stocker vos pages web et vos fichiers <em>JavaScript</em> associés :</p>
					<img src="../png/browser.png"/>
				</ul>
			</section>	
			<div id="typeNombre"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>
				<!--type nombre-->
				<h3>Le type nombre</h3>
				<ul>
					<p>Une valeur de type nombre (number) représente une valeur numérique, autrement dit une quantité. Comme en mathématique, on distingue les valeurs entières (ou entiers) 0, 1, 2, 3... et les valeurs réelles (ou réels) auxquelles on ajoute des chiffres après la virgule pour plus de précision.<br/>
					Le résultat suivant est obtenu en tapant les opérations dans l'onglet console de l'outils de développement Web de Firefox (en bas, après le signe >> vert) :</p>
					<img src="../png/jschap1_1.png"/>
				</ul>
				<!--type chaine-->
				<h3>Le type chaîne</h3>				
				<ul>
					<p> Une valeur de type chaîne de caractères (en abrégé chaîne, ou encore string en anglais) représente un texte. Ces valeurs sont délimitées par une paire de guillemets doubles : "Ceci est une chaîne". Pour inclure dans une chaîne certains caractères spéciaux, on utilise le caractère\ (qui se prononce "antislash" ou "backslash" en anglais) qui donne un sens particulier au caractère suivant. Par exemple <code>\n</code> permet d'ajouter un retour à la ligne dans une chaîne.<br/>
					L'opérateur <code>+</code> peut être appliqué à deux valeurs de type chaîne. Son résultat est la jointure de ces deux chaînes, appelée concaténation.</p>
					<img src="../png/jschap1_2.png"/>
				</ul>
			</section>	
			<div id="affVal"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--affichage et commentaires-->
				<h3>Affichage d'une valeur</h3>
				<ul>
					<p>Voici comment afficher le résultat de valeurs dans la console de votre outil de développent sur firefox. Tapez ce code dans le fichier .js de votre dossier js</p>
<pre class="pre-scrollable">
<?php
$texte = "console.log(\"Bonjour en Javascript !\");
console.log(\"Faisons quelques calculs.\");
console.log(4 + 7);
console.log(12 / 0);
console.log(\"Au revoir !\");";
RegEx($texte);
?>
</pre>
						
					<p>Résultat dans la console lorsque vous lancez votre fichier html associé :</p>
					<img src="../png/jschap1_3.png"/>
				</ul>
				<!--commentaires-->
				<h3>Commentaires</h3>
				<ul>
					<p>Voici comment on écrit des commentaires dans un code javascript :</p>
<pre class="pre-scrollable">
<?php
$texte = "console.log(\"Bonjour en JavaScript !\");
//console.log(\"Faisons quelques calculs.\");
/* Un commentaire 
sur plusieurs
lignes */";
RegEx($texte);
?>
</pre>												
				</ul>
			</section>	
			<div id="declareVar"></div>
		    <br/>
		    <br/>
					
			<hr>
			<section>
				<!--déclarer une variable-->
				<h3>Déclarer une variable</h3>
				<ul>
					<p>Voici un exemple de code qui déclare plusieurs variables puis affiche leurs valeurs.</p>
<pre class="pre-scrollable">
<?php
$texte = "var x;
console.log(x);

var a = 3.14;
console.log(a);

var b = 0;
b += 1;
b++;
console.log(b);

var h=\"5\";
console.log(h+1);
h = Number(\"5\");
console.log(h+1);
";
RegEx($texte);
?>
</pre>
					<p>Résultat dans la console</p>
					<img src="../png/jschap1_4.png"/>
				</ul>
				<!--notion d'expression-->
				<h3>La notion d'expressions</h3>
				<ul>
					<p>Une expression est un morceau de code qui produit une valeur<br/>
					Le calcul de la valeur d'une expression s'appelle l'évaluation.</p>
<pre class="pre-scrollable">
<?php
$texte = "// 3 est une expression dont la valeur est le nombre 3
var c = 3;
// d est une expression dont la valeur est celle de c (ici 3)
var d = c;
// (d + 1) est une expression
// Sa valeur est celle de d augmentée de 1 (ici 4)
d = d + 1; // d contient la valeur 4
console.log(d); // Affiche 4
";
RegEx($texte);
?>
</pre>
				</ul>
			</section>	
			<div id="convType"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>	
				<!--conversions de type-->
				<h3>Conversions de types</h3>
				<ul>
					<p>L'évaluation d'une expression peut entraîner des conversions de type. Elle sont dites conversions implicites : elle se font automatiquement.<br/>
				 	En cas d'échec de la conversion d'un nombre, la valeur du résultat est NaN (Not a Number).<br/>
				 	JavaScript dispose des ordres Number() et String() qui convertissent respectivement en un nombre et une chaîne la valeur placée entre parenthèses.</p>
<pre class="pre-scrollable">
<?php 
$texte = "var f = 100;
console.log(\"La variable f contient la valeur \" + f);
var g = \"cinq\" * 2;
console.log(g);
var h = \"5\";
console.log(h + 1); // Concaténation
h = Number(\"5\");
console.log(h + 1); // Addition numérique
";
RegEx($texte);
?>
</pre>
					<p>La console affichera : </p>
					<img src="../png/jschap1_5.png"/>
				</ul>
				<!--saisie-->
				<h3>Saisie et affichage d'informations</h3>
				<ul>
					<p>Voici une façon de saisir des informations et de les afficher.</p>
<pre class="pre-scrollable">
<?php
$texte ="var prenom = prompt(\"Entrez votre prénom\");
alert(\"Bonjour, \" + prenom);";
RegEx($texte);
?>
</pre>
					<p>Une boîte de dialogue apparaît pour demander la saisie du prénom. Puis une autre affichera "Bonjour," suivi du prénom.</p>
				</ul>
				<!--saisie de nombre-->
				<h3>Saisie d'un nombre</h3>
				<ul>
					<p>Voici comment saisir un nombre</p>
<pre class="pre-scrollable">
<?php
$texte = "var saisie = prompt(\"Entrez un nombre\"); // saisie est de type chaîne
var nb = Number(saisie); // nb est de type nombre
var nb = Number(prompt(\"Entrez un nombre\")); // nb est de type nombre
";
RegEx($texte);
?>
</pre>					
				</ul>
				<!--nommage-->
				<h3>Comment faire pour bien nommer les variables de ses programmes ?</h3>
				<ul>
					<p>Choisir des noms significatifs.<br/>
					Bannir les caractères accentués.<br/>
					Ne pas utiliser les noms réservés du langage.<br/>
					Adopter une convention de nommage : par exemple : <strong>nomsMontantTravauxMaison</strong> ou <strong>codeClientSuivant</strong> respectent la norme <em>camelCase</em>.</p>
				</ul>
				</ul>
			</section>	
			<div id="instructions"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>
				<!--instruction IF-->
				<h3>Les instructions if/else et else if</h3>
				<ul>
					<p>La paire d'accolade ouvrante et fermante délimite ce que l'on appelle un bloc de code associé à l'instruction <code>if</code>. Cette instruction représente un test. On peut la traduire par l'ordre suivant : "Si la condition est vraie, alors exécute les instructions contenues dans le bloc de code".</p>
<pre class="pre-scrollable">
<?php
$texte = "var nombre = Number(prompt(\"Entrez un nombre  \"));
if (nombre > 0){
	console.log(nombre+ \" est positif\");
}
	
var nombre = Number(prompt(\"Entrez un nombre  \"));
if (nombre >= 0){
	console.log(nombre + \" est positif ou nul\");
}";
RegEx($texte);
?>
</pre>
					<p>La console affichera :<br/> 
					<img src="../png/jschap1_6.png"/></p>					
					<p>On peut traduire une instruction <code>if/else</code> comme ceci : "Si la condition est vraie, alors exécute les instructions du bloc de code associé au <code>if</code>, sinon exécute celles du bloc de code associé au <code>else</code>".</p>
<pre class="pre-scrollable">
<?php
$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre > 0){
		console.log(nombre + \" est positif\");
	}else{
		console.log(nombre+ \" est négatif ou nul\");
}
	
var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre > 0){
		console.log(nombre + \" est positif\");
	}else{
	if (nombre < 0){
		console.log(nombre + \" est négatif\");
	}else{
		console.log(nombre+ \" est nul\");
	}
}";
RegEx($texte);
?>
</pre>
					<p>Quand on entre 0 et 5, la console affiche :<br/>
					<img src="../png/jschap1_7.png"/></p>
					<p>On rencontre fréquemment le cas particulier où la seule instruction d'un bloc <code>else</code> est un <code>if</code> (le <code>else</code> éventuellement associé à ce <code>if</code> ne compte pas comme une seconde instruction). Dans ce cas, il est possible d'écrire ce <code>if</code>  sur la même ligne que le premier <code>else</code>, sans accolades ni indentation.</p>
<pre class="pre-scrollable">
<?php
$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));
	if (nombre > 0) {
		console.log(nombre + \" est positif\");
	} else if (nombre < 0) {
		console.log(nombre + \" est négatif\");
	} else {
		console.log(nombre + \" est nul\");
}";
RegEx($texte);
?>
</pre>
					<p>Avec 5, -1 et 0 la console affichera :<br/> 
					<img src="../png/jschap1_8.png"/></p>
				</ul>
			</section>	
			<div id="opeLog"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>
				<!--opérateurs logiques-->
				<h3>Les opérateurs logiques ET, OU, NON</h3>
				<ul>
					<p>Opérateur logique ET : &&<br/>
					Opérateur logique OU : ||<br/>
					Opérateur logique NON: ! avant la condition<br/>
					Exemples de ces 3 opérateurs logiques :</p>
<pre class="pre-scrollable">
<?php
$texte ="var nombre = Number(prompt(\"Entrez un nombre\"));
	if ((nombre >= 0) && (nombre <= 100)){
		console.log(nombre + \" est compris entre 0 et 100\");
	}

	var nombre = Number(prompt(\"Entrez un nombre\"));
	if ((nombre < 0) || (nombre > 100)){
		console.log(nombre + \" est dans l'intervale 0, 100 \");<
	}
	
	var nombre = Number(prompt(\"Entrez un nombre\"));
	if (!(nombre > 100)){
		console.log(nombre + \" est inférieur ou égal à 100\");
	}";
RegEx($texte);
?>
</pre>
					<p>Avec 5 , 110 et -10 la console affichera : </p>
					<img src="../png/jschap1_9.png"/>
				</ul>
			</section>	
			<div id="instructionSwitch"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>
				<!--instruction SWITCH-->
				<h3>L'instruction SWITCH</h3>
				<ul>
					<p>Voici un programme :</p>
<pre class="pre-scrollable">
<?php
$texte ="var meteo = prompt(\"Quel temps fait-il dehors ?\");

	if (meteo === \"soleil\") {
		console.log(\"Sortez en t-shirt.\");
	} else if (meteo === \"vent\") {
		console.log(\"Sortez en pull.\");
	} else if (meteo === \"pluie\") {
		console.log(\"Sortez en blouson.\");
	} else if (meteo === \"neige\") {
		console.log(\"Restez au chaud à la maison.\");
	} else {
		console.log(\"Je n'ai pas compris !\");
	}";
RegEx($texte);
?>
</pre>
					<p>Lorsqu'un programme consiste à déclencher un bloc d'opérations parmi plusieurs selon la valeur d'une expression, on peut l'écrire en utilisant l'instruction JavaScript <code>switch</code>.</p>
<pre class="pre-scrollable">
<?php
$texte ="var meteo = prompt(\"Quel temps fait-il dehors ?\");
	switch (meteo) {
		case \"soleil\":
			console.log(\"Sortez en t-shirt.\");
	    break;
		case \"vent\":
			console.log(\"Sortez en pull.\");
	    break;
		case \"pluie\":
			console.log(\"Sortez en blouson.\");
	    break;
		case \"neige\":
			console.log(\"Restez au chaud à la maison.\");
	    break;
		default:
			console.log(\"Je n'ai pas compris !\");}";
RegEx($texte);
?>
</pre>
					<p>Les deux programmes donnent le même résultat :</p>
					<img src="../png/jschap1_10.png"/>
				</ul>
			</section>	
			<div id="boucles"></div>
		    <br/>
		    <br/>						
			<hr>
			<section>
				<!--les boucles-->
				<h3 id="boucles">Les boucles</h3>
				<ul>
					<p>La boucle <code>while</code> permet de répéter des instructions tant qu'une condition est vérifiée.<br/>
					On l'utilise quand on ne peut pas prévoir le nombre de tours de la boucle.</p>
<pre class="pre-scrollable">
<?php
$texte ="console.log(\"Début du programme\");
var nombre = 1;
while (nombre <= 5) {
	console.log(nombre);
    	nombre++;
}
console.log(\"Fin du programme\");";

RegEx($texte);
?>
</pre>
					<p>Résultat dans la console :</p>
					<img src="../png/jschap1_12.png"/>
					
					<p>La boucle <code>for</code> permet de répéter des instructions dont la conditon est basée sur la valeur d'une variable.<br/>
					On l'utilise lorsqu'on connait le nombre de tours à l'avance.</p>
<pre class="pre-scrollable">
<?php
$texte ="console.log(\"Début du programme\");
for (var compteur = 1;compteur <= 5;compteur++){
	console.log(compteur);
}
console.log(\"Fin du programme\");";
RegEx($texte);
?>
</pre>
					<p>Résultat dans la console :</p>
					<img src="../png/jschap1_12.png"/>
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
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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