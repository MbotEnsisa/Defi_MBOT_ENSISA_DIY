<html>

<meta http-equiv="Content-Type" content="admin2.html charset=utf-8" />

<!-- Code du header -->

<header>
This is the header
</header>
	 
<?php
		 
		    /*Paramètres de connexion au serveur*/
			//$server="localhost";
			//$user="root";w
			
			/*Paramètres de sélection de la base de données*/
			//$database="camp";
	         
			/*Connexion au serveur et vérification de la connexion*/
			
			echo "Data sended";
			$name=$_POST["name"];
			$middlename=$_POST["middlename"];
			$lastname=$_POST["lastname"];
			$dateofbirth=$_POST["dateofbirth"];
			$id=$_POST["id"];
			$health=$_POST["health"];
			$vaccinate=$_POST["vaccinate"];
			$vaccination=$_POST["vaccination"];
			$country=$_POST["country"];
			$region=$_POST["region"];
			$tent=$_POST["tent"];
			$entry=$_POST["entry"];
			$exit=$_POST["exit"];
			
			try
			{
			
			     $bdd=new PDO('mysql:host=localhost;dbname=camp','root','');
			     
			}
			
			catch(Exception $e)
			{
			  
			     die('Error. Cannot connect to the MySQL database'.$e->getMessage());
			  
			}
			echo "sss";
			
			 //$req= $connexion->prepare('INSERT INTO user(pseudo,password,mail,name,adress) VALUES(:pseudo,:mdp,:email,:name,:adress)');
			//Write mySQL request
			 $request= $bdd->prepare('INSERT INTO admin VALUES(:name,:middlename,:lastname,:dateofbirth,:country,:region,:tent,:entry,:exit,:id,:health,:vaccinate,:vaccination)');
			 
			 
     		//Send mySQL request
			 $request->execute(array(
			     'name' =>$name,
				 'middlename' =>$middlename,
				 'lastname' =>$lastname,
				 'dateofbirth' =>$dateofbirth,
				 'country' =>$country,
				 'region' =>$region,
				 'tent' =>$tent,
				 'entry' =>$entry,
				 'exit' =>$exit,
				 'id' =>$id,
				 'health' =>$health,
				 'vaccinate' =>$vaccinate,
				 'vaccination' =>$vaccination
				 ));
					  
?>

</html>