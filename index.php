<?php session_start();?>
<?php /*echo '<pre>';print_r($_SESSION);echo '</pre>';*/?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>IndexBoots</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:600|Roboto:300" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href="fonts_style/bootstrapstyle.css"/> 	    
	    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

	</head>
	
	<body>
		<!--header-->	
		<nav class="navbar navbar-primary navbar-fixed-top">
			<?php
				if(isset($_SESSION['pseudo']) AND isset($_SESSION['pseudo']))
				{
					echo '<p class="main-color-bg text-center"> Bonjour '. $_SESSION['pseudo']./*'<a class="btn btn-info" href="#">profil</a>*/ ' <a class="btn btn-info" href="deconnexion.php">deconnexion</a></p>';
				}
				else
				{
					echo '<p class="main-color-bg text-center"> <a href="#form_inscription">Inscrivez-vous</a> et connectez-vous pour accéder aux sections du site <a class="btn btn-info" data-toggle="modal" data-target="#connexionModal">Connexion</a>';
				}
			?>
		</nav>
		<!--connexionModal -->
		<div class="modal fade" id="connexionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
			      	<div class="modal-header">
			        	<h4 class="modal-title bg-primary">Connexion</h4>
			      	</div>
			      	<div class="modal-body text-primary">		
						<form class="form-inline" action="connexion.php" method="POST">
					  		<div class="form-group">
					  			<p>
								<label for="pseudo"> Pseudo : </label><input class="form-control" type="text" name="pseudo"/>
								<label for="pass"> Login : </label><input class="form-control" type="password" name="pass"/>
								</p>						
					  		</div>
					  		<div class="modal-footer">					  			
					  			<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>					  			
								<input type="submit" class="btn btn-primary" value="Se connecter"/>
							</div>
						</form>						
			      	</div>
		    	</div>
		  	</div>
		</div>
		<!--Jumbotron-->
		<div id="banner" class="jumbotron text-center">	
			<h1><span class="label label-primary">MyDevMemo</span></h1>	
		</div>
		<?php /*echo '<pre>';print_r($_POST);echo '</pre>'*/;?> 	
		<!--site navbar-->
		<nav class="navbar navbar-default navbar-static-top bg-info" id="navigation1">
			<div class="nav navbar-default text-center">
			
			</div>
			<?php 
				if(isset($_SESSION['pseudo']) AND isset($_SESSION['pseudo']))
				{
					include("navbars.php");
				}
				else
				{
					echo '<div class="text-center">'.$_SESSION['message'].'</div>';
				}
			?>
		</nav>
		<br>
		<!--central-->
		<div class="container">
			<div class="row">
				<section class="col-md-4">
					<img class="showcase-img" src="png/Coding-Macbook.jpg"/>
				</section>				
				<section class="col-md-5">
					<div class="article-top">										
						<h3 class="page-header">Pourquoi ce site ?</h3>
						<small>
							La programmation informatique est une activité d'une richesse inépuissable et il est difficile de tout retenir d'un coup. C'est pourquoi les informaticiens font appel à des documentations pour chaque language qu'ils utilisent. Ces documentations, bien qu'exhaustives et très instructives, sont parfois un peu fastidieuses, surtout pour les programmateurs débutants. C'est pour cela que ce site à été créé : accéder à l'essentiel des informations nécessaires pour coder en l'espace de quelques click comme avec un "cheatsheet" (antisèche en anglais).<br/>
							Attention ce site n'est pas là pour apprendre à coder dans les différents langages, pour cela il est conseillé de passer par des sites plus spécialisés. Ici vous n'apprendrez pas ce qu'est une variable, une fonction ou ce qu'est la POO, comment bien indenter votre code, les normes de formatage etc... vous devrez déjà savoir cela.
						</small>					
				</section>
				
				<section class="info-left col-md-3">
					<?php
					try
					{	
						$bdd = new PDO('mysql:host=db680795341.db.1and1.com;dbname=db680795341;charset=utf8', 'dbo680795341', 'Technici3n');
					}
					catch(Exception $e)
					{
						die ('Erreur : '.$e->getMessage());
					}

					$req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh %imin %ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0,1');
					while ($donnees = $req->fetch())
					{
					?>				
				
					<footer class="bg-primary">
						<p>INFO : <?php echo htmlspecialchars($donnees['titre']); ?> le <?php echo $donnees['date_creation_fr']; ?></p>
					</footer>
					<blockquote class="blockquote">
						<small>
							<?php echo nl2br(htmlspecialchars($donnees['contenu'])); 
							$req->closeCursor();					 
							?><br/>
						</small>Cédric.
					</blockquote>
				</section>
			</div>
			<div class="row">
				<section class="col-md-7">
					<div class="article-middle">
						<h3 class="page-header">Les langages.</h3>
						<small>
						<em>HTML</em> : dans cette section, 3 chapitres évoquent les différentes balises et élémentes d'une page HTML : les balises de structuration, la structure d'une page et les balises avancées des tableaux et des formulaires.<br/>
						<em>CSS</em> : le premier chapitre parle des propriétés de CSS et comment les utiliser. Les 2 autres font un point sur les propriétés de la flexbox et sur les média queries.<br/>
						<em>JavaScript</em> : beaucoup de matière ici : 2 chapitres évoquent les bases du langage JavaScript (et notament la programmation orientée objet), les autres montrent comment JavaScript est un puissant outil pour dynamiser vos pages.<br>
						<em>PHP</em> : formidable outil de gestion d'un site, on peut voir ici comment il fonctionne et comment il permet de gérer une base de donnée. Un chapitre est entièrement consacré au langage de requête SQL.
							
						</small>
				</section>
				<section class="col-md-1 col-md-offset-1">
					<img class="logos-img" src="png/logos.png"/>
				</section>
			</div>
			
			<section class="article-bottom">
				<h3 class="page-header">Ce que vous trouverez ici.</h3>
					<small>
					Essentiellement du code et ce qu'il donne. Le moins de texte possible mais un minimum quand même. Le but est que chacun s'y retrouve. Mais ne voyez pas ce site comme un MOOC. Tous les codes et les exemples sont repris des différents cours du MOOC <em><a href="http://www.openclassrooms.com" target="_blank">Openclassrooms</a></em>, site vivement recommandé si vous voulez vous lancer véritablement dans la programmation informatique.
					</small>
			</section>
			<br/>
			<section>				
					<img  class="sample-img" src="png/screen1.png"/>
					<img  class="sample-img" src="png/screen2.png"/>
					<small>Quelques images du site !</small>
			</section>			
		</div>
		<br/>
		<br/>	
		<!--inscription-->
		<section>

			<?php
				if(!isset($_SESSION['pseudo']) AND !isset($_SESSION['pseudo']))
				{
				?>
				<hr>
				<div id="img-signin">
				<br/>
				<div class="text-center text-signin"><h3>INSCRIVEZ-VOUS ICI !</h3></div>
				<span id="signin-control">
	            	<?php
	            	//echo '<pre>';print_r($_POST);echo '</pre>';
	            					
					if (isset($_POST['pseudo']) AND ($_POST['pass'])!=NULL)
					{				
							
						try
						{
							$bdd = new PDO('mysql:host=db680795341.db.1and1.com;dbname=db680795341;charset=utf8', 'dbo680795341', 'Technici3n');
						} 
						catch (Exception $e)
						{
							die('Erreur : '.$e->getMessage());
						}

						$req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
						$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo'])));
						$resultat = $req->fetch();

						if ($resultat)
						{
							echo '<span class="text-signin col-sm-offset-5">Ce pseudo existe déjà, choisissez-en  un autre !</span>';
						}
					
						else
						{
							 if($_POST['confirmation']!=$_POST['pass'])
							{
								echo '<span class="text-signin col-sm-offset-5">Les mots de passe ne correspondent pas !</span>';
							}
							else
							{
								$pass_hache = sha1($_POST['pass']);
								$req = $bdd->prepare('INSERT INTO membres (pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, CURDATE())');
								$req->execute(array('pseudo'=>htmlspecialchars($_POST['pseudo']), 'pass'=>$pass_hache, 'email'=>htmlspecialchars($_POST['email'])));
								$req->closeCursor();
								header('location:index.php');
							}
						}				
					}
					else
					{				
						echo'<span class="text-signin col-sm-offset-5">Vous devez remplir tous les champs marqués par *</span>';
					}
					?>
				</span>	

				<br/>			
					<form class="form-horizontal" id="form_inscription" action="#signin-control" method="post">
						<div class="form-group">
			                <label for="pseudo" class=" col-sm-offset-2 col-sm-3 control-label text-signin">Pseudo * </label>
			                <div class="col-sm-2">
			                	<input class="form-control"  type="text" name="pseudo" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label for="pass"  class="col-sm-offset-2  col-sm-3 control-label text-signin">Mot de passe * </label>
			                
			                <div class="col-sm-2">			                	
			                	<input class="form-control"  type="password" name="pass" id="mdp" />
			                </div>
			                <div class="col-sm-2">
			                	<span id="aideMdp"></span>
			                </div>
			            </div>
			            <div class="form-group">
			                <label for="confirmation" class="col-sm-offset-2  col-sm-3 control-label text-signin">Retapez votre mot de passe * </label>
			                <div class="col-sm-2">
			                	<input class="form-control"  type="password" name="confirmation" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label for="email" class="col-sm-offset-2  col-sm-3 control-label text-signin">Adresse email * </label>
			                <div class="col-sm-2">
			               		<input class="form-control"  type="text" name="email" id="courriel" />
			                </div>
			                <div class="col-sm-2">
			                	<span role="alert" id="aideCourriel"></span>
			               	</div>
			            </div>
			            <div class="form-group" >
			            	<div class="col-sm-offset-5 col-sm-2">
			                	<input class="btn btn-default"  id="bouton_form" type="submit" value="Inscription">
			                </div><br/>
			            </div>

			            <script src="js/form_validation.js"></script>
		            </form>		
			    <br/>
			    </div>
			    <?php
				};
			?>
		</section>				
	<!--footer-->	
	<footer>
	<?php include("footer.php");?>
	</footer>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->

	<script src="https://code.jquery.com/jquery-3.2.1.js"  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="  crossorigin="anonymous"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>

    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000
        });
        sr.reveal('.label', {
      	  delay: 2000,
          duration: 2000
        });
        sr.reveal('.nav-message', {
          origin:'right',
          distance:'300px',
      	  delay: 2000,
          duration: 2000
        });
         sr.reveal('.showcase-img', {
          duration: 2000,
          origin:'left',
          distance:'300px'
        });
         sr.reveal('.logos-img', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
        sr.reveal('.article-top', {
          duration: 2000,
          origin:'right',
        });
        sr.reveal('.article-middle', {
          duration: 2000,
          origin:'left',
        });
        sr.reveal('.article-bottom', {
          duration: 2000,
          origin:'bottom',
        });
        sr.reveal('.sample-img', {
          duration: 2000,
          origin:'bottom',
        });
        
        sr.reveal('.info-left', {
          duration: 2000,
          origin:'right',
        });
    </script>
	</body>	
</html>