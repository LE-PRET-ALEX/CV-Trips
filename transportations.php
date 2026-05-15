<?php
    include 'header.php';
?>
<html>
<link rel="stylesheet" href="transportations.css">

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <div class="badge"><i class="fas fa-compass"></i> 10 ilhas · infinitas rotas</div>
                <h1>Viaje com alma<br>cabo-verdiana</h1>
                <p>Da brisa do mar às montanhas vulcânicas, a CV TRIPS conecta você ao melhor de cada ilha com conforto, segurança e a verdadeira morabeza.</p>
                <div class="hero-buttons">
                    <a href="#" class="btn-primary"><i class="fas fa-ship"></i> Ferries & Barcos</a>
                    <a href="#" class="btn-secondary"><i class="fas fa-car"></i> Transfer 4x4</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="/resources/" alt="Transporte turístico Cabo Verde">
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Meios de transporte -->
        <h2 class="section-title">Nossos modais <i class="fas fa-exchange-alt"></i> de viagem</h2>
        <p class="section-sub">Escolha a melhor maneira de explorar as ilhas do Sotavento e Barlavento com a CV TRIPS.</p>
        
        <div class="cards-grid">
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-ship"></i></div>
                <div class="card-content">
                    <h3>Ferry Express</h3>
                    <p>Conexões diárias entre Santiago, Fogo, Brava e São Vicente. Cabines VIP e deck ao ar livre.</p>
                    <span class="tag"><i class="far fa-clock"></i> Partidas múltiplas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-plane"></i></div>
                <div class="card-content">
                    <h3>Voos Domésticos</h3>
                    <p>Rápido e panorâmico: Sal, Boa Vista, São Nicolau. Check-in ágil e bagagem inclusa.</p>
                    <span class="tag"><i class="fas fa-tag"></i> Tarifas exclusivas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-car-side"></i></div>
                <div class="card-content">
                    <h3>4x4 Adventure</h3>
                    <p>Rotas off-road em Santo Antão, Fogo e Maio. Guias locais e paradas em miradouros.</p>
                    <span class="tag"><i class="fas fa-mountain"></i> Trilhas únicas</span>
                </div>
            </div>
            <div class="transport-card">
                <div class="card-icon"><i class="fas fa-taxi"></i></div>
                <div class="card-content">
                    <h3>Táxi Colectivo</h3>
                    <p>Mobilidade autêntica e econômica para curtir a vida local e chegar a qualquer destino.</p>
                    <span class="tag"><i class="fas fa-hand-peace"></i> Experiência crioula</span>
                </div>
            </div>
        </div>

        <!-- Rotas em destaque -->
        <div class="routes-showcase">
            <div class="flex-routes">
                <div class="routes-text">
                    <h2><i class="fas fa-map-marked-alt"></i> Rotas imperdíveis da CV TRIPS</h2>
                    <p>As ligações mais procuradas por quem quer viver Cabo Verde na pele.</p>
                    <ul class="route-list">
                        <li><i class="fas fa-ferry"></i> Praia ↔ Mindelo – Travessia noturna com música e gastronomia a bordo</li>
                        <li><i class="fas fa-plane-departure"></i> Sal (SID) → Boa Vista (BVC) – 25 min de voo sobre o azul atlântico</li>
                        <li><i class="fas fa-hiking"></i> Porto Novo → Ribeira Grande – Transfer + trilha do vale do Paul</li>
                        <li><i class="fas fa-volcano"></i> Circuito Cha das Caldeiras – 4x4 e visita a vinícola na lava do vulcão</li>
                        <li><i class="fas fa-water"></i> Santa Maria → Ponta Preta – Passeio de buggy pelas dunas</li>
                    </ul>
                    <a href="#" class="btn-primary small-btn"><i class="fas fa-calendar-week"></i> Descobrir mais rotas</a>
                </div>
                <div class="routes-img">
                    <img src="https://placehold.co/500x360/eedbc8/1d5e51?text=Mapa+interativo+CV+TRIPS&font=playfair" alt="Mapa de Cabo Verde">
                    <p class="img-caption">🗺️ Explore cada ilha com a nossa rede integrada</p>
                </div>
            </div>
        </div>

        <!-- Diferenciais -->
        <div class="features">
            <div class="feature-item">
                <i class="fas fa-clock"></i>
                <h4>Disponibilidade 24/7</h4>
                <p>Atendimento em português, inglês e crioulo.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-hand-sparkles"></i>
                <h4>Compromisso local</h4>
                <p>Trabalhamos com motoristas e comunidades locais.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-shield-heart"></i>
                <h4>Segurança e conforto</h4>
                <p>Frotas modernas, seguro de viagem incluso.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-drumstick-bite"></i>
                <h4>Sabores da viagem</h4>
                <p>Paradas em restaurantes típicos e cachupa inclusa.</p>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="container">
        <div class="cta">
            <h3>🌴 “Bô viagem, bô estilo” – é na CV TRIPS</h3>
            <p>Garanta já o seu transfer, bilhete de ferry ou pacote entre ilhas. Desconto especial para reservas antecipadas.</p>
            <a href="#" class="btn-cta"><i class="fas fa-ticket-simple"></i> Fazer reserva</a>
        </div>
    </div>
</main>
</body>

<?php
    include 'footer.php';d
?>