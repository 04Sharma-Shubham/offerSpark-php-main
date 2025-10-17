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
                            <a href="https://www.amazon.in/s?k=laptops&crid=3FX2QMU93RXUX&sprefix=laptops%2Caps%2C230&ref=nb_sb_noss_2" class="btn">Grab Deal</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="tech">
                        <div class="offer-image" style="background-image: url('images/phone-deal.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Samsung Galaxy S23</h3>
                            <p class="offer-description">Latest smartphone with amazing camera</p>
                            <span class="discount-badge">20% OFF</span>
                            <a href="https://www.amazon.in/Samsung-Galaxy-Ultra-Phantom-Storage/dp/B0BT9FDZ8N/ref=sr_1_2?crid=GY6O7SXX44EW&dib=eyJ2IjoiMSJ9.K0txcR4_2nW0YPcJMgjsa4AvvyRn-HJhsqmJhdHEU9JSA_KoYmfUWcFzsTeTdza2Ie0ceMwsLreFT7b_m-yH8jswAlGatLtovN5bA-9AnVUKoIkNLTI2i5JRbRw3QUfHaoee1vH-0jbi5FkFlQWaFPSUVceVGJ-R2H4chOobICXI8DNRkchYF83Y1_AKNhA8HRT3d4FP4U1L29_zkl-ypYJLsI4aguzKrctXAkn_mjo.rslJYfJRmACjFoMuTeQeLZYugPYpHmAKT2i_jsT4XwM&dib_tag=se&keywords=galaxy+s23&qid=1760720698&sprefix=galaxy+s2%2Caps%2C257&sr=8-2" class="btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="tech">
                        <div class="offer-image" style="background-image: url('images/category-headphone.jpeg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Sony WH-1000XM5</h3>
                            <p class="offer-description">Noise-cancelling wireless headphones</p>
                            <span class="discount-badge">25% OFF</span>
                            <a href="https://www.sony.co.in/electronics/headband-headphones/wh-1000xm4" class="btn">Get It</a>
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
                            <a href="https://www.nike.com/in/w/air-max-shoes-a6d8hzy7ok" class="btn">Grab Deal</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="fashion">
                        <div class="offer-image" style="background-image: url('images/watch-deal.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Rolex Submariner</h3>
                            <p class="offer-description">Luxury watch for discerning gentlemen</p>
                            <span class="discount-badge">15% OFF</span>
                            <a href="https://www.rolex.com/watches/submariner" class="btn">Get It</a>
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
                            <a href="https://www.makemytrip.com/hotels/hotel-listing/?locusId=CTGOI&locusType=city&city=CTGOI&searchText=Goa&filterData=MERGE_PROPERTY_TYPE|Resort&regionNearByExp=3&country=IN&reference=hotel&type=city&cmp=SEM|D|DH|G|Destination|DH_Destination_CTGOI_Goa|CTGOI_Resort|RSA|&mf_source=google&mf_medium=cpc&mf_campaignid=19486083027&cid=CjwKCAjw0sfHBhB6EiwAQtv5qdJ0TQI8rQopQSHXQQuW0x-xkgZosky4CNLvD3pCs2TEw0ZZvHgBuBoCz5gQAvD_BwE&pl=&kw=goa%20beach%20resort&adg=150173791892&aid=643917575646&campaign_type=search&device=c&mf_campaign={HARDCODE_CAMPAIGN_NAME}&gad_source=1&gad_campaignid=19486083027&gbraid=0AAAAAD5Az1RBDJUQQsI9Hcexj9OYOkukm&gclid=CjwKCAjw0sfHBhB6EiwAQtv5qdJ0TQI8rQopQSHXQQuW0x-xkgZosky4CNLvD3pCs2TEw0ZZvHgBuBoCz5gQAvD_BwE" class="btn">Book Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="travel">
                        <div class="offer-image" style="background-image: url('images/category-travel.jpg');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Delhi to Mumbai Flight</h3>
                            <p class="offer-description">Round trip tickets at lowest price</p>
                            <span class="discount-badge">30% OFF</span>
                            <a href="https://www.skyscanner.co.in/routes/del/bom/indira-gandhi-international-to-mumbai.html" class="btn">Book Flight</a>
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
                            <a href="https://applyonline.hdfcbank.com/cards/credit-cards.html?CHANNELSOURCE=ZETA&LGCode=MKTG&mc_id=hdfcbank_ccntb_paid_search_brand_ntb_unified&utm_source=paid_search_ntb&utm_medium=search&utm_campaign=CC-ACQ-HDFC_CC_Retail_Google_Search_Leads_NTB_br_super_brand&utm_content=Marketing&utm_creative=generic-rupay-ltf&utm_term=Hdfc%20Credit%20Card&p_id=&gad_source=1&gad_campaignid=22025037751&gbraid=0AAAAAD74LQbIvVxYBrc_jd4eB_Q57ug9Y&gclid=CjwKCAjw0sfHBhB6EiwAQtv5qYFNAmcqZ9ATiscNAVLnrwNhPf-ELDH4B8tqPO1bDhkawPYyanmvDhoCkz4QAvD_BwE#nbb" class="btn">Apply Now</a>
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
                            <a href="https://www.udemy.com/topic/web-development/?srsltid=AfmBOoqQ91TXejmezNxnpy5GtRASXqhDu13TnjaRo2bv2tXvte25utoO" class="btn">Enroll Now</a>
                        </div>
                    </div>
                    <div class="offer-card fade-in" data-category="education">
                        <div class="offer-image" style="background-image: url('images/category-image.png');"></div>
                        <div class="offer-content">
                            <h3 class="offer-title">Coursera Data Science Specialization</h3>
                            <p class="offer-description">Learn data science from experts</p>
                            <span class="discount-badge">40% OFF</span>
                            <a href="https://www.coursera.org/specializations/jhu-data-science" class="btn">Start Learning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
