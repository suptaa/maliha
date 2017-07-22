<?php

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		$n ="am" ;
		$p="pa";
		
		$x=$_POST["name"];
		$y=$_POST["password"];
		
		if($x==$n and $y==$p)
		{
			header('location:Home.php');
		}
		else
		{
			echo "<h1>"."Error in login"."</h1>";
			
		}

	}
?>



<html>  
<body>
<hr>
<h3 align="center">Login</h3>
<hr>

<form method="POST">
Name:<br>
<input type="text" name="name"><br>
Password:<br>
<input type="text" name="password"><br>
<input type="submit" value="login">
<a href="Register.php">Register</a>
</form>


</body>
</html>