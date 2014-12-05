
<html>

<meta http-equiv="Content-Type" content="admin2.html charset=utf-8" />
	 
<?php
		     
			
			/*Implementation of the PHP methods POST*/
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
			
			/*Connection to the server and check it*/
			try
			{
			
			     $bdd=new PDO('mysql:host=localhost;dbname=camp','root','');
			     
			}
			
			catch(Exception $e)
			{
			  
			     die('Error. Cannot connect to the MySQL database'.$e->getMessage());
			  
			}
			
			
			 /*Insert in the mySQL admin table the parameters*/
			 $request= $bdd->prepare('INSERT INTO admin VALUES(:name,:middlename,:lastname,:dateofbirth,:country,:region,:tent,:entry,:exit,:id,:health,:vaccinate,:vaccination)');
			 
			 
     		 /*Send the mySQL requests*/
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
				 
				 echo "Data sended";
					  
?>

</html>