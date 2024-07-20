<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package Box</title>
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">

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

    <!-- Main Section -->
    <div class="faq-header">
        <h1>FAQs</h1>
        <p>Need some answers?</p>
    </div>

    <!-- Second Section -->
    <div class="accordion-wrapper">
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-button">How does the package box work?</button>
                <div class="accordion-content">
                    <p>The box notifies you when the courier arrives. You can see them via a camera in the box, talk to
                        them through the app, and remotely open the box to accept the package.</p>
                </div>
            </div>
           
            <div class="accordion-item">
                <button class="accordion-button">Can the courier open the box without the owner's permission?</button>
                <div class="accordion-content">
                    <p>No, the owner has to remotely open the box via the app.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">What happens if I'm not home when the courier arrives?</button>
                <div class="accordion-content">
                    <p>You receive a notification and can still monitor the delivery and open the box remotely.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">How does the notification system work?</button>
                <div class="accordion-content">
                    <p>You get real-time alerts on your phone when the courier arrives.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">Is there a camera feature to monitor the courier's arrival?</button>
                <div class="accordion-content">
                    <p>Yes, there's a camera in the box that streams live footage to your phone.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">How secure is the package box?</button>
                <div class="accordion-content">
                    <p>It's designed with durable construction and advanced locks, only opening when you authorize it
                        through the app.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">Can I remotely open the box if I'm away from home?</button>
                <div class="accordion-content">
                    <p>Yes, you can open it from anywhere using the mobile app.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-button">What happens if there's a technical issue with the box or app?</button>
                <div class="accordion-content">
                    <p>Our customer support team provides troubleshooting assistance to ensure smooth operation.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Third Section -->
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
