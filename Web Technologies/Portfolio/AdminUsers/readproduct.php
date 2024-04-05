    <?php
    # Connect to the database.
include ('include/heading2.html');
    require('connect_db.php');

    $q = "SELECT p.item_id, p.item_desc, p.item_price, pi.product_name, i.item_img FROM view_products p JOIN view_product_items pi ON p.product_item_id = pi.product_item_id JOIN view_images i ON p.img_id = i.img_id;";
    $r = @mysqli_query($link, $q);
    if (mysqli_num_rows($r) != 0) {

        echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br>';

        echo '<h2><div class="text-center">Product List</div></h1>
            <table class="table">
                <thead>
                    <tr><th>Item ID</th><th>Item Name</th><th>Description</th><th>Image</th><th>Price</th></tr>
                </thead>
                <tbody>';

        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<tr>
                    <td>' . $row['item_id'] . '</td>
                    <td>' . $row['product_name'] . '</td>
                    <td>' . $row['item_desc'] . '</td>
                    <td><img src="' . $row['item_img'] . '" alt="product" width="50" height="50"></td>
                    <td>£' . $row['item_price'] . '</td>
                    <td><a href="deleteproduct.php?item_id=' . $row['item_id'] . '">Delete</a></td>
                </tr>';
        }
        echo '</tbody></table>';
    }

    # Close database connection.
    mysqli_close($link);

	include ('include/footer.html');
	
    ?>

