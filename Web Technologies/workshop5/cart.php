<?php # DISPLAY SHOPPING CART PAGE.

# Set page title and display header section.
include ('include/session-cart.php');

# Check if form has been submitted for update.
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
  # Update changed quantity field values.
  foreach ( $_POST['qty'] as $item_id => $item_qty )
  {
    # Ensure values are integers.
    $id = (int) $item_id;
    $qty = (int) $item_qty;

    # Change quantity or delete if zero.
    if ( $qty == 0 ) { unset ($_SESSION['cart'][$id]); } 
    elseif ( $qty > 0 ) { $_SESSION['cart'][$id]['quantity'] = $qty; }
  }
}

# Initialize grand total variable.
$total = 0; 

# Display the cart if not empty.
if (!empty($_SESSION['cart']))
{
  # Connect to the database.
  require ('connect_db.php');
  

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br><br>';

  
  # Retrieve all items in the cart from the 'products' database table.
  $q = "SELECT p.item_id, p.item_desc, p.item_price, pi.product_name, i.item_img FROM view_products p JOIN view_product_items pi ON p.product_item_id = pi.product_item_id JOIN view_images i ON p.img_id = i.img_id WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  
  
  # Display body section with a form and a table.
  echo '<form action="cart.php" method="post">
			<table class="table">
				<thead>
				<tr><th>Items in your cart</th></tr>
				</thead>
				<tbody>
				<tr>';
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    # Calculate sub-totals and grand total.
    $subtotal = $_SESSION['cart'][$row['item_id']]['quantity'] * $_SESSION['cart'][$row['item_id']]['price'];
    $total += $subtotal;

    # Display the row/s:
    echo "<tr><td>{$row['product_name']}</td>
	<td><img src='{$row['item_img']}' alt='Product Image' style='max-width: 50px;'></td>		
	<td><input type=\"text\" size=\"3\" name=\"qty[{$row['item_id']}]\" value=\"{$_SESSION['cart'][$row['item_id']]['quantity']}\"></td>
    <td>@ {$row['item_price']} = </td> 
	
	<td> &pound ".number_format ($subtotal, 2)."</td></tr>";
  }
  # Close the database connection.
  mysqli_close($link); 
  
  # Display the total.
  echo ' <tr><td></td><td></td><td></td><td></td>
  <td>Total = &pound '.number_format($total,2).'</td>
  </tr>
  <tr><td></td>
  <td>
	<a href="home.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Continue Shopping</a>
  </td>
  <td><input type="submit" name="submit" class="btn btn-light btn-block" value="Update My Cart"></td>
  <td><a href="checkout.php?total='.$total.'" class="btn btn-light btn-block">Checkout Now</a></td>
  <td></td>
  </tr>
  <tr><td></td><td></td><td></td><td></td><td></td></tr>
  
  </table>
  </form>';
}
else
# Or display a message.

{

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br><br>';

	echo '<div class="alert alert-secondary" role="alert">
				<p>Your cart is currently empty.</p>
				<p><a href="home.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Go Shopping</a></p>
				</div>
		</div>' ; }


# Display footer section.
include ( 'include/footer.html' ) ;

?>