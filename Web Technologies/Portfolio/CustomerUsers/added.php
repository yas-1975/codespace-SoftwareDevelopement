<?php

# Set page title and display header section.
include ('include/session-cart.php');


echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br><br>';

# Get passed product id and assign it to a variable.
if ( isset( $_GET['item_id'] ) ) $item_id = $_GET['item_id'] ; 

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve selective item data from 'products' database table. 
$q = "SELECT p.item_id, p.item_desc, p.item_price, pi.product_name, i.item_img 
		FROM view_products p JOIN view_product_items pi ON 
		p.product_item_id = pi.product_item_id JOIN view_images i ON p.img_id = i.img_id WHERE item_id = $item_id" ;
		
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );

  # Check if cart already contains one of this product id.
  if ( isset( $_SESSION['cart'][$item_id] ) )
  { 
    # Add one more of this product.
    $_SESSION['cart'][$item_id]['quantity']++; 
    echo '
	
	<div class="container">
			<div class="alert alert-secondary" role="alert">
				<p>Another '.$row["product_name"].' has been added to your cart</p>
				<a href="home.php">Continue Shopping</a> | <a href="cart.php">View Your Cart</a>
			</div>
		</div>';
  } 
  else
  {
    # Or add one of this product to the cart.
    $_SESSION['cart'][$item_id]= array ( 'quantity' => 1, 'price' => $row['item_price'] ) ;
    echo '<div class="container">
			<div class="alert alert-secondary" role="alert">
				<p>A '.$row["product_name"].' has been added to your cart</p>
			<a href="home.php">Continue Shopping</a> | <a href="cart.php">View Your Cart</a>
			</div>
		</div>' ;
  }
}

# Close database connection.
mysqli_close($link);
include ('include/footer.html');
?>