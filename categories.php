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
            <h2>Categories</h2>
            <div class="categories">
                <div class="category-card fade-in">
                    <i class="fas fa-laptop"></i>
                    <h3>Technology</h3>
                    <p>Latest gadgets and electronics</p>
                    <a href="#tech-offers" class="btn">View Offers</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-tshirt"></i>
                    <h3>Fashion</h3>
                    <p>Trendy clothes and accessories</p>
                    <a href="#fashion-offers" class="btn">View Offers</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-plane"></i>
                    <h3>Travel</h3>
                    <p>Book flights and hotels at best prices</p>
                    <a href="#travel-offers" class="btn">View Offers</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-credit-card"></i>
                    <h3>Finance</h3>
                    <p>Credit cards and financial services</p>
                    <a href="#finance-offers" class="btn">View Offers</a>
                </div>
                <div class="category-card fade-in">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Education</h3>
                    <p>Online courses and certifications</p>
                    <a href="#education-offers" class="btn">View Offers</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section offers-section">
        <div class="container">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
                <h2>All Offers</h2>
                <div>
                    <select id="filter-select" onchange="filterOffers(this.value)">
                        <option value="all">All Categories</option>
                        <option value="tech">Technology</option>
                        <option value="fashion">Fashion</option>
                        <option value="travel">Travel</option>
                        <option value="finance">Finance</option>
                        <option value="education">Education</option>
                    </select>
                    <select id="sort-select" onchange="sortOffers(this.value)">
                        <option value="default">Sort By</option>
                        <option value="name">Name</option>
                        <option value="discount">Discount</option>
                    </select>
                </div>
            </div>

            <div class="offers" id="tech-offers">
                <h3>Technology Offers</h3>
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
                    <div class="offer-card fade-in" data-category="tech">
                        <div class="offer-image" style="background-image: url('images/phone-deal.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Samsung Galaxy S23</h3>
                            <p class="offer-description">Latest smartphone with amazing camera</p>
                            <span class="discount-badge">20% OFF</span>
                            <a href="#" class="btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="tech">
                        <div class="offer-image" style="background-image: url('images/category-headphone.jpeg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Sony WH-1000XM5</h3>
                            <p class="offer-description">Noise-cancelling wireless headphones</p>
                            <span class="discount-badge">25% OFF</span>
                            <a href="#" class="btn">Get It</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers" id="fashion-offers">
                <h3>Fashion Offers</h3>
                <div class="offers">
                    <div class="offer-card fade-in" data-category="fashion">
                        <div class="offer-image" style="background-image: url('images/category-fashion.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Nike Air Max Shoes</h3>
                            <p class="offer-description">Comfortable and stylish sneakers</p>
                            <span class="discount-badge">25% OFF</span>
                            <a href="#" class="btn">Grab Deal</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="fashion">
                        <div class="offer-image" style="background-image: url('images/watch-deal.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Rolex Submariner</h3>
                            <p class="offer-description">Luxury watch for discerning gentlemen</p>
                            <span class="discount-badge">15% OFF</span>
                            <a href="#" class="btn">Get It</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers" id="travel-offers">
                <h3>Travel Offers</h3>
                <div class="offers">
                    <div class="offer-card fade-in" data-category="travel">
                        <div class="offer-image" style="background-image: url('images/travel-deal.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Goa Beach Resort</h3>
                            <p class="offer-description">Luxury stay with ocean view</p>
                            <span class="discount-badge">40% OFF</span>
                            <a href="#" class="btn">Book Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="travel">
                        <div class="offer-image" style="background-image: url('images/category-travel.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Delhi to Mumbai Flight</h3>
                            <p class="offer-description">Round trip tickets at lowest price</p>
                            <span class="discount-badge">30% OFF</span>
                            <a href="#" class="btn">Book Flight</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers" id="finance-offers">
                <h3>Finance Offers</h3>
                <div class="offers">
                    <div class="offer-card fade-in" data-category="finance">
                        <div class="offer-image" style="background-image: url('images/category-finance.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">HDFC Credit Card</h3>
                            <p class="offer-description">Zero annual fee for first year</p>
                            <span class="discount-badge">Free</span>
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offers" id="education-offers">
                <h3>Education Offers</h3>
                <div class="offers">
                    <div class="offer-card fade-in" data-category="education">
                        <div class="offer-image" style="background-image: url('images/category-education.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Udemy Web Development Course</h3>
                            <p class="offer-description">Complete course on modern web dev</p>
                            <span class="discount-badge">50% OFF</span>
                            <a href="#" class="btn">Enroll Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="education">
                        <div class="offer-image" style="background-image: url('images/category-image.png');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Coursera Data Science Specialization</h3>
                            <p class="offer-description">Learn data science from experts</p>
                            <span class="discount-badge">40% OFF</span>
                            <a href="#" class="btn">Start Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
