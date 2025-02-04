<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Locations - Burger Hut</title>
    <link rel="stylesheet" href="location.css">
</head>
<body>

    <!-- HEADER SECTION -->
    <header class="light-header">
        <nav class="nav-container">
            <a href="home.php" class="logo">BURGER HUT</a>
            
            <ul class="nav-links">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="our_story.php">Our Story</a></li>
                <li><a href="location.php" class="active">Locations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>

            <a href="oder_online.php" class="order-btn">Order Online</a>

            <!-- Mobile Menu Toggle -->
            <div class="menu-toggle">☰</div>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="location-hero">
        <div class="location-hero-content">
            <h1 class="location-title">Visit Your Nearest Burger Hut</h1>
            <p class="location-subtitle">The Best Burgers, Now Closer to You!</p>
        </div>
    </section>

    <!-- LOCATIONS LIST -->
    <section class="locations-section">
        <h2>Our Locations</h2>
        <div class="locations-container">

            <!-- Location 1 -->
            <div class="location-card">
                <h3>New York</h3>
                <p>123 Burger Street, New York, NY 10001</p>
                <p><strong>Hours:</strong> 10:00 AM - 10:00 PM</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?..." allowfullscreen></iframe>
                </div>
            </div>

            <!-- Location 2 -->
            <div class="location-card">
                <h3>Los Angeles</h3>
                <p>456 Sunset Blvd, Los Angeles, CA 90028</p>
                <p><strong>Hours:</strong> 11:00 AM - 11:00 PM</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?..." allowfullscreen></iframe>
                </div>
            </div>

            <!-- Location 3 -->
            <div class="location-card">
                <h3>Chicago</h3>
                <p>789 Windy Ave, Chicago, IL 60611</p>
                <p><strong>Hours:</strong> 9:00 AM - 9:00 PM</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?..." allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; This website create Himasha Miyuranga.</p>
    </footer>

</body>
</html>
