<?php
	session_start();
	if((!isset($_SESSION['manager'])  && !isset($_SESSION['expert']))){
		header("Location:index.php");
	}
	$title = "List book";
	require_once "./template/admin_header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>Publisher</th>
			<th>Category</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><?php echo $row['book_image']; ?></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><?php echo getPubName($conn, $row['publisherid']); ?></td>
			<td><?php echo getCatName($conn, $row['categoryid']); ?></td>
			<?php
				if( isset($_SESSION['expert']) && $_SESSION['expert']==true){
					echo '<td><a href="admin_edit.php?bookisbn=';
					echo $row['book_isbn'];
					echo'"><span class="glyphicon glyphicon-pencil"></span>Edit</a></td>';
				}else if (isset($_SESSION['manager']) && $_SESSION['manager']==true){
					echo '<td><a href="admin_delete.php?bookisbn=';
					echo $row['book_isbn']; 
					echo '"><span class="glyphicon glyphicon-trash"></span>Delete</a></td>';
				}
			?>

		</tr>
		<?php } ?>
	</table>
	

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>
<script type="text/javascript">
	$("#popup").modal("toggle");
	window.setTimeout(function(){
		$("#popup").modal("toggle");
	},5000);
</script>

