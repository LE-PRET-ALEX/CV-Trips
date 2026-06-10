// Carrosel de botoes Galeria 

//capturar elementos
const carrosel_deslizar_galeria = document.getElementById('carrosel_deslizar_galeria');
const btn_esq_galeria = document.getElementById('btn-ant_galeria'); //Botao anterior/esquerda
const btn_dir_galeria = document.getElementById('btn-next_galeria'); //Botao proximo/direita

// Variaveis de controle

//Posicao inical do carrosel
let ponto_inicial_slide = 0;


//Cada card tem 260px de largura mais 24px de gap(1.5rem)
const largura_card = 260;
const gap = 24;
const deslocamento = largura_card + gap;

//Funcoes 
function moverdireita_galeria(){
    ponto_inicial_slide = ponto_inicial_slide + deslocamento;
    // Aplicar a transformação no carrossel
    // translate X de forma negativa para poder mover para a esquerda (mostrando itens à direita)
    carrosel_deslizar_galeria.style.transform = `translateX(-${ponto_inicial_slide}px)`;

    verificar_fim_gastronomia();
}

function moveresquerda_galeria(){
    ponto_inicial_slide = ponto_inicial_slide - deslocamento;

    carrosel_deslizar_galeria.style.transform = `translateX(-${ponto_inicial_slide}px)`

    if(ponto_inicial_slide < 0){
        ponto_inicial_slide = 0;
        carrosel_deslizar_galeria.style.transform = `translateX(0px)`;
    }
}


//Funcao para verificar o fim do carrosel
//quando chegar ao fim para voltar ao inicio
function verificar_fim_gastronomia(){
    const totalitems = document.querySelectorAll('.item-galeria').length;
    
    const posicao_maxima = (totalitems - 1) * deslocamento;

    if(ponto_inicial_slide > posicao_maxima){
        ponto_inicial_slide = 0;
        carrosel_deslizar_galeria.style.transform = `translateX(0px)`;
    }
}

btn_dir_galeria.addEventListener('click', moverdireita_galeria);
btn_esq_galeria.addEventListener('click', moveresquerda_galeria);