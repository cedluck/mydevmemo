<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Intro Javascript</title>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" >
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	    <link rel="stylesheet" type="text/css" href="javascript_stylesheet.css"/>
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		
	</head>
	
	<body id="body">
		<!--header-->
		 <nav class="navbar navbar-default navbar-fixed-top">	     
	      	<ul class="nav nav-pills nav-justified" id="navbar">
	          	<li><a class="label label-javas" href="#fonction">Les fonctions</a></li>
				<li><a class="label label-javas" href="#parametre">Passage de paramètres</a></li>
				<li><a class="label label-javas" href="#chaineDeCaractere">Manipulater les chaînes</a></li>
				<li><a class="label label-javas" href="#creationObj">Objet : création/utilisation</a></li>
				<li><a class="label label-javas" href="#methodes">Notion de méthode</a></li>
				<li><a class="label label-javas" href="#prototype">Prototype</a></li>					
				<li><a class="label label-javas" href="#initObjet">Initialisation</a></li>
				<li><a class="label label-javas" href="#jdr">Petit JdR</a></li>
				<li><a class="label label-javas" href="#">Au début</a></li>
				<li><a class="label label-javas" href="javascriptintro.php">chapitre précédent...</a></li>
				<li><a class="label label-javas" href="#">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">La POO EN JAVASCRIPT</span> <small>Accéder à la <a href="http://www.toutjavascript.com/reference/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-coder-avec-javascript" target="_blank">"apprenez à coder avec javascript"</a> de : <a href="https://openclassrooms.com/membres/bpesquet" target="_blank">Baptiste Pesquet.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="fonction"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("regexjavascript.php");?>
		<!--MAIN CONTENT-->									
			<section>				
				<!--fonctions-->
				<h3>Les fonctions et leur valeur de retour</h3>
				<ul>
					<p>Une fonction est un regroupement d'instructions qui réalise une tâche donnée.</p>
<pre class="pre-scrollable">
<?php
$texte = "function direBonjour() {
	console.log(\"Bonjour !\");
}
console.log(\"Début du programme\");
direBonjour();
console.log(\"Fin du programme\");";
RegEx($texte);
?>
</pre>
					<p>Les fonctions permettent de morceler le code afin de le rendre plus clair. Elle permettent aussi de lutter contre la duplication de code en centralisant les codes redondants.<br/>
					L'utlisationdu mot-clé <code>return</code> dans une fonction permet de lui donner une valeur de retour.</p>
<pre class="pre-scrollable">
<?php
$texte = "function direBonjour(){
	return \"Bonjour !\";
}	
console.log(\"Début du programme\");
var resultat = direBonjour();
console.log(resultat);
console.log(\"Fin du programme\");";
RegEx($texte);
?>
</pre>
					<p>Cette valeur de retour peut être de n'importe quel type (nombre, chaîne, etc). En revanche, une fonction ne peut renvoyer qu'une seule valeur.<br/>
					Si on essaie de récupérer la valeur de retour d'une fonction qui n'inclut pas d'instruction <code>return</code>, on obtient la valeur JavaScript <em>undefined</em>.</p>
					<img src="../png/jschap2_0.png"/>
				</ul>
			</section>	
			<div id="parametre"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Passage de paramètres-->
				<h3>Passage de paramètres</h3>
				<ul>
					<p>Un paramètre est une information dont une fonction a besoin pour jouer son rôle.<br/>
					La valeur d'un paramètre est fournie au moment de l'appel de la fonction : on dit que cette valeur est passée en paramètre. On appelle argument la valeur donnée à un paramètre lors d'un appel.</p>
<pre class="pre-scrollable">
<?php
$texte = "function direBonjour(prenom) { //Déclaration de la fonction avec son paramètre 'prenom'
	var message = \"Bonjour, \" + prenom + \" !\";
	return message;
}	
console.log(direBonjour(\"Baptiste\")); //Appel de la fonction avec l'argument 'Baptiste'
console.log(direBonjour(\"Sophie\")); //Appel de la fonction avec l'argument 'Sophie'
";RegEx($texte);
?>
</pre>
					<p>Qui donnera ceci dans la console :<br/>
					<img src="../png/jschap2_1.png"/></p>
					<p>On peut passer plusieurs paramètres dans une fonction. La fonction les utlisera alors dans l'ordre où il seront passés :</p>
<pre class="pre-scrollable">
<?php
$texte = "function presentation(prenom, age) {
	console.log(\"Tu t'appelles \" + prenom + \" et tu as \" + age + \" ans\");
}
presentation(\"Garance\", 7); // OK
presentation(3, \"Prosper\"); // Erreur : inversion !
";RegEx($texte);
?>
</pre>
					<p>Lors du second appel, les valeurs données aux paramètres sont inversées</p>
					<img src="../png/jschap2_2.png"/>
				</ul>
				<!--Utiliser les fonctions prédéfinies de JavaScript-->
				<h3>Les fonctions prédéfinies de JavaScript</h3>
				<ul>
					<p>Javascript propose un grand nombre de fonctions déjà définies.</p>
<pre class="pre-scrollable">
<?php
$texte = "console.log(Math.min(4.5, 5));
console.log(Math.min(19, 9));
console.log(Math.min(1, 1));
console.log(Math.random());";
RegEx($texte);
?>
</pre>
					<p>Qui donnera ceci dans la console :</p>
					<img src="../png/jschap2_3.png"/>
				</ul>
			</section>	
			<div id="chaineDeCaractere"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Manipulez les chaînes de caractères-->
				<h3>Manipuler les chaînes de caractères</h3>
				<ul>
					<p>Grâce aux fonctions prédifinies de Javascript on peut faire pleins de manipulations sur les chaînes de caractères, comme obtenir leurs longueurs :</p>
<pre class="pre-scrollable">
<?php
$texte = "console.log(\"ABC\".length);
console.log(\"Je suis une chaîne\".length);

var mot = \"Kangourou\";
var longueurMot = mot.length;
console.log(longueurMot);";
RegEx($texte);
?>
</pre>
					<p>Qui donnera ceci dans la console :<br/>
					<img src="../png/jschap2_4.png"/></p>
					<p>Ou on peut convertir les chaînes de caractères minuscules en majuscules et inversement :</p>
<pre class="pre-scrollable">
<?php
$texte = "var motInitial = \"Bora-Bora\";
var motEnMinuscules = motInitial.toLocaleLowerCase();//fonction maj vers min
console.log(motEnMinuscules);
var motEnMajuscules = motInitial.toLocaleUpperCase();//fonction min vers maj
console.log(motEnMajuscules);";
RegEx($texte);
?>
</pre>
					<p>Et obtenir ceci dans la console :<br/>
					<img src="../png/jschap2_5.png"/></p>
					<p>On peu aussi comparer 2 chaînes pour obtenir un booléen grâce a l'opérateur <code>===</code> :</p>
<pre class="pre-scrollable">
<?php
$texte = "var chaine = \"azerty\";
console.log(\"Cas n° 1 : \" +(chaine===\"azerty\"));
console.log(\"Cas n° 2 : \" +(chaine===\"qwerty\"));
console.log(\"Cas n° 3 : \" +(\"azerty\"===\"Azerty\"));";
RegEx($texte);
?>
</pre>					<p>Résultat des 3 cas :<br/>
					<img src="../png/jschap2_6.png"/></p>
					<p>Comme le montre le cas n°3, cet opérateur est "case sensitive" : il prend en compte les majuscules/minuscules lorsqu'il compare les valeurs.</p>
					<p>Accéder à un caractère à partir de son indice : il existe deux possibilités pour accéder à un caractère d'une chaîne :</p>
<pre class="pre-scrollable">
<?php
$texte = "var sport = \"Tennis-ballon\";
console.log(sport.charAt(0));//première possibilité
console.log(sport[7]);//deuxième possibilité
";RegEx($texte);
?>
</pre>
					<br/>
					<img src="../png/jschap2_7.png"/>
					<p>ATTENTION : le premier charactère d'une chaîne a toujours 0 comme indice !!</p>
				</ul>
			</section>	
			<div id="creationObj"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Création d'un objet-->
				<h3>Création d'un objet</h3>
				<ul>
					<p>La programmation orientée objet (en abrégé <em>POO</em>) est une manière d'écrire des programmes en utilisant des objets. Quand on utilise la <em>POO</em>, on cherche à représenter le domaine étudié sous la forme d'objets informatiques. Chaque objet informatique modélisera un élément de ce domaine.<br/>
					Voici comment on créé un objet avec javascript :</p>
<pre class="pre-scrollable">
<?php
$texte = "var stylo = {
	type: \"bille\",
 	couleur: \"bleu\",
	marque: \"Bic\"
};";
RegEx($texte);
?>
</pre>
					<p>Une autre possibilité pour créer des objets JavaScript consiste à utiliser un constructeur. Un constructeur est une fonction particulière dont le rôle est d'initialiser un nouvel objet.</p>
<pre class="pre-scrollable">
<?php
$texte = "// Constructeur MonObjet
function MonObjet() {
// Initialisation de l'objet
    // ...
}
// Instanciation d'un objet à partir du constructeur
var monObj = new MonObjet();";
RegEx($texte);
?>
</pre>			
				</ul>
				<!--Utilisation d'un objet-->
				<h3>Utilisation d'un objet</h3>
				<ul>
					<p>Voici comment afficher les propriétés de notre stylo.</p>
<pre class="pre-scrollable">
<?php
$texte = "console.log(stylo[\"type\"]);
console.log(stylo.couleur);
console.log(stylo.marque);";
RegEx($texte);
?>
</pre>
					<p>Ce qui donne :<br/>
					<img src="../png/jschap2_8.png"/></p>
					<p>L'accès à une propriété d'un objet est une expression qui produit une valeur.</p>
<pre class="pre-scrollable">
<?php
$texte = "var stylo = {
	type: \"bille\",
	couleur: \"bleu\",
	marque: \"Bic\"
};
console.log(\"Mon stylo à \" + stylo.type + \" \" + stylo.marque + \" écrit en \" + stylo.couleur);";
RegEx($texte);
?>
</pre>
					<br/>
					<img src="../png/jschap2_9.png"/>
					<br/>
					<br/>
					<p>Une fois un objet créé, on peut modifier les valeurs de ses propriétés :</p>
<pre class="pre-scrollable">
<?php
$texte = "stylo.couleur = \"rouge\";
stylo.prix = 2.5;// Ajout de la propriété prix à l'objet stylo
console.log(\"Mon stylo à \" + stylo.type + \" \" + stylo.marque + \" écrit en \" + stylo.couleur);
console.log(\"Il coûte \" + stylo.prix + \" euros\");";
RegEx($texte);
?>
</pre>					
					<br/>
					<img src="../png/jschap2_10.png"/>
				</ul>
			</section>	
			<div id="methodes"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Notion de méthode-->
				<h3>Notion de méthode</h3>
				<ul>
					<p>Lorsqu'on réutilise plusieurs fois une fonction qui manipule un objet il est utile de le faire à l'intérieur même de l'objet.<br/>
					Par exemple, cette fonction décrit l'objet <code>perso</code> dans un jeux de rôle:</p>
<pre class="pre-scrollable">
<?php
$texte = "var perso = {
	nom: \"Aurora\",
	sante: 150,
	force: 25,
};
// Renvoie la description d'un personnage
function decrire(personnage) {
	var description = personnage.nom + \" a \" + personnage.sante + \" points de vie et \" + personnage.force + \" en force\";
	return description;
}
console.log(decrire(perso));";
RegEx($texte);
?>
</pre>
					<p>Elle peut être inséré dans l'objet <code>perso</code> (noter la différence de syntaxe de la fonction):</p>
<pre class="pre-scrollable">
<?php
$texte = "var perso = {
	nom: \"Aurora\",
	sante: 150,
	force: 25,
// Renvoie la description du personnage
decrire: function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
	return description;
	}
};
console.log(perso.decrire());";
RegEx($texte);
?>
</pre>
					<p>L'objet <code>perso</code> possède maintenant une propriété : la fonction <code>decrire()</code>. On l'appelle une méthode.</p>
					<p>Le mot-clé <code>this</code> :<br/>
					Dans la méthode <code>decrire()</code> de notre objet <code>perso</code> un nouveau mot-clé apparaît : <code>this</code>. Il est défini automatiquement par JavaScript à l'intérieur d'une méthode et représente l'objet sur lequel la méthode a été appelée. La méthode <code>decrire()</code> utilise <code>this</code> pour accéder aux propriétés de l'objet <code>perso</code> sur lequel elle a été appelée.</p>
					<p>Comme les fonctions, les méthodes peuvent être ajoutées après la création de l'objet comme ceci :</p>
<pre class="pre-scrollable">
<?php
$texte = "//Création de l'objet Perso
var perso = {
	nom: \"Aurora\",
	sante: 150,
	force: 25,
};
// Création de la méthode decrire ()
perso.decrire = function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
	return description;
};
console.log(perso.decrire());";
RegEx($texte);
?>
</pre>
					<p>Notont qu'une méthode qui appel une propriété qui n'existe pas dans l'objet (par exemple this.xp) renvoie <em>undefined</em>.<br/>
					Tous ces codes donnent le même résultat :</p>
					<img src="../png/jschap2_11.png"/><br/>
					<br/>
					<p>Le langage JavaScript met à la disposition des programmeurs un certain nombre d'objets standards qui peuvent rendre de multiples services. Par exemple l'objet <code>console</code> que nous connaisons déjà bien, permet d'écrire un message dans la console des outils de développement des différents navigateurs.<br/>
					L'objet <code>Math</code> rassemble des fonctionnalités mathématiques.</p>
				</ul>
			</section>	
			<div id="prototype"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Objet et prototype-->
				<h3>Objet et prototype en Javascript</h3>
				<ul>
					<p>On pourrait reprendre l'objet "<em>perso</em>" créé précédement pour créer un autre personnage "<em>perso2</em>", avec d'autres propiétés de santé et de force, comme ceci :</p>
<pre class="pre-scrollable">
<?php
$texte = "var perso = {
	nom: \"Aurora\",//premier personnage
	sante: 150,
	force: 25,
decrire: function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
	return description;
	}
};
console.log(perso.decrire());
var perso2 = {
	nom: \"Glacius\",//deuxième personnage
	sante: 130,
	force: 30,
decrire: function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force\";
	return description;
	}
};
console.log(perso2.decrire());";
RegEx($texte);
?>	
</pre>
					<p>Mais cela implique de réécrire tout l'objet une deuximèe fois. Heureusement JavaScript permet de créer des modèles grâce au <code>prototype</code> en utilisant l'instruction <code>Object.create</code> :</p>
					<pre class="pre-scrollable">
<?php
$texte = "var unObjet = {
	a: 2
};
// Crée unAutreObjet avec unObjet comme prototype
var unAutreObjet = Object.create(unObjet);
console.log(unAutreObjet.a); // Affiche 2";
RegEx($texte);
?>
</pre>
					<p>On a créé l'objet <code>unAutreObjet</code> avec le prototype de <code>unObjet</code>.<br/>
					On vois que la propriété <code>a</code> n'existe pas pour <code>unAutreObjet</code>, donc c'est la propriété <code>a</code> de <code>unObjet</code> qui est utilisée.<br/>
					<br/>
					Créont un prototype à nos personnage (avec une propriété <code>xp</code> en plus) :</p>
<pre class="pre-scrollable">
<?php
$texte = "var Personnage = {
	nom: \"\",
	sante: 0,
	force: 0,
	xp: 0,

decrire: function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie et \" + this.force + \" en force et \" + this.xp + \" points d'expérience\";
	return description;
	}
};
var perso1 = Object.create(Personnage);
perso1.nom = \"Aurora\";
perso1.sante = 150;
perso1.force = 25;

var perso2 = Object.create(Personnage);
perso2.nom = \"Glacius\";
perso2.sante = 130;
perso2.force = 30;

console.log(perso1.decrire());
console.log(perso2.decrire());";
RegEx($texte);
?>	
</pre>
					<p>Voici le résultat obtenu dans la console :</p>
					<img src="../png/jschap2_12.png"/>
				</ul>
			</section>	
			<div id="initObjet"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--Initialisationd d'un objet-->
				<h3>Initialisation d'un objet</h3>
				<ul>
					<p>On peut noter que le processus de création d'un objet peut être répétitif : dans l'exemple précédent pour chaque personnage, il faut successivement donner une valeur à chacune de ses propriétés. On peut faire mieux en créant une fonction d'initialisation dans l'objet <em>"Personnage"</em> :</p>
<pre class="pre-scrollable">
<?php
$texte = "var Personnage = {// Initialise le personnage
	init: function (nom, sante, force) {
		this.nom = nom;
		this.sante = sante;
		this.force = force;
		this.xp = 0;
	},
	// Renvoie la description du personnage
	decrire: function () {
		var description = this.nom + \" a \" + this.sante + \" points de vie, \" + this.force + \" en force et \" + this.xp + \" points d'expérience\";
		return description;
	}
};";
RegEx($texte);
?>
</pre>
					<p>On appellera la méthode <code>init</code> lorsqu'on créera un personnage :</p>
<pre class="pre-scrollable">
<?php 
$texte ="var perso1 = Object.create(Personnage);
perso1.init(\"Aurora\", 150, 25);

var perso2 = Object.create(Personnage);
perso2.init(\"Glacius\", 130, 30);

console.log(perso1.decrire());
console.log(perso2.decrire());
";
RegEx($texte);
?>
</pre>
					<p>On peut ainsi créer d'autres types d'objets en utilisant les méthodes init (et les propriétés qui s'y r'attachent) de notre objet <em>"Personnage"</em> :</p>
					<pre class="pre-scrollable">
<?php
$texte = "var Personnage = {// Initialise le personnage
	initPerso: function (nom, sante, force) {
		this.nom = nom;
		this.sante = sante;
		this.force = force;
	}
};

var Joueur = Object.create(Personnage);// Initialise le joueur
Joueur.initJoueur = function (nom, sante, force) {
	this.initPerso(nom, sante, force);
	this.xp = 0; // L'expérience du joueur est toujours initialisée à 0
};
// Renvoie la description du joueur
Joueur.decrire = function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie, \" + this.force + \" en force et \" + this.xp + \" points d'expérience\";
	return description;
};
var Adversaire = Object.create(Personnage);
//Initialise l'adversaire
Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {
	this.initPerso(nom, sante, force);//!!!! ICI ON UTLISE initPerso DE L'OBJET Personnage !!!!!
	this.race = race;//propriété ajoutée de l'objet Adversaire
	this.valeur = valeur;//propriété ajoutée de l'objet Adversaire
};";
RegEx($texte);
?>
</pre>
					<p>Utilisont ça pour créer deux types d'objets qui auront des proriétés communes et des propriétés spécifiques:</p>
					<pre class="pre-scrollable">
<?php
$texte = "var joueur1 = Object.create(Joueur);
joueur1.initJoueur(\"Aurora\", 150, 25);

var joueur2 = Object.create(Joueur);
joueur2.initJoueur(\"Glacius\", 130, 30);

console.log(\"Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros\");
console.log(joueur1.decrire());
console.log(joueur2.decrire());

var monstre = Object.create(Adversaire);
monstre.initAdversaire(\"ZogZog\", 40, 20, \"orc\", 10);

console.log(\"Un affreux monstre arrive, c'est un \" + monstre.race + \" nommé \" + monstre.nom);";
RegEx($texte);
?>
</pre>
					<p>Notre petit jeux de rôle avance bien :</p>
					<img src="../png/jschap2_13.png"/>
				</ul>
			</section>	
			<div id="jdr"></div>
		    <br/>
		    <br/>					
			<hr>
			<section>
				<!--combat-->
				<h3>Petit Jeux de rôle</h3>
				<ul>
					<p>Finalisont notre jeux de rôle en ajoutant quelques méthodes de combat :</p>
<pre class="pre-scrollable">
<?php
$texte = "var Personnage = {// Initialise le personnage
	initPerso: function (nom, sante, force) {
		this.nom = nom;
		this.sante = sante;
		this.force = force;
	},
	// Attaque un personnage cible
	attaquer: function (cible) {
		if (this.sante>0) {
			var degats = this.force;
			console.log(this.nom + \" attaque \" + cible.nom + \" et lui fait \" + degats + \" points de dégâts\");
			cible.sante = cible.sante - degats;
			if (cible.sante>0) {
				console.log(cible.nom + \" a encore \" + cible.sante + \" points de vie\");
			} else {
				cible.sante = 0;
				console.log(cible.nom + \" est mort !\");
			}
		} else {
		console.log(this.nom + \" ne peut pas attaquer : il est mort...\");
		}
	}
};
var Joueur = Object.create(Personnage);
// Initialise le joueur
Joueur.initJoueur = function (nom, sante, force) {
	this.initPerso(nom, sante, force);
	this.xp = 0;
};
// Renvoie la description du joueur
Joueur.decrire = function () {
	var description = this.nom + \" a \" + this.sante + \" points de vie, \" +
	this.force + \" en force et \" + this.xp + \" points d'expérience\";
	return description;
};

// Combat un adversaire
Joueur.combattre = function (adversaire) {
	this.attaquer(adversaire);//UTILISE LA METHODE attaquer DE Personnage
	if (adversaire.sante === 0) {
		console.log(this.nom + \" a tué \" + adversaire.nom + \" et gagne \" + adversaire.valeur + \" points d'expérience\");
		this.xp += adversaire.valeur;
	}
};

var Adversaire = Object.create(Personnage);
// Initialise l'adversaire
Adversaire.initAdversaire = function (nom, sante, force, race, valeur) {
	this.initPerso(nom, sante, force);
	this.race = race;
	this.valeur = valeur;
};

// ...";
RegEx($texte);
?>
</pre>
					<p>C'est parti pour des heures d'amusement !</p>
					<pre class="pre-scrollable">
<?php
$texte = "// ...

var joueur1 = Object.create(Joueur);
joueur1.initJoueur(\"Aurora\", 150, 25);

var joueur2 = Object.create(Joueur);
joueur2.initJoueur(\"Glacius\", 130, 30);

console.log(\"Bienvenue dans ce jeu d'aventure ! Voici nos courageux héros !\");
console.log(joueur1.decrire());
console.log(joueur2.decrire());

var monstre = Object.create(Adversaire);
monstre.initAdversaire(\"ZogZog\", 40, 20, \"orc\", 10);

console.log(\"Un affreux monstre arrive, c'est un \" + monstre.race + \" nommé \" + monstre.nom);

monstre.attaquer(joueur1);
monstre.attaquer(joueur2);

joueur1.combattre(monstre);
joueur2.combattre(monstre);

console.log(joueur1.decrire());
console.log(joueur2.decrire());";
RegEx($texte);
?>
</pre>
					<p>Résultat dans la console :</p>
					<img src="../png/jschap2_14.png"/>
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