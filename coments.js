//aguardar para que o formulario seja submetido 
document.getElementById('commentform').addEventListener('submit', function(e) {
  e.preventDefault(); //cancela o recaregamento da pagina ao submeter o formulario 

  //obter elementos
  const nome = document.getElementById('nome').value.trim();
  const nacionalidade = document.getElementById('nation').value;
  const comentario = document.getElementById('coments').value.trim();
  const carregarImage = document.getElementById('image');
  const container = document.getElementById('containerComentarios');

  //verificacao de campos
  if (!nome || !comentario) {
    alert('Please fill in your name and comment.');
    return;
  }
  //criar card de comentario
  const novocard = document.createElement('div');
  novocard.classList.add('card-comentario');//adicionar class ao novocard
  //estrutura html de apresentacao do cartao
  novocard.innerHTML = `
    <h4>${nome}</h4>
    <span>Nationality: ${nacionalidade}</span>
    <p>${comentario}</p>
  `;

  if (carregarImage.files && carregarImage.files[0]) {
    const leitura = new FileReader(); //FileReader para ler o conteudo do ficheiro da imagem
    leitura.onload = function(e) { //funcao para leitura do ficheiro
      const imgElemento = document.createElement('img'); //criar elemento img para mostrar a imagem
      imgElemento.src = e.target.result;
      imgElemento.classList.add('img-comentario'); //adicior classe a imagem
      novocard.appendChild(imgElemento); //inserir imagem no card de comentario
    };
    leitura.readAsDataURL(carregarImage.files[0]);
  }
  
  //inserir um novo comentario no topo   
  container.insertBefore(novocard, container.firstChild);

  //limpar formulario do comentario
  document.getElementById('commentform').reset();
});