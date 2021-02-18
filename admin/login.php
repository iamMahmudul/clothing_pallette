<?php

	include('../config/Session.php');
	Session::init();

?>

<?php
	
	include('../config/config.php');
	include('../config/Database.php');
	include('../config/format.php');
?>

<?php
	$db=new Database();
	$fm=new format();
?>




<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
	
	<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$username=$fm->validation($_POST['username']);
		$password=$fm->validation(md5($_POST['password']));
		
		$username=mysqli_real_escape_string($db->link,$username);
		$password=mysqli_real_escape_string($db->link,$password);
		
		$query="select * from tbl_user where username='$username' and
		password='$password'";
		
		$result=$db->select($query);
		
		if($result!=false){
			
			$value=mysqli_fetch_array($result);
			$rows=mysqli_num_rows($result);
			
			if($rows>0){
				
				session::set("login", true);
				session::set("username", $value['$username']);
				session::set("userID", $value['$id']);
				session::set("userRole", $value['$role']);
				header("Location:index.php");
				
				
			}else{
				
				echo "<span style='color:red;font-size:18px;'>No Result Found !</span>";
			}
			
		}else{
			
			echo "<span style='color:red;font-size:18px;'>Username or Password not matched !</span>";
		}
	}
	
	?>
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">ClothingPallete</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>