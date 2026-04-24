/*  Configuracao do icone de account*/
const icone_conta = document.querySelector('#account_icon');
const submenu_icone_conta = document.querySelector('#account_submenu');

function show_account_settings(){
    submenu_icone_conta.style.display = 'flex';
}

function hide_account_settings(){
    submenu_icone_conta.style.display = 'none';
}

icone_conta.addEventListener('click', () => {
    if (submenu_icone_conta.style.display === 'flex') {
        hide_account_settings();
    } else {
        show_account_settings();
    }
});


/*  Configuracao da lista de ilhas do plan trip*/
const lista_ilhas = document.querySelector('#islands_list');
const link_lista_ilhas = document.querySelector('#show_islands_list_link');

function show_islands_list(){
    lista_ilhas.style.display = 'flex';
    link_lista_ilhas.textContent = 'select islands to visit -';
}

function hide_islands_list(){
    lista_ilhas.style.display = 'none';
    link_lista_ilhas.textContent = 'select islands to visit +';
}

link_lista_ilhas.addEventListener('click', () => {
    if (lista_ilhas.style.display === 'flex') {
        hide_islands_list();
    } else {
        show_islands_list();
    }
});


/*  Configuracao preencher o text area com ilhas escolhidas*/
const ilha_santo_antao = document.querySelector('#santo_antao_island');
const ilha_sao_vicente = document.querySelector('#sao_vicente_island');
const ilha_sao_nicolau = document.querySelector('#sao_nicolau_island');
const ilha_sal = document.querySelector('#sal_island');
const ilha_boa_vista = document.querySelector('#boa_vista_island');
const ilha_maio = document.querySelector('#maio_island');
const ilha_santiago = document.querySelector('#santiago_island');
const ilha_fogo = document.querySelector('#fogo_island');
const ilha_brava = document.querySelector('#brava_island');

const btn_selecionar_ilhas = document.querySelector('#select_islands_button');

const ilhas_textarea = document.querySelector('#selected_islands_textarea');


// Adicionar itens escolhidos a um array e preencher textarea
/*let array_ilhas_selecionadas = [];*/
const checkboxes = [
    { elemento: ilha_santo_antao, nome: "Santo Antão" },
    { elemento: ilha_sao_vicente, nome: "São Vicente" },
    { elemento: ilha_sao_nicolau, nome: "São Nicolau" },
    { elemento: ilha_sal, nome: "Sal" },
    { elemento: ilha_boa_vista, nome: "Boa Vista" },
    { elemento: ilha_maio, nome: "Maio" },
    { elemento: ilha_santiago, nome: "Santiago" },
    { elemento: ilha_fogo, nome: "Fogo" },
    { elemento: ilha_brava, nome: "Brava" }
];

// Array para guardar as ilhas selecionadas
let array_ilhas_selecionadas = [];

// Verificar quando clicar no botão
btn_selecionar_ilhas.addEventListener("click", () => {
    array_ilhas_selecionadas = []; // limpar antes de verificar
    checkboxes.forEach(item => {
        if (item.elemento.checked) {
            console.log(item.nome);
            array_ilhas_selecionadas.push(item.nome);
        }
    });

    console.log("Selecionadas:", array_ilhas_selecionadas);
    lista_ilhas.style.display = 'none';
    link_lista_ilhas.textContent = 'select islands to visit +';
    ilhas_textarea.value = array_ilhas_selecionadas.join(", ");
});