<?php
	include('files/header.php');

?>


<!--Creating object of Database and Format class-->
<?php
	$db=new Database();
	$fm=new format();
?>
<!--Creating object of Database and Format class-->


		
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
			
			<?php 
			
				$per_page=3;
					if(isset($_GET["page"])){
					$page=$_GET["page"];
				}
				
				else{$page=1;}
				$start_form=($page-1) * $per_page;
			
			?>
				
			<?php
			
				$query="select * from tbl_post order by id desc limit $start_form,$per_page";
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
			
			<?php } ?>  <!--End While loop-->
					
			<!--Pagination-->
					
			<?php 

			$query="select * from tbl_post";
			$result=$db->select($query);
			$total_rows=mysqli_num_rows($result);
			$total_pages=ceil($total_rows/$per_page);

			echo "<span class='page'><a href='products.php?page=1'>".'First Page'."</a>" ;
			
			for($i=1;$i<=$total_pages;$i++){
				echo "<a href='products.php?page=".$i."'>".$i."</a>";
				
			}
	
			echo "<a href='products.php?page=$total_pages'>".'Last Page'."</a></span>"
			
			?>
					
			<!--Pagination-->
					
			<?php
			}else{header("Location:404.php");}
			?>
			
				</div>
			</div>	
		</div>
	</div>
</section>

			<?php
			
			include('files/footer.php');
			
			?>