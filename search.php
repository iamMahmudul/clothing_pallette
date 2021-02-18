<?php
	include('files/header.php');

?>


<!--Getting Search-->
<?php

if(!isset($_GET['search']) || $_GET['search']==NULL){
	header("Location:404.php");
	}
	else{$search=$_GET['search'];}
?>
<!--Getting Search-->
		
		
<section class="products templete">


	<!--Search Form-->
	<form action="search.php" method="get">
		<input type="text" name="search"/>
		<button>Search</button>
	</form>
	<!--Search Form-->
	
	
	<!--Including sidebar-->
	<?php 
	include('sidebar.php');
	?>
	<!--Including sidebar-->
	
	
		
	<div class="col-md-8">
		<div class="pro">
		
		<!--Searching code from DB-->
			<?php 
			
				$query="select * from tbl_post where title like '%$search%' or 
				body like '%$search%' 	";
				$post=$db->select($query);
				if($post){
					while($result=$post->fetch_assoc()){
			?>
		<!--Searching code from DB-->
				
		
		<!--Fetching data from DB-->
		
		<div class="image">
			<img src="admin/<?php echo $result['image'];?>"/>
		</div>
		<div class="details">
					
			<h3><?php echo $result['title'];?></h3>
			<p style="font-style:italic;color:#80444E;font-size:21px;"><?php echo $fm->formatdate($result['date']);?>,By <?php echo $result['author'];?></p>
			<p><?php echo $fm->textshorten($result['body'],265); ?></p>
			<a href="productdetails.php?id=<?php echo $result['id']; ?>" class="button">View More</a>
		</div>
					
					
		<?php } } else{?>
		
		<p>Your Search Query Not Found</p>
		
		<?php }?>
		
		<!--Fetching data from DB-->
		
</section>



			<?php
				include('files/footer.php');
			?>