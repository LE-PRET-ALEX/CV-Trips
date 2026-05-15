<?php 
$title = "Home - CV TRIPS";
$css = "index-style.css";
include 'header-home.php'; 
?>
<body>
    <!-- RESTO DO SITE -->
    <main id="main">
        <section class="content">
            <div class="go_to_cv">
                <div class="go_to_cv_title">
                    <h2>I want to go to Cabo Verde</h2>
                </div>
                <ul type="none" class="utilities">
                    <li class="utility">
                        <i class="fa-solid fa-passport" href="#"></i>
                        <a href="/needed_documents.php">Needed Documents</a>
                    </li>
                    <li class="utility">
                        <i class="fa-solid fa-bus"></i>
                        <a href="#">Transportation</a>
                    </li>
                    <li class="utility">
                        <i class="fa-solid fa-bed"></i>
                        <a href="/accomodation.php">Accommodations</a>
                    </li>
                    <li class="utility">
                        <i class="fa-solid fa-utensils"></i>
                        <a href="/food.php">Food</a>
                    </li>
                    <li class="utility">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <a href="">Shopping</a>
                    </li>
                </ul>
            </div>


            <section class="about">
                <div class="about-img">
                    <img src="/resources/images/about.jpeg" alt="Paisagem">
                </div>

                <div class="about-text">
                    <h2 class="about-title">About Us</h2>
                    <p>We are an Cape Verdean tourism company built by locals who know these islands inside out.
                        We design authentic travel experiences tailored to each visitor, working with native guides,
                        handpicked accommodations, and local partners who share our commitment to responsible,
                        community-driven tourism.
                        Our mission is simple: to show you the real Cape Verde.</p>

                </div>
            </section>

            <section class="faq">
                <h2 class="faq-title">FAQ's</h2>

                <div class="faq-item">
                    <h3 class="faq-question">Where is Cabo Verde?</h3>
                    <p class="faq-answer">Cabo Verde is an archipelago of 10 islands located in the Atlantic Ocean,
                        about 570 km off the
                        west coast of Senegal.</p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">What is the official language in Cabo Verde?</h3>
                    <p class="faq-answer">The official language is Portuguese, but the population speaks Kriolu (Cape
                        Verdean Creole)</p>
                </div>

                <div class="faq-item">
                    <h3 class="faq-question">What is the climate like?</h3>
                    <p class="faq-answer">The country enjoys a warm, dry climate year-round, with temperatures averaging
                        25–30°C</p>
                </div>
            </section>

            <section class="cta">
                <div class="cta-content">
                    <h2 class="cta-title">Ready to Trip?</h2>
                    <p class="cta-text">Book your dream vacation to Cape Verde today and experience paradise like never
                        before</p>
                    <button class="btn-book" href="plan_trip.html">Book Now</button>
                </div>
            </section>

            <div class="circulo-ask">
                <button class="botao-ask">Ask</button>
            </div>

    </main>
</body>

<script src="index.js"></script>


<?php include 'footer.php'; ?>