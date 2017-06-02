<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>cssflexbox</title>
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
				<li><a class="label label-css" href="#principe">Propriété flex</a></li>
				<li><a class="label label-css" href="#direction">Direction</a></li>
				<li><a class="label label-css" href="#return">Retour à la ligne</a></li>
				<li><a class="label label-css" href="#alignement">Alignement</a></li>
				<li><a class="label label-css" href="#repartission">Répartission</a></li>
				<li><a class="label label-css" href="#order">Ordre et taille</a></li>
				<li><a class="label label-css" href="#">Au début</a></li>
				<li><a class="label label-css" href="cssproprietes.php">chapitre précédent...</a></li>
				<li><a class="label label-css" href="cssmediaqueries.php">chapitre suivant...</a></li>
			</ul>
			<?php include("../navbars.php"); ?>	        	
	    </nav>
			<div class="container">	
				<!--title-->
				  	<h1><span class="label navbar-default">CSS3 : la flexbox</span> <small>Accéder à la <a href="https://www.w3.org/Style/css3-selectors-updates/WD-css3-selectors-20010126.fr.html" role="button" target="_blank">documentation</a></small></h1>
				<small>D'après <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">"apprenez à creer votre site web avec html5 et css3"</a> de : <a href="https://openclassrooms.com/membres/mateo21">Mathieu Nebra.</a> MOOC : <a href="https://openclassrooms.com">openclassrooms</a>.
				</small>
				<div id="principe"></div>
			    <br/>
			    <br/>
			    <hr>

				<!--highlight rules-->
				<?php include("../html/regexhtml.php");?>
				<?php include("cssHighlight.php");?>
				<!--MAIN CONTENT-->
				<section>
					<!--le principe-->
					<h3 id="principe">Ré-arranger des éléments dans un conteneur grâce à la flexbox</h3>
					<ul>
						<p>Code Html :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">&lt;div id=&quot;conteneur&quot;&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 1&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 2&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;Elément 3&lt;/div&gt;
&lt;/div&gt;</pre>";
RegEx($texte);
?>			
						<p>Propriété flex de la feuille de style :</p>
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur /*le selecteur sélectionne le conteneur*/
{
    display: flex;
}</pre>";
RegexCss($texte);
?>
						<p>Par défaut la propriété flex arrange les éléments sur une ligne :</p>
						<img src="../png/csschap2_1.png"/>
					<div id="direction"></div>
				    <br/>
				    <br/>				    
					</ul>
				</section>
				<hr>
				<section>
					<!--direction-->
					<h3>Choisir une direction</h3>
					<ul>
						<p>Propriété <code>flex-direction</code> :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    flex-direction: colmun;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_2.png"/>
					<br/><br/>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    flex-direction: colmun-reverse;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_3.png"/>
					<p>Possibilité d'utiliser row-reverse.</p>
				<div id="return"></div>
			    <br/>
			    <br/>			    
				</ul>
			</section>
			<hr>
			<section>
				<!--retour à la ligne-->
				<h3>Retour à la ligne et alignement</h3>
				<ul>
					<p>Retour à la ligne, propriété <code>flex-wrap</code>:</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    flex-wrap: wrap;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_4.png"/>
				<div id="alignement"></div>
			    <br/>
			    <br/>			    
				</ul>
			</section>
			<hr>
			<section>
				<!--alignement-->
				<h3>Alignement sur l'axe principal et l'axe secondaire</h3>
				<ul>
					<p>Principe de base :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th></th><th>axe principal</th><th>axe secondaire</th>
						</tr>
						<tr>
							<td>alignement </td><td>horizontale</td><td>verticale</td>
						</tr>
						<tr>
							<td>alignement </td><td>verticale</td><td>horizontale</td>
						</tr>
						<tr>
							<td>propriété</td><td><code>justify-content</code></td><td><code>align-items</code></td>
						</tr>


					</table>
					<p>Alignement de l'axe principal :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    justify-content: space-around;
}</pre>";
RegexCss($texte);
?>	
					<p>S'applique aussi si les éléments sont alignés dans une direction verticale.</p>
					<img src="../png/csschap2_5.png"/>
					<br/>
					<p>Aligner sur l'axe secondaire :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    justify-content: center;
    align-items: center;
}</pre>";
RegexCss($texte);
?>	
					<br/>
					<img src="../png/csschap2_6.png"/>
					<br/><br/>
					<p>Centrage grâce à la propriété <code>margin</code> :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
}
.element
{
    margin: auto;
}</pre>";
RegexCss($texte);
?>	
					<br/>
					<p>Aligner un seul élément :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}

.element:nth-child(2) /*On prend le deuxième bloc élément */
{
    background-color: blue;
    align-self: flex-end; /*Seul ce bloc sera aligné à la fin */
}

/*...*/</pre>";
RegexCss($texte);
?>
					<img src="../png/csschap2_7.png"/>
				<div id="repartission"></div>
			    <br/>
			    <br/>
				</ul>
			</section>
			<hr>	
			<section>
				<!--répartission-->
				<h3>Répartir sur plusieurs lignes</h3>
				<ul>
					<p>A partir de :</p>						
<?php
$texte ="<pre class=\"pre-scrollable\">&lt;div id=&quot;conteneur&quot;&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;element&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</pre>";
ReGex($texte);
?>
					<p>On peut répatir les éléments sur plusieurs lignes avec <code>flex-wrap</code> (retour a la ligne) :</p>						
<?php
$texte = "<pre class=\"pre-scrollable\">#conteneur
{
    display: flex;
    flex-wrap: wrap;
}</pre>";
RegexCss($texte);
?>	
					<img src="../png/csschap2_8.png"/>
					<br/><br/>
					<p>Voici comment se répartiront les élements grâce à la propriété <code>align-content</code> :</p>
					<table class="table table-striped table-bordered table-hover table-condensed">
						<tr>
							<th>valeur</th><th>description</th>
						</tr>
						<tr>
							<td>stretch(par défault)</td><td>les éléments s'étirent pour occuper tout l'espace</td>
						</tr>
						<tr>
							<td>flex-start</td><td>les éléments sont placés au début</td>
						</tr>
						<tr>
							<td>flex-end</td><td>les éléments sont placés à la fin</td>
						</tr>
						<tr>
							<td>center</td><td>les éléments sont placés au centre</td>
						</tr>
						<tr>
							<td>space-between</td><td>les éléments sont séparés avec de l'espace entre eux</td>
						</tr>
						<tr>
							<td>space-around </td><td>les éléments sont séparés avec de l'espace entre eux,<br/> mais il y a aussi de l'espace au début et à la fin</td>
						</tr>
					</table>
					<br/>
					<p>Ces différentes valeurs produiront ces différentes répartissions :</p>
					<img src="../png/csschap2_9.png"/>
				<div id="order"></div>
			    <br/>
			    <br/>
			    </ul>
			</section>
			<hr>
			<section>
				<!--ordre et taille-->
				<h3 id="order">Choisir l'ordre des éléments et jouer sur leurs tailles.</h3>
				<ul>
					<p>Changer l'ordre des éléments grâce a la propriété <code>order</code> :</p>
<?php
$texte ="
<pre class=\"pre-scrollable\">.element:nth-child(1) /*selectionne élément 1 (orange)*/
{
    order: 3; /*place élément 1 en 3ieme position*/
}
.element:nth-child(2) /*selectionne élément 2 (bleu)*/
{
    order: 1; /*place élément 2 en 1ière position*/
}
.element:nth-child(3) /*selectionne élément 3 (vert)*/
{
    order: 2; /*place élément 3 en 2ieme position*/
}</pre>";
RegexCss($texte);
?>				
					<br/>
					<img src="../png/csschap2_10.png"/><br/><br/>
					<p>Faire grossir ou maigrir un élément grâce à <code>flex</code> :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">.element:nth-child(2) /*sélectionne le 2ieme élément*/
{
    flex: 1; /*étire l'élément*/
}</pre>";
RegexCss($texte);
?>				
					<img src="../png/csschap2_11.png"/><br/><br/>
					<p>La valeur de la propriété <code>flex</code> est relative aux autres éléments :</p>
<?php
$texte ="<pre class=\"pre-scrollable\">.element:nth-child(1)
{
    flex: 2; /*élément 1 est 2X plus gros que élément 2*/
}
.element:nth-child(2)
{
    flex: 1;
}</pre>";
RegexCss($texte);
?>
				<img src="../png/csschap2_12.png"/><br/><br/>
				<p><code>flex</code> est une super-propriété qui combine <code>flex-grow</code> (grossir) <code>flex-shrink</code> (maigrir) <br/>
				et <code>flex-basis</code> (taille par défault).</p>	
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