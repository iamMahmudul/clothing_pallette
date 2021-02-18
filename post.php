<?php
include('files/header.php');

?>




<?php

if(!isset($_GET['category']) || $_GET['category']==NULL){
	
	header("Location:404.php");
	
}
else{
	
	$id=$_GET['category'];
}


?>
		
		
<section class="products templete">
	<form action="search.php" method="get">
	<input type="text" name="search"/>
	<button>Search</button>
	</form>
		
		<?php include('sidebar.php');?>
		
			<div class="col-md-8">
				<div class="pro">
				<?php 
					$per_page=3;
					if(isset($_GET["page"])){
					$page=$_GET["page"];
				}
				
				else{
					$page=1;
					}
				$start_form=($page-1) * $per_page;
			
			?>
				
				<?php 

				
				$query="select * from tbl_post where cat=$id limit $start_form,$per_page";
				$post=$db->select($query);
				
				
				if($post){
					
					while($result=$post->fetch_assoc()){
					
				
				
				?>
				
				
				
					<div class="image">
					<img src="admin/<?php echo $result['image'];?>"/>
					</div>
					<div class="details">
					
					<h3><?php echo $result['title'];?></h3>
					<p style="font-style:italic;color:#80444E;font-size:21px;"><?php echo $fm->formatdate($result['date']);?>,By <?php echo $result['author'];?></p>
					<p><?php echo $fm->textshorten($result['body'],265); ?></p>
					<a href="productdetails.php?id=<?php echo $result['id']; ?>" class="button">View More</a>
					</div>
					
					
					<?php } } else{echo "No products available!";}?>

<!--Pagination-->
					
			
					
			<!--Pagination-->
					




		
					
										
			
					
	
</section>

			<?php
		
			include('files/footer.php');
			
			?>