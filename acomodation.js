//capturar elementos
const slide_carrosel = document.querySelectorAll('.carrosel_deslizar');
const btn_esq = document.getElementById('btn-ant'); //Botao anterior/esquerda
const btn_dir = document.getElementById('btn-next'); //Botao proximo/direita

// Variaveis de controle

//Posicao inical do carrosel
let ponto_inicial_slide = 0;


//Cada card tem 260px de largura mais 24px de gap(1.5rem)
const largura_card = 260;
const gap = 24;
const deslocamento = largura_card + gap;

//Funcoes 
function moverdireita(){
    ponto_inicial_slide = ponto_inicial_slide + deslocamento;
    // Aplicar a transformação no carrossel
    // translate X de forma negativa para poder mover para a esquerda (mostrando itens à direita)
    carrosel_deslizar.style.transform = `translateX(-${ponto_inicial_slide}px)`;

    verificar_fim_carrosel();
}

function moveresquerda(){
    ponto_inicial_slide = ponto_inicial_slide - deslocamento;

    carrosel_deslizar.style.transform = `translateX(-${ponto_inicial_slide}px)`

    if(ponto_inicial_slide < 0){
        ponto_inicial_slide = 0;
        carrosel_deslizar.style.transform = `translatX(0px)`;
    }
}


//Funcao para verificar o fim do carrosel
//quando chegar ao fim para voltar ao inicio
function verificar_fim_carrosel(){
    const totaitems = document.querySelectorAll('.item-galeria').length;
    
    const posicao_maxima = (totaitems - 1) * deslocamento;

    if(ponto_inicial_slide > posicao_maxima){
        ponto_inicial_slide = 0;
        carrosel_deslizar.style.transform = `translateX(0px)`;
    }
}

btn_dir.addEventListener('click', moverdireita);
btn_esq.addEventListener('click', moveresquerda);