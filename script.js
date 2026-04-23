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