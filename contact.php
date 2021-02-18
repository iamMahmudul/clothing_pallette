<?php
include('files/header.php');
?>

<?php
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$fname=$fm->validation($_POST['firstname']);
		$lname=$fm->validation($_POST['lastname']);
		$email=$fm->validation($_POST['email']);
		$body=$fm->validation($_POST['body']);
	
		
		
		$fname=mysqli_real_escape_string($db->link,$fname);
		$lname=mysqli_real_escape_string($db->link,$lname);
		$email=mysqli_real_escape_string($db->link,$email);
		$body=mysqli_real_escape_string($db->link,$body);
		
		
		$error="";
		if(empty($fname)){
			$error="Firstname must not be empty!";
		}
		else if(empty($lname)){
			$error="Lastname must not be empty!";
		}
		else if(empty($email)){
			$error="Email must not be empty!";
		}
		else if(empty($body)){
			$error="Body must not be empty!";
		}
		else{
			$query="insert into tbl_contact(firstname,lastname,email,body)
			values('$fname','$lname','$email','$body')";
			$inserted_rows=$db->insert($query);
			
			if($inserted_rows){
				$msg="Message sent successfully";
			}
			else{
				$error="Message was not sent!";
			}
		}
	}	
		?>


<section class="contact templete">
	<img src="images/contact.png"/>

	<div class="twoo">
		<div class="con">
			<h4>What works best for you?</h4>
			<p>
			Check out frequently asked questions,call us or<br>
			connect with us on social media.
			</p>
		</div>
		
                 
			<div class="consoc" style="float:right;">
            <h1>
				<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
				<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
				<a href="https://www.google.com"><i class="fa fa-google-plus"></i></a>
			</h1>
						
			</div>
		</div>
			
			<hr>
			
			<?php
			
			if(isset($error)){
			echo"<span style='color:red;padding:10px;font-size:17px;font-weight:bold;'>$error</span>";
			}
			if(isset($msg)){
			echo"<span style='color:red;padding:10px;font-size:17px;font-weight:bold;'>$msg</span>";
			}
			?>
			
			<div class="conform">
				<h3 class="" style="padding:10px;font-family:initial;">Leave us a message </h3>
			
			
			
			<form action="" method="post">
				<table>
				<tr>
					<td class="" style="padding:10px;">Your First Name:</td>
					<td>
					<input type="text" name="firstname" placeholder="Enter first name" />
					</td>
				</tr>
				<tr>
					<td class="" style="padding:10px;">Your Last Name:</td>
					<td>
					<input type="text" name="lastname" placeholder="Enter Last name" />
					</td>
				</tr>
				
				<tr>
					<td class="" style="padding:10px;">Email Address:</td>
					<td>
					<input type="text" name="email" placeholder="Enter Email Address" />
					</td>
				</tr>
				<tr>
					<td class="" style="padding:10px;">Your Message:</td>
					<td>
					<textarea name="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="submit" name="submit" value="Send"/>
					</td>
				</tr>
			</table>
		<form>				
	</div>
	
			<div class="address">
			<h2>Corporate Office</h2>
			<h4>ABC Industries LTD</h4>
			<p>
			227/A-Tejgaon-Gulshan link road. 
			<br>
			Tejgaon Industrial Area,Dhaka-1208.
			<br>
			<strong>Phone:</strong> 0521-112441<br>
			<strong>Mobile:</strong> 01740140967<br>
			<strong>Email:</strong>mahmudulbaust43@gmail.com</br>
			
			<br>
			
			
			<strong>Consumer Engagement Services:</strong><br>
			<strong>Telephone:0521-119887</strong><br>
			<strong>Mobile:01780848208</strong><br>
			</p>
			</div>
	
	
</section>

			<?php
		
			include('files/footer.php');
			
			?>
		
