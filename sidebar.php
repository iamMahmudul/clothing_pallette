<?php

$db=new Database();
$fm=new format();


?>
<div class="container-fluid">
		
		<div class="row">
			<div class="col-md-4">
				<div class="sidebar">
				
				
				<br>
				<h2>Catagories</h2>
				<ul>
				
				<?php
				
								
				$query="select * from tbl_category";
				$category=$db->select($query);
				
				if($category){
					
					while($result=$category->fetch_assoc()){
				
				?>
					<li><a href="post.php?category=<?php echo $result['id']; ?>"><?php echo $result['name'];?></a></li>
				<?php }}else{?>
				<li>No category created</li> 
				<?php }?>
				</ul>
			
				<hr>
					
					<div class="sidebar2">
					
				
					<h3>LATEST</h3>
					<hr>
					
					<?php 

					$query="select * from tbl_post order by id desc limit 2 ";
					$post=$db->select($query);
					
					if($post){
					
					while($result=$post->fetch_assoc()){
						
					?>
					
					
					<div class="latest">
					<a href="productdetails.php?id=<?php echo $result['id'];?>">
					<img src="admin/<?php echo $result['image'];?>"/></a>
					</div>
					<p><?php echo $fm->textshorten($result['body'],120); ?></p>
					<hr>
					
						<?php } } else{header("Location:404.php");}?>
					
					</div>
					
				</div>
			</div>