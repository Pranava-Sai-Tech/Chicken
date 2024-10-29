<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data= check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Chicken Store</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/website favicon.jpg">
</head>
<body>
    <style>
        body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f429;
        }

        .navbar {
            display: flex;              /* Use Flexbox for layout */
            justify-content: space-between; /* Space between left and right sections */
            align-items: center;        /* Center vertically */
            background-color: #333;     /* Background color of the navbar */
            padding: 10px 20px;    
        }
        /* Style for links in the navbar */
        .navbar-left a {
            color:#4CAF50;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block
        }
        .navbar-right a {
            color:#4CAF50;
            padding: 14px 20px;
            text-decoration: none;
            display: inline-block;
        }

        /* Change the color on hover */
        .navbar a:hover {
            background-color: #555;
            color: white;
            border-radius: 5px;
        }
        /* Active/current link styling */
      
        header {
            background-image:url('images/chickenfry.jpg'); 
            background-size: cover ;
            background-repeat: no-repeat;
            background-position:center; 
            color: rgb(226, 69, 16);
            padding: 180px;
            text-align:center;
        }
        header button {
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
        .navbar .active {
            background-color: #4CAF50; /* Highlight active link */
            color: white;
            border-radius: 5px;
        }
        header h1{
            position:relative;
            top: 50px; /* Distance from top */
            right: 40px; /* Distance from right */ 
            font-size: 50px;
            color: #333;
            font-weight: 800;
        }
        header p{
            position:relative;
            top: 60px;
            font-size: 30px;
            color:#ffffff;
        }
        section {
            padding: 10px;
            background-color: rgba(45, 169, 200, 0.279);
            margin: 0px;  
        }
        h2 {
            text-align: center;
            color: #ff6f61;
        }
        .aboutshop{   
            background-image: url('images/chickenman.jpg');
            background-size:auto 100%;
            background-repeat: no-repeat;
            background-position:right center;
            padding: 30px;
            margin: 10px 0; 
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
        
        .product img {
            width: 100%;
            height: 100%;
            
        }
        .paymentdel{
            text-align: center;
            padding: 0px;
            margin: 0px 0;
        }
        .favicons{
            float:none;
            margin: 0px;
            text-align: center;
            
        }
        .favicons img{
            width: 50px; /* adjust the width and height to your liking */
            height: 50px;
            margin: 5px;
            display: inline-block;
            cursor: pointer;
        }

        li {
            margin-bottom: 10px; /* Add space between each list item */
            font-size: 16px;
        
        }
        .details{
            padding: 5px;
            text-align: center;
        }
        .deliverydel{

            padding: 20px;
            margin: 10px 0;
        }
        .deliverydel ul{
            list-style:disc;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
        @media (max-width: 768px) {


        header {
            padding: 100px 20px; /* Reduce padding for smaller screens */
        }

        header h1 {
            font-size: 36px; /* Smaller font size */
        }

        header p {
            font-size: 20px; /* Smaller font size */
        }

        .product {
            width: 90%; /* Take up more space on smaller screens */
            margin: 10px; /* Reduce margin */
        }

        .product img {
            width: 100%; /* Take up full width */
            height: auto; /* Maintain aspect ratio */
        }

        .favicons img {
            width: 30px; /* Smaller icon size */
            height: 30px;
        }

        .deliverydel img {
            width: 100%; /* Take up full width */
            height: auto; /* Maintain aspect ratio */
        }
    }

    @media (max-width: 480px) {
        .navbar {
            display: flex
            flex-direction: column; /* Stack links vertically */
        }

        .navbar-left, .navbar-right {
            display: flex
            flex-direction: column; /* Stack links vertically */
        }
        .navbar-left a {
            color:#4CAF50;
            padding: 20px 30px;
            text-decoration: none;
            display: inline-block
        }
        .navbar-right a {
            color:#4CAF50;
            padding:20px 30px;
            text-decoration: none;
            display: inline-block;
        }
        header button {
            position:absolute;
            background-color: white;
            color: #ff6f61;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            top: 300px; /* Distance from top */
            right: 40px; /* Distance from right */
        }
        header h1{
            position:relative;
            top: 50px; /* Distance from top */
            right: 20px; /* Distance from right */ 
            font-size: 50px;
            color: #333;
            font-weight: 800;
        }
        .aboutshop{   
            background-image: url('images/chickenman.jpg');
            background-size:auto 100%;
            background-repeat: no-repeat;
            background-position:right center;
            margin: 10px 0; 
        }
        .product {
            width: 100%; /* Take up full width */
           /* Constrain the maximum width */
            margin: 10px auto; /* Center container */
            padding: 10px;
            box-sizing: border-box; /* Include padding in the width */
            text-align: center; /* Center-align text */
            border: 5px solid #0000005f; /* Optional: Add border */
            border-radius: 8px; /* Optional: Rounded corners */
            background-color: #e6f2ff; 
        }

        .product img {
            width: 100%; /* Make image responsive */
            max-width: 300px; /* Set maximum width for image */
            height: auto; /* Keep image aspect ratio */
            margin: 0 auto; /* Center image */
            display: block;
            border-radius: 8px; /* Optio*/
        }

        .favicons img {
            width: 20px; /* Even smaller icon size */
            height: 20px;
        }

        .deliverydel img {
            width: 90%; /* Take up full width */
            height: auto; /* Maintain aspect ratio */
        }
    }

    </style>
    <!-- Navigation Bar -->
     <nav class="navbar">
        <div class="navbar-left">
            <a class="active" href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#products">Shop Us</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="navbar-right">
            <a href="signup.php">Signup</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>
        </div>
     </nav>    
    <div id="home"></div>
    <!-- Header Section -->  
    <header>
        <h1>Online Chicken Delivery</h1>
        <p>Experience the freshest, highest quality poultry and meat delivered straight to your door.</p>
        <div class="shopnow">
        <a href="shopnow.php">
            <button>Shop Now</button>
        </a>   
        </div>     
    </header>    
    <!-- About Us Section -->
    <section id="about">
        <div class="aboutshop">
            <h2>About Us</h2>
            <p>We provide the freshest, high-quality poultry and meat. Our commitment to quality ensures you receive the best.</p>
            <ul>
                <li>Commitment to Quality</li>
                <li>Freshness Guaranteed</li>
                <li>Wide Selection</li>
            </ul>
        </div>    
    </section>

    <!-- Products Section -->
    <section id="products">
        <h2>Our Premium Chicken Cuts</h2>
        <div class="product">
            <img src="images/chickenbody.jpg"
            <h3>Whole Chickens</h3>
            <p>Perfect for roasting, grilling, or frying.</p>
        </div>
        <div class="product">
            <img src="images/chickenbreast.jpg"
            <h3>Chicken Breasts</h3>
            <p>Versatile and lean, ideal for stir-fries or salads.</p>
        </div>
        <div class="product">
            <img src="images/chickenthigh.jpg"
            <h3>Chicken Thighs</h3>
            <p>Juicy and flavorful for grilling or roasting.</p>
        </div>
        <div class="product">
            <img src="images/chickenlegs.jpg"
            <h3>Chicken Legs</h3>
            <p>very tasty and easy to cook and roast.</p>
        </div>
        <div class="product">
            <img src="images/wings.png"
            <h3>Chicken Wings</h3>
            <p>crispy, delicious, and easy to cook, making them a perfect snack or meal option.</p>
        </div>
        <div class="product">
            <img src="images/drumstick.jpg"
            <h3>Chicken Drumsticks</h3>
            <p>juicy, tender, and simple to cook, offering a flavorful bite every time.</p>
        </div>
        <div class="product">
            <img src="images/skinless.png"
            <h3>Chicken skinless</h3>
            <p>lean, tender, and easy to cook, perfect for healthy and flavorful meals.</p>
        </div>
        <div class="product">
            <img src="images/pieces.png"
            <h3>Chicken small pieces</h3>
            <p>quick to cook, versatile, and perfect for stir-fries, curries, or snacks.</p>
        </div>
    </section>

    <section id="payment">
        <div class="paymentdel">
            <h2>Secure Payment Options</h2>
            <p>We accept Phonepe,Gpay,Paytm and cash on delivery.</p>
        </div> 
        <div class="favicons">
            <img src="images/phonepe.png" alt="Favicon 1">
            <img src="images/gpay.jpg" alt="Favicon 2">
            <img src="images/paytm.png" alt="Favicon 3">
            <img src="images/cod.png" alt="Favicon 4">
        </div>   
    </section>

    <section id="contact">
        <div class="details">
            <h2>Contact Information</h2>
            <p>PH.no: 8897595016</p>
            <p>Email: kalagatla@gmail.com</p>
        </div>
    </section>

    <!-- Delivery Section -->
    <section id="delivery">
        <div class="deliverydel">
            <h2>Fast, Reliable Delivery</h2>
            <img src="images/orderprocess.png">
            <ul>
                <li>Order Placement: Place your order online, from 6:00 am to 10:00 pm.</li>
                <li>Order Processing: Orders are carefully processed for safe delivery.</li>
                <li>Delivery: Delivered right to your doorstep.</li>
            </ul>
        </div>    
    </section>

    <!-- Footer Section --> 
    <footer>
        <p>&copy; 2024 online chicken delivery @pranavasai.
             All Rights Reserved.</p>
    </footer>
</body>
</html>
