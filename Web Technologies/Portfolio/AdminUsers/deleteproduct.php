<?php
require('connect_db.php');

if (isset($_GET['item_id'])) {
    $item_id = $_GET['item_id'];
    // Prepare a delete statement
    $sql = "DELETE FROM view_products WHERE item_id=?";
    
    if ($stmt = mysqli_prepare($link, $sql)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $item_id_param);
        
        // Set parameters
        $item_id_param = $item_id;
        
        // Attempt to execute the prepared statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to read.php after successful deletion
            header("Location: readproduct.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($link);
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else {
    // If item_id is not set, show an error message or redirect to an error page
    echo "Item ID not provided.";
}
?>
