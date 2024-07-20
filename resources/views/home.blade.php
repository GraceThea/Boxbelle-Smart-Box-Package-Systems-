<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Box</title>
    <link rel="stylesheet" href="{{ asset('css/homenew.css') }}">
    

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


    <!-- Top/Main Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/background1.png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background2.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background3.png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/background4.png" alt="Fourth slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    <!-- Second Section -->
    <div class="second-top-row">
        <div class="second-top-column">
            <img src="images/packetbox.png" alt="Description of the image">
            <h2>Package Box Type 1</h2>
            <h3>View More</h3>
        </div>

        <div class="second-top-column">
            <img src="images/packetbox.png" alt="Description of the image">
            <h2>Package Box Type 2</h2>
            <h3>View More</h3>
        </div>
    </div>

    <!-- Third Section -->
    <div class="wrapper">
        <i id="left" class="fa-solid fa-angle-left"></i>
        <ul class="carousel">
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>Blanche Pearson</h2>
            <span>Sales Manager</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>Joenas Brauers</h2>
            <span>Web Developer</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>Lariach French</h2>
            <span>Online Teacher</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>James Khosravi</h2>
            <span>Freelancer</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>Kristina Zasiadko</h2>
            <span>Bank Manager</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/packetbox.png" alt="img" draggable="false"></div>
            <h2>Donald Horton</h2>
            <span>App Designer</span>
          </li>
        </ul>
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>

    <!-- Fourth Section -->
    <div class="fourth-top-row">
        <div class="image-container">
            <img src="images/blog.png" alt="Description of the image">
        </div>
        <div class="fourth-top-column">
            <h2>Our Blogs</h2>
            <h3>Find A Bright Ideas to suit your taste with our great collection</h3>
            <button class="order-now-button">Read More</button>
        </div>
    </div>
    <!-- Fifth Section -->

    <div class="instagram-banner">
        <h1>Our Instagram</h1>
        <p>Follow our store on Instagram</p>
        <a href="https://www.instagram.com/graceetheaa" class="follow-button">Follow Us</a>
    </div>

    <!-- Sixth Section -->
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
    <script src="{{ asset('js/carouselscript.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>


</body>

</html>
