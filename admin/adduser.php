<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Add New User</h2>
               <div class="block copyblock"> 
			   
		<?php
	
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
			$user=$fm->validation($_POST['user']);
			$password=$fm->validation(md5($_POST['password']));
			$role=$fm->validation($_POST['role']);
			
			
			
			$user = mysqli_real_escape_string($db->link,$user);
			$password = mysqli_real_escape_string($db->link,$password);
			$role     = mysqli_real_escape_string($db->link,$role);
		
			if(empty($user) || empty($password) || empty($role)){
	
			
			echo"<span class='error'>Field must not be empty!</span>";
			
			}else{
			
			$query="insert into tbl_user(username,password,role) values('$user','$password', '$role')";
			
			$catinsert=$db->insert($query);
			
			if($catinsert){
				
				
			echo"<span class='success'>User created successfully!</span>";
				
			}else{
				
			echo"<span class='error'>User not created!</span>";
				
			}
			
		}
		}	   
	
	?>
			   
			   
			   
                 <form action="" method="post">
                    <table class="form">					
                        <tr>
							<td>
							<label>Username</label>
							</td>
                            <td>
                                <input type="text" name="user" placeholder="Enter Username..." class="medium" />
                            </td>
                        </tr>
						
						<tr>
							<td>
							<label>Password</label>
							</td>
                            <td>
                                <input type="password" name="password" placeholder="Enter Password..." class="medium" />
                            </td>
                        </tr>
						
						<tr>
							<td>
							<label>User Role</label>
							</td>
                            <td>
                                <select id="select" name="role">
								<option>Select User Role</option>
								<option value="1">Admin</option>
								<option value="2">Author</option>
								<option value="3">Editor</option>
								</select>
                            </td>
                        </tr>
						
						
						<tr> 
						<td></td>
                            <td>
                                <input type="submit" name="submit" Value="Create" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
       <?php include 'inc/footer.php';?>
       <?php include 'inc/footer.php';?>