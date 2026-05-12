window.onload = function () {
    const imagens = document.querySelectorAll('.galeria img');
    let index = 0;

    setInterval(() => {
      imagens[index].classList.remove('ativa');
      index = (index + 1) % imagens.length;
      imagens[index].classList.add('ativa');
    }, 3000);
  };