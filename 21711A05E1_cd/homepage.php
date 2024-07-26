<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Travel App - Home</title>
    <style>
/* Your existing CSS */
body {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #0f2024;
    color: white;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.header img {
    max-height: 50px;
}

.side {
    display: flex;
    align-items: center;
}

.side div {
    margin-right: 25px;
}

.side a {
    text-decoration: none;
    color: white;
    display: flex;
    align-items: center;
}

.icon {
    margin-right: 5px;
}

.header a {
    text-decoration: none;
    color: white;
}

.header-links {
    display: flex;
    justify-content: flex-end; 
}

.header-link {
    margin-left: 10px; 
}

.header p {
    margin: 5px;
    padding: 5px;
    cursor: pointer;
}

h2,
p {
    margin-left: 20px;
    text-align: center;
}

.icon {
    padding: 5px;
}
.booking-section {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    margin: 50px auto;
    text-align: center;
}
.options-container {
    margin-bottom: 20px;
    display: flex; 
    justify-content: center; 
} 
.option {
    margin: 0 10px;
    flex: 1; 
}
.option label {
    display: block;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
    background-color: #fff;
    color: #000;
    transition: background-color 0.3s, color 0.3s;
} 
.option label:hover {
    background-color: #000;
    color: #fff;
} 
.option input[type="radio"] {
    display: none;
}
.option input[type="radio"]:checked + label {
    background-color: #000;
    color: #fff;
}
.location-container {
    margin-bottom: 20px;
    text-align: center;
}

.location {
    margin-bottom: 10px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.location-label {
    margin-right: 10px;
    font-weight: bold;
}

.location input[type="text"] {
    width: 200px;
    padding: 10px;
    border: none;
    border-radius: 5px;
    margin-right: 5px;
}

.circle {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    margin-right: 10px;
}

.green {
    background-color: #28a745; 
}

.red {
    background-color: #dc3545; 
}

.search-button-container {
    text-align: center;
}

.search-button {
    background-color: #007bff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

.search-button img {
    height: 20px;
    vertical-align: middle;
    margin-right: 5px;
}

.search-button:hover {
    background-color: #0056b3;
}
.content {
    display: flex;
    justify-content: center;
    align-items: center;
}

.content div {
    text-align: center;
    flex: 1;
    margin: 0 5px; 
}

.content img {
    display: block;
    margin: 0 auto; 
    max-width: 150px;
}

.content p {
    text-align: center;
    margin: 0;
}

.cont-img {
    max-width: 180px; 
}

.content-2 {
    display: flex;
    justify-content: flex-end;
}

.sideby {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.content-1 {
    flex: 1;
    margin-right: 20px; 
    font-size: x-large;
}
.content-1 p {
    margin: 5px 0;
}
.content-2 {
    display: flex;
}

.content-2 div {
    margin-left: 10px; 
}

.content-2 div {
    flex: 0 0 auto;
    margin: 0 10px 0 0; 
}

.content-2 div img {
    margin-right: 40px; 
}

.head{
    font-size: xx-large ;
    text-align: left; 
    margin: 60px;  
}

footer {
    background-color: #f5f5f5;
    color: #333;
    padding: 5px 0;
    text-align: center;
}

.footer-container {
display: flex;
justify-content: space-between;
flex-wrap: wrap;
}

.footer-section {
flex: 1;
padding: 0 20px;
}

.social-icons a {
color: #333;
font-size: 20px;
margin-right: 40px;
}

.footer-section ul {
list-style: none;
padding: 0;
}

.footer-section ul li {
margin-bottom: 10px;
}

.footer-section ul li a {
color: #333;
text-decoration: none;
}

.subscribe-form {
display: flex;
}

.subscribe-form input[type="email"] {
width: 200px;
padding: 8px;
margin-right: 10px;
border: 1px solid #ccc;
}

.subscribe-form button {
background-color: #333;
color: #fff;
border: none;
padding: 8px 20px;
cursor: pointer;
}

.footer-bottom {
text-align: center;
margin-top: 20px;
}

.footer-bottom p {
margin: 5px 0;
}

.footer-bottom a {
color: #333;
}

.video-container {
    position: relative;
    text-align: center;
}

.video-container video {
    width: 100%;
    height: auto;
}
</style>
</head>
<body>
    <header>
        <div class="header">
            <img src="white.png" alt="Travel App Logo">
            <div class="side">
                <div>
                    <a href="electric-bike.html"><i class="fa-solid fa-bolt icon"></i>Electric-Bike</a>
                </div>
                <div>
                    <a href="bike.html"><i class="fa-solid fa-motorcycle icon"></i>Bike</a>
                </div>
                <div>
                    <a href="book-cab.html"><i class="fa-solid fa-car icon"></i>Book a Cab</a>
                </div>
                <div>
                    <a href="bookings.html"><i class="fa-solid fa-car-side icon"></i>Bookings</a>
                </div>
                <div>
                    <a href="logout.php"><i class="fa-solid fa-sign-out icon"></i>Logout</a>
                </div>
            </div>
        </div>
    </header>
    <div style="text-align:center; padding:0%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello  
            <?php 
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
            }
            ?>
            :)
        </p>
    </div>
    <div class="video-container">
        <video autoplay loop muted>
            <source src="Untitled design.mp4" type="video/mp4">
        </video>
        <br/>
        <br/>
        <br/>
        <div class="booking-section">
            <div class="options-container">
                <div class="option">
                    <input type="radio" id="daily" name="bookingType" checked>
                    <label for="daily">Daily</label>
                </div>
                <div class="option">
                    <input type="radio" id="rental" name="bookingType">
                    <label for="rental">Rental</label>
                </div>
                <div class="option">
                    <input type="radio" id="outstation" name="bookingType">
                    <label for="outstation">Outstation</label>
                </div>
            </div>
            <div class="location-container">
                <div class="location">
                    <div class="circle green"></div>
                    <span class="location-label"></span>
                    <input type="text" id="currentLocation" placeholder="Current Location">
                </div>
                <div class="location">
                    <div class="circle red"></div>
                    <span class="location-label"></span>
                    <input type="text" id="destination" placeholder="Enter Destination">
                </div>
            </div>
            <div class="search-button-container">
                <button class="search-button"><img src="search icon1.png" alt="Search Icon">Search for Cabs</button>
            </div>
        </div>
        <h2>Global mobility ecosystem driving communities forward</h2>
        <div class="content">
            <div>
                <img class="cont-img" src="white (3).png" alt="Travel App Logo">
                <h3>250+</h3>
                <p>Cities Covered</p>
                <p>Across India and UK</p>
            </div>
            <div>
                <img class="cont-img" src="white (1).png" alt="Travel App Logo">
                <h3>100cr+</h3>
                <p>Yearly rides</p>
                <p>customers every year</p>
            </div>
            <div>
                <img class="cont-img" src="white (2).png" alt="Travel App Logo">
                <h3>15cr+</h3>
                <p>Kilometer On all modes</p>
                <p>Distance Covered a year</p>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <h2>There's a ride for everyone</h2>
        <div class="content">
            <div>
                <img class="cont-img" src="white (4).png" alt="Travel App Logo">
                <h3>For any budget</h3>
                <p>From Bike to Auto</p>
                <p>Find a ride in budget</p>
            </div>
            <div>
                <img class="cont-img" src="white (5).png" alt="Travel App Logo">
                <h3>For any distance</h3>
                <p>Daily, monthly & Rentals</p>
                <p>Destinations Outside the city</p>
            </div>
            <div>
                <img class="cont-img" src="white (6).png" alt="Travel App Logo">
                <h3>For any duration</h3>
                <p>Easily plan a Day/Hour</p>
                <p> hour-based package from Rentals</p>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <h2 class="head">Insurance</h2>
        <div class="sideby">
            <div class="content-1">
                <p>Effective insurances for all your risks</p>
                <p>Your assets with our comprehensive insurance</p>
                <p>Whether it's safeguarding to your health,</p>
                <p>we offer a range of options to meet your needs.</p>
            </div>
            <div class="content-2">
                <div>
                    <img class="cont-img" src="insurance1 new.jpg" alt="Travel App Logo">
                    <h3>For Properties</h3>
                </div>
                <div>
                    <img class="cont-img" src="insurance 2.jpg" alt="Travel App Logo">
                    <h3>For Products</h3>
                </div>
                <div>
                    <img class="cont-img" src="insuance3.jpg" alt="Travel App Logo">
                    <h3>For Life</h3>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <h2 class="head"><b>Experience the new way of order food </b></h2>
        <div class="sideby">
            <div class="content-1">
                <p>Make hunger disappear with your go-to comfort food</p>
                <p>Dive into a world of culinary delights and be your ultimate food destination. Order now and make every meal a memorable experience!!</p>
            </div>
            <div class="content-2">
                <div>
                    <img class="cont-img" src="img 10.png" alt="Travel App Logo">
                </div>
                <div>
                    <img class="cont-img" src="img11.png" alt="Travel App Logo">
                </div>
                <div>
                    <img class="cont-img" src="img12.png" alt="Travel App Logo">
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <footer>
            <div class="footer-container">
                <div class="footer-section">
                    <h3>ROAD RIDE</h3>
                    <div class="social-icons">
                        <a href="#" class="fa-brands fa-instagram"></a>
                        <a href="#" class="fa-brands fa-twitter"></a>
                        <a href="#" class="fa-brands fa-youtube"></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Book a Cab</a></li>
                        <li><a href="#">Drive with Us</a></li>
                        <li><a href="#">Outstation</a></li>
                        <li><a href="#">Rental</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>About Us</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Media Centre</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Stay Updated</h3>
                    <form class="subscribe-form" action="#">
                        <input type="email" name="email" placeholder="Enter your email">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright ©2022 <a href="https://olaelectric.com/">Ride Rush Mobility Pvt Ltd.</a> All Rights Reserved.
                    <a href="https://olaelectric.com/notices">Notices</a> | 
                    <a href="https://olaelectric.com/privacy-policy">Privacy Policy</a> | 
                    <a href="https://olaelectric.com/terms-of-service">Terms of Service</a></p>
                <p>India ✓</p>
            </div>
        </footer>   
    </div>
</body>
</html>
