<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Luxury Candles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style>
	
		.card{
			margin-top: 10px;
			margin-bottom: 20px;
		}
				
        .navbar-nav .nav-link {
            color: blue !important;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: #007bff !important;
        }

        .navbar-toggler-icon {
            color: blue !important;
        }

        .navbar-toggler {
            border-color: blue !important;
        }

        .navbar-toggler:focus {
            outline: none !important;
        }

	</style>

<body>

	<nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom">
		<div class="container-fluid">

			<a class="navbar-brand" href="#"><img src="img/logoNav.jpg" class="rounded" alt="Logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">		
				
				<span class="navbar-text">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="create.php">Create</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="read.php">Read</a>
						</li>
							<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="update.php">Update</a>
						</li>
							<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="readproduct.php">Delete</a>
						</li>
					</ul>
				</span>
			</div>
		</div>
	</nav>
<div class="container">

<?php 

# Open database connection.
require ( 'connect_db.php' );

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

		<p class="card-text">&pound '. $row['item_price'].'</p>
	  </div>
	  <div class="card-footer">
		<div class="btn-wrapper text-center d-flex justify-content-between">
			<div class="mb-3">
				<button type="button" class="btn btn-dark" style="width: 100px; height: 50px;" onclick="window.location.href=\'update.php?item_id=' . $row['item_id'] . '\'">Edit</button>
			</div>
			
			<div class="mb-3">
				<button type="button" class="btn btn-danger" style="width: 100px; height: 50px;" onclick="window.location.href=\'delete.php?item_id=' . $row['item_id'] . '\'">Delete</button>
			</div>
		</div>
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

?>	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
