<?php
    include 'header.php'
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
    <title>CV-TRIP | São Nicolau </title>
</head>
<body>
    <main id="main">
        
        
        <section id="section1">

            <div class="s1-grid">
                <div class="s1-text">
                    <h2 class="section-title">São Nicolau Island</h2>
                <div class="divider"></div>
                São Nicolau is a hidden gem that preserves the quiet, traditional charm of Cape Verde. The island features a beautiful contrast between the colorful colonial houses of Ribeira Brava and a rugged interior with unique rock formations like Carbeirinho. It is the perfect destination for travelers seeking pristine hiking trails, peaceful villages, and untouched nature.
                </div>
                <div class="s1-img">
                    <img src="https://i.pinimg.com/1200x/c6/6a/b7/c66ab7bfc0b02c3e73354090bf34d10c.jpg" alt="">
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
                                <img src="https://i.pinimg.com/1200x/f1/90/2c/f1902c333ce878228e5d9f9fb44b4506.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                            
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/28/c1/b1/28c1b1543a7e49cac7f36a9903a71aba.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/40/ee/00/40ee0008c38cc972dd8553face15d475.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/bf/57/a7/bf57a7385b19460bdecd96290f08c422.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/236x/ad/a5/e9/ada5e996cacc6f9056b9067fa5716827.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/8c/a0/8b/8ca08be3908dd5a9c0a4d83e5e4856ef.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/1200x/8b/52/e9/8b52e93c74f0f8e8507d63416c53abd4.jpg" alt="">
                            </div>
                            <div class="infoo-gastronomia">
                                <p></P>
                            </div>
                        </div>
                        <div class="item-gastronomia">
                            <div class="imagem-gastronomia">
                                <img src="https://i.pinimg.com/736x/6a/25/72/6a2572503fac24f7de6c8e0653e7ea0b.jpg" alt="">
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

        <!-- <section id="pontos_turisticos">
            <div class="s3-grid">
                <div class="s3-header">
                    <h2>Attractions on  São Nicolau Island</h2>
                    <div class="divider"></div>
                    <p>Discover the most visited places on the island</p>
                </div>

                <div class="linha">
                    
                    <a href="./moreinfo/tarrafalbeach.php">
                        <div class="conteudo">
                            <div class="imagem">
                                <img src="https://i.pinimg.com/1200x/a2/59/94/a259940820bf6ba9a6dfa991c482170d.jpg" alt="Tarrafal Beach">
                            </div>
                            <div class="informacao">
                                <span class="categoria">Praias</span>
                                <h3>Tarrafal Beach</h3>
                                <p class="descricao">
                                    A vila foi nomeada Tarrafal em homenagem a uma planta chamada tarrafal cabo-verdiano. 
                                    A vila do Tarrafal tem poucas ruas mas muita hospitalidade.
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
                                <span class="categoria">Montanhas</span>
                                <h3>Serra de Malagueta</h3>
                            
                                <p class="descricao">
                                    O Parque Natural da Serra Malagueta faz parte da rede nacional de áreas protegidas 
                                    e é considerado o "pulmão" da ilha de Santiago.
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
                            <span class="categoria">Mercados</span>
                            <h3>Mercado de Sucupira</h3>
                            
                            <p class="descricao">
                                Um passeio imperdível e cheio de maravilhosos produtos de África. 
                                Tecidos lindos, artesanato, porco, galinha e muito mais.
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
                            <span class="categoria">Património</span>
                            <h3>Cidade Velha</h3>
                            
                            <p class="descricao">
                                Primeira cidade europeia nos trópicos e Património Mundial da UNESCO. 
                            </p>
                            
                        </div>
                    </div>
                    </a>

                    <a href="./moreinfo/assomada.php">
                        <div class="conteudo">
                        <div class="imagem">
                            <img src="https://i.pinimg.com/1200x/2d/a1/d7/2da1d7faa9349c859c4fc6627c938bc8.jpg" alt="Praia de Kebra Canela">
                        </div>
                        <div class="informacao">
                            <span class="categoria">local</span>
                            <h3>Assomada</h3>
                            
                            <p class="descricao">
                                Águas cristalinas e areia branca. Perfeita para relaxar e praticar desportos náuticos.
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
                            <span class="categoria">Património</span>
                            <h3>Fortaleza Real de São Filipe</h3>
                            
                            <p class="descricao">
                                Pequeno ilhéu ao largo da costa, perfeito para mergulho e observação de aves marinhas.
                            </p>
                            
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </section>
        <section class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244731.2772789711!2d-24.382451442563173!3d16.580221672044022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94eab6c693d234f%3A0x609b8a76f9f0d29d!2sIlha%20de%20S%C3%A3o%20Nicolau!5e0!3m2!1spt-PT!2scv!4v1781916161230!5m2!1spt-PT!2scv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section> -->


        <section class="s4-grid">
            <div class="s4-title">
                <h1>View island content</h1>
            </div>
            <div class="s4-content">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YIS2YR3EnMk?si=IXihyouEYBeRpRnp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/0GDVgM7Z18Y?si=oCOJY8LkRHC3PNpw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/s2cu9HDZwRY?si=mMTXw33bBGcRX1hy" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
