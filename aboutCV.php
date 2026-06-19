<?php 
    include 'header.php'; 
?>
<htnl>
<!-- CONTEÚDO PRINCIPAL (igual ao seu, sem repetir header/vídeo) -->
<main id="main-content">
    <link rel="stylesheet" href="./css/aboutCV.css">
    <!-- S1: DESCRIÇÃO -->
    <section id="descricao">
        <div class="s1-grid">
            <div class="s1-text">
                <h2 class="section-title">The Cape Verde<br/>Archipelago</h2>
                <div class="divider"></div>
                <p>
                    Cape Verde is an island State located in the Atlantic Ocean, composed of ten islands and several islets. 
                    With a total area of 4,033 km², the archipelago is divided into two main groups: 
                    <strong>Barlavento</strong> (Santo Antão, São Vicente, Santa Luzia,
                    São Nicolau, Sal e Boa Vista) and <strong>Sotavento</strong> (Maio, Santiago, Fogo e Brava).
                </p>
                <p>
                    Discovered and colonized by Portuguese navigators in the 15th century, 
                    the country became independent in 1975 and transformed into one of the most stable 
                    democracies on the African continent. Its strategic position between Europe, Africa
                    and the Americas historically contributed to a unique identity, marked by miscegenation, 
                    resilience and the spirit of <em>morabeza</em>.
                </p>
                <p>
                  The climate is dry and arid, tempered by maritime influence, with beaches of fine white sand, 
                  crystal-clear waters and volcanic landscapes of unique beauty.
                </p>
                <div class="stat-row">
                    <div class="stat">
                        <div class="num">10</div>
                        <div class="lbl">Islands</div>
                    </div>
                    <div class="stat">
                        <div class="num">600K+</div>
                        <div class="lbl">inhabitants</div>
                    </div>
                    <div class="stat">
                        <div class="num">4.033</div>
                        <div class="lbl">km²</div>
                    </div>
                    <div class="stat">
                        <div class="num">1975</div>
                        <div class="lbl">Independence</div>
                    </div>
                </div>
            </div>
            <div class="s1-img">
                <img src="./resources/aboutCV/imageCV.jpg" alt="Arquipélago de Cabo Verde vista aérea" />
                <div class="img-tag">The Cape Verde Archipelago — Atlântic</div>
            </div>
        </div>
    </section>

    <!-- S2: LOCALIZAÇÃO -->
    <section id="localizacao">
        <div class="s2-grid">
            <div class="s2-info">
                <h2 class="section-title">Locations</h2>
                <div class="divider"></div>
                <p>
                    Cape Verde is located in the North Atlantic Ocean, about <strong>570 km</strong>
                    off the West African coast, opposite Senegal and Mauritania. The islands are 
                    distributed between latitudes 14° and 18° North and longitudes 22° and 26° West.
                </p>
                <p>
                    The capital, <strong>Praia</strong>,located on the island of Santiago, in the Sotavento group. 
                    São Vicente is home to the second-largest city <strong>Mindelo</strong> considered the cultural 
                    hub of the archipelago.
                </p>
                <div class="info-list">
                    <div class="list"><strong>Continent:</strong> África</div>
                    <div class="list"><strong>Capital:</strong> Praia</div>
                    <div class="list"><strong>Language:</strong> Português / Crioulo</div>
                    <div class="list"><strong>Currency:</strong> Escudo Cabo-verdiano</div>
                    <div class="list"><strong>Time zone:</strong> UTC-1</div>
                    <div class="list"><strong>Dist. a Portugal:</strong> ~2.700 km</div>
                </div>
            </div>
            <div class="s2-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930523.3!2d-24.0!3d16.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x939b8399b37d2dfd%3A0x46ac8a038df1f04!2sCabo%20Verde!5e0!3m2!1spt!2scv!4v1710000000000"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de Cabo Verde">
                </iframe>
            </div>
        </div>
    </section>

    <!-- S3: ILHAS -->
    <section id="ilhas">
        <div class="ilhas-header">
            <h2 class="section-title">Cape Verde's Islands</h2>
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

    <!-- S4: CULTURA -->
    <section id="cultura">
        <div class="cultura-header">
            <h2 class="section-title">Cape Verde's Culture</h2>
            <div class="divider"></div>
        </div>
        <div class="cultura-grid">
            <div class="cultura-item">
                <img src="./resources/aboutCV/cultura/dança.jpg" alt="Dança tradicional" />
                <div class="cap">Dance & Tradition
                    <a href="./moreinfo/info_cultura&dance.php">See More</a>
                </div>
                
            </div>
            <div class="cultura-item">
                <img src="https://i.pinimg.com/736x/11/0f/1d/110f1d368541893b284d0cb0d277cea8.jpg" alt="Dança tradicional" />
                <div class="cap">History 
                    <a href="./moreinfo/info_cultura&dance.php">See More</a>
                </div>
            </div>
            <div class="cultura-item">
                <img src="./resources/aboutCV/cultura/download (2).jpg" alt="Artesanato cabo-verdiano" />
                <div class="cap">Craftsmanship
                    <a href="./moreinfo/info_artesanato.php">See More</a>
                </div>
            </div>
        </div>
        <div class="cultura-grid">
            <div class="cultura-item">
                <img src="./resources/aboutCV/cultura/catxupa.jpg" alt="Gastronomia" />
                <div class="cap">Gastronomy
                    <a href="./moreinfo/info_gastronomy.php">See More</a>
                </div>
            </div>
            <div class="cultura-item">
                <img src="./resources/aboutCV/cultura/cidadevelha.jpg" alt="Arquitetura colonial" />
                <div class="cap">Colonial architecture
                    <a href="./moreinfo/info_architecture.php">See More</a>
                </div>
            </div>
            <div class="cultura-item">
                <img src="./resources/aboutCV/cultura/carnavrau.jpg" alt="Festivais e carnaval" />
                <div class="cap">Mindelo Carnival
                    <a href="./moreinfo/info_mindelocarnaval.php">See More</a>
                </div>
            </div>
        </div>

        <div class="cultura-text-block">
            <div class="ct">
                <h4>Mestizo Identity</h4>
                <p>Cape Verdean culture results from the fusion between the African traditions of the enslaved people brought from the continent and the Portuguese heritage of the colonizers. From this synthesis, a unique identity was born, the Cape Verdean people, and their own language, Creole, which today is a symbol of resistance and national pride.</p>
            </div>
            <div class="ct">
                <h4>Gastronomy</h4>
                <p>The national dish is cachupa, a stew of corn, beans, and vegetables to which meat or fish are added. Tuna, lobster, and xerém (corn porridge) are also hallmarks of the local cuisine, heavily influenced by the island geography and the resources of the Atlantic.</p>
            </div>
            <div class="ct">
                <h4>Festivals & Tradition</h4>
                <p>The Mindelo Carnival, considered one of the most vibrant in the Lusophone world, is celebrated with colorful parades, political satire, and popular creativity. The Baía das Gatas Festival in São Vicente is another high point of the cultural calendar, bringing together musicians and visitors from all over the world.</p>
            </div>
        </div>
    </section>

    <!-- S5: MÚSICA -->
    <section id="musica">
        <div class="musica-header">
            <h2 class="section-title">Cape Verde's Music</h2>
            <div class="divider"></div>
            <p class="musica-intro">
                Music is the soul of Cape Verde. Born from saudade, the sea, and the diaspora,
                it crosses borders and moves the entire world. From the melancholy of <em> morna</em> 
                to the festive rhythm of <em>funaná</em> each genre is a way of telling the story of a people.
            </p>
        </div>

        <div class="musica-grid">
            <div class="musica-card">
                <img class="mc-img" src="./resources/aboutCV/cultura/Cesaria Evora.jpg" alt="Morna" />
                <div class="mc-body">
                    <span class="mc-tag">UNESCO Heritage · 2019</span>
                    <h3>Morna</h3>
                    <p>Considered the music of the Cape Verdean soul, morna is a slow-tempo lyrical genre that expresse <em>sodade</em> Creole nostalgia. Brought to the international stage by Cesária Évora, the "Barefoot Diva", it was inscribed on the Intangible Cultural Heritage list in 2019.</p>
                </div>
            </div>

            <div class="musica-card">
                <img class="mc-img" src="./resources/aboutCV/cultura/code di dona.jpg" alt="Funaná" />
                <div class="mc-body">
                    <span class="mc-tag">Rhythm</span>
                    <h3>Funaná</h3>
                    <p>Born in the rural areas of Santiago, funaná is a fast-paced, danceable rhythm performed with an accordion and a <em>ferrinho</em>.Banned during colonialism for being considered "wild", it became a symbol of resistance and liberation after independence</p>
                </div>
            </div>

            <div class="musica-card">
                <img class="mc-img" src="./resources/aboutCV/cultura/batabaque.jpg" alt="Coladeira e Batuko" />
                <div class="mc-body">
                    <span class="mc-tag">Musical Diversity</span>
                    <h3>Coladeira & Batuque</h3>
                    <p>Coladeira is a more cheerful and satirical rhythm than morna, full of humor and social commentary. Batuque is one of the oldest musical forms, with African roots, characterized by intense percussion and ritual dance, preserved mainly in Santiago.</p>
                </div>
            </div>
        </div>
    </section>
</main>
</html>
<?php include 'footer.php'; ?>