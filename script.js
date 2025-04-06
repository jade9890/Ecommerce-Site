
//function to handle adding items to cart

function addToCart(name, price){
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingProductIndex = cart.findIndex(item => item.name === name);

    if (existingProductIndex !== -1) {
        // If the item is already in the cart, increase the quantity
        cart[existingProductIndex].quantity++;
    } else {
        // If the item is not in the cart, add it
        cart.push({ name: name, price: price, quantity: 1 });
    }
    localStorage.setItem('cart',JSON.stringify(cart));
    alert('successfully added to cart!');
}

