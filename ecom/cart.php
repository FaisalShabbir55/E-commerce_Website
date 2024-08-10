<?php
session_start();

// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the cart table exists, create it if it doesn't
$createTableQuery = "CREATE TABLE IF NOT EXISTS cart (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    product_id INT(11) NOT NULL
)";

if ($conn->query($createTableQuery) !== true) {
    echo "Error creating table: " . $conn->error;
    exit;
}

// Check if a product ID is provided and add it to the cart
if (isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];
    
    // Insert the product ID into the cart table
    $insertQuery = "INSERT INTO cart (product_id) VALUES ($product_id)";
    
    if ($conn->query($insertQuery) !== true) {
        echo "Error adding product to cart: " . $conn->error;
        exit;
    }
    
    // Redirect to the cart page
    header("Location: cart.php");
    exit;
}

// Display the cart contents
echo "Cart Contents:<br>";

$selectQuery = "SELECT * FROM cart";

$result = $conn->query($selectQuery);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Retrieve the product details from the products table based on the product ID
        $product_id = $row['product_id'];
        $productQuery = "SELECT * FROM products WHERE id = $product_id";
        $productResult = $conn->query($productQuery);
        
        if ($productResult->num_rows > 0) {
            $product = $productResult->fetch_assoc();
            // Display the product details
            echo "Product ID: " . $product['id'] . "<br>";
            echo "Product Name: " . $product['name'] . "<br>";
            echo "Product Price: " . $product['price'] . "<br>";
            echo "<br>";
        }
    }
} else {
    echo "Your cart is empty.";
}

// Link to add more products
echo '<a href="cart.php?add_to_cart=123">Add Product 123 to Cart</a>';

// Close the database connection
$conn->close();
?>