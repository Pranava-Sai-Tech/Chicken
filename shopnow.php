<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chicken Products</title>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Select all product containers
            const products = document.querySelectorAll('.product');

            //Iterate over each product to add functionality
            products.forEach(function (product) {
                // Get the elements within each product
                const quantityElement = product.querySelector('.quantity');
                const plusButton = product.querySelector('.plus');
                const minusButton = product.querySelector('.minus');

                // Initialize the quantity value for each product
                let quantity = 0;

                // Function to update the quantity display
                function updateQuantityDisplay() {
                    if (quantity === 0) {
                        quantityElement.textContent = ' ';  // No number shown when quantity is 0
                    } else if (quantity === 1) {
                        quantityElement.textContent = '1'; // Display "1"
                    } else {
                        quantityElement.textContent = quantity;  // Display the number
                    }
                }

                // Initial display update
                updateQuantityDisplay();

                // Increase quantity when "+" button is clicked
                plusButton.addEventListener('click', function () {
                    quantity++;
                    updateQuantityDisplay();
                });

                // Decrease quantity when "-" button is clicked
                minusButton.addEventListener('click', function () {
                    if (quantity > 1) {
                        quantity--;
                    } else if (quantity === 1) {
                        // Clear the quantity display when it goes below 1
                        quantity = 0;
                    }
                    updateQuantityDisplay();
                });
            });
        });
    </script>
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: aliceblue;
        }
        header{
            text-align: center;
        }
        header p{
            font-size: 25px;
        }
        .product { 
            cursor: pointer;
            width: 300px;
            margin: 30px;
            border: 5px solid #0000005f;
            padding: 10px;
            box-sizing: border-box;
            display: inline-block;
            text-align: center;
        }
        .product img{
            width: 100%;
            height: 100%;
        }
        .add-to-cart{
            cursor:pointer;
        }
        .minus{
            cursor:pointer;
        }
        .plus{
            cursor: pointer;
        }
        header button {
            position:absolute;
            background-color: white;
            color: #ff6f61;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            top: 70px; /* Distance from top */
            right: 40px; /* Distance from right */
        }
        .contact button{
            position:absolute;
            background-color: white;
            color: #ff6f61;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            top: 120px; /* Distance from top */
            right: 40px; /* Distance from right */
        }
    </style>
    <header>
        <h1>Online Chicken Delivery</h1>
        <p>Select Items To Order</p> 
        <div class="Website">
            <a href="index.php">
                <button>Website</button>
            </a> 
        </div>  
        <div class="contact">
            <a href="index.php#contact">
                <button>Contact</button>
            </a>    
        </div>  
    </header> 
   
    <div class="container">
        <div class="product">
            <img src="images/chickenbody.jpg" alt="Whole Chicken">
            <h3>Whole Chickens</h3>
            <p>Perfect for roasting, grilling, or frying.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/chickenbreast.jpg" alt="Chicken Breasts">
            <h3>Chicken Breasts</h3>
            <p>Versatile and lean, ideal for stir-fries or salads.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/chickenthigh.jpg" alt="Chicken Thighs">
            <h3>Chicken Thighs</h3>
            <p>Juicy and flavorful for grilling or roasting.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/chickenlegs.jpg" alt="Chicken Legs">
            <h3>Chicken Legs</h3>
            <p>very tasty and easy to cook and roast.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/wings.png" alt="Chicken Wings">
            <h3>Chicken Wings</h3>
            <p>crispy, delicious, and easy to cook, making them a perfect snack or meal option.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/drumstick.jpg" alt="Chicken Legs">
            <h3>Chicken Drumsticks</h3>
            <p>juicy, tender, and simple to cook, offering a flavorful bite every time.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/skinless.png" alt="Chicken skinless">
            <h3>Chicken skinless</h3>
            <p>lean, tender, and easy to cook, perfect for healthy and flavorful meals.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        <div class="product">
            <img src="images/pieces.png" alt="Chicken small pieces">
            <h3>Chicken small pieces</h3>
            <p>quick to cook, versatile, and perfect for stir-fries, curries, or snacks.</p>
            <div class="cart-buttons">
                <button class="minus">-</button>
                <span class="quantity">1</span>
                <button class="plus">+</button>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
        

    </div> 
</body>
</html>