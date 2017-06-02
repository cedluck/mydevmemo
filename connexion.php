<?php session_start();
if (isset($_POST['pseudo']) AND isset($_POST['pass']))
	{
		try
		{
			$bdd = new PDO('mysql:host=db680795341.db.1and1.com;dbname=db680795341;charset=utf8', 'dbo680795341', 'Technici3n');
		} 
		catch (Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}

		$pass_hache = sha1($_POST['pass']);
		$req = $bdd->prepare('SELECT id, pseudo, email, pass FROM membres WHERE pseudo = :pseudo  AND pass = :pass');
		$req->execute(array('pseudo'=>$_POST['pseudo'], 'pass'=> $pass_hache));
		$resultat = $req->fetch();
        
		if (!$resultat)
		{
			$_SESSION['message'] ='<strong>Mauvais identifiant ou mot de passe !</strong>';
		}
		else
		{
		    
		    $_SESSION['id'] = $resultat['id'];
		    $_SESSION['pseudo'] = $resultat['pseudo'];
		    $_SESSION['email'] = $resultat['email'];
		    $_SESSION['pass'] = $resultat['pass'];
		    header('location:index.php');
		}
        $req->closeCursor();
	}	
