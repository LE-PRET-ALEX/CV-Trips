// Lista de acomodacoes 
var acomodacoes = [
    { id: 1, nome: "Hotel VIP-PRAIA", 
        ilha: "Santiago", 
        zona: "Palmarejo", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 150, 
        regime: "mp", 
        comodidades: ["piscina", "wifi", "restaurante"] 
    },
    { 
        id: 2, nome: "Oasis PraiaMar", 
        ilha: "Santiago", 
        zona: "Prainha", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 180, 
        regime: "pc", 
        comodidades: ["wifi", "praia-privada", "vista-mar"] 
    },
    { 
        id: 3, nome: "Barcelo Praia Cape Verde", 
        ilha: "Santiago", 
        zona: "Prainha", 
        tipo: "Hotel", 
        estrelas: 5, 
        preco: 250, 
        regime: "ai", 
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "transfer-aeroporto"] 
    },
    { 
        id: 4, 
        nome: "Ouril Hotel Mindelo", 
        ilha: "São Vicente", 
        zona: "Rua Marginal", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 120, 
        regime: "so", 
        comodidades: ["wifi", "restaurante"] 
    },
    { 
        id: 5, 
        nome: "FOUR POINTS", 
        ilha: "São Vicente", 
        zona: "Laginha", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 140, 
        regime: "mp", 
        comodidades: ["piscina", "wifi", "restaurante", "estacionamento"] 
    },
    { 
        id: 6, 
        nome: "Rui Palace Santa Maria", 
        ilha: "Sal", zona: "Santa Maria", 
        tipo: "Hotel", 
        estrelas: 5, 
        preco: 200, 
        regime: "ai", 
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "ginásio"] 
    },
    { 
        id: 7, 
        nome: "Hotel Odjo d'água", 
        ilha: "Sal", 
        zona: "Santa Maria", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 160, 
        regime: "so", 
        comodidades: ["wifi", "vista-mar"] 
    },
    { 
        id: 8, 
        nome: "Hotel Morabeza", 
        ilha: "Sal", 
        zona: "Santa Maria", 
        tipo: "Hotel", 
        estrelas: 4, 
        preco: 170, 
        regime: "mp", 
        comodidades: ["piscina", "wifi", "restaurante"] 
    },
    { 
        id: 9, 
        nome: "Melia Dunas Beach Resort & Spa", 
        ilha: "Sal", 
        zona: "Santa Maria", 
        tipo: "Hotel", 
        estrelas: 5, 
        preco: 280, 
        regime: "ai", 
        comodidades: ["piscina", "wifi", "restaurante", "spa", "praia-privada"] 
    },
    { 
        id: 10, 
        nome: "Hotel Riu Karamboa", 
        ilha: "Boa Vista", zona: "Rabil", 
        tipo: "Hotel", 
        estrelas: 5, 
        preco: 220, 
        regime: "ai", 
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada"] 
    },
    { 
        id: 11, 
        nome: "Barcelo Marine Boa Vista", 
        ilha: "Boa Vista", 
        zona: "Sal Rei", 
        tipo: "Hotel", 
        estrelas: 5, 
        preco: 240, 
        regime: "ai", 
        comodidades: ["piscina", "wifi", "restaurante", "praia-privada", "transfer-aeroporto"] 
    }
];

 
// Quando a pagina terminar de carregar ligar os botoes
window.onload = function() {
    var botaoFiltrar = document.getElementById("enviar_filtro");
    var botaoLimpar = document.getElementById("limpar_filtro");
 
    botaoFiltrar.onclick = filtrarAcomodacoes;
    botaoLimpar.onclick = limparFiltro;
 
    document.getElementById("result").innerHTML = "<p>Select the attributes and click on \"Filter\"</p>";
};
 
// Vai buscar o valor de cada checkbox de comodidade que estiver marcada
function obterComodidadesSelecionadas() {
    var checkboxes = document.querySelectorAll("input[name='comodidade']");
    var selecionadas = [];
 
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked === true) {
            selecionadas.push(checkboxes[i].value);
        }
    }
 
    return selecionadas;
}
 
// Funcao principal que faz o filtro
function filtrarAcomodacoes() {
    var ilha = document.getElementById("ilha").value;
    var alojamento = document.getElementById("alojamento").value;
    var precoMin = document.getElementById("preco_min").value;
    var precoMax = document.getElementById("preco_max").value;
    var categoria = document.getElementById("categoria").value;
    var regime = document.getElementById("regime").value;
    var ordenar = document.getElementById("ordenar").value;
    var comodidadesSelecionadas = obterComodidadesSelecionadas();
 
    var resultados = [];
 
    // Percorrer a lista toda e ver quais acomodacoes passam nos filtros
    for (var i = 0; i < acomodacoes.length; i++) {
        var item = acomodacoes[i];
        var passou = true;
 
        if (ilha !== "" && item.ilha !== ilha) {
            passou = false;
        }
 
        if (alojamento !== "" && item.tipo !== alojamento) {
            passou = false;
        }
 
        if (precoMin !== "" && item.preco < parseInt(precoMin)) {
            passou = false;
        }
 
        if (precoMax !== "" && item.preco > parseInt(precoMax)) {
            passou = false;
        }
 
        if (categoria !== "" && Math.floor(item.estrelas) !== parseInt(categoria)) {
            passou = false;
        }
 
        if (regime !== "" && item.regime !== regime) {
            passou = false;
        }
 
        // Ver se a acomodacao tem todas as comodidades escolhidas
        for (var j = 0; j < comodidadesSelecionadas.length; j++) {
            if (item.comodidades.indexOf(comodidadesSelecionadas[j]) === -1) {
                passou = false;
            }
        }
 
        if (passou === true) {
            resultados.push(item);
        }
    }
 
    resultados = ordenarResultados(resultados, ordenar);
 
    mostrarResultado(resultados);
}
 
// Ordena a lista de resultados de acordo com a opcao escolhida
function ordenarResultados(lista, ordenar) {
 
    if (ordenar === "preco-asc") {
        lista.sort(function(a, b) {
            return a.preco - b.preco;
        });
    }
 
    if (ordenar === "preco-desc") {
        lista.sort(function(a, b) {
            return b.preco - a.preco;
        });
    }
 
    if (ordenar === "stars") {
        lista.sort(function(a, b) {
            return b.estrelas - a.estrelas;
        });
    }
 
    if (ordenar === "novo") {
        lista.sort(function(a, b) {
            return b.id - a.id;
        });
    }
 
    // Se for "rec" (recomendados) nao faz nada, mantem a ordem original
    return lista;
}
 
// Monta o HTML dos resultados e coloca dentro da div "result"
function mostrarResultado(resultados) {
    var areaResultado = document.getElementById("result");
 
    if (resultados.length === 0) {
        areaResultado.innerHTML = "<div class='sem-resultados'><h2>Sem resultados...</h2><p>Nenhuma acomodacao encontrada com esses criterios.</p><p>Tente mudar os filtros!</p></div>";
        return;
    }
 
    var html = "<h2>Results found: " + resultados.length + " Acomodation</h2>";
    html = html + "<div class='resultados-lista'>";
 
    for (var i = 0; i < resultados.length; i++) {
        var item = resultados[i];
 
        // Montar as estrelinhas
        var estrelas = "";
        for (var e = 0; e < Math.floor(item.estrelas); e++) {
            estrelas = estrelas + "★";
        }
 
        // Montar as etiquetas das comodidades
        var comodidadesHTML = "";
        for (var c = 0; c < item.comodidades.length; c++) {
            var nomeComodidade = item.comodidades[c].replace("-", " ");
            comodidadesHTML = comodidadesHTML + "<span class='comodidade-badge'>" + nomeComodidade + "</span>";
        }
 
        html = html + "<div class='resultado-item'>";
        html = html + "<h3>" + item.nome + "</h3>";
        html = html + "<div class='info-item'><strong>Location:</strong> " + item.zona + ", " + item.ilha + "</div>";
        html = html + "<div class='info-item'><strong>Type:</strong> " + item.tipo + "</div>";
        html = html + "<div class='info-item'><strong>Avaliation:</strong> " + estrelas + " (" + item.estrelas + " stars)</div>";
        html = html + "<div class='info-item'><strong>Price per night:</strong> €" + item.preco + "</div>";
        html = html + "<div class='info-item'><strong>Amenities:</strong><div class='comodidades'>" + comodidadesHTML + "</div></div>";
        html = html + "</div>";
    }
 
    html = html + "</div>";
 
    areaResultado.innerHTML = html;
}
 
// Limpa todos os campos do filtro e os resultados
function limparFiltro() {
    document.getElementById("ilha").value = "";
    document.getElementById("alojamento").value = "";
    document.getElementById("preco_min").value = "";
    document.getElementById("preco_max").value = "";
    document.getElementById("categoria").value = "";
    document.getElementById("regime").value = "";
    document.getElementById("ordenar").value = "rec";
 
    var checkboxes = document.querySelectorAll("input[name='comodidade']");
    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = false;
    }
 
    document.getElementById("result").innerHTML = "<p>Select the attributes and click on\"Filter\"</p>";
}
 
// So um alerta simples quando clica em "Reservar Agora"
function reservar(nome) {
    alert("Reservation started for: " + nome);
}