<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/ilhas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d5733abbf.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>CV-TRIP | Fogo </title>
</head>
<body>
    <main id="main">
        <section class="top-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="https://www.capeverde.com/wp-content/uploads/2023/07/fogo-island-cape-verde.mp4" type="video/mp4">
            </video>
            <header>
                <nav class="nav_bar">
                    <div class="header_logo">
                        <a href="index.php"><img src="./resources/logos/newlogonobg.png" alt="Logo CV Trips"></a>
                        <span>CV TRIPS</span>
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="link-holder"><a href="#"><i class="fa-solid fa-location-dot"></i> destinations</a></li>
                            <li class="link-holder"><a href="#"><i class="fa-solid fa-map"></i> map</a></li>
                            <li class="link-holder"><a href="#"><i id="plan_trip" class="fa-solid fa-plane"></i> plan trip</a></li>
                        </ul>
                    </div>
                    <div class="settings_bar">
                        <div class="lang_picker">
                            <img src="./resources/logos/flag_of_the_United_States.svg" alt="US Flag" id="flag_US">
                        </div>
                        <div class="account_search_submenu">
                            <i class="fa-solid fa-magnifying-glass" id="search_icon"></i>
                            <input type="text" id="search_bar" placeholder=" Type search here ...">
                            <i class="fa-solid fa-user" id="account_icon"></i>
                        </div>
                    </div>
                </nav>
            </header>
        </section>

        
        <section id="section1">

            <div class="s1-grid">
                <div class="s1-text">
                    <h2 class="section-title">Fogo Island</h2>
                <div class="divider"></div>
                <p>Fogo is a dramatic and unforgettable island dominated by a massive, active volcano that rises straight from the Atlantic Ocean. The unique landscape of dark volcanic soil contrasts with fertile vineyards that produce the famous local Fogo wine. Staying inside the volcanic crater (Chã das Caldeiras) offers a surreal, once-in-a-lifetime adventure.</p>
                </div>
                <div class="s1-img">
                    <img src="https://i.pinimg.com/736x/30/c0/e7/30c0e7bb8fbd51317ad1b810474e1aa0.jpg" alt="Arquipélago de Cabo Verde vista aérea" />
                </div>
                </div>
            </div>

        </section>

        <section class="section2">
            <div class="title-s2">
                <h2>Gallery</h2>
            </div>
            <!--CARROSSEL-->
            <div class="gastronomia">
                <div class="carrosel-viewport">
                    <!-- Faixa que desliza horizontalmente -->
                    <div class="carrosel_deslizar" id="carrosel_deslizar_gastronomia">
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/3c/dd/60/3cdd60d71f8e15b0a1e40652c22ee095.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                            
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/2a/ee/b9/2aeeb91e3b1a9e237b2cbd90166f70b3.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/25/4e/a2/254ea2becac5339ff205fd3433546d5e.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/f5/3d/a2/f53da2bbaf3f351e02a301b15c30dff7.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/e2/68/af/e268afde9b4cd37ebb5074dcf6b3cc3b.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/e1/70/2d/e1702d8dc165bc544c7634f9ecb3750c.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/38/65/72/386572ddf1ec148bf4caa2d53746c9aa.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/90/34/8c/90348ce2cf464bb07b97b61138acc23a.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/16/c6/68/16c6686bd41a7ef3f718bb660e5759f3.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/12/bc/37/12bc374a127004d05edf5d120a2d9e80.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/e7/11/66/e711660bb25098c934dbc2ee6f8e2d16.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/77/07/62/770762dc222b56067b596085b02dd551.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/a5/61/58/a5615834b2431707c7ca1eb5c64df470.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/6d/15/78/6d1578323a99c963c552a6761aec73bc.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/93/1e/0d/931e0ddc0435eb5742e268b3da03650e.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/56/cd/f8/56cdf8122bed777a76adb738f171ab91.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="butoes">
                    <!-- BOTAO ESQUERDA -->
                    <button class="btn" id="btn-ant-gastronomia"><i class="fa-solid fa-angle-left"></i></button>
                    <!-- BOTAO DIREITA -->
                    <button class="btn" id="btn-next-gastronomia"><i class="fa-solid fa-angle-right"></i></button>
                </div>
        </section>

        <section id="pontos_turisticos">
            <div class="s3-grid">
                <div class="s3-header">
                    <h2>Attractions on Fogo Island</h2>
                    <div class="divider"></div>
                    <p>Discover the most visited places on the island</p>
                </div>

                <div class="linha">
                    
                    <a href="./moreinfo/tarrafalbeach.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://i.pinimg.com/1200x/eb/ec/3a/ebec3a0e14d4a305dd82f1bde116cfd8.jpg" alt="Tarrafal Beach">
                            </div>
                            <div class="informacao">
                                <h3>Chã das Caldeiras</h3>
                                <p class="descricao">
                                    A unique community living literally inside the volcano's crater. It is famous for its houses rebuilt with lava stone and the resilience of its people, who live in harmony with the forces of nature.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    
                    <a href="./moreinfo/serramalagueta.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://i.pinimg.com/1200x/29/7c/b7/297cb761f98d38dc807decdbf8184914.jpg" alt="Serra de Malagueta">
                            </div>
                            <div class="informacao">
                                <h3>Pico do Fogo</h3>
                            
                                <p class="descricao">
                                    The highest point in Cape Verde, standing at 2,829 meters. Hiking up this active volcano offers an unforgettable 360-degree panoramic view, followed by a thrilling descent down the volcanic ash.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    <a href="./moreinfo/mercadosucupira.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/30/57/d8/3057d81b38811a67c8650f7ae3f5dffd.jpg" alt="Mercado de Sucupira">
                        </div>
                        <div class="informacao">
                            <h3>São Filipe</h3>
                            
                            <p class="descricao">
                                The island's main city, known for its charming cobblestone streets and famous "sobrados"—imposing, colorful colonial mansions that are beautifully preserved and showcase the island's rich heritage.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>

                <div class="linha">
                    <a href="./moreinfo/cidadevelha.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/00/fa/d5/00fad52e62d5746f27bd1e8b4fcc11d4.jpg" alt="Cidade Velha">
                        </div>
                        <div class="informacao">
                            <h3>Salinas de São Jorge</h3>
                            
                            <p class="descricao">
A natural monument sculpted by the ocean and the erosion of volcanic rock. When the tide is calm, beautiful natural pools are formed right next to a striking black sand beach, making it ideal for a relaxing swim.                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/assomada.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/2d/a1/d7/2da1d7faa9349c859c4fc6627c938bc8.jpg" alt="Praia de Kebra Canela">
                        </div>
                        <div class="informacao">
                            <h3>Mosteiros and Coffee Plantations</h3>
                            
                            <p class="descricao">
                                Located in a more humid and fertile microclimate, this region stands out for its high-quality coffee plantations (considered one of the most exclusive coffees in the world), surrounded by lush green landscapes that contrast beautifully with the dark lava.
                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/fortesaofilipe.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/16/93/30/16933083b3ffe37fe7361c67008d0739.jpg" alt="Ilhéu de Santa Maria">
                        </div>
                        <div class="informacao">
                            <h3>Vineyards and Wineries of Chã</h3>
                            
                            <p class="descricao">
                                Grapes grown directly in volcanic soil produce the famous local "Manecom" wine. Visiting the local cooperatives for a wine tasting paired with traditional goat cheese is a must-do culinary experience.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123362.86227427027!2d-24.473710026230773!3d14.932109247416799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93610f2fd289967%3A0x1367bcb2370a2000!2sIlha%20do%20Fogo!5e0!3m2!1spt-PT!2scv!4v1781477493387!5m2!1spt-PT!2scv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        <section class="s4-grid">
            <div class="s4-title">
                <h1>View island content</h1>
            </div>
            <div class="s4-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/3fqx2Ugsn_w?si=HiphSTI7GxaGEpSX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Z7gngJMsFSI?si=Fm1LcAzaTA_stzmq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/V7HzH4HCZ6E?si=h96eIHiNAsIFjqIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>             
            </div>
        </section>
        <section class="outras_ilhas">

        </section>

         
        <section class="s5-grid">
            <div class="coment_info">
                <h1>Comments</h1>
                <h2>Share your experience on the island</h2>
                <form class="formulario_coments" id="commentform">
                    <div class="nome">
                        <label for="name">Name</label>
                        <input id="nome" type="text" for="name" placeholder="Your Name here">
                    </div>
                    <div class="nation">
                        <label for="nation">Nationality</label>
                        <select name="nation" id="nation">
                            <option value="">Select a nationality</option>
                            <option value="angolan">Angolan</option>
                            <option value="brazilian">Brazilian</option>
                            <option value="cape_verdean">Cape Verdean</option>
                            <option value="spanish">Spanish</option>
                            <option value="french">French</option>
                            <option value="guinean">Guinean</option>
                            <option value="italian">Italian</option>
                            <option value="mozambican">Mozambican</option>
                            <option value="portuguese">Portuguese</option>
                            <option value="senegalese">Senegalese</option>
                            <option value="sao_tomean">São Toméan</option>
                        </select>
                    </div>
                    <div class="your_coment">
                        <label for="coment">Comment</label>
                        <input type="text"  id="coments" placeholder="Your comment: ">
                    </div>
                    <div class="sent_image" >
                        <label for="image" class="botao-upload">Charger an image:</label>
                        <input
                            type="file"
                            id="image"
                            name="image"
                            style="Display: None"
                            accept="image/png, image/jpeg, image/jpg, image/webp"
                        >
                    </div>
                    <div class="botao_coments">
                        <button type="submit">Sent Comment</button>
                    </div>
                </form>
            </div>
            <div class="coment" id="containerComentarios">
                    coments
            </div>
        </section>
    </main>

    <script src="./ilhas.js"></script>
    <script src="./coments.js"></script>

<?php
    include 'footer.php'
?>
