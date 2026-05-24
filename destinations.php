<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra as melhores ilhas de Cabo Verde para turismo, aventura e cultura">
    <link rel="stylesheet" href="destinations.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous" defer></script>
    <title>CV Trips - Destinos em Cabo Verde</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <main>
        <!-- CAROUSEL SECTION -->
        <section class="carousel-section">
            <div class="carousel-container">
                <button class="carousel-btn prev-btn" aria-label="Anterior">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                
                <div class="carousel-wrapper">
                    <div class="carousel-track">
                        <!-- As ilhas serão inseridas via JavaScript -->
                    </div>
                </div>
                
                <button class="carousel-btn next-btn" aria-label="Próximo">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="carousel-indicators">
                <!-- Indicadores serão gerados dinamicamente -->
            </div>
        </section>

        <!-- TOURISM SECTION -->
        <section class="tourism">
            <div class="tourism_section_title">
                <h2>Turismo em Cabo Verde</h2>
            </div>
            
            <div class="tourism_description">
                <div class="tourism_description_img">
                    <img src="resources/images/tourism_description_img.jpg" alt="Turismo em Cabo Verde">
                </div>
                <div class="tourism_description_paragraph">
                    <p>Cabo Verde é um arquipélago de beleza única, onde cada ilha oferece uma experiência distinta. Das montanhas verdejantes de Santo Antão às praias desertas da Boa Vista, passando pela vibrante cultura do Mindelo, o país combina natureza, música e hospitalidade para criar memórias inesquecíveis.</p>
                </div>
            </div>

            <div class="types_of_tourism">
                <div class="types_of_tourism_title">
                    <h2>Tipos de Turismo</h2>
                </div>
                
                <div class="types_of_tourism_intro">
                    <p>Cabo Verde oferece experiências diversificadas que atendem a todos os perfis de viajantes. Seja você um aventureiro em busca de trilhas desafiadoras, um amante do mar em busca de praias paradisíacas, ou alguém interessado na rica história e cultura crioula, encontrará algo especial em cada ilha.</p>
                </div>
                
                <div class="types_of_tourism_tabs">
                    <button class="tab-btn active" data-tab="nature">🌿 Natureza/Aventura</button>
                    <button class="tab-btn" data-tab="sea">🌊 Turismo de Mar</button>
                    <button class="tab-btn" data-tab="culture">🏛️ Cultura/História</button>
                    <button class="tab-btn" data-tab="sustainable">♻️ Turismo Sustentável</button>
                </div>
                
                <div class="types_of_tourism_content">
                    <div class="tab-content active" id="nature">
                        <div class="tab-text">
                            <h3>Turismo de Natureza e Aventura</h3>
                            <p>Explore trilhas desafiadoras em Santo Antão, escaladas no vulcão do Fogo, caminhadas pela paisagem lunar do Sal, e observação de aves em ilhas menos exploradas. Cabo Verde oferece cenários únicos para os amantes de aventura e contato com a natureza preservada.</p>
                            <div class="recommended-islands">
                                <span class="badge">🏔️ Santo Antão</span>
                                <span class="badge">🌋 Fogo</span>
                                <span class="badge">🏜️ Sal</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="sea">
                        <h3>Turismo de Mar</h3>
                        <p>Desfrute de praias paradisíacas na Boa Vista, surf no Sal, mergulho em São Vicente, observação de tartarugas marinhas em todo o arquipélago, e passeios de barco entre as ilhas. O mar de Cabo Verde é um convite à aventura e ao relaxamento.</p>
                        <div class="recommended-islands">
                            <span class="badge">🏖️ Boa Vista</span>
                            <span class="badge">🏄‍♂️ Sal</span>
                            <span class="badge">🐢 Maio</span>
                        </div>
                    </div>
                    <div class="tab-content" id="culture">
                        <h3>Turismo Cultural e Histórico</h3>
                        <p>Conheça a história da escravidão na Cidade Velha (Patrimônio Mundial da UNESCO), a vibrante cena musical da Mindelo, as festas tradicionais, o artesanato local e a rica gastronomia crioula que conta a história do povo cabo-verdiano.</p>
                        <div class="recommended-islands">
                            <span class="badge">🏛️ Santiago</span>
                            <span class="badge">🎵 São Vicente</span>
                            <span class="badge">🍲 São Nicolau</span>
                        </div>
                    </div>
                    <div class="tab-content" id="sustainable">
                        <h3>Turismo Sustentável</h3>
                        <p>Participe de projetos de conservação ambiental, hospede-se em eco-lodges, apoie comunidades locais, e contribua para o desenvolvimento sustentável do arquipélago. Viaje de forma responsável e deixe um impacto positivo.</p>
                        <div class="recommended-islands">
                            <span class="badge">♻️ Maio</span>
                            <span class="badge">🌱 Brava</span>
                            <span class="badge">🤝 Santo Antão</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- MAP SECTION -->
        <div class="interactive_map">
            <div class="map-placeholder">
                <i class="fa-solid fa-map"></i>
                <span>Mapa Interativo - Em breve</span>
                <p>Explore todas as ilhas de Cabo Verde num mapa interativo</p>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="destinations.js" defer></script>
</body>
</html>