<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Products List</h2>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="5px">No.</th>
							<th width="15px">Products Title</th>
							<th width="15px">Description</th>
							<th width="10px">Category</th>
							<th width="10px">Image</th>
							<th width="10px">Author</th>
							<th width="10px">Tags</th>
							<th width="10px">Date</th>
							<th width="15px">Action</th>
						</tr>
					</thead>
					<tbody>
					
					<?php
					
					$query="select tbl_post.*,tbl_category.name from
					tbl_post inner join tbl_category
					on tbl_post.cat=tbl_category.id
					order by tbl_post.title desc";
					
					$post=$db->select($query);
					if($post){
						$i=0;
					
					while($result=$post->fetch_assoc()){
						
					$i++;
					
					
					
					
					?>
					
					<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><a href="editpost.php?editpostid=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></td>
							<td><?php echo $fm->textshorten($result['body'],50);?></td>
							<td><?php echo $result['name'];?></td>
							<td><img src="<?php echo $result['image']; ?>" height="40px" width="60px"/></td>
							<td><?php echo $result['author'];?></td>
							<td><?php echo $result['tag'];?></td>
							<td><?php echo $fm->formatdate($result['date']);?></td>
							<td>
							<a href="editpost.php?editpostid=<?php echo $result['id'];?>">Edit</a> 
									|| 
							<a onclick="return confirm('Are you sure to Delete?');" href="delpost.php?deleteid=<?php echo $result['id'];?>">Delete</a> 
							</td>
						</tr>
						
						
					<?php } } ?>
						
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
        
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <?php include 'inc/footer.php';?>
