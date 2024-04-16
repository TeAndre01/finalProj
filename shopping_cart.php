<?php
session_start();

// Include database connection file
include_once 'db_connection.php';

// Check if the 'cart' session variable exists
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    // Redirect to homepage or display a message if the cart is empty
    header('location: index.php');
    exit();
}

// Fetch cart items from the database based on the product IDs stored in the session
$cart_items = array();
foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $query = "SELECT * FROM products WHERE id = $product_id";
    $result = mysqli_query($conn, $query);
    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
        $product['quantity'] = $quantity;
        $cart_items[] = $product;
    }
}

// Calculate total price
$total_price = 0;
foreach ($cart_items as $item) {
    $total_price += $item['price'] * $item['quantity'];
}

// Process checkout if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process checkout logic here (e.g., update inventory, create order in database, etc.)
    // After successful checkout, you can redirect the user to a confirmation page
    // and clear the cart session variable
    // Example:
    // unset($_SESSION['cart']);
    // header('location: checkout_confirmation.php');
    // exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Amanzimtoti.com</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
       
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid" >
                <a class="navbar-brand" href="#">Amanzimtoti.com</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="homePage.php">Home</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="aboutPage.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">Shopping Cart</a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <button>
                        <a class="nav-link" href="login.php">Login</a>
                    </button>
                    <button>
                        <a class="nav-link" href="register.php">Register</a>
                    </button>
                </span>
                </div>
            </div>
        </nav>
    </header>

    <h1 class="container">Shopping Cart</h1>
    <section class="container">
        <?php if (!empty($cart_items)) : ?>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart_items as $item) : ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo '$' . $item['price']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo '$' . ($item['price'] * $item['quantity']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>Total Price: <?php echo '$' . $total_price; ?></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <button type="submit" name="checkout_btn">Proceed to Checkout</button>
        </form>
        <?php else : ?>
        <p>Your shopping cart is empty.</p>
        <?php endif; ?>
    </section>
    <footer>
        <p>&copy; 2024 Amanzimtoti.com. All rights reserved.</p>
    </footer>
</body>
</html>
