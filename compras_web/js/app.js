// js/app.js

document.addEventListener('DOMContentLoaded', () => {
    // Referências aos elementos do HTML
    const listaProdutosEl = document.getElementById('lista-produtos');
    const itensCarrinhoEl = document.getElementById('itens-carrinho');
    const totalCarrinhoEl = document.getElementById('total-carrinho');

    // Função para buscar os produtos da nossa API PHP
    async function carregarProdutos() {
        const response = await fetch('api/?action=get_products');
        const produtos = await response.json();

        listaProdutosEl.innerHTML = ''; // Limpa a mensagem "Carregando..."
        produtos.forEach(produto => {
            const produtoDiv = document.createElement('div');
            produtoDiv.classList.add('produto');
            produtoDiv.innerHTML = `
                <h4>${produto.nome}</h4>
                <p>Preço: R$ ${produto.preco.toFixed(2)}</p>
                <img class="imagem-produto" src="${produto.caminho}" 
                    alt="${produto.nome}">
                <br>
                <button class="btn btn-primary" data-id="${produto.id}">Adicionar ao Carrinho</button>
                <br>
            `;
            listaProdutosEl.appendChild(produtoDiv);
        });
    }

    // Função para buscar o estado atual do carrinho
    async function carregarCarrinho() {
        const response = await fetch('api/?action=get_cart');
        const carrinho = await response.json();

        itensCarrinhoEl.innerHTML = ''; // Limpa o carrinho atual
        if (carrinho.produtos.length === 0) {
            itensCarrinhoEl.innerHTML = '<p>Seu carrinho está vazio.</p>';
        } else {
            carrinho.produtos.forEach(item => {
                const itemP = document.createElement('p');
                itemP.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
                itensCarrinhoEl.appendChild(itemP);
            });
        }
        
        totalCarrinhoEl.textContent = `R$ ${carrinho.total.toFixed(2)}`;
    }

    // Função para adicionar um item ao carrinho
    async function adicionarAoCarrinho(produtoId) {
        const params = new URLSearchParams();
        params.append('id', produtoId);

        await fetch('api/?action=add_to_cart', {
            method: 'POST',
            body: params
        });

        // Após adicionar, atualiza a exibição do carrinho
        carregarCarrinho();
    }
    
    // --- Lógica de Eventos ---
    
    // Adiciona um "ouvinte" de cliques na lista de produtos
    listaProdutosEl.addEventListener('click', (evento) => {
        // Verifica se o clique foi em um botão com o atributo 'data-id'
        if (evento.target.matches('button[data-id]')) {
            const id = evento.target.getAttribute('data-id');
            adicionarAoCarrinho(id);
        }
    });

    // --- Carregamento Inicial ---
    // Quando a página carregar, busca os produtos e o estado do carrinho
    carregarProdutos();
    carregarCarrinho();
});