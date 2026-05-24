<<<<<<< HEAD:acomodation.html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/acomodation.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>Acomodations Page</title>
</head>
=======
<?php
    include 'header.php';
?>
<link rel="stylesheet" href="/css/accomodation.css">

>>>>>>> tests:accomodation.php
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
                        <a href="https://www.booking.com/hotel/cv/vip-praia.pt-pt.html?aid=311098&label=vip-praia-qnGWzJIG3JjZwMe6Zi_CwQS383069634710%3Apl%3Ata%3Ap1%3Ap2%3Aac%3Aap%3Aneg%3Afi%3Atikwd-18772735944%3Alp9230695%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YZVcNNsENnH0l-9IW33KjYg&sid=24d09f48573bfe7f8c67b6d6e7753b41&all_sr_blocks=113655301_265015225_2_1_0&checkin=2026-05-15&checkout=2026-05-16&dest_id=-1313468&dest_type=city&dist=0&group_adults=2&group_children=0&hapos=1&highlighted_blocks=113655301_265015225_2_1_0&hpos=1&matching_block_id=113655301_265015225_2_1_0&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&sr_order=popularity&sr_pri_blocks=113655301_265015225_2_1_0__1846300&srepoch=1778072996&srpvid=a1985c8c96f8081d&type=total&ucfs=1&" target="_blank" rel="noopener"></a>
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

        <section id="section3">
            <div class="esq">
                
                    <div class="tit"><h1>Filtro de Acomodacoes</h1></div>
                    <div class="gg">
                        <div class="ggp">
                            <div class="linha-titulo"><h2>Disponibilidade</h2></div>
                            <div class="linha-corpo-datas">
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
                        <div class="ggh">
                            <div class="linha-titulo"><h2>Ilhas</h2></div>
                                <div class="linha-corpo">
                                    <select name="ilha" id="ilha">
                                        <option value="ilha">S.Antão</option>
                                        <option value="ilha">S.Vicente</option>
                                        <option value="ilha">S. Nicolau</option>
                                        <option value="ilha">Sal</option>
                                        <option value="ilha">Boa Vista</option>
                                        <option value="ilha">Maio</option>
                                        <option value="ilha">Santiago</option>
                                        <option value="ilha">Fogo</option>
                                        <option value="ilha">Brava</option>
                                    </select>
                                </div>
                        </div>
                        <div class="ggh">
                            <div class="linha-titulo"><h2>Tipo de Alojamento</h2></div>
                                <div class="linha-corpo">
                                    <select name="alojamento" id="alojamento">
                                        <option value="alojamento1">Resort</option>
                                        <option value="alojamento2">Hotel</option>
                                        <option value="alojamento3">Pensão / Pousada</option>
                                        <option value="alojamento4">Casa de férias</option>
                                        <option value="alojamento5">Apartamento</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="gg">
                        <div class="ggh">
                            <div class="linha-titulo"><h2>Tipo de Viagem</h2></div>
                                <div class="linha-corpo">
                                    <select name="tio_viagem" id="tipo_viagem">
                                        <option value="tipo">Casal</option>
                                        <option value="tipo">Famíllia</option>
                                        <option value="tipo">Grupo</option>
                                        <option value="tipo">Negócios</option>
                                        <option value="tipo">Solo</option>
                                    </select>
                                </div>
                        </div>
                        <div class="ggh">
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
                        <div class="ggh">
                            <div class="linha-titulo"><h2>Categoria</h2></div>
                                <div class="linha-corpo">
                                    <select id="categoria">
                                        <option value="1" class="estrela">★</option>
                                        <option value="2" class="estrela">★★</option>
                                        <option value="3" class="estrela">★★★</option>
                                        <option value="4" class="estrela">★★★★</option>
                                        <option value="5" class="estrela">★★★★★</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="gg">
                        <div class="gghl">
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
                        <div class="ggh">
                            <div class="linha-titulo"><h2>Ordenar Por</h2></div>
                            <div class="linha-corpo">
                                <select id="ordenar" class="select-filtro">
                                    <option value="rec">Recomendados</option>
                                    <option value="preco-asc">Preço: menor</option>
                                    <option value="preco-desc">Preço: maior</option>
                                    <option value="stars">Melhor avaliação</option>
                                    <option value="novo">Mais recentes</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="gg">
                    <div class="gghl">
                        <div class="linha-titulo"><h2>Comodidades</h2></div>
                        <div class="linha-corpo">                        
                            <div class="separar">
                                <label class="comodidade"><input type="checkbox" /> Piscina</label>
                                <label class="comodidade"><input type="checkbox" checked /> WiFi gratuito</label>
                                <label class="comodidade"><input type="checkbox" /> Praia privada</label>
                            </div>
                            <div class="separar">
                                <label class="comodidade"><input type="checkbox" /> Pequeno-almoço</label>
                                <label class="comodidade"><input type="checkbox" /> Estacionamento</label>                                
                               <label class="comodidade"><input type="checkbox" /> Vista mar</label>
                            </div>
                            <div class="separar">
                                <label class="comodidade"><input type="checkbox" /> Ginásio</label>
                                <label class="comodidade"><input type="checkbox" /> Restaurante</label>
                                <label class="comodidade"><input type="checkbox" /> Transfer aeroporto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filtro">
                    <button id="enviar_filtro" type="submit">Filtrar</button>
                </div>
            </div>
            <div class="dir">
                <div class="result">
                    Resultado
                </div>
                <div class="op">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1346419.2681288025!2d-23.973741187082798!3d15.98131883760907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2scv!4v1778071295658!5m2!1spt-PT!2scv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>
<<<<<<< HEAD:acomodation.html

    <!-- FOOTER -->
    <footer>

    </footer>



    <script>
        const track    = document.getElementById('carousel-track');
        const btnPrev  = document.getElementById('btn-prev');
        const btnNext  = document.getElementById('btn-next');

        const CARD_WIDTH = 260;   
        const GAP        = 24;    
        const STEP       = CARD_WIDTH + GAP;

        let currentIndex = 0;

        function getMaxIndex() {
            const cards    = track.querySelectorAll('.item-acomodation').length;
            const viewport = track.parentElement.clientWidth;
            const visible  = Math.floor(viewport / STEP);
            return Math.max(0, cards - visible);
        }

        function slide() {
            track.style.transform = `translateX(-${currentIndex * STEP}px)`;
        }

        btnNext.addEventListener('click', () => {
            if (currentIndex < getMaxIndex()) {
                currentIndex++;
                slide();
            }
        });

        btnPrev.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                slide();
            }
        });
    </script>

=======
>>>>>>> tests:accomodation.php
</body>

<script src="/accomodation.js"></script>

<?php
    include 'footer.php';
?>