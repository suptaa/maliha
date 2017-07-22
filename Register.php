<?php

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$n ="am" ;
		$p="pa";
		$e="ta";
		
		$w=$_POST["name"];
		$x=$_POST["pass"];
		$y=$_POST["email"];


		if($w==$n and $x==$p and $y=="ta")
		{
			header('location:Home.php');
		}
		else
		{
			echo "<h2>"."Error in Registration process"."</h2>";
	
		}

	}
?>



<html>  
<body>
<hr>
<h3 align="center">Register</h3>
<hr>

<table align="center">
<form method="POST">

  <tr>
    <td>Name</td>
    <td><input type="text" name="name"></td>
  </tr>

  <tr>
    <td>Password</td>
    <td><input type="text" name="pass"></td>
  </tr>

  <tr>
    <td>Email</td>
    <td><input type="text" name="email"></td>
  </tr>

  <tr>
    <td><input type="submit" value="register"></td>
  </tr>

</form>
</table>
</body>
</html>