<?php

	include('../config/config.php');
	include('../config/Database.php');
	include('../config/format.php');
?>

<?php
	$db=new Database();
	
?>

<?php
	
	if(!isset($_GET['deleteid']) || $_GET['deleteid']==NULL){
	echo "<script>window.location='postlist.php';</script>";
	}else{
	$postid=$_GET['deleteid'];
	
	$query="select * from tbl_post where id='$postid'";
	$getData=$db->select($query);
	if($getData){
		while($delimg=$getData->fetch_assoc()){
			$dellink=$delimg['image'];
			unlink($dellink);
			
		}
		
	}
	$delquery="delete  from tbl_post where id='$postid'";
	$deldata=$db->delete($delquery);
	if($deldata){
			echo"<script>alert('Data deleted successfully!');</script>";
			echo "<script>window.location='postlist.php';</script>";
		
	}else{
		
			echo"<script>alert('Data not deleted!');</script>";
			echo "<script>window.location='postlist.php';</script>";
		
		
	}
}
?>