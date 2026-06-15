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
    <title>CV-TRIP | São Vicente </title>
</head>
<body>
    <main id="main">
        <section class="top-section">
            <video autoplay muted loop playsinline class="background-video">
                <source src="./resources/videos/saovicente.mp4" type="video/mp4">
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
                    <h2 class="section-title">São Vicente Island</h2>
                <div class="divider"></div>
                <p>São Vicente is the cultural and musical soul of Cape Verde. Its vibrant capital, Mindelo, is famous for its colonial architecture, lively nightlife, and the soulful rhythms of morna music. Beyond the city’s artistic charm, the island boasts beautiful bays like Baía das Gatas and excellent spots for windsurfing and water sports.</p>
                </div>
                <div class="s1-img">
                    <img src="https://i.pinimg.com/1200x/65/18/ce/6518ce950bca1852138f4c4677048233.jpg" alt="Arquipélago de Cabo Verde vista aérea" />
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
                                <img src="https://i.pinimg.com/736x/8d/f0/87/8df08781f38a7148fa4a4dbcf2923007.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                            
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/9b/17/8d/9b178db853a6110fde5922fd7a293db4.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/6a/4d/c2/6a4dc2393a85fcb31e25fddd024f69f2.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/f8/cc/0b/f8cc0bc3264d7fafb253d4b4a41c2c94.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/e8/83/7e/e8837ed2c608d430c7be9134a2ddca6e.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/d8/2d/7b/d82d7ba7721ace19f5fb1e3cd2f32a82.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/2c/5c/cb/2c5ccbf6109f11c2061ff793c88fe652.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/82/01/66/8201666052601653475ca759aafd3326.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/1b/be/11/1bbe11141672e4ef9c250e28f381ac80.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/60/09/bc/6009bcf4c7392af4ba50dea93832ebce.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/6f/c4/ac/6fc4ac0115deaa49a447811a0ba87259.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/b9/96/a7/b996a796643440dabdea9852500b1949.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/ba/b0/ec/bab0ece6715ba18feca73d6d797de544.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/7f/b1/46/7fb14641aacf601f6e417d3b06001a69.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/b4/6c/db/b46cdbc42a09c27d2a38e924b62e2e83.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/ea/98/7a/ea987a73c71d88d8bea6036af9a43ebc.jpg" alt="">
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
                    <h2>Attractions on São Vicente Island</h2>
                    <div class="divider"></div>
                    <p>Discover the most visited places on the island</p>
                </div>

                <div class="linha">
                    
                    <a href="./moreinfo/tarrafalbeach.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://i.pinimg.com/736x/98/38/e2/9838e2320818a0f0abc80adabbf7e2bb.jpg" alt="Tarrafal Beach">
                            </div>
                            <div class="informacao">
                                <h3>Baía das Gatas</h3>
                                <p class="descricao">
                                    A massive natural lagoon with calm, crystal-clear waters protected by a barrier of volcanic rocks. It serves as the stage for the country's most famous music festival and is a perfect spot for a relaxing swim.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    
                    <a href="./moreinfo/serramalagueta.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://cdn.getyourguide.com/image/format=auto,fit=crop,gravity=auto,quality=60,width=400,height=265,dpr=2/tour_img/acec4794c5213a904a8999e6b782cf5a2a06d34d67df55cd3b941decffbd51f0.jpeg" alt="Serra de Malagueta">
                            </div>
                            <div class="informacao">
                                <h3>Praia Grande</h3>
                            
                                <p class="descricao">
                                    A stunning and expansive white sand beach framed by a contrasting landscape of dark volcanic mountains. It is highly sought after for its wild scenery and water sports.
                                </p>
                                
                            </div>
                        </div>
                    </a>

                    <a href="./moreinfo/mercadosucupira.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/1996.12.00._Calhau%2C_S%C3%A3o_Vicente%2C_Cabo_Verde._1.jpg/330px-1996.12.00._Calhau%2C_S%C3%A3o_Vicente%2C_Cabo_Verde._1.jpg" alt="Mercado de Sucupira">
                        </div>
                        <div class="informacao">
                            <h3>Calhau</h3>
                            
                            <p class="descricao">
                               A quiet fishing village nestled next to extinct volcanoes. It is a favorite weekend getaway for locals, famous for its restaurants serving fresh grilled fish and traditional live music on Sundays.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>

                <div class="linha">
                    <a href="./moreinfo/cidadevelha.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/236x/09/00/af/0900afd397753b240887cac8beb624f8.jpg" alt="Cidade Velha">
                        </div>
                        <div class="informacao">
                            <h3>Monte Verde</h3>
                            
                            <p class="descricao">
                                The highest point in São Vicente, standing at 750 meters. The summit offers a spectacular panoramic view of the entire island, and on clear days, you can spot the neighboring islands of Santo Antão, Santa Luzia, and São Nicolau.
                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/assomada.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/5b/ec/02/5bec022914474d34048d49ef374ac0d5.jpg" alt="Praia de Kebra Canela">
                        </div>
                        <div class="informacao">
                            <h3>São Pedro</h3>
                            
                            <p class="descricao">
                               World-renowned for its excellent windsurfing and kitesurfing conditions due to constant, reliable winds. Additionally, it is famous for the unique opportunity to swim alongside sea turtles in the bay.
                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/fortesaofilipe.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/92/83/55/92835540ad6973e75e8b1bcb82b4743d.jpg" alt="Ilhéu de Santa Maria">
                        </div>
                        <div class="informacao">
                            <h3>Mindelo</h3>
                            
                            <p class="descricao">
                               The cultural capital of Cape Verde, famous for its cosmopolitan atmosphere, well-preserved colonial architecture, the iconic replica of the Belém Tower, and the vibrant Mindelo Marina.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244423.13260607384!2d-25.04403160754604!3d16.820826413330465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94f1f1fd3288af5%3A0xcfc620ae2cec6a19!2sIlha%20de%20S%C3%A3o%20Vicente!5e0!3m2!1spt-PT!2scv!4v1781478724380!5m2!1spt-PT!2scv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>


        <section class="s4-grid">
            <div class="s4-title">
                <h1>View island content</h1>
            </div>
            <div class="s4-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/KMH_2H--wpI?si=f03HJMeoLZwNMpZ2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/h2pJUT87b7c?si=xr_GwMTfKzNt8LQR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mdeDIsdenE0?si=34RaRWpV4zYsJHnp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
