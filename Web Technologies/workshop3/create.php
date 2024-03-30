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



    /* Adjust the size of textarea */
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
	
<body>

<?php 
echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # Connect to the database.
    require('connect_db.php');

    # Initialize an error array.
    $errors = array();

    # Check for item name .
    if (empty($_POST['product_item_id'])) {
        $errors[] = 'Enter the item name.';
    } else {
        $n = mysqli_real_escape_string($link, trim($_POST['product_item_id']));
    }

    # Check for a item description.
    if (empty($_POST['item_desc'])) {
        $errors[] = 'Enter the item description.';
    } else {
        $d = mysqli_real_escape_string($link, trim($_POST['item_desc']));
    }

    # Check for a item image.
    if (empty($_POST['img_id'])) {
        $errors[] = 'Enter the item image.';
    } else {
        $img = mysqli_real_escape_string($link, trim($_POST['img_id']));
    }

    # Check for a item price.
    if (empty($_POST['item_price'])) {
        $errors[] = 'Enter the item price.';
    } else {
        $p = mysqli_real_escape_string($link, trim($_POST['item_price']));
    }

    # On success data into my_table on database.
    if (empty($errors)) {
        $q = "INSERT INTO products (product_item_id, item_desc, img_id, item_price) VALUES ('$n','$d', '$img', '$p' )";
        $r = @mysqli_query($link, $q);
        if ($r) {
            echo '<p>New record created successfully</p>
                    <a href="create.php">Add Records</a>  |  <a href="read.php">Read Records</a>  |  <a href="update.php">Update Record</a>  | <a href="readproduct.php">Delete Record</a>';
        }

        # Close database connection.
        mysqli_close($link);

        exit();
    } else {
        echo '<p>The following error(s) occurred:</p>';
        foreach ($errors as $msg) {
            echo "$msg<br>";
        }
        echo '<p>Please try again.</p></div>';
        # Close database connection.
        mysqli_close($link);
    }
}

# get the data to create a dropdown for the product item
require('connect_db.php');
$query = "SELECT product_item_ID, product_name FROM view_product_items ORDER BY product_name";
$result = mysqli_query($link, $query);
$itemOptions = "0";
while ($row = mysqli_fetch_assoc($result)) {
    $selected = isset($_POST['product_item_ID']) && $_POST['product_item_ID'] == $row['product_item_ID'] ? 'selected' : '';
    $itemOptions .= "<option value='{$row['product_item_ID']}' $selected>{$row['product_name']}</option>";
}

# get the data to create a dropdown for the images
require('connect_db.php');
$query = "SELECT img_id, item_img FROM view_images ORDER BY item_img";
$result = mysqli_query($link, $query);
$imageOptions = "0";
while ($row = mysqli_fetch_assoc($result)) {
    $selected = isset($_GET['item_img']) && $_GET['item_img'] == $row['item_img'] ? 'selected' : '';
    $imageOptions .= "<option value='{$row['img_id']}' $selected>{$row['item_img']}</option>";
}
?>

<!-- Form details -->
<div class="text-center">
    <h3>Create New Product Entry</h3>
</div><br><br>
<div class="container">
<form action="create.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="product_item_id" class="form-label">Product Name:</label><br>
        <select type="number" id="product_item_id" name="product_item_id">
            <option value="">-- Select Option --</option>
			<?php echo $itemOptions; ?>
          </select>
        <br>
    </div>
    <div class="mb-3">
        <label for="item_desc" class="form-label">Description:</label>
        <textarea id="item_desc" name="item_desc" required><?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?></textarea><br>
    </div>
    <div class="mb-3">
        <label for="img_id" class="form-label">Image:</label><br>
        <select type="number" id="img_id" name="img_id">
            <option value="">-- Select Option --</option>
            <?php echo $imageOptions; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="item_price" class="form-label">Price:</label><br>
        <input type="number" style="height:40px; width: 100%;" id="item_price" name="item_price" min="0" step="0.01"
               required value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>"><br>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity

</body>
</html>