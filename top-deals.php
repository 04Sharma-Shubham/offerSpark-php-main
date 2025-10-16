<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-slider">
            <div class="slide" style="background-image: url('images/top-hero.jpeg');">
                <div class="container">
                    <h1>Top Deals</h1>
                    <p>Limited-time offers with countdown timers</p>
                </div>
            </div>
            <div class="slide" style="background-image: url('images/top-deal5.jpeg');">
                <div class="container">
                    <h1>Flash Sales</h1>
                    <p>Don't miss out on these amazing deals</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <h2>Top Deals</h2>
            <p>Don't miss out on these limited-time offers with countdown timers!</p>
        </div>
    </section>

    <section class="section offers-section">
        <div class="container">
            <div class="offers">
                <div class="offer-card fade-in" data-category="tech">
                    <div class="offer-image" style="background-image: url('images/top-deal1.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Dell XPS 13 Laptop</h3>
                        <p class="offer-description">High-performance laptop with latest specs</p>
                        <span class="discount-badge">30% OFF</span>
                        <div class="countdown" id="countdown1"></div>
                        <a href="#" class="btn">Grab Deal</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="fashion">
                    <div class="offer-image" style="background-image: url('images/top-deal2.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Nike Air Max Shoes</h3>
                        <p class="offer-description">Comfortable and stylish sneakers</p>
                        <span class="discount-badge">25% OFF</span>
                        <div class="countdown" id="countdown2"></div>
                        <a href="#" class="btn">Grab Deal</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="travel">
                    <div class="offer-image" style="background-image: url('images/top-deal3.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Goa Beach Resort</h3>
                        <p class="offer-description">Luxury stay with ocean view</p>
                        <span class="discount-badge">40% OFF</span>
                        <div class="countdown" id="countdown3"></div>
                        <a href="#" class="btn">Book Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="finance">
                    <div class="offer-image" style="background-image: url('images/top-deal4.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">HDFC Credit Card</h3>
                        <p class="offer-description">Zero annual fee for first year</p>
                        <span class="discount-badge">Free</span>
                        <div class="countdown" id="countdown4"></div>
                        <a href="#" class="btn">Apply Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="education">
                    <div class="offer-image" style="background-image: url('images/top-deal5.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Udemy Web Development Course</h3>
                        <p class="offer-description">Complete course on modern web dev</p>
                        <span class="discount-badge">50% OFF</span>
                        <div class="countdown" id="countdown5"></div>
                        <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="home">
                    <div class="offer-image" style="background-image: url('images/top-deal6.jpeg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Kitchen Appliances Set</h3>
                        <p class="offer-description">Essential gadgets for modern kitchen</p>
                        <span class="discount-badge">35% OFF</span>
                        <div class="countdown" id="countdown6"></div>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="deal-banner fade-in" style="background-image: url('https://via.placeholder.com/1200x400/0078D4/FFFFFF?text=Big+Sale+Banner'); background-size: cover; background-position: center; height: 300px; display: flex; align-items: center; justify-content: center; color: white; text-align: center; border-radius: 10px; margin-bottom: 40px;">
                <div style="background: rgba(0, 0, 0, 0.6); padding: 20px; border-radius: 10px; color: white;">
                    <h2>Flash Sale!</h2>
                    <p>Up to 70% off on selected items. Limited stock!</p>
                    <a href="#" class="btn btn-green">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
</main>



<?php include 'includes/footer.php'; ?>
