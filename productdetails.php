<?php
	include('files/header.php');

?>


	<?php
	
	if(!isset($_GET['id']) || $_GET['id']==NULL){
		header("Location:404.php");
	}
	
	else{$id=$_GET['id'];}
	
	?>
			
<section class="products templete">


	<form action="search.php" method="get">
		<input type="text" name="search"/>
		<button>Search</button>
	</form>
	
	
	<?php 
	include('sidebar.php');
	?>
			
			
	<div class="col-md-8">
		<div class="pro">
			
			<?php 
				
			$query="select * from tbl_post where id=$id";
			$post=$db->select($query);
			if($post){
				while($result=$post->fetch_assoc()){
				
			?>
				
				
		<div class="image">
			<img src="admin/<?php echo $result['image'];?>"/>
		</div>
		<div class="details">
			<h3><?php echo $result['title'];?></h3>
			<p style="font-style:italic;color:#80444E;font-size:21px;"><?php echo $fm->formatdate($result['date']);?>,By <?php echo $result['author'];?>
			</p>
			<?php echo $result['body'];?>
					
			<h4>Leave a Reply</h4>
			<form>
				<input type="text" name="pass"/>
				<br>
				<input type="submit" value="Comment"/>
			</form>
					
			<hr>
			<br>
			<br>
		</div>
					
		<div class="related">
			<h2>Related Products</h2>
			
			
				<?php
				
				$catid=$result['cat'];
				$queryrelated="select * from tbl_post where cat='$catid' limit 4";
				$relatedpost=$db->select($queryrelated);
				if($relatedpost){
					while($rresult=$relatedpost->fetch_assoc()){
				
				?>
				
				<a href="productdetails.php?id=<?php echo $rresult['id']; ?>">
				<img src="admin/<?php echo $rresult['image'];?>"/></a>
				   
						
				<?php } } else{echo "No related post available";}?>
				
		</div>
		
				<?php } } else{header("Location:404.php");}?>
					
				</div>
			</div>		
		</div>
	</div>
</section>


			<?php
		
			include('files/footer.php');
			
			?>