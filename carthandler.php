<?php
session_start();
if (isset($_SESSION['cart'])) {
	$count=count($_SESSION['cart']); //counting number of items in the cart
	$_SESSION['cart'][$count]=array('item_id' => $_GET['cart_id'], 'item_name'=>$_GET['cart_name'],'item_price'=>$_GET['cart_price'] );
	echo "<script> alert('Product Added');
	window.location.href='product.php';
	</script>";
} else {
	$_SESSION['cart'][0]=array('item_id'=>$_GET['cart_id'],'item_name'=>$_GET['cart_name'],'item_price'=>$_GET['cart_price'] );
	echo "<script> alert('Product Added');
	window.location.href='product.php';
	</script>";
}

//we can empty the cart with session_destroy()
?>