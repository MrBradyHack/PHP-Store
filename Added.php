<?php 
session_start();
if (!isset($_SESSION['user_id']))
{
	require('login_tools.php');
	load();
}
$page_title = 'Cart Addition';
include ('includes/header.html');
if (isset($_GET['id'])) $id= $_GET['id'];
require ('...\connect_db.php');
$q = "SELECT * FROM shop WHERE item_id = $id";
$r = mysqli_query($dbc,$q);
if (mysqli_num_rows($r)==1)
{
	$row = mysli_fetch_array($r, MYSQLI_ASSOC);
	if (isset($_SESSION['cart']['$id']))
	{
		$_SESSION['cart']['id']['quanity']++;
		echo '<p>Another'.$row["item_name"].
		'has been added to  your cart</p>';
	}
	else
    {
     $_SESSION['cart']['$id']=
     array ('quanity => 1,'price'=>$row['item_price]);
     echo'<p>A'.$row["item_name"].
     'has been added to your cart</p>';
    }
    mysqli_close($dbc);
    include ('inludes/footer.html')
 ?>

// Add hyperlinks to your other pages
