<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Package Box</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
    <!-- Top bar -->
    <div class="top-bar">
        FREE SHIPPING WITH MINIMUM PURCHASE IDR 250,000
    </div>

    <!-- navbar section -->
    <nav class="navbar" id="navbar">
        <div class="navbar-brand">BOXBELLE</div>
        <div class="navbar-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/faq">FAQ</a>
        </div>
        <div class="navbar-search">
            <input type="text" placeholder="Search...">
            <button><img src="search-icon.png" alt="Search"></button>
        </div>
    </nav>

    <!-- Third Section -->
    <!-- HTML -->
<div class="contact-container">
    <div class="contact-details">
      <h2>Get In Touch With Us</h2>
      <p>Feel free to reach out for more information or if you have any questions. Your privacy is important to us.</p>
      <div class="info">
        <p><strong>Address:</strong> 1234 Street, City, Country</p>
        <p><strong>Phone:</strong> +1 234 567 8900</p>
        <p><strong>Working Time:</strong> 9:00 AM - 5:00 PM, Monday - Friday</p>
      </div>
    </div>
    <div class="contact-form">
      <form action="/submit-form" method="post">
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
        <textarea id="message" name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>

<!-- fourth section -->
<div class="features-container">
    <div class="feature">
      <h3>Free Delivery</h3>
      <p>For all orders over $50, consectetur adipiscing elit</p>
    </div>
    <div class="feature">
      <h3>90 Days Return</h3>
      <p>If goods have problems, consectetur adipiscing elit</p>
    </div>
    <div class="feature">
      <h3>Secure Payment</h3>
      <p>100% secure payment, consectetur adipiscing elit</p>
    </div>
  </div>

  <!-- fifth section -->
  <footer class="footer">
    <div class="footer-content">
        <div class="footer-section address">
            <p>400 University Drive Suite 230</p>
            <p>Coral Gables, FL 33134 USA</p>
        </div>
        <div class="footer-section links">
            <h3>Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section help">
            <h3>Help</h3>
            <ul>
                <li><a href="#">Payment Options</a></li>
                <li><a href="#">Returns</a></li>
            </ul>
        </div>
        <div class="footer-section newsletter">
            <h3>Newsletter</h3>
            <form>
                <input type="email" placeholder="Enter Your Email Address">
                <button type="submit">SUBSCRIBE</button>
            </form>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2022 Meubel House. All rights reserved.</p>
    </div>
</footer>

<script src="{{ asset('js/script.js') }}"></script>

  
</body>

</html>
