<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>phpregex</title>
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
	          	<li><a class="label label-php" href="#expreg">Expressions régulières</a></li>		
				<li><a class="label label-php" href="#pregmatch">preg_match</a></li>
				<li><a class="label label-php" href="#pregreplace">preg_replace</a></li>
				<li><a class="label label-php" href="#classesabregees">les classes abrégées</a></li>
				<li><a class="label label-php" href="#comunregex">Expressions courantes</a></li>
				<li><a class="label label-php" href="#">Au début</a></li>
				<li><a class="label label-php" href="phpsql.php">chapitre précédent...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>
		</nav>
		<div class="container">	
			<!--title-->
			<h1><span class="label navbar-default">PHP : les expressions régulières</span> <small>Accéder à la <a href="https://secure.php.net/manual/fr/index.php" role="button" target="_blank">documentation</a></small></h1>
			<small>D'après <a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql" target="_blank">"concevez votre site web avec php et mysql"</a> de : <a href="https://openclassrooms.com/membres/mateo21" target="_blank">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com" target="_blank">openclassrooms</a>.
			</small>
		    <div id="expreg"></div>
		    <br/>
		    <br/>
		    <hr>
		<!--highlight rules-->
		<?php include("../html/regexhtml.php");?>
			<!--MAIN CONTENT-->
			<section>
				<!--Les expréssions régulières-->
				<h3>Les expression régulière</h3>
				<ul>
					<p>Les expressions régulières font partie d'un système très poussé pour effectuer des recherches ou des remplacements dans des chaînes de caractères. Par exemple :<br/>
					- Pour vérifier automatiquement des adresses email ou des mots de passes dans des formulaires.<br/>
					- Modifier une date d'un format à un autre.<br/>
					- Remplacer automatiquement toutes adresses «http://» par des liens clicables.<br/>
					- Créer sont propre langage simplifié comme le fameux bbCode.</p>
					<p>Il existe deux types d'expressions régulières :<br/>
					- <em>POSIX</em> : c'est un langage d'expressions régulières mis en avant par PHP, qui se veut un peu plus simple que PCRE (ça n'en reste pas moins assez complexe). Toutefois plus lent que PCRE.<br/>
					- <em>PCRE</em> : ces expressions régulières sont issues d'un autre langage (le Perl). Considérées comme un peu plus complexes, elles sont surtout bien plus rapides et performantes.</p>
					<p><strong>Les différentes fonctions :</strong>
					<ul>
						- <em>preg_grep</em><br/>
						- <em>preg_split</em><br/>
						- <em>preg_quote</em><br/>
						- <em>preg_match</em><br/>
						- <em>preg_match_all</em><br/>
						- <em>preg_replace</em><br/>
						- <em>preg_replace_callback</em>
					</ul></p>
				</ul>
			</section>	
			<div id="pregmatch"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--métacaractères-->
				<h3>La fonction preg_match</h3>
				<ul>
					<p>Fonction qui renvoie un booléen si elle trouve l'expression recherchée dans une chaîne de caractères.</p>
<?php
$texte= "<pre class=\"pre-scrollable\">&lt?php 
	if(preg_match('#guitare#','J\'aime la guitare.'))
	{
		echo 'VRAI';
	}
	else
	{
		echo 'FAUX';
	} 
?&gt;</pre>";
Regex($texte);
?>					
					<p>Le premier paramètre est l'expression régulière entourée par les délémiteurs <em>#</em>.<br/>
					Le deuxième paramètre est la chaîne de caractères.</p>
					<p>Les métacaractères sont des caractères spéciaux qui ont un rôle particulier  dans les expréssions régulières.<br/>
					 Dans PCRE on trouve : <strong># ! ^ $ ( ) [ ] { } ? + * . \ |</strong><br/>
					 Ces caratères doivent être échappés avec <em>\</em> s'ils apparaissent dans l'expression régulière.</p>

					<strong> Métacaractère # et | </strong></br>
					<pre class="pre-scrollable"><?php echo '1.1 - J\'aime la guitare.'; if(preg_match('#guitare#','J\'aime la guitare.')){echo ' => #guitare# VRAI';}else{echo 'FAUX';} ?></pre>
					<pre class="pre-scrollable"><?php echo '1.2 - J\'aime la guitare.';if(preg_match('#GUITARE#i','J\'aime la guitare.')){echo ' => #GUITARE#i (maj ou pas) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '1.3 - J\'aime la guitare.';if(preg_match('#guitare|banjo#','J\'aime la guitare.')){echo ' => #guitare|banjo# (guitare ou banjo) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '1.4 - J\'aime la banjo.';if(preg_match('#guitare|banjo#','J\'aime le banjo.')){echo ' => #guitare|banjo# (guitare ou banjo) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '1.5 - J\'aime la piano.';if(preg_match('#guitare|banjo#','J\'aime piano.')){echo 'VRAI';}else{echo ' => #guitare|banjo# (guitare ou banjo) FAUX';}?></pre>
					
					<strong> Métacaractère $ et ^ </strong></br>
					<pre class="pre-scrollable"><?php echo '2.1 - Vive PHP'; if(preg_match('#PHP$#','Vive PHP')){echo ' => #PHP$# (PHP à la fin) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '2.2 - Vive PHP et MySQL';if(preg_match('#PHP$#','Vive PHP et MySQL')){echo 'VRAI';}else{echo ' => #PHP$# (PHP à la fin) FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '2.3 - Vive le PHP';if(preg_match('#^Vive#','Vive PHP')){echo ' => #^Vive# (Vive au début) VRAI';}else{echo 'FAUX';}//?></pre>
					<pre class="pre-scrollable"><?php echo '2.4 - Vive le PHP';if(preg_match('#^PHP#','Vive PHP')){echo 'VRAI';}else{echo ' => #^PHP# (PHP au début) FAUX';}//?></pre>
					
					<strong> Métacaractère [] </strong></br>
					<p>Pas besoin d'échappé les métacaractères à l'intérieur des classes sauf <em>#</em>, <em>]</em>.<br/>
					<em>-</em> s'échappe en le métant au début ou à la fin de la classe.</p>
					<pre class="pre-scrollable"><?php echo '3.1 - la nuit tous les chats sont gris.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gris.')){echo ' => #gr[iao]s#  (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '3.2 - la nuit tous les chats sont gras.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gras.')){echo ' => #gr[iao]s# (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '3.3 - la nuit tous les chats sont gros.';if(preg_match('#gr[iao]s#','la nuit tous les chats sont gros.')){echo ' => #gr[iao]s# (gris gras ou gros) VRAI';}else{echo 'FAUX';}?></pre>
					
					<strong> Métacaractère - dans [] </strong></br>
					<pre class="pre-scrollable"><?php echo '4.1 - la nuit tous les chats sont grps.';if(preg_match('#gr[a-z]s#','la nuit tous les chats sont grps.')){echo ' => #gr[a-z]s# (gras grbs etc...) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '4.2 - la nuit tous les chats sont grPs.';if(preg_match('#gr[a-zA-Z]s#','la nuit tous les chats sont grPs.')){echo ' => #gr[a-zA-Z]s# (gras à grzs/grAs à grZs)  VRAI';}else{echo 'FAUX';}//?></pre>
					<pre class="pre-scrollable"><?php echo '4.3 - la nuit tous les chats sont gr6s.';if(preg_match('#gr[0-9]s#','la nuit tous les chats sont gr6s.')){echo ' => #gr[0-9]s# (gr1s à gr9s) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo htmlspecialchars('4.4 - la nuit tous <h2>les</h2> chats sont gris.');if(preg_match('#<h[1-6]>#','la nuit tous <h2>les</h2> chats sont gris.')){echo htmlspecialchars(' => #<h[1-6]># (<h1> à <h6>) VRAI');}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo htmlspecialchars('4.5 - la nuit tous <h8>les</h8> chats sont gris.');if(preg_match('#<h[1-6]>#','la nuit tous <h8>les</h8> chats sont gris.')){echo 'VRAI';}else{echo htmlspecialchars(' => #<h[1-6]># (<h1> à <h6>) FAUX');}?></pre>
					
					<strong> Métacaractère ^ dans [] et avant [] </strong></br>
					<pre class="pre-scrollable"><?php echo htmlspecialchars('5.1 - la nuit tous <h8>les</h8> chats sont gris.');if(preg_match('#<h[^1-6]>#','la nuit tous <h8>les</h8> chats sont gris.')){echo htmlspecialchars(' => #<h[^1-6]># (PAS <h1> à <h6>) VRAI');}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo htmlspecialchars('5.2 - la nuit tous <hM>les</h2> chats sont gris.');if(preg_match('#^<h[^1-6]>#','la nuit tous <hM>les</h2> chats sont gris.')){echo 'VRAI';}else{echo htmlspecialchars(' => #^<h[^1-6]># (PAS <h1> à <h6> au début) FAUX');}?></pre>
					<pre class="pre-scrollable"><?php echo htmlspecialchars('5.3 - <hM>la nuit tous les</h2> chats sont gris.'); if(preg_match('#^<h[^1-6]>#','<hM>la nuit tous les</h2> chats sont gris.')){echo htmlspecialchars(' => #^<h[^1-6]># (PAS <h1> à <h6> au début) VRAI');}else{echo 'FAUX';}?></pre>
					
					<strong> Métacaractère ?</strong></br>
					<pre class="pre-scrollable"><?php echo '6.1 - Ayay'; if(preg_match('#Ay(ay)?#','Ayay')){echo ' => #Ay(ay)?# (Ay puis ay 0 ou 1 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '6.2 - Ay'; if(preg_match('#Ay(ay)?#','Ay')){echo ' => #Ay(ay)?# (Ay puis ay 0 ou 1 fois)( VRAI';}else{echo 'FAUX';}?></pre>
					
					<strong> Métacaractère +</strong></br>
					<pre class="pre-scrollable"><?php echo '7.1 - Ayay'; if(preg_match('#Ay(ay)+#','Ayay')){echo ' => #Ay(ay)+# (Ay puis ay 1 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '7.2 - Ayayayayay'; if(preg_match('#Ay(ay)+#','Ayayayayay')){echo ' => #Ay(ay)+# (Ay puis  ay 1 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					
					<strong> Métacaractère *</strong></br>
					<pre class="pre-scrollable"><?php echo '8.1 - Ayay';if(preg_match('#Ay(ay)*#','Ayay')){echo ' => #Ay(ay)*# (Ay puis ay 0 ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '8.2 - Ay';if(preg_match('#Ay(ay)*#','Ay')){echo ' => #Ay(ay)*#(Ay puis ay 0 ou plus) VRA';}else{echo 'FAUX';}?></pre>
					
					<strong> Métacaractère {} </strong></br>
					<pre class="pre-scrollable"><?php echo '9.1 - Ayayayay';if(preg_match('#Ay(ay){3}#','Ayayayay')){echo ' => #Ay(ay){3}# (y puis ay 3 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '9.2 - Ayayay';if(preg_match('#Ay(ay){3}#','Ayayay')){echo 'VRAI';}else{echo ' #Ay(ay){3}# => (Ay puis ay 3 fois) FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '9.3 - Ayayayayay';if(preg_match('#Ay(ay){3}#','Ayayayayay')){echo ' => #Ay(ay){3}# (Ay puis ay 3 fois) VRAI car 3 fois ou plus';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '9.4 - Ayayay';if(preg_match('#^Ay(ay){3}$#','Ayayay')){echo 'VRAI';}else{echo ' => #^Ay(ay){3}$ (Ay au début puis ay 3 fois à la fin) FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '9.5 - 888';if(preg_match('#^[0-9]{3}$#','888')){echo ' => ^[0-9]{3}$ (présence unique d\'un chiffre 3 fois) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '9.6 - 5888'; if(preg_match('#^[0-9]{3}$#','5888')){echo 'VRAI';}else{echo ' => ^[0-9]{3}$ (présence unique d\'un chiffre 3 fois) FAUX';}?></pre>
					
					<strong> Métacaractère , dans {} </strong></br>
					<pre class="pre-scrollable"><?php echo '10.1 - 5888000'; if(preg_match('#^[0-9]{3,6}$#','5888000')){echo 'VRAI';}else{echo ' => ^[0-9]{3,6}$ (présence unique d\'un chiffre entre 3 et 6 fois) FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '10.2 - 5888000000';if(preg_match('#^[0-9]{3,}$#','5888000000')){echo ' => #^[0-9]{3,}$ (présence unique d\'un chiffre 3 fois ou plus) VRAI';}else{echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '10.3 - 58';if(preg_match('#^[0-9]{3,}$#','58')){echo 'VRAI';}else{echo ' => ^[0-9]{3,}$ (présence unique d\'un chiffre 3 fois ou plus) FAUX';}?></pre>
					
					<strong> Métacaractère .</strong></br>
					<pre class="pre-scrollable"><?php echo ' ';if(preg_match('#.#', ' ')) {echo ' => #.# (n\'importe quel caractère) VRAI';} else {echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo 's';if(preg_match('#.#', 's')) {echo ' => #.# (n\'importe quel caractère) VRAI';} else {echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo 'ab3 ';if(preg_match('#.{3}# ', 'ab3')) {echo ' => #.{3}# (n\'importe quel caractère 3 fois) VRAI';} else {echo 'FAUX';}?></pre>
					
					<strong>Echaper les métacaractères</strong></br>
					<pre class="pre-scrollable"><?php echo 'Je vais bien.';if(preg_match('#\.#', 'Je vais bien. ')){echo ' => #\.# (présence d\'un point) VRAI';} else {echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo 'Je vais bien !';if(preg_match('#\.#', 'Je vais bien ! ')){echo 'VRAI';} else {echo ' => #\.# (présence d\'un point) FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo 'Ca va ?';if(preg_match('#\?#', 'Ca va ?')){echo ' => #\?# (présence d\'un point d\'interrogation) VRAI';} else {echo 'FAUX';}?></pre>
					
				</ul>
			</section>	
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--capture-->
				<h3>Les captures</h3>
				<ul>
					<pre class="pre-scrollable"><?php echo '05/09/1994';if(preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#', '05/09/1994')){echo ' => #^[0-9]{2}/[0-9]{2}/[0-9]{4}$# VRAI';} else {echo 'FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '05/09-1994';if(preg_match('#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#', '05/09-1994')){echo 'VRAI';} else {echo '  => #^[0-9]{2}/[0-9]{2}/[0-9]{4}$# FAUX';}?></pre>
					<pre class="pre-scrollable"><?php echo '05/09/1994';if(preg_match('#^([0-9]{2}/){2}[0-9]{4}$#', '05/09/1994')){echo ' => #^([0-9]{2}/){2}[0-9]{4}$# VRAI';} else {echo 'FAUX';}?></pre>
					
				</ul>
			</section>	
			<div id="pregreplace"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--preg_replace-->
				<h3>La fonction preg_replace</h3>
				<ul>
					<p>Parenthèses capturantes : avec <code>preg_replace</code> chaque parenthèse de l'espression régulière génère une variable $1, $2 etc... qu'on pourra alors appeller dans un second paramètre comme dans cette exemple (bbCode) :
<?php
$texte ="<pre class=\"pre-scrollable\">&dollar;text = preg_replace('#\[b\](.+)\[/b\]#i', '<strong>&dollar;1</strong>', 'laChaineDeCaractères' );</pre>";
Regex($texte);
?>
					Ici <em>$1</em> correspond à ceux qu'il y a entre les prenthèses de l'expression régulière <em>(.+)</em>, c'est à dire <em>.+</em> (soit tous caractère au moins 1 fois).</p>
					Shéma :<br/>			
					<img src="../png/phpchap6_1.png"/>
					<p>$0 est toujours créée ; elle contient toute la regex.</p>
					<pre class="pre-scrollable"><?php echo '05/09/1994'; $annee = preg_replace('#^([0-9]{2}/){2}([0-9]{4})$#', '$2', '05/09/1994'); echo  ' => (\'#^([0-9]{2}/){2}([0-9]{4})$#\', \'$2\', \'05/09/1994\') An : '.$annee;?></pre>
					<pre class="pre-scrollable"><?php echo '05/09/1994'; $annee = preg_replace('#^([0-9]{2}/){2}([0-9]{4})$#', '= > $2', '05/09/1994'); echo  ' => (\'#^([0-9]{2}/){2}([0-9]{4})$#\', \'= > $2\', \'05/09/1994\') An : '.$annee;?></pre>
					<pre class="pre-scrollable"><?php echo '05/09/1994'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$1 $2 $3', '05/09/1994'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$1 $2 $3\', \'05/09/1994\') date : '.$date;?></pre>
					<pre class="pre-scrollable"><?php echo '05/09/1994'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3 $2 $1', '05/09/1994'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$3 $2 $1\', \'05/09/1994\') date : '.$date;?></pre>
					<pre class="pre-scrollable"><?php echo '20/01/2005'; $date = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3-$2-$1', '20/01/2005'); echo  ' => (\'#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#\', \'$3-$2-$1\', \'20/01/2005\') date : '.$date;?></pre>
					
					<strong>Exclusion de parenthèse :</strong><br/>
					<pre class="pre-scrollable">preg_replace('#(anti)co(?:nsti)(tu(tion)nelle)ment#', '$1$2');</pre> la 2ieme parenthèse (nsti) n'est pas capturée :<br/>
						- $0 : anticonstitutionnellement<br/>
						- $1 : anti<br/>
						- $2 : tutionnelle<br/>
						- $3 : tion<br/>
						- ?:nsti à été exclut
				</ul>
			</section>	
			<div id="classesabregees"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--classes abrégée-->
				<h3>Classes abrégées</h3>
				<ul>
					<strong>\d</strong> => Indique un chiffre. Ça revient exactement à taper[0-9]<br/>
					<strong>\D</strong> =>  ndique ce qui n'est PAS un chiffre. Ça revient à taper [^0-9]<br/>
					<strong>\w</strong> => Indique un caractère alphanumérique ou un tiret de soulignement. Cela correspond à [a-zA-Z0-9_]<br/>
					<strong>\W</strong> => Indique ce qui n'est PAS un mot. Si vous avez suivi, ça revient à taper [^a-zA-Z0-9_]<br/>
					<strong>\t</strong> => Indique une tabulation<br/>
					<strong>\n</strong> => Indique une nouvelle ligne<br/>
					<strong>\r</strong> => Indique un retour chariot<br/>
					<strong>\s</strong> => Indique un espace blanc<br/>
					<strong>\S</strong> => Indique ce qui n'est PAS un espace blanc (\t \n \r)<br/>
					<strong>.</strong> => Indique n'importe quel caractère. Il autorise donc tout !<br/> 
					<p>Pour le point, il existe une exception : il indique tout sauf les entrées (\n).
					Pour faire en sorte que le point indique tout, même les entrées, vous devrez utiliser l'option « s » de PCRE. Exemple :
					#[0-9]-.#s</p>
				</ul>
			</section>	
			<div id="comunregex"></div>
		    <br/>
		    <br/>	
			<hr>
			<section>
				<!--regex courant-->
				<h3>Expressions régulières courantes.</h3>
				<ul>
					<strong> Regex de numéro de tél </strong>
					<pre class="pre-scrollable">	#^0[1-68]([-. ]?\d{2}){4}$#</pre>
					<strong> Regex d'email </strong>
					<pre class="pre-scrollable">	#^[a-z\d.-_]+@[a-z\d.-_]{2,}\.[a-z]{2,4}$#</pre>
					<strong> Exemple de regex dans un requête SQL </strong>
					<pre class="pre-scrollable">SELECT nom FROM visiteurs WHERE ip REGEXP '^84\.254(\.[0-9]{1,3}){2}$'</pre>
					Traduction : «
					sélectionne tous les noms de la table "visiteurs" dont l'IP commence par « 84.254 » et se termine par deux autres nombres de un à trois chiffre(s) (ex. : 84.254.6.177)».<br/>
					Donnera toutes les IP commencant par 84.254 à partir d'un table dans une BDD.</p>

					<strong>Regex d'un lien dans un texte </strong><br/>
					<pre class="pre-scrollable"> preg_replace('#http://[a-z0-9._/-]+$#i', '<a href="$0">$0</a>', 'mydevmemo.com');</pre>
					Donnera : http://mydevmemo.com/
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