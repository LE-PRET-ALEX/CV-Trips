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
    <title>CV-TRIP | Boa Vista </title>
</head>
<body>
    <main id="main">
        <section class="top-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="https://www.capeverde.com/wp-content/uploads/2023/07/boa-vista-island-cape-verde.mp4" type="video/mp4">
            </video>
            <header>
                <nav class="nav_bar">
                    <div class="header_logo">
                        <a href="index.php"><img src="./resources/logos/newlogonobg.png" alt="Logo CV Trips"></a>
                        <span>CV TRIPS</span>
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="link-holder"><a href="./destinations.php"><i class="fa-solid fa-location-dot"></i> destinations</a></li>
                            <li class="link-holder"><a href="./map.php"><i class="fa-solid fa-map"></i> map</a></li>
                            <li class="link-holder"><a href="./plan_trip.php"><i id="plan_trip" class="fa-solid fa-plane"></i> plan trip</a></li>
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
                    <h2 class="section-title">Boa Vista Island</h2>
                <div class="divider"></div>
                    <p>Boa Vista is the island of dunes and endless beaches, offering some of the most stunning coastal landscapes in the archipelago. Known for its laid-back vibe, it is a haven for wildlife lovers, where you can watch loggerhead turtles nesting or spot humpback whales. It’s the perfect place to disconnect and enjoy kilometers of untouched white sand.</p>
                </div>
                <div class="s1-img">
                    <img src="https://i.pinimg.com/1200x/1a/8e/0d/1a8e0d40140abb6a1a4052f505df5e4b.jpg" alt="Arquipélago de Cabo Verde vista aérea" />
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
                                <img src="https://i.pinimg.com/736x/36/04/6f/36046f08ddf5db9a8222c032ff17d439.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                            
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/d6/29/28/d629281a700b90737c9cdb42743df482.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/5e/e1/85/5ee18514fb682073f48fda216de8ccdc.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/58/22/78/58227808de93fe96ccbd196615e98a11.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/d4/46/25/d446250eb5dc1ecb2a602d6bd7958424.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/51/92/25/519225acf6c0c2c3b0b0f014e53293ef.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/4f/7f/63/4f7f63de88e792c33ae6fa824567acf8.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/0d/f8/f6/0df8f6da8da000e8a060b06bed315739.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/f8/8c/14/f88c145697f6398d37f91bf1b8ef3a0b.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/f4/5a/ba/f45abab6c321b9708764118fca691d6d.jpg" alt="">
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
                    <h2>Attractions on Boa Vista Island</h2>
                    <div class="divider"></div>
                    <p>Discover the most visited places on the island</p>
                </div>

                <div class="linha">
                    
                    <a href="./moreinfo/tarrafalbeach.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://i.pinimg.com/736x/c2/e3/d9/c2e3d9b224c08cd28077caa7a37f3547.jpg" alt="">
                            </div>
                            <div class="informacao">
                                <h3>Deserto de Viana</h3>
                                <p class="descricao">
                                    It is one of the most stunning landscapes in Cape Verde, formed by fine sands brought directly from the Sahara Desert by the trade winds. This mystical scenery stretches for kilometers with white and golden dunes dotted with isolated acacias and date palms.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    
                    <a href="./moreinfo/serramalagueta.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAHHizJbymk9-VPFDcvK4YwyJV6EHI9e44e0W3Kyzp4DSIl1wwdc3qRLsv4S9EKxA8vFwHal-YAKQ6HJCQnoA6fFYR95vLTIPwWgwVHZVTCqqnamZ5eIlBHsZ4SUXHv6hlfsLl2n=w1333-h1000-k-no" alt="">
                            </div>
                            <div class="informacao">
                                <h3>Beach of Chaves</h3>
                            
                                <p class="descricao">
                                    It is a stunning and immense stretch of sand that combines the comfort of world-class resorts at one end with completely wild and untouched natural beauty at the other. Its giant dunes seem to plunge directly into the clear waters of the Atlantic.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    <a href="./moreinfo/mercadosucupira.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/fa/ee/fd/faeefd8cb0e1b3464ab1a39e3b42d315.jpg" alt="">
                        </div>
                        <div class="informacao">
                            <h3>Beach of Santa Mónica</h3>
                            
                            <p class="descricao">
                                It is widely considered the most spectacular beach in Cape Verde, stretching for over 22 kilometers of fine white sand, completely deserted. Its isolation preserves a paradisiacal and majestic atmosphere, ideal for those seeking to disconnect from the world.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>

                <div class="linha">
                    <a href="./moreinfo/cidadevelha.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAGLAT1NFGXYoFzNH7WPa9HVm6mxuMsyW8C9UNL12veQZEKWhHwo2SqdAZMcpieI5dLBJZJNdiTXYpf8A7f1CRY9wsBiZjROHJVqtirdmuxpIHO_g7uuR7dZCMICvL_lOyP7m8ZQ9A=w1333-h1000-k-no" alt="">
                        </div>
                        <div class="informacao">
                            <h3>Beach of Atalanta</h3>
                            
                            <p class="descricao">
                                It is world-famous for being home to the iconic shipwreck of the Spanish cargo ship Cabo Santa Maria, which ran aground in 1968. The ship's rusty skeleton, battered by constant waves, creates a dramatic and photogenic scene that attracts travelers from all over the world.
                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/assomada.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/ef/f3/58/eff35874777d9d42c8217d26a1fb39f8.jpg" alt="">
                        </div>
                        <div class="informacao">
                            <h3>Sal Rei</h3>
                            
                            <p class="descricao">
                                    It is the tranquil and colorful capital of Boa Vista, concentrating the social, commercial, and cultural life of the island. Maintaining a typically relaxed pace of life ("No Stress"), the city welcomes visitors with its flower-filled squares, colonial-style buildings, and local markets.                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/fortesaofilipe.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://lh3.googleusercontent.com/gps-cs-s/APNQkAFimlOO9aoc9cXY0Ljq7dANCq53pwV0SBWwiH9bz2DktPIZh-MS1EO4tO-oMoQ0wafkn6JHa7LnuUnHCQTH_poRBX4NoY7HqWjK6EXait8SzdIFjhA30IHQj-PpWYSTOnLL98SasA=w1333-h1000-k-no" alt="">
                        </div>
                        <div class="informacao">
                            <h3>Beach of Varandinha</h3>
                            
                            <p class="descricao">
                                It stands out from the other beaches on the island due to its impressive rock formations and limestone cliffs that conceal natural caves sculpted by sea and wind erosion. It is a wild haven offering sheltered spots and breathtaking panoramic views of the ocean.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245334.3343987091!2d-23.127260213089727!3d16.099238552848576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b25fe6e90c16f%3A0x2d7a17a397e16ab3!2sBoa%20Vista!5e0!3m2!1spt-PT!2scv!4v1781910752753!5m2!1spt-PT!2scv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        <section class="s4-grid">
            <div class="s4-title">
                <h1>View island content</h1>
            </div>
            <div class="s4-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YdlcduPjqY0?si=TEKIrZoZMwmittFM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/FhY_s0d-D7k?si=ret-zo5DuFPb8MXG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/m9GP4t1g61I?si=TbqAZdxcRVmW_k9N" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>

        <section id="ilhas">
            <div class="ilhas-header">
                <h2 class="section-title">See other islands of Cape Verde</h2>
                <div class="divider"></div>
                <p class="ilhas-subtitle">
                    Which island owns a world inside, click to discover.
                </p>
            </div>
            <div class="ilhas-grid">
                <a class="ilha-card" href="santoantao.php">
                    <img src="./resources/aboutCV/image ilhas/SantoAntao.jpg" alt="Santo Antão" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Santo Antão</h3>
                    </div>
                </a>

                <a class="ilha-card" href="saovicente.php">
                    <img src="./resources/aboutCV/image ilhas/Soncent.jpg" alt="São Vicente" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>São Vicente</h3>
                    </div>
                </a>

                <a class="ilha-card" href="santaluzia.php">
                    <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=600&q=80" alt="Santa Luzia" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Santa Luzia</h3>
                    </div>
                </a>

                <a class="ilha-card" href="saonicolau.php">
                    <img src="./resources/aboutCV/image ilhas/SaoNiclau.jpg" alt="São Nicolau" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>São Nicolau</h3>
                    </div>
                </a>

                <a class="ilha-card" href="sal.php">
                    <img src="./resources/aboutCV/image ilhas/Sal.jpg" alt="Sal" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Sal</h3>
                    </div>
                </a>

                <a class="ilha-card" href="boavista.php">
                    <img src="./resources/aboutCV/image ilhas/Bubista.jpg" alt="Boa Vista" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Boa Vista</h3>
                    </div>
                </a>

                <a class="ilha-card" href="maio.php">
                    <img src="./resources/aboutCV/image ilhas/Maio.jpg" alt="Maio" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Maio</h3>
                    </div>
                </a>

                <a class="ilha-card" href="santiago.php">
                    <img src="./resources/aboutCV/image ilhas/Santiago.jpg" alt="Santiago" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Santiago</h3>
                    </div>
                </a>

                

                <a class="ilha-card" href="fogo.php">
                    <img src="./resources/aboutCV/image ilhas/fogo.jpg" alt="Fogo" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Fogo</h3>
                    </div>
                </a>

                <a class="ilha-card" href="brava.php">
                    <img src="./resources/aboutCV/image ilhas/Brava.jpg" alt="Brava" />
                    <div class="overlay"></div>
                    <div class="card-content">
                        <h3>Brava</h3>
                    </div>
                </a>
            </div>
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
