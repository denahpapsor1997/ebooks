<?php
	session_start();
	if((!isset($_SESSION['manager'])  && !isset($_SESSION['expert']))){
		header("Location:index.php");
	}
	$title = "List publisher";
	require_once "./template/admin_header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAllPublishers($conn);
?>	
	
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Name</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['publisher_name']; ?></td>
			<?php
				if( isset($_SESSION['expert']) && $_SESSION['expert']==true){
					echo '<td><a href="admin_editpublishers.php?pubid=';
					echo $row['publisherid'];
					echo'"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Edit</a></td>';
				}else if (isset($_SESSION['manager']) && $_SESSION['manager']==true){
					echo '<td><a href="admin_deletepublishers.php?pubid=';
					echo $row['publisherid'];
					echo '"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Delete</a></td>';
				}
			?>

		</tr>
		<?php } ?>
	</table>
    <?php
    if (isset($_SESSION['manager']) && $_SESSION['manager']==true){
		echo '<a class="btn btn-primary" href="admin_addpublisher.php"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Add Publisher</a>';
	}        
    ?>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>