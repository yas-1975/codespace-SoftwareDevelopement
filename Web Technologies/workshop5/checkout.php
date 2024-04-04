<?php # DISPLAY CHECKOUT PAGE.
include ('include/session-cart.php');

# Check for passed total and cart.
if ( isset( $_GET['total'] ) && ( $_GET['total'] > 0 ) && (!empty($_SESSION['cart']) ) )
{
  # Open database connection.
  require ('connect_db.php');

  # Store buyer and order total in 'orders' database table.
  $q = "INSERT INTO view_orders ( user_id, total, order_date ) VALUES (". $_SESSION['user_id'].",".$_GET['total'].", NOW() ) ";
  $r = mysqli_query ($link, $q);
  
  # Retrieve current order number.
  $order_id = mysqli_insert_id($link) ;
  
  # Retrieve cart items from 'products' database table.
  $q = "SELECT p.item_id, p.item_desc, p.item_price, pi.product_name, i.item_img FROM view_products p JOIN view_product_items pi ON p.product_item_id = pi.product_item_id JOIN view_images i ON p.img_id = i.img_id WHERE item_id IN (";
  foreach ($_SESSION['cart'] as $id => $value) { $q .= $id . ','; }
  $q = substr( $q, 0, -1 ) . ') ORDER BY item_id ASC';
  $r = mysqli_query ($link, $q);

  # Store order contents in 'order_content' database table.
  while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
  {
    $query = "INSERT INTO view_order_content ( order_id, item_id, quantity, price )
    VALUES ( $order_id, ".$row['item_id'].",".$_SESSION['cart'][$row['item_id']]['quantity'].",".$_SESSION['cart'][$row['item_id']]['price'].")" ;
    $result = mysqli_query($link,$query);
  }
  
  # Close database connection.
  mysqli_close($link);

  # Display order number.
  echo "<div class=\"container\">
			<div class=\"alert alert-secondary\" role=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
				</button>Thanks for your order. Your Order Number Is #".$order_id."</p>
			</div>
		</div>";

  # Remove cart items.  
  $_SESSION['cart'] = NULL ;
}
# Or display a message.


else { echo '<div class=\"container\">
			<div class=\"alert alert-secondary\" role=\"alert\">
				<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
					<span aria-hidden=\"true\">&times;</span>
				</button>
				<p>There are no items in your cart.</p>
				</div>
			</div>' ; }
?>