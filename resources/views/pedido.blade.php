<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opções</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Opções de Pedido</h1>
    </header>

    <main>
        <section id="cards">
            <div class="card">
                <img src="acaimorango.jpg" alt="Açaí 1">
                <h2>copo de 500ml de açaí com morango e leite ninho</h2>
                <p>R$ 20,00</p>
                <button class="add-to-cart" onclick="showPopup('Açaí com morango adicionado ao carrinho!')">Adicionar ao Carrinho</button>
            </div>
            <div class="card">
                <img src="acaicomnutella.jpg" alt="Açaí 2">
                <h2>copo de 700ml de açaí com nutella</h2>
                <p>R$ 23,00</p>
                <button class="add-to-cart" onclick="showPopup('Açaí com nutella adicionado ao carrinho!')">Adicionar ao Carrinho</button>
            </div>
            <div class="card">
                <img src="copoacaifruta.jpg" alt="Açaí 3">
                <h2>copo de 400ml de açaí com frutas variadas como morango, banana e kiwi</h2>
                <p>R$ 18,00</p>
                <button class="add-to-cart" onclick="showPopup('Açaí com frutas adicionado ao carrinho!')">Adicionar ao Carrinho</button>
            </div>
        </section>

        <section id="cart">
            <h2>Carrinho</h2>
            <ul id="cart-items">

            </ul>
            <p>Total: R$ <span id="cart-total">0,00</span></p>
        </section>
    </main>

    <script src="script.js"></script>
    <script>
        function showPopup(message) {
            alert(message);
        }
    </script>
    <link rel="stylesheet" href="{{ asset('css/pedido.css') }}">
</body>
</html>




