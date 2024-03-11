// Variável global para armazenar os itens do carrinho
let carrinho = [];

// Função para adicionar um item ao carrinho
function adicionarAoCarrinho(item) {
    carrinho.push(item);
    atualizarCarrinho();
}

// Função para atualizar a exibição do carrinho
function atualizarCarrinho() {
    const carrinhoElemento = document.getElementById('cart-items');
    carrinhoElemento.innerHTML = '';

    let total = 0;

    carrinho.forEach(item => {
        const li = document.createElement('li');
        li.textContent = item.nome + ' - R$ ' + item.preco.toFixed(2);
        carrinhoElemento.appendChild(li);
        total += item.preco;
    });

    const totalElemento = document.getElementById('cart-total');
    totalElemento.textContent = total.toFixed(2);
}

// Função para limpar o carrinho
function limparCarrinho() {
    carrinho = [];
    atualizarCarrinho();
}
