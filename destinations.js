const cards = document.querySelectorAll('.tourism_card');

cards.forEach(card => {
    card.addEventListener('click', () => {
        const suggestions = card.querySelector('.tourism_card_suggestions');

        if (suggestions.style.display === 'block') {
            suggestions.style.display = 'none';
        } else {
            suggestions.style.display = 'block';
        }
    });
});

const islandsContainer = document.querySelector('.islands');
const islands = document.querySelectorAll('.island');

let index = 0;
const total = islands.length;

// Clonar o primeiro elemento e adicionar no fim (loop suave)
const firstClone = islands[0].cloneNode(true);
islandsContainer.appendChild(firstClone);

function moveCarousel() {
    index++;
    islandsContainer.style.transform = `translateX(-${index * 270}px)`;

    // Quando chega ao clone, volta ao início sem transição
    if (index === total) {
        setTimeout(() => {
            islandsContainer.style.transition = 'none';
            index = 0;
            islandsContainer.style.transform = `translateX(0px)`;

            // Reativar transição
            setTimeout(() => {
                islandsContainer.style.transition = 'transform 0.5s ease-in-out';
            }, 50);
        }, 500);
    }
}

// Auto slide
setInterval(moveCarousel, 3000);