<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sporty Wearables</title>
    <link rel="stylesheet" href="style.css">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h2 class="logo"><a href="#">SPORTY WEARABLES</a></h2>
        <input type="checkbox" id="menu-toggler">
        <label for="menu-toggler" id="hamburger-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18V11H3v2zm0-7v2h18V6H3z"/>
          </svg>
        </label>
        <ul class="all-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#services">Services</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="#about">About Us</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li><a href="./login.html">Login</a> </li>
        </ul>
      </nav>
    </header>

    <section class="homepage" id="home">
      <div class="content">
        <div class="text">
          <h1>At Sporty Wearables</h1>    
          <p>
            We bring you the world of high-performance athletic fashion.<br>Discover the perfect blend of style and functionality in every sportswear outfit.</p>
        </div>
        <a href="#services">Our Services</a>
      </div>
    </section>

    <div class="text-main">
      <h2>Our Services</h2> 
      <p>Explore our wide range of sporting gear services.</p>
    </div>

    <section class="services" id="services">
      <div class="main-service">
        <div class="container">
          <div class="img-1">
            <div class="text-1">
              <h3 class="title-1"><a href="./retro.html">Football Retro Jersey</a></h3>
            </div>
          </div>
  
          <div class="img-2">
            <div class="text-2">
              <h3 class="title-1"><a href="./mu.html">Football Jersey</a></h3>
            </div>
          </div>
  
          <div class="img-3">
            <div class="text-3">
              <h3 class="title-3"><a href="./shoes.html">Football Shoes</a></h3>
            </div>
          </div>
  
          <div class="img-4">
            <div class="text-4">
              <h3 class="title-4"><a href="./gear.html">Football Gear</a></h3>
            </div>
          </div>
          
        </div>
      </div>
  
    </section>
    
    
  
    <section class="about" id="about">
      <h2>About Us</h2>
      <p>Embark on a journey through our narrative in delivering top-notch sportswear.</p>
      <div class="row company-info">
        <h3>Our Story</h3>
        <p>Immerse yourself in the legacy of our sportswear and services, where we have been dedicated to providing high-quality athletic apparel and gear for fitness enthusiasts for more than a decade. Our unwavering commitment to excellence and customer satisfaction ensures that every athlete can depend on us for their sportswear essentials.</p>
      </div>
      <div class="row mission-vision">
        <h3>Our Mission</h3>
        <p>At Sportswear Prodigy, our mission is to outfit fitness enthusiasts with cutting-edge sportswear and essentials that elevate their athletic pursuits. We are dedicated to delivering reliable, durable, and innovative products that contribute to outstanding performances and enduring memories.</p>
        <h3>Our Vision</h3>
        <p>We envision becoming the preferred destination for sportswear enthusiasts, recognized for our extensive range of premium athletic gear and outstanding customer support. Our goal is to inspire and empower individuals to embrace an active lifestyle and craft unforgettable moments in their fitness journey.</p>
      </div>
      <div class="row team">
        <h3>Our Team</h3>
        <ul>
          <li>Chris Chu - Founder and CEO</li>
          <li>Lam Thanh Tran - Apparel Specialist</li>
          <li>Nhat Huy - Customer Experience Specialist</li>
        </ul>
      </div>
  </section>
  

    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <p>Reach out to us for any inquiries or feedback.</p>
      <div class="row">
        <div class="col information"> 
          <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"> 123 Campsite Avenue, Wilderness, CA 98765</i> </p>
            <p><i class="fas fa-envelope"> info@campinggearexperts.com</i> </p>
            <p><i class="fas fa-phone"></i> (123) 456-7890</p>
            <p><i class="fas fa-clock"></i> Monday - Friday: 9:00 AM - 5:00 PM</p>
            <p><i class="fas fa-clock"></i> Saturday: 10:00 AM - 3:00 PM</p>
            <p><i class="fas fa-clock"></i> Sunday: Closed</p>
            <p><i class="fas fa-globe"></i> www.codingenpalweb.com</p>
          </div>          
        </div>
        <div class="col form">
          <form>
            <input type="text" placeholder="Name*" >
            <input type="email" placeholder="Email*" >
            <textarea placeholder="Message*"x1 ></textarea>
            <button id="submit" type="submit">Send Message</button>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div>
        <span>Copyright © 2023 All Rights Reserved</span>
        <span class="link">
            <a href="#">Home</a>
            <a href="#contact">Contact</a>
        </span>
      </div>
    </footer>

  </body>
</html>
