        const track = document.getElementById('carousel-track');
        const btnPrev  = document.getElementById('btn-prev');
        const btnNext  = document.getElementById('btn-next');

        const CARD_WIDTH = 260;   /* largura do card em px  */
        const GAP        = 24;    /* gap entre cards em px  */
        const STEP       = CARD_WIDTH + GAP;

        let currentIndex = 0;

        function getMaxIndex() {
            const cards    = track.querySelectorAll('.item-acomodation').length;
            const viewport = track.parentElement.clientWidth;
            const visible  = Math.floor(viewport / STEP);
            return Math.max(0, cards - visible);
        }

        function slide() {
            track.style.transform = `translateX(-${currentIndex * STEP}px)`;
        }

        btnNext.addEventListener('click', () => {
            if (currentIndex < getMaxIndex()) {
                currentIndex++;
                slide();
            }
        });

        btnPrev.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                slide();
            }
        });