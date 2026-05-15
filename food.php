<?php
    include 'header.php';
?>
    <link rel="stylesheet" href="style.food.css">
    <title>Foods</title>

<body>
    <section class="top-section">

        <video autoplay muted loop playsinline class="background-video">
            <source src="resources/videos/food-banner..mp4" type="video/mp4">
</video>

        <div class="hero">
            <div class="hero-content">
                <h1>food in cabo verde</h1>
                <p>Restaurants and information about tradicional dishes</p>
                <a href="#main" class="btn">Explore</a>
            </div>
        </div>

    </section>

  <section class="main">
    <div class="main-content">
        <h1 class="title-food">FOODS OF CABO VERDE</h1>
        <div class="text">
            <p>Traditional Cape Verdean dishes reflect the country’s history, geography, and cultural influences,
                blending African, Portuguese, and even Brazilian elements into a unique and flavorful cuisine. Because
                the islands are surrounded by the Atlantic Ocean, seafood plays a central role, but the food is also
                shaped by periods of drought, leading to creative use of simple, locally available ingredients.</p>
        </div>
    </div>  

            <div class="galeria">
                <img src="/resources/images/donei.jpg" class="ativa">
                <img src="/resources/images/imagem2.jpg">
                <img src="/resources/images/cuscus.jpg">
                <img src="/resources/images/ressois.jpg">
            </div>
     
    </section>

    <section class="about">

        <div class="about-text">
            <h2 class="about-title">About Our Food</h2>
            <p>Cape Verdean cuisine is a unique blend of African and Portuguese influences, shaped by the country’s
                island geography and history. It is based on simple, local ingredients such as corn, beans, fish, and
                vegetables, which are used to create hearty and flavorful meals.

                The most traditional dish is cachupa, a slow-cooked stew made with corn, beans, and a mix of meat or
                fish. It is considered the national dish and is an important part of Cape Verdean identity. Seafood also
                plays a major role, with fresh fish often grilled or cooked with garlic, onions, and spices.</p>

        </div>
    </section>

    <section>
        <div class="restaurants">
            <h1>Restaurants</h1>
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
                            <img src="/resources/images/img-res-sal.jpg" alt="">
                        </div>
                        <div class="info">
                                <h2>Marea Italian Restauran</h2>
                                <h2>Sal</h2>
                                <h3>Praia Santa Maria</h3>
                        </div>
                    </div>
    
                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="/resources/images/img-res-sal2.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2>Soul Kitchen Restaurant</h2>
                            <h2>Sal</h2>
                            <h3>Rua das Salinas</h3>
                        </div>
                    </div>
    
                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="/resources/images/img-res-st.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2>Linha d' agua</h2>
                            <h2>Santiago</h2>
                            <h3>Prainha</h3>
                        </div>
                    </div>
    
                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="/resources/images/img-res-st2.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2>O Poeta</h2>
                            <h2>Santiago</h2>
                            <h3>Achada Santo Antonio</h3>
                        </div>
                    </div>
    
                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="/resources/images/img-res-sv.jpg" alt="">
                        </div>
                        <div class="info">
                            <h2>Nautilus</h2>
                            <h2>São  Vicente</h2>
                            <h3>Avenida Marginal</h3>
                        </div>
                    </div>

                    <div class="item-acomodation">
                        <div class="imagem">
                            <img src="/resources/images/img-res-sv2.jpg" alt="">
                        </div>
                        <div class="info">
                            <h1>Le Metalo</h1>
                            <h2>Sao Vicente</h2>
                            <h3>Rua Machado</h3>
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

    <script src="./script-food.js"></script>

</body>
<?php
    include 'footer.php';
?>