const acomodacoes = [
    {
        id: 1,
        nome: "Hotel VIP-PRAIA",
        ilha: "Santiago",
        zona: "Palmarejo",
        tipo: "Hotel",
        estrelas: 4,
        preco: 150,
        comodidades: ["piscina", "wifi", "restaurante"],
        latitude: 15.0833,
        longitude: -23.6417
    },
    {
        id: 2,
        nome: "Oasis PraiaMar",
        ilha: "Santiago",
        zona: "Prainha",
        tipo: "Hotel",
        estrelas: 4.4,
        preco: 180,
        comodidades: ["wifi", "praia-privada", "vista-mar"],
        latitude: 15.0850,
        longitude: -23.6350
    },
    {
        id: 3,
        nome: "Barceló Praia Cape Verde",
        ilha: "Santiago",
        zona: "Prainha",
        tipo: "Hotel",
        estrelas: 5,
        preco: 250,
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "transfer-aeroporto"],
        latitude: 15.0860,
        longitude: -23.6340
    },
    {
        id: 4,
        nome: "Ouril Hotel Mindelo",
        ilha: "São Vicente",
        zona: "Rua Marginal",
        tipo: "Hotel",
        estrelas: 4,
        preco: 120,
        comodidades: ["wifi", "restaurante"],
        latitude: 16.8897,
        longitude: -24.9729
    },
    {
        id: 5,
        nome: "FOUR POINTS",
        ilha: "São Vicente",
        zona: "Laginha",
        tipo: "Hotel",
        estrelas: 4,
        preco: 140,
        comodidades: ["piscina", "wifi", "restaurante", "estacionamento"],
        latitude: 16.8920,
        longitude: -24.9700
    },
    {
        id: 6,
        nome: "Rui Palace Santa Maria",
        ilha: "Sal",
        zona: "Santa Maria",
        tipo: "Hotel",
        estrelas: 5,
        preco: 200,
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "ginásio"],
        latitude: 16.7412,
        longitude: -22.9458
    },
    {
        id: 7,
        nome: "Hotel Odjo d'água",
        ilha: "Sal",
        zona: "Santa Maria",
        tipo: "Hotel",
        estrelas: 4,
        preco: 160,
        comodidades: ["wifi", "vista-mar"],
        latitude: 16.7430,
        longitude: -22.9440
    },
    {
        id: 8,
        nome: "Hotel Morabeza",
        ilha: "Sal",
        zona: "Santa Maria",
        tipo: "Hotel",
        estrelas: 4,
        preco: 170,
        comodidades: ["piscina", "wifi", "restaurante"],
        latitude: 16.7450,
        longitude: -22.9420
    },
    {
        id: 9,
        nome: "Melia Dunas Beach Resort & Spa",
        ilha: "Sal",
        zona: "Santa Maria",
        tipo: "Hotel",
        estrelas: 5,
        preco: 280,
        comodidades: ["piscina", "wifi", "restaurante", "spa", "praia-privada"],
        latitude: 16.7470,
        longitude: -22.9400
    },
    {
        id: 10,
        nome: "Hotel Riu Karamboa",
        ilha: "Boa Vista",
        zona: "Rabil",
        tipo: "Hotel",
        estrelas: 5,
        preco: 220,
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada"],
        latitude: 16.1092,
        longitude: -22.8356
    },
    {
        id: 11,
        nome: "Barceló Marine Boa Vista",
        ilha: "Boa Vista",
        zona: "Sal Rei",
        tipo: "Hotel",
        estrelas: 5,
        preco: 240,
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "transfer-aeroporto"],
        latitude: 16.1650,
        longitude: -22.8900
    }
];

//Atributos
function filtrarAcomodacoes(){
    //Pegar dados
    const ilha = document.getElementById('ilha').value;
    const alojamento = document.getElementById('alojamento').value;
    const preco_min = document.getElementById('preco_min').value;
    const preco_max = document.getElementById('preco_max').value;
    const categoria = document.getElementById('categoria').value;
    const regime = document.getElementById('regime').value;
    const ordenar = document.getElementById('ordenar').value;
    const comodidade = document.getElementById('comodidade').value;
    const resultado = document.getElementById('result').value;
    const btn_filtrar = document.getElementById('enviar_filtro');
    const btn_limpar = document.getElementById('limpar_filtro');

    

    console.log("Atributo selecionados:", {
        ilha, alojamento, categoria, regime, ordenar, comodidade
    })

    const resultados = acomodacoes.filter(acomodacao => {
        if(ilha && acomodacao.ilha !== alojamento){
            return false;
        }

        if(alojamento && acomodacao.tipo !== alojamento){
            return false;
        }

        const preco = acomodacao.preco;
        if(preco_min && preco < parseInt(preco_min)){
            return false;
        }

        if(preco_max && preco > parseInt(preco_max)){
            return false;
        }

        //Verificar se as comodidades selecionadas existem numa acomodacao
        if(comodidade.length > 0){
            const temtodascomodidades = comodidade.every(comodidade =>
                acomodacao.comodidades.includes(comodidade)
            );
            if(!temtodascomodidades){
                return false;
            }
        }

        return true

    });

    mostar_resultado(resultados);

    if(resultados.length > 0){
        mostar_resultado(resultados);
    }


    btn_filtrar.addEventListener('click', filtroResultado());
    btn_limpar.addEventListener('click', limparFiltro())

}


function obterComodidadeSelecionadas(){
    const checkboxs = document.querySelectorAll('input[name=comodidade]:checked');
    const comodidades = [];

    checkboxs.forEach(chekbox => {
        comodidades.push(chekbox.value);
    });

    return comodidades;
}



// MOSTRAR RESULTADOS

function filtroResultado(resultados){
    const areaResultado = document.getElementById("resultado");

    if(resultados.length ===  0){
        areaResultado.innerHTML = `
            <div class="sem-resultados">
                <h2>Sem resultados...</h2>
                <p>Nenhuma acomodação encontrada com esses critérios.</p>
                <p>Tente mudar os filtros!</p>
            </div>
        `;
        return;
    }

    let html = `<h2>Resultados encontrados: ${resultados.length} acomodação(ões)</h2>`;
    html += '<div class="resultados-lista">';

    resultados.forEach(acomodacao => {
        const estrelas = ''.repeat(Math.floor(acomodacao.estrelas));
        const comodidadesHTML = acomodacao.comodidades
            .map(com => `<span class="comodidade-badge">${com.replace(/-/g, ' ')}</span>`)
            .join('');
        
        html += `
            <div class="resultado-item">
                <h3>${acomodacao.nome}</h3>
                <div class="info-item">
                    <strong>Localização:</strong> ${acomodacao.zona}, ${acomodacao.ilha}
                </div>
                <div class="info-item">
                    <strong>Tipo:</strong> ${acomodacao.tipo}
                </div>
                <div class="info-item">
                    <strong>Avaliação:</strong> ${estrelas} (${acomodacao.estrelas} estrelas)
                </div>
                <div class="info-item">
                    <strong>Preço por noite:</strong> €${acomodacao.preco}
                </div>
                <div class="info-item">
                    <strong>Comodidades:</strong>
                    <div class="comodidades">${comodidadesHTML}</div>
                </div>
                <button class="btn-reservar" onclick="reservar('${acomodacao.nome}')">
                    Reservar Agora
                </button>
            </div>
        `;

        html += '</div>';
        areaResultado.innerHTML = html;
    });
}



function limparFiltro() {
    //limpar tudo
    document.getElementById('ilha').value = "";
    document.getElementById('alojamento').value = "Resort";
    document.getElementById('preco_min').value = "";
    document.getElementById('preco_max').value = ""; 
    document.getElementById('categoria').value = "";
    document.getElementById('regime').value = "";
    document.getElementById('ordenar') = "";
    document.getElementById('comodidade').value = "";
    document.getElementById('result').value = "";
    document.getElementById('enviar_filtro').value = "";

    //Desmarcar todos os checkbox
    const checkboxs = document.querySelectorAll('input[name="comodidade"]');
    checkboxs.forEach(chekbox => {
        chekbox.cheked = false;
    });

    //limpar resultado
    document.getElementById("resultado").innerHTML = '<p>Selecione os atributos e clique em "filtrar"</p>';

    
}