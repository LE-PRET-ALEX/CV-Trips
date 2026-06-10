
<html>
<link rel="stylesheet" href="transportations.css">

<main>
    <?php
    include 'header.php';
    ?>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <div class="badge"><i class="fas fa-compass"></i> 10 islands</div>
                <h1>Transportations</h1>
                <p>From the sea breeze to the volcanic mountains, CV TRIPS connects you to the best of each island with comfort, safety and true morabeza.</p>
            </div>
            <div class="hero-image">
                <img src="/resources/images/ferry.webp" alt="Transporte turístico Cabo Verde">
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Meios de transporte -->
        <h2 class="section-title">Transportations <i class="fas fa-exchange-alt"></i> Options</h2>
        <p class="section-sub">Choose the best option</p>
        
        <div class="cards-grid">
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-ship"></i></div>
                <div class="card-content">
                    <h3>Ferry Express</h3>
                    <p>Daily connections between Santiago, Fogo, Brava and Saint Vincent. VIP cabins and outdoor deck..</p>
                    <span class="tag"><i class="far fa-clock"></i> Partidas múltiplas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-plane"></i></div>
                <div class="card-content">
                    <h3>Domestics Flights</h3>
                    <p>Fast and panoramic: Sal, Boa Vista, São Nicolau. Agile check-in and luggage included.</p>
                    <span class="tag"><i class="fas fa-tag"></i> Tarifas exclusivas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-car-side"></i></div>
                <div class="card-content">
                    <h3>4x4 Adventure</h3>
                    <p>Off-road routes in Santo Antão, Fogo and Maio. Local guides and stops at viewpoints.</p>
                    <span class="tag"><i class="fas fa-mountain"></i> Trilhas únicas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-taxi"></i></div>
                <div class="card-content">
                    <h3>Shared Táxi</h3>
                    <span class="tag"><i class="fas fa-hand-peace"></i> Experiência crioula</span>
                </div>
            </div>
        </div>

        <div class="features">
            <div class="feature-item">
                <i class="fas fa-clock"></i>
                <h4>Availability</h4>
                <p>Service in portuguese, english, french and crioulo</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-heart"></i>
                <h4>Segurity and Comfort</h4>
                <p>Modern fleets, travel insurance included.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="container">
        <div class="cta">
            <h3>Learn more about our Destinations</h3>
            <p>Whether you seek adventure, culture, or pure relaxation, Cape Verde has an island waiting for you.</p>
            <a href="#" class="btn-cta"><i class="fas fa-ticket-simple"></i> Learn More</a>
        </div>
    </div>
</main>
</body>

<?php
    include 'footer.php';
?>