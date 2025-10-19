<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <div class="slide" style="background-image: url('images/hero1.jpg');">
                <div class="container">
                    <h1>Latest Offers</h1>
                    <p>Discover the best deals on top products</p>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/hero2.jpg');">
                <div class="container">
                    <h1>Save More, Spend Smart</h1>
                    <p>Exclusive discounts from trusted brands</p>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/hero3.jpg');">
                <div class="container">
                    <h1>Deal of the Day</h1>
                    <p>Limited time offers you can't miss</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2>Contact Us</h2>
            <p style="text-align: center;">Get in touch with us for any questions or feedback.</p>
        </div>
    </section>

    <section class="section contact-section">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <h3>Send us a message</h3>
                    <form action="contact-handler.php" method="post">
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="input-group">
                            <i class="fas fa-comment"></i>
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-attractive">Send Message</button>
                    </form>
                </div>
                <div class="contact-info">
                    <h3 style="text-align: center; margin-bottom: 20px;">Get in touch</h3>
                    <p style="text-align: center;"><strong>Email:</strong> Felixemark@theofferspark.com</p>
                    <div class="social-links" style="display: flex; justify-content: center; gap: 15px;">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php include 'includes/footer.php'; ?>
