<?php #DISPLAY ORDER HISTORY PAY

# Set page title and display header section.
include ('include/session-cart.php');

require ('connect_history_db.php');

$user_id = $_SESSION['user_id'];

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br><br><br><br>';


// SQL query to fetch order history
$sql = "SELECT o.*, oc.*, p.*, pd.*, i.item_img 
        FROM Orders o 
        INNER JOIN order_content oc ON o.item_id = oc.order_id 
        INNER JOIN Products p ON oc.item_id = p.item_id 
        INNER JOIN images i ON p.img_id = i.img_id
        INNER JOIN Product_items pd ON p.product_item_id = pd.product_item_id
        WHERE o.user_id = $user_id
        ORDER BY oc.order_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display table header
    echo "<table border='3' style='margin: 0 auto; border-collapse: collapse; text-align: center;'>
            <tr>
                <th>Order No</th>
                <th>Order Date</th>
                <th>Product Name</th>
				<th>Product Description</th>
                <th>Image</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>";

    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr style='border: 1px solid black; text-align: center;'>
				<td style='width: 80px;'>" . $row["order_id"] . "</td>
                <td style='width: 150px;'>" . $row["order_date"] . "</td>
                <td style='width: 200px;'>" . $row["product_name"] . "</td>
				<td style='width: 300px;'>" . $row["item_desc"] . "</td>
				<td style='width: 100px;'><img src='" . $row["item_img"] . "' alt='Product Image' style='width:100px;height:100px;'></td>
                <td style='width: 80px;'>" . $row["quantity"] . "</td>
                <td style='width: 80px;'>£" . number_format($row["price"], 2) . "</td>
                <td style='width: 100px;'>£" . number_format($row["quantity"] * $row["price"], 2) . "</td>
              </tr>";    }
    echo "</table>";
} else {
	
	{ echo '<div class="alert alert-secondary" role="alert">
				<p>You have no historic orders.</p>
				<p><a href="home.php" class="btn btn-light btn-block" role="button" aria-pressed="true">Go Shopping</a></p>
				</div>
		</div>' ; }
}
$conn->close();

	include ('include/footer.html');
?>