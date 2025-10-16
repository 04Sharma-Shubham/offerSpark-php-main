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

    <!-- About Section -->
    <section class="section about">
        <div class="container">
            <h2>About OfferSpark</h2>
            <div class="about-content fade-in">
                <div class="about-text">
                    <p>OfferSpark has been connecting shoppers with exclusive online deals for over 7 years. We collaborate with top e-commerce platforms including Amazon, Flipkart, Myntra, and Booking.com.</p>
                    <p>Our mission is to simplify online shopping by curating the best deals in one place. Whether you're upgrading your tech, planning a trip, or looking for online courses — we bring verified offers directly to you.</p>
                    <p>We may earn a small commission from purchases made through our affiliate links — at no extra cost to you.</p>
                </div>
                <div class="about-image">
                    <img src="images/about-team.jpg" alt="OfferSpark Team">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="section categories-section">
        <div class="container">
            <h2>Featured Categories</h2>
            <div class="categories">
                <div class="category-card fade-in">
                    <i class="fas fa-laptop"></i>
                    <h3>Technology</h3>
                    <p>Latest gadgets and electronics</p>
                    <a href="categories.php?cat=tech" class="btn">Explore</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-tshirt"></i>
                    <h3>Fashion</h3>
                    <p>Trendy clothes and accessories</p>
                    <a href="categories.php?cat=fashion" class="btn">Explore</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-plane"></i>
                    <h3>Travel</h3>
                    <p>Book flights and hotels at best prices</p>
                    <a href="categories.php?cat=travel" class="btn">Explore</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-credit-card"></i>
                    <h3>Finance</h3>
                    <p>Credit cards and financial services</p>
                    <a href="categories.php?cat=finance" class="btn">Explore</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education</h3>
                    <p>Online courses and certifications</p>
                    <a href="categories.php?cat=education" class="btn">Explore</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-home"></i>
                    <h3>Home & Garden</h3>
                    <p>Everything for your home</p>
                    <a href="categories.php?cat=home" class="btn">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Offers Section -->
    <section class="section offers-section">
        <div class="container">
            <h2>Top Offers</h2>
            <div class="offers">
                <div class="offer-card fade-in" data-category="tech">
                    <div class="offer-image" style="background-image: url('images/laptop-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Dell XPS 13 Laptop</h3>
                        <p class="offer-description">High-performance laptop with latest specs</p>
                        <span class="discount-badge">30% OFF</span>
                        <a href="#" class="btn">Grab Deal</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="fashion">
                    <div class="offer-image" style="background-image: url('images/fashion-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Nike Air Max Shoes</h3>
                        <p class="offer-description">Comfortable and stylish sneakers</p>
                        <span class="discount-badge">25% OFF</span>
                        <a href="#" class="btn">Grab Deal</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="travel">
                    <div class="offer-image" style="background-image: url('images/travel-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Goa Beach Resort</h3>
                        <p class="offer-description">Luxury stay with ocean view</p>
                        <span class="discount-badge">40% OFF</span>
                        <a href="#" class="btn">Grab Deal</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="finance">
                    <div class="offer-image" style="background-image: url('images/finance-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">HDFC Credit Card</h3>
                        <p class="offer-description">Zero annual fee for first year</p>
                        <span class="discount-badge">Free</span>
                        <a href="#" class="btn">Apply Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="education">
                    <div class="offer-image" style="background-image: url('images/education-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Udemy Web Development Course</h3>
                        <p class="offer-description">Complete course on modern web dev</p>
                        <span class="discount-badge">50% OFF</span>
                        <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="home">
                    <div class="offer-image" style="background-image: url('images/home-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Kitchen Appliances Set</h3>
                        <p class="offer-description">Essential gadgets for modern kitchen</p>
                        <span class="discount-badge">35% OFF</span>
                        <a href="#" class="btn">Shop Now</a>
                    </div>
                </div>
                <div class="offer-card fade-in" data-category="tech">
                    <div class="offer-image" style="background-image: url('images/phone-deal.jpg');"></div>
                    <div class="offer-content">
                        <h3 class="offer-title">Samsung Galaxy S23</h3>
                        <p class="offer-description">Latest smartphone with amazing camera</p>
                        <span class="discount-badge">20% OFF</span>
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Affiliate Offers Section -->
    <section class="section affiliate-section">
        <div class="container">
            <h2>Affiliate Offers</h2>
            <p class="section-subtitle">Earn commissions by promoting our partners' products</p>
            <div class="affiliate-offers">
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-amazon"></i>
                        </div>
                        <div class="card-badge">Top Rated</div>
                    </div>
                    <h3>Amazon Associates</h3>
                    <p>Join the world's largest affiliate program and earn up to 10% commission on every sale you generate.</p>
                    <div class="card-stats">
                        <span class="stat">10% Commission</span>
                        <span class="stat">Global Reach</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Join Now</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-shopify"></i>
                        </div>
                        <div class="card-badge">Recurring</div>
                    </div>
                    <h3>Shopify Partners</h3>
                    <p>Promote e-commerce solutions and earn recurring commissions on successful referrals.</p>
                    <div class="card-stats">
                        <span class="stat">200% Commission</span>
                        <span class="stat">Monthly Payouts</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Learn More</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-udemy"></i>
                        </div>
                        <div class="card-badge">High Earning</div>
                    </div>
                    <h3>Udemy Affiliates</h3>
                    <p>Share knowledge and earn up to 30% commission on course sales through your unique affiliate link.</p>
                    <div class="card-stats">
                        <span class="stat">30% Commission</span>
                        <span class="stat">Lifetime Cookies</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Start Earning</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-booking"></i>
                        </div>
                        <div class="card-badge">Travel</div>
                    </div>
                    <h3>Booking.com Partners</h3>
                    <p>Promote travel deals and earn attractive commissions on hotel and flight bookings.</p>
                    <div class="card-stats">
                        <span class="stat">8% Commission</span>
                        <span class="stat">Instant Payouts</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Partner With Us</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-ebay"></i>
                        </div>
                        <div class="card-badge">Auction</div>
                    </div>
                    <h3>eBay Partner Network</h3>
                    <p>Monetize your traffic with eBay's affiliate program and earn commissions on purchases.</p>
                    <div class="card-stats">
                        <span class="stat">Up to 6%</span>
                        <span class="stat">Wide Selection</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Get Started</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-aliexpress"></i>
                        </div>
                        <div class="card-badge">Global</div>
                    </div>
                    <h3>AliExpress Affiliates</h3>
                    <p>Promote global products and earn commissions on international purchases from AliExpress.</p>
                    <div class="card-stats">
                        <span class="stat">8% Commission</span>
                        <span class="stat">Worldwide Market</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Join Program</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-flipkart"></i>
                        </div>
                        <div class="card-badge">India</div>
                    </div>
                    <h3>Flipkart Affiliate</h3>
                    <p>Earn commissions by promoting India's largest e-commerce platform products.</p>
                    <div class="card-stats">
                        <span class="stat">Up to 12%</span>
                        <span class="stat">Local Focus</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Start Now</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <i class="fab fa-myntra"></i>
                        </div>
                        <div class="card-badge">Fashion</div>
                    </div>
                    <h3>Myntra Affiliate</h3>
                    <p>Promote fashion and lifestyle products and earn commissions on fashion purchases.</p>
                    <div class="card-stats">
                        <span class="stat">10% Commission</span>
                        <span class="stat">Fashion Focus</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Partner Up</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners Section -->
    <!-- <section class="section affiliate-section">
        <div class="container">
            <h2>Affiliate Offers</h2>
            <p class="section-subtitle">Earn commissions by promoting our partners' products</p>
            <div class="affiliate-offers">
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo1.png" alt="Amazon" class="small-logo">
                            <i class="fab fa-amazon"></i>
                        </div>
                        <div class="card-badge">Top Rated</div>
                    </div>
                    <h3>Amazon Associates</h3>
                    <p>Join the world's largest affiliate program and earn up to 10% commission on every sale you generate.</p>
                    <div class="card-stats">
                        <span class="stat">10% Commission</span>
                        <span class="stat">Global Reach</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Join Now</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo4.png" alt="Shopify" class="small-logo">
                            <i class="fab fa-shopify"></i>
                        </div>
                        <div class="card-badge">Recurring</div>
                    </div>
                    <h3>Shopify Partners</h3>
                    <p>Promote e-commerce solutions and earn recurring commissions on successful referrals.</p>
                    <div class="card-stats">
                        <span class="stat">200% Commission</span>
                        <span class="stat">Monthly Payouts</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Learn More</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo6.png" alt="Udemy" class="small-logo">
                            <i class="fab fa-udemy"></i>
                        </div>
                        <div class="card-badge">High Earning</div>
                    </div>
                    <h3>Udemy Affiliates</h3>
                    <p>Share knowledge and earn up to 30% commission on course sales through your unique affiliate link.</p>
                    <div class="card-stats">
                        <span class="stat">30% Commission</span>
                        <span class="stat">Lifetime Cookies</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Start Earning</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo7.png" alt="Booking.com" class="small-logo">
                            <i class="fab fa-booking"></i>
                        </div>
                        <div class="card-badge">Travel</div>
                    </div>
                    <h3>Booking.com Partners</h3>
                    <p>Promote travel deals and earn attractive commissions on hotel and flight bookings.</p>
                    <div class="card-stats">
                        <span class="stat">8% Commission</span>
                        <span class="stat">Instant Payouts</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Partner With Us</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo7.png" alt="eBay" class="small-logo">
                            <i class="fab fa-ebay"></i>
                        </div>
                        <div class="card-badge">Auction</div>
                    </div>
                    <h3>eBay Partner Network</h3>
                    <p>Monetize your traffic with eBay's affiliate program and earn commissions on purchases.</p>
                    <div class="card-stats">
                        <span class="stat">Up to 6%</span>
                        <span class="stat">Wide Selection</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Get Started</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo9.png" alt="AliExpress" class="small-logo">
                            <i class="fab fa-aliexpress"></i>
                        </div>
                        <div class="card-badge">Global</div>
                    </div>
                    <h3>AliExpress Affiliates</h3>
                    <p>Promote global products and earn commissions on international purchases from AliExpress.</p>
                    <div class="card-stats">
                        <span class="stat">8% Commission</span>
                        <span class="stat">Worldwide Market</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Join Program</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo2.png" alt="Flipkart" class="small-logo">
                            <i class="fab fa-flipkart"></i>
                        </div>
                        <div class="card-badge">India</div>
                    </div>
                    <h3>Flipkart Affiliate</h3>
                    <p>Earn commissions by promoting India's largest e-commerce platform products.</p>
                    <div class="card-stats">
                        <span class="stat">Up to 12%</span>
                        <span class="stat">Local Focus</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Start Now</a>
                </div>
                <div class="affiliate-card fade-in">
                    <div class="card-header">
                        <div class="affiliate-icon">
                            <img src="images/logo3.png" alt="Myntra" class="small-logo">
                            <i class="fab fa-myntra"></i>
                        </div>
                        <div class="card-badge">Fashion</div>
                    </div>
                    <h3>Myntra Affiliate</h3>
                    <p>Promote fashion and lifestyle products and earn commissions on fashion purchases.</p>
                    <div class="card-stats">
                        <span class="stat">10% Commission</span>
                        <span class="stat">Fashion Focus</span>
                    </div>
                    <a href="#" class="btn btn-rainbow">Partner Up</a>
                </div>
            </div>
        </div>
    </section> -->

          <!-- Our Partners Section -->
          <section class="partners-section">
               <div class="container">
                    <h2>Our Partners</h2>
                    <p class="partners-subtitle">We collaborate with leading brands to bring you the best deals</p>
                   <div class="partners-grid">
                        <div class="partner-logo">
                            <img src="images/logo1.png" alt="Amazon" onerror="this.src='https://via.placeholder.com/150x80/FF9900/FFFFFF?text=Amazon'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo2.png" alt="Flipkart" onerror="this.src='https://via.placeholder.com/150x80/2874F0/FFFFFF?text=Flipkart'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo3.png" alt="Myntra" onerror="this.src='https://via.placeholder.com/150x80/FF3F6C/FFFFFF?text=Myntra'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo7.png" alt="Booking.com" onerror="this.src='https://via.placeholder.com/150x80/003580/FFFFFF?text=Booking.com'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo6.png" alt="Udemy" onerror="this.src='https://via.placeholder.com/150x80/EC5252/FFFFFF?text=Udemy'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo4.png" alt="Shopify" onerror="this.src='https://via.placeholder.com/150x80/96BF48/FFFFFF?text=Shopify'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo7.png" alt="eBay" onerror="this.src='https://via.placeholder.com/150x80/E53238/FFFFFF?text=eBay'">
                        </div>
                        <div class="partner-logo">
                            <img src="images/logo9.png" alt="AliExpress" onerror="this.src='https://via.placeholder.com/150x80/FF4747/FFFFFF?text=AliExpress'">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <!-- Customer Reviews Section -->
    <section class="section reviews-section">
        <div class="container">
            <h2>What Our Users Say</h2>
            <p class="section-subtitle">Hear from our satisfied customers</p>
            <div class="reviews">
                <div class="review-card fade-in">
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"OfferSpark has saved me hundreds on my purchases. The deals are genuine and the site is so easy to navigate!"</p>
                    <div class="reviewer">
                        <img src="data:image/jpeg;base64,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" alt="John Doe" class="reviewer-avatar">
                        <div class="reviewer-info">
                            <h4>John Doe</h4>
                            <span>Mumbai, India</span>
                        </div>
                    </div>
                </div>
                <div class="review-card fade-in">
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"I love the variety of deals available. Found amazing discounts on electronics and travel bookings. Highly recommended!"</p>
                    <div class="reviewer">
                        <img src="data:image/jpeg;base64,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" alt="Sarah Miller" class="reviewer-avatar">
                        <div class="reviewer-info">
                            <h4>Sarah Miller</h4>
                            <span>Delhi, India</span>
                        </div>
                    </div>
                </div>
                <div class="review-card fade-in">
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="review-text">"Great platform for finding exclusive offers. The affiliate links work perfectly and I trust their recommendations."</p>
                    <div class="reviewer">
                        <img src="data:image/jpeg;base64,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" alt="Raj Kumar" class="reviewer-avatar">
                        <div class="reviewer-info">
                            <h4>Raj Kumar</h4>
                            <span>Bangalore, India</span>
                        </div>
                    </div>
                </div>
                <div class="review-card fade-in">
                    <div class="review-stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="review-text">"OfferSpark makes shopping smarter. I always check here first before making any online purchase. Fantastic service!"</p>
                    <div class="reviewer">
                        <img src="data:image/jpeg;base64,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" alt="Anita Patel" class="reviewer-avatar">
                        <div class="reviewer-info">
                            <h4>Anita Patel</h4>
                            <span>Pune, India</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>Stay Updated with Latest Deals</h2>
            <p>Subscribe to our newsletter and never miss a great offer!</p>
            <form class="newsletter-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <button type="submit" class="btn btn-green">Subscribe</button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
