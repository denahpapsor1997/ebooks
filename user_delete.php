<?php
session_start();
	$book_isbn = $_GET['isbn'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();
	print_r($book_isbn);
$ar=$_SESSION['cart'];
print_r($ar);
$new_cat=array();
foreach ($ar as $key => $value) {
	if ($key==$book_isbn) {
		unset($ar[$book_isbn]); 
	}
	# code...
}
$_SESSION['cart']=$ar;
	/*$query = "DELETE FROM cart WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}*/
	header("Location: cart.php");
?>