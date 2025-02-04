<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Burger Hut</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <!-- HEADER SECTION -->
    <header class="light-header">
        <nav class="nav-container">
            <a href="home.php" class="logo">BURGER HUT</a>
            
            <ul class="nav-links">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="our_story.php">Our Story</a></li>
                <li><a href="location.php">Locations</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>

            <a href="order_online.php" class="order-btn">Order Online</a>

            <div class="menu-toggle">☰</div>
        </nav>
    </header>

    <!-- CONTACT HERO SECTION -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1 class="contact-title">Get in Touch with Burger Hut</h1>
            <p class="contact-subtitle">Have questions? We’d love to hear from you!</p>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section class="contact-section">
        <h2>Contact Us</h2>
        <p>Fill out the form below or reach us directly via phone or email.</p>

        <form action="contact_form.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </section>

    <!-- CONTACT INFO -->
    <section class="contact-info">
        <h2>Other Ways to Reach Us</h2>
        <div class="info-container">
            <div class="info-box">
                <h3>📍 Visit Us</h3>
                <p>123 Burger Street, New York, NY 10001</p>
            </div>
            <div class="info-box">
                <h3>📞 Call Us</h3>
                <p>+1 (123) 456-7890</p>
            </div>
            <div class="info-box">
                <h3>📧 Email Us</h3>
                <p>contact@burgerhut.com</p>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy; 2025 This website is created by Himasha Miyuranga.</p>
    </footer>

</body>
</html>
