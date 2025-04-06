<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <a href="index.php">Back to Shop</a>
        <a href="createAccount.php">Create Account</a> 
        <a href="login.php">Login</a>
    </nav>

    <h1>Your Cart!</h1>

    <div id="cartItems">
        <!-- Cart items here -->
    </div>

    <br>
    <a href="index.php">Continue Shopping</a>

    <script>
        // Function to display the items in the cart
        function displayCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartItemsContainer = document.getElementById('cartItems');
            cartItemsContainer.innerHTML = ''; // Clear the current cart items

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Your cart is empty!</p>';
                return;
            }

            let totalPrice = 0;

            // Loop through the cart items and display them
            cart.forEach(item => {
                let itemDiv = document.createElement('div');
                itemDiv.classList.add('cart-item');
                itemDiv.innerHTML = `
                    <p>${item.name} (x${item.quantity}) - $${item.price * item.quantity}</p>
                    <button onclick="removeFromCart('${item.name}')">Remove</button>
                `;
                cartItemsContainer.appendChild(itemDiv);
                totalPrice += item.price * item.quantity;
            });

            // Display the total price
            let totalPriceDiv = document.createElement('div');
            totalPriceDiv.innerHTML = `<h3>Total: $${totalPrice}</h3>`;
            cartItemsContainer.appendChild(totalPriceDiv);
        }

        // Function to remove an item from the cart
        function removeFromCart(productName) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.name !== productName);
            localStorage.setItem('cart', JSON.stringify(cart));

            displayCart(); // Re-display the cart after removing an item
        }

        // Display the cart on page load
        displayCart();
    </script>
</body>
</html>
