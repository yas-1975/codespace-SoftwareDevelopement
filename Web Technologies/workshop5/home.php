<?php
	#Read session start file.
	include ('include/session-cart.php');

	# Open database connection.
	require ( 'connect_db.php' );


#Logo image 

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br><br>';
echo '<div class="container">
        <div class="row">';	



	echo '<div class="row">';	
	# Retrieve items from 'products' database table.
	$q = "SELECT p.item_id, p.item_desc, p.item_price, pi.product_name, i.item_img FROM view_products p JOIN view_product_items pi ON p.product_item_id = pi.product_item_id JOIN view_images i ON p.img_id = i.img_id;" ;
	$r = mysqli_query( $link, $q ) ;
	if ( mysqli_num_rows( $r ) > 0 )
	{
	# Display body section.

    while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
    {
        echo '
	
		<div class="col-md-3 d-flex justify-content-center">
			<div class="card" style="width: 20rem;">
				<div class="card-body text-center">
					<img src="'. $row['item_img'].'" class="card-img-top" alt="'. $row['product_name'].'">
				</div>
				<div class="card-footer bg-transparent border-white text-center">
					<h5 class="card-title">'. $row['product_name'].'</h5>		
					<p class="card-text">'. $row['item_desc'].'</p>
				</div>
                <div class="card-footer bg-transparent border-dark text-center">
                    <p class="card-text">&pound '. $row['item_price'].'</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="added.php?item_id='.$row['item_id'].'" class="btn btn-light btn-block" style="width: 100%;">Add to Cart</a>
                </div>
				
			</div>
		</div>
		';
	}	



	# Close database connection.
	mysqli_close( $link) ; 
	}
	# Or display message.
	else { echo '<p>There are currently no items in the table to display.</p>
	' ; }
	include ('include/footer.html');
?>