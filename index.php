<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
   
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonial</a></li>
                <li><a href="#contact">Contact</a></li>
            <li><a href="mainpage.html" class="hero-btn">Logout</a></li>
            </ul>
            <div class="icon">
                <img class="logo" src="logo.png" width="110" height="50">
                 </div>
        </div>
    </nav>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
            <h1 class="main-title" id="home">Eat Right Food</h1>
            <p>Eat Healty, it is good for our health.</p>
            <a href="#food-menu" class="btn btn-primary">Menu</a>
        </div>
    </section>

    <section id="about">
        <div class="about-wrapper container">
            <div class="about-text">
                <p class="small">About Us</p>
                <h2>We've been making healthy food last for 10 years</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab
                    eos omnis, nobis dignissimos perferendis et officia architecto,
                    fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
                    maiores praesentium soluta alias asperiores saepe commodi
                    consequatur? Perferendis est placeat facere aspernatur!
                </p>
            </div>
            <div class="about-img">
                <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food" />
            </div>
        </div>
    </section>
    <section id="food">
        <h2>Types of food</h2>
        <div class="food-container container">
            <div class="food-type fruite">
                <div class="img-container">
                    <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="error" />
                    <div class="img-content">
                        <h3>Fruits</h3>
                        <a href="https://en.wikipedia.org/wiki/Fruit" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type vegetable">
                <div class="img-container">
                    <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="error" />
                    <div class="img-content">
                        <h3>Vegetabls</h3>
                        <a href="https://en.wikipedia.org/wiki/Vegetable" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
            <div class="food-type grin">
                <div class="img-container">
                    <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="error" />
                    <div class="img-content">
                        <h3>Beans</h3>
                        <a href="https://en.wikipedia.org/wiki/Grain" class="btn btn-primary" target="blank">learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="food-menu">
        <h2 class="food-menu-heading">Food Menu</h2>
        <div class="food-menu-container container">
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/wTLMsvSQ/food-menu1.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 1</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>

            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/sgzXPzzd/food-menu2.jpg" alt="error" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 2</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/8zbCtYkF/food-menu3.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 3</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/Yq98p5Z7/food-menu4.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 4</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/KYnDqxkP/food-menu5.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 5</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
            <div class="food-menu-item">
                <div class="food-img">
                    <img src="https://i.postimg.cc/Jnxc8xQt/food-menu6.jpg" alt="" />
                </div>
                <div class="food-description">
                    <h2 class="food-titile">Food Menu Item 6</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
                        quae.
                    </p>
                    <p class="food-price">Price: &#8377; 250</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <h2 class="testimonial-title">What Our Customers Say</h2>
        <div class="testimonial-container container">
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />
                        <p class="customer-name">Virat Kohli</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="https://i.postimg.cc/sxd2xCD2/female-photo1.jpg" alt="" />
                        <p class="customer-name">Anuska Sharma</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
            <div class="testimonial-box">
                <div class="customer-detail">
                    <div class="customer-photo">
                        <img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg" alt="" />
                        <p class="customer-name">Ben Stokes</p>
                    </div>
                </div>
                <div class="star-rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>
                <p class="testimonial-text">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                    voluptas cupiditate aspernatur odit doloribus non.
                </p>

            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact-container container">
            <div class="contact-img">
                <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="" />
            </div>

            <div class="form-container">
                <h2>Contact Us</h2>
                <input type="text" placeholder="Your Name" />
                <input type="email" placeholder="E-Mail" />
                <textarea cols="30" rows="6" placeholder="Type Your Message"></textarea>
                <a href="#" class="btn btn-primary">Submit</a>
            </div>
        </div>
        
    </section>

    <div class="find">
        <h1 align="center">Find Us On Map</h1>
    </div>
    <section class="location">
        
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.9252955894385!2d85.33307751744385!3d27.6887037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19960e9a17d3%3A0xfd8148cc865434c4!2sAmigo%20Cafe%20Lounge!5e0!3m2!1sen!2sin!4v1664993976732!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>></iframe>
       </section>
    <footer id="footer">
        <h2>Restraunt &copy; all rights reserved</h2>
    </footer>
    <!-- .................../ JS Code for smooth scrolling /...................... -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="app.js"></script>


</body>
</html>

    
    
    
    