<?php
    include 'header.php';
?>
    <link rel="stylesheet" href="/css/accomodation.css">

<body>

    <main id="main">
        <section class="top-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="resources/videos/banner_bg_video.mp4" type="video/mp4">
            </video>
        </section>


        <section id="section2">
            <div class="titulo">
                <h2> Pontos Turísticos</h2>
            </div>

            <div class="paragrafo">
                <div class="p">
                    <p>Descubra opções de hospedagem confortáveis e acolhedoras para tornar a sua viagem ainda mais especial.</p>
                </div>
                
            </div>

            <!--CARROSSEL-->
            <div class="acomodation">

                <!-- BOTAO ESQUERDA -->
                <div class="botao">
                    <button class="btn-nav" id="btn-prev"><i class="fa-solid fa-angle-left"></i></button>
                </div>

                <div class="carousel-viewport">

                <!-- Faixa que desliza horizontalmente -->
                <div class="carousel-track" id="carousel-track">

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Santiago/vip-praia.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Hotel VIP-PRAIA</strong></h1>
                                <h2>Ilha: <strong>Santiago</strong></h2>
                                <h2>Categória: <strong> Hotel</strong></h2>
                                <h3>Zona: <strong>Palmarejo</strong></h3>
                                <h2>Avaliação   : <strong>4 Estrelas</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Santiago/oasis-praia.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Oasis PraiaMar</strong></h1>
                            <h2>Ilha: <strong>Santiago</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona <strong>Prainha</strong></h3>
                            <h2>Avaliação: <strong>4,4 Estrelas</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Santiago/834474037.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Barceló Praia Cape Verde</strong></h1>
                            <h2>Ilha: <strong>Santiago</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Prainha</strong></h3>
                            <h2>Avaliação: <strong>5 Estrelas</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Soncent/ouril.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Ouril Hotel Mindelo</strong></h1>
                            <h2>Ilha: <strong>São  Vicente</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Rua Marginal</strong></h3>
                            <h2>Avaliação: <strong>...</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Soncent/4points.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>FOUR POINTS</strong></h1>
                            <h2>Ilha: <strong>São  Vicente</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Laginha</strong></h3>
                            <h2>Avaliação: <strong>...</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Sal/Rui palace.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Rui Palace Santa Maria</strong></h1>
                            <h2>Ilha: <strong>Sal</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Santa Maria</strong></h3>
                            <h2>Avaliação: <strong>5</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Sal/d'agua.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Hotel Odjo d'água</strong></h1>
                            <h2>Ilha: <strong>Sal</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Santa Maria</strong></h3>
                            <h2>Avaliação: <strong>4</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Sal/morabeza.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Hotel Morabeza</strong></h1>
                            <h2>Ilha: <strong>Sal</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Santa Maria</strong></h3>
                            <h2>Avaliação: <strong>4</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Sal/melia.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Melia Dunas Beach Resort & Spa</strong></h1>
                            <h2>Ilha: <strong>Sal</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Santa Maria</strong></h3>
                            <h2>Avaliação: <strong>5</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Boa Vista/riu.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Hotel Riu Karamboa</strong></h1>
                            <h2>Ilha: <strong>Boa Vista</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Rabil</strong></h3>
                            <h2>Avaliação: <strong>5</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="./resources/acomodation/hoteis/Boa Vista/ouril.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Nome: <strong>Barceló Marine Boa Vista</strong></h1>
                            <h2>Ilha: <strong>Boa Vista</strong></h2>
                            <h2>Categória: <strong> Hotel</strong></h2>
                            <h3>Zona: <strong>Sal Rei</strong></h3>
                            <h2>Avaliação: <strong>5</strong> <i class="fa-solid fa-star"></i></h2>
                        </div>
                    </div>


                </div>
            </div>

                <!-- BOTAO DIREITA -->
            <div class="botao">
                <button class="btn-nav" id="btn-next"><i class="fa-solid fa-angle-right"></i></button>
            </div>

            </div><!-- /acomodation -->
        </section>


        <section id="section1">
            <div class="s1">
                <div class="TITULO">
                <H2>FILTRO DE ACOMODAÇÕES</H2>
                </div>

                <div class="conteudo">
                    <div class="conteudo_em_linha">
                            <!-- LINHA: Disponibilidade -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Disponibilidade</h2></div>
                            <div class="linha-corpo datas">
                                <div class="datacampo">
                                    <span>Check-in</span>
                                    <input type="date" id="checkin" />
                                </div>
                                <div class="datacampo">
                                    <span>Check-out</span>
                                    <input type="date" id="checkout" />
                                </div>
                            </div>
                        </div>

                        <!-- LINHA: Ilhas -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Ilhas</h2></div>
                                <div class="linha-corpo">
                                    <div class="chips">
                                        <span class="chip" data-g="ilha">S. Antão</span>
                                        <span class="chip" data-g="ilha">S. Vicente</span>
                                        <span class="chip" data-g="ilha">S. Nicolau</span>
                                        <span class="chip" data-g="ilha">Sal</span>
                                        <span class="chip" data-g="ilha">Boa Vista</span>
                                        <span class="chip" data-g="ilha">Maio</span>
                                        <span class="chip" data-g="ilha">Santiago</span>
                                        <span class="chip" data-g="ilha">Fogo</span>
                                        <span class="chip" data-g="ilha">Brava</span>
                                    </div>
                                </div>
                        </div>

                        <!-- LINHA: Tipo de Alojamento -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Tipo de Alojamento</h2></div>
                                <div class="linha-corpo">
                                    <div class="chips">
                                        <span class="chip" data-g="tipo">Resort</span>
                                        <span class="chip" data-g="tipo">Boutique Hotel</span>
                                        <span class="chip" data-g="tipo">Eco-lodge</span>
                                        <span class="chip" data-g="tipo">Pensão / Pousada</span>
                                        <span class="chip" data-g="tipo">Casa de férias</span>
                                        <span class="chip" data-g="tipo">Apartamento</span>
                                    </div>
                                </div>
                        </div>
                    </div>


                    <div class="conteudo_em_linha">
                            <!-- LINHA: Tipo de Viagem -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Tipo de Viagem</h2></div>
                                <div class="linha-corpo">
                                    <div class="chips">
                                        <span class="chip" data-g="viagem">Casal</span>
                                        <span class="chip" data-g="viagem">Família</span>
                                        <span class="chip" data-g="viagem">Grupo</span>
                                        <span class="chip" data-g="viagem">Negócios</span>
                                        <span class="chip" data-g="viagem">Solo</span>
                                    </div>
                                </div>
                        </div>

                        <!-- LINHA: Preço por Noite -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Preço por Noite</h2></div>
                                <div class="linha-corpo">
                                    <div class="preco-linha">
                                        <span>30€</span>
                                        <input type="range" id="preco-min" min="30" max="400" value="30" step="10" oninput="atualizarPreco()" />
                                        <span class="preco-val" id="val-min">30€</span>
                                        <span>–</span>
                                        <input type="range" id="preco-max" min="30" max="400" value="200" step="10" oninput="atualizarPreco()" />
                                        <span class="preco-val" id="val-max">200€</span>
                                        <span>400€</span>
                                    </div>
                                </div>
                        </div>

                        <!-- LINHA: Categoria -->
                        <div class="linha">
                            <div class="linha-titulo"><h2>Categoria</h2></div>
                                <div class="linha-corpo">
                                    <div class="chips">
                                        <span class="chip estrela-btn" data-v="1">★ 1</span>
                                        <span class="chip estrela-btn" data-v="2">★★ 2</span>
                                        <span class="chip estrela-btn" data-v="3">★★★ 3</span>
                                        <span class="chip estrela-btn" data-v="4">★★★★ 4</span>
                                        <span class="chip estrela-btn" data-v="5">★★★★★ 5</span>
                                        <span class="chip estrela-btn" data-v="0">Sem cat.</span>
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="conteudo_em_linha">

                        <div class="linha-left">
                            <!--REGIME ALIMENTAR-->
                            <div class="linha-baixo">
                                <div class="linha-titulo"><h2>Regime Alimentar</h2></div>
                                <div class="linha-corpo">
                                    <select id="regime" class="select-filtro">
                                        <option value="">Qualquer regime</option>
                                        <option value="so">Só alojamento</option>
                                        <option value="mp">Meia-pensão</option>
                                        <option value="pc">Pensão completa</option>
                                        <option value="ai">All-inclusive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="linha-baixo">
                                <!--ORDENAR POR-->
                                <div class="linha-titulo"><h2>Ordenar Por</h2></div>
                                <div class="linha-corpo">
                                    <select id="ordenar" class="select-filtro">
                                    <option value="rec">Recomendados</option>
                                    <option value="preco-asc">Preço: menor primeiro</option>
                                    <option value="preco-desc">Preço: maior primeiro</option>
                                    <option value="stars">Melhor avaliação</option>
                                    <option value="novo">Mais recentes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="linha-right">
                            <!-- LINHA: Comodidades (ocupa 2 colunas) -->
                            <div class="linha-titulo"><h2>Comodidades</h2></div>
                            <div class="linha-corpo">
                                <div class="comodidades">
                                    <label class="comodidade"><input type="checkbox" /> Piscina</label>
                                    <label class="comodidade"><input type="checkbox" checked /> WiFi gratuito</label>
                                    <label class="comodidade"><input type="checkbox" /> Ar condicionado</label>
                                    <label class="comodidade"><input type="checkbox" /> Pequeno-almoço</label>
                                    <label class="comodidade"><input type="checkbox" /> Estacionamento</label>                                <label class="comodidade"><input type="checkbox" /> Vista mar</label>
                                    <label class="comodidade"><input type="checkbox" /> Spa</label>
                                    <label class="comodidade"><input type="checkbox" /> Pet-friendly</label>
                                    <label class="comodidade"><input type="checkbox" /> Ginásio</label>
                                    <label class="comodidade"><input type="checkbox" /> Restaurante</label>
                                    <label class="comodidade"><input type="checkbox" /> Transfer aeroporto</label>
                                    <label class="comodidade"><input type="checkbox" /> Praia privada</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="section3">

        </section>
    </main>
</body>

<script src="/accomodation.js"></script>

<?php
    include 'footer.php';
?>