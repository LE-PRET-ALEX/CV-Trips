document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os itens da FAQ
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', () => {
            // Verifica se o item já está aberto
            const isOpen = item.classList.contains('active');

            // Opcional: Fecha todos os outros antes de abrir o novo
            faqItems.forEach(i => i.classList.remove('active'));

            // Se não estava aberto, abre agora
            if (!isOpen) {
                item.classList.add('active');
            }
        });
    });
});


const botaoPerguntar = document.querySelector(".botao-ask");


botaoPerguntar.addEventListener("click", () => {

    // Criar o overlay escuro
    const sobreposicao = document.createElement("div");
    sobreposicao.classList.add("sobreposicao");


    // Criar caixa de dialogo
    const caixaDialogo = document.createElement("div");
    caixaDialogo.classList.add("caixa-dialogo");


    // Criuar titulo do gialogo
    const titulo = document.createElement("h2");
    titulo.textContent = "Send us an email";


    // Criar input do assunto
    const campoAssunto = document.createElement("input");
    campoAssunto.type = "text"; 
    campoAssunto.placeholder = "Subject";


    // Criar textarea para mensagem
    const campoMensagem = document.createElement("textarea");
    campoMensagem.placeholder = "Mensage";


    // Criar botão fechar
    const botaoFechar = document.createElement("button");
    botaoFechar.textContent = "Send";
    botaoFechar.classList.add("botao-fechar");


    // Evento para fechar
    botaoFechar.addEventListener("click", () => {
        document.body.removeChild(sobreposicao);
    });


    // Montar estrutura
    caixaDialogo.appendChild(titulo);
    caixaDialogo.appendChild(campoAssunto);
    caixaDialogo.appendChild(campoMensagem);
    caixaDialogo.appendChild(botaoFechar);


    sobreposicao.appendChild(caixaDialogo);
    document.body.appendChild(sobreposicao);


});
