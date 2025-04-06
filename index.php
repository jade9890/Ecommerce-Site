<?php
session_start();
    include("connection.php");
    include("functions.php");


    //$user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <a href="createAccount.php">Create Account</a> 
        <a href="login.php">Login</a>
        <a href="cart.php">View Cart</a>
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
              </svg>
    
    </nav>
    
    <h1>final project yay!! shopping</h1>


    <div id="products">
        <!-- Example Product (Repeat for 20 products) -->
        <div class="container">
            <div class="cell">
                <img src="images/2697.jpg" alt="Blue Tank-Top">
                <h2>Blue Tank-Top</h2>
                <p>Price: $10</p>
                <button onclick="addToCart('Blue Tank-Top', 10)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/2699.jpg" alt="Pink Tank-Top">
                <h2>Pink Tank-Top</h2>
                <p>Price: $10</p>
                <button onclick="addToCart('Pink Tank-Top', 10)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/2700.jpg" alt="White T-Shirt">
                <h2>White T-Shirt</h2>
                <p>Price: $10</p>
                <button onclick="addToCart('White T-Shirt', 10)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/16804.jpg" alt="Pink T-Shirt">
                <h2>Pink T-Shirt</h2>
                <p>Price: $8</p>
                <button onclick="addToCart('Pink T-Shirt', 8)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/3895.jpg" alt="Minnie Shirt">
                <h2>Minnie Shirt</h2>
                <p>Price: $20</p>
                <button onclick="addToCart('Minnie Shirt', 20)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/16805.jpg" alt="Black and White Shorts">
                <h2>Black and White Shorts</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Black and White Shorts', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/16806.jpg" alt="Red and White Shorts">
                <h2>Red and White Shorts</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Red and White Shorts', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17609.jpg" alt="White Design Tee">
                <h2>White Design Tee</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('White Design Tee', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17612.jpg" alt="Grey Design Tee">
                <h2>Grey Design Tee</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Grey Design Tee', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17618.jpg" alt="Black Pants">
                <h2>Black Pants</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Black Pants', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17619.jpg" alt="White Pants">
                <h2>White Pants</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('White Pants', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17620.jpg" alt="Red Pants">
                <h2>Red Pants</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Red Pants', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/17621.jpg" alt="Pink Pants">
                <h2>Pink Pants</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Pink Pants', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/18166.jpg" alt="Pink Dress">
                <h2>Pink Dress</h2>
                <p>Price: $25</p>
                <button onclick="addToCart('Pink Dress', 25)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/24986.jpg" alt="White Girls Shirt">
                <h2>White Girls Shirt</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('White Girls Shirt', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/24992.jpg" alt="Pink Shorts">
                <h2>Pink Shorts</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Pink Shorts', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/24993.jpg" alt="Navy Shorts">
                <h2>Navy Shorts</h2>
                <p>Price: $15</p>
                <button onclick="addToCart('Navy Shorts', 15)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/25520.jpg" alt="White Long Sleeve">
                <h2>White Long Sleeve</h2>
                <p>Price: $20</p>
                <button onclick="addToCart('White Long Sleeve', 20)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/27196.jpg" alt="Yellow Dress">
                <h2>Yellow Dress</h2>
                <p>Price: $25</p>
                <button onclick="addToCart('Yellow Dress', 25)">Add to Cart</button>
            </div>
            <div class="cell">
                <img src="images/29166.jpg" alt="Grey Dress">
                <h2>Grey Dress</h2>
                <p>Price: $25</p>
                <button onclick="addToCart('Grey Dress', 25)">Add to Cart</button>
            </div>

            
        </div>
    </div>

    </div>
    <br>
    
    <script src="script.js"></script>
</body>
</html>