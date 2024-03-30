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

    input[type="text"], input[type="number"], input[type="decimal"] {
        width: 100%; /* Adjust the width as needed */
        padding: 8px; /* Adjust the padding as needed */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }

    textarea {
        width: 100%; /* Adjust the width as needed */
        height: 50px; /* Adjust the height as needed */
        padding: 8px; /* Adjust the padding as needed */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    }


 select {
        width: 100%; /* Adjust the width as needed */
        padding: 8px; /* Adjust the padding as needed */
        box-sizing: border-box; /* Include padding and border in the element's total width and height */
    
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
	
	<!-- Navigation Bar -->
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
	

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br>';
echo '<br><div class="text-center"><h3>Update Product Details</h3></div><br>';


if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

# Check for a item name.
  if ( empty( $_POST[ 'item_id' ] ) )
  { $errors[] = 'Update item ID.' ; }
  else
  { $item_id = mysqli_real_escape_string( $link, trim( $_POST[ 'item_id' ] ) ) ; }
  
  # Check for a item name.
  if ( empty( $_POST[ 'product_item_id' ] ) )
  { $errors[] = 'Update item name.' ; }
  else
  { $n = mysqli_real_escape_string( $link, trim( $_POST[ 'product_item_id' ] ) ) ; }

  # Check for a item description.
  if (empty( $_POST[ 'item_desc' ] ) )
  { $errors[] = 'Update item description.' ; }
  else
  { $d = mysqli_real_escape_string( $link, trim( $_POST[ 'item_desc' ] ) ) ; }

# Check for a item price.
  if (empty( $_POST[ 'img_id' ] ) )
  { $errors[] = 'Update image address.' ; }
  else
  { $img = mysqli_real_escape_string( $link, trim( $_POST[ 'img_id' ] ) ) ; }
  
  # Check for a item price.
  if (empty( $_POST[ 'item_price' ] ) )
  { $errors[] = 'Update item price.' ; }
  else
  { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'item_price' ] ) ) ; }
 if ( empty( $errors ) ) 
  {
    $q = "UPDATE products SET item_id='$id', product_item_id='$n', item_desc='$d', img_id='$img', item_price='$p'  WHERE item_id='$id'";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
       header("Location: read.php");
    } else {
        echo "Error updating record: " . $link->error;
    }
  
    # Close database connection.
    
	mysqli_close($link); 
    exit();
  }
  # Or report errors.
  else 
  {  
    echo ' 
	<p>' ;
    foreach ( $errors as $msg )
    { echo "$msg " ; }
    echo 'Please try again.")</p>';
    # Close database connection.
    mysqli_close( $link );
  } 
  

}

# get the data to create a dropdown for the ID 
require('connect_db.php');
$query = "SELECT item_id FROM products ORDER BY item_id";
$result = mysqli_query($link, $query);
$options = "0";
while ($row = mysqli_fetch_assoc($result)) {
    $selected = isset($_GET['item_id']) && $_GET['item_id'] == $row['item_id'] ? 'selected' : '';
    $options .= "<option value='{$row['item_id']}' $selected>{$row['item_id']}</option>";}


# get the data to create a dropdown for the product item
require('connect_db.php');
$query = "SELECT product_item_ID, product_name FROM product_items ORDER BY product_name;";
$result = mysqli_query($link, $query);
$itemOptions = "0";
while ($row = mysqli_fetch_assoc($result)) {
    $selected = isset($_POST['product_item_ID']) && $_POST['product_item_ID'] == $row['product_item_ID'] ? 'selected' : '';
    $itemOptions .= "<option value='{$row['product_item_ID']}' $selected>{$row['product_name']}</option>";
}

# get the data to create a dropdown for the images
require('connect_db.php');
$query = "SELECT img_id, item_img FROM images ORDER BY item_img";
$result = mysqli_query($link, $query);
$imageOptions = "0";
while ($row = mysqli_fetch_assoc($result)) {
    $selected = isset($_GET['item_img']) && $_GET['item_img'] == $row['item_img'] ? 'selected' : '';
    $imageOptions .= "<option value='{$row['img_id']}' $selected>{$row['item_img']}</option>";
}



?>

	<form action="updatev2.php" method="post">
		<label for="item_id">Product id:</label><br>
		<select type="number" name="item_id">
        <?php echo $options; ?>
		</select>
		<br>
		<label for="product_item_id" class="form-label">Product Name:</label><br>
        <select type="number" id="product_item_id" name="product_item_id">
            <option value="">-- Select Option --</option>
			<?php echo $itemOptions; ?>
          </select>
		
		<label for="item_desc">Update Product Description</label>
		<input type="text" name="item_desc" value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>">
		<br>
		
        <label for="img_id" class="form-label">Image:</label><br>
        <select type="number" id="img_id" name="img_id">
            <option value="">-- Select Option --</option>
            <?php echo $imageOptions; ?>
        </select>
		<br>
		<br>
		<label for="item_desc">Update Product Price</label>
		<input type="decimal" name="item_price" min="0" step="0.01" value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>">
				
		<br>
		<br>
		<input type="submit" value="Update Record"></p>
	</form><!-- closing form -->
	<br>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	</body>

</html>
