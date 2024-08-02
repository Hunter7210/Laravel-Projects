<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}"> <!-- Adicione seu CSS específico para a página de produtos -->
</head>

<body>
    <div class="container_principal">
        <x-navbar class="navbar">
            @include('components.navbar')
        </x-navbar>

        <header class="products-header">
            <div class="container">
                <h1>Nossos Produtos</h1>
                <p>Encontre o que você precisa com nossa seleção exclusiva de produtos.</p>
            </div>
        </header>

        <div class="container">
            <aside class="filters">
                <h2>Filtros</h2>
                <form action="#" method="GET">
                    <div class="filter-group">
                        <label for="category">Categoria</label>
                        <select id="category" name="category">
                            <option value="">Todas</option>
                            <option value="eletronicos">Eletrônicos</option>
                            <option value="roupas">Roupas</option>
                            <option value="livros">Livros</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="price">Preço</label>
                        <select id="price" name="price">
                            <option value="">Todos</option>
                            <option value="baixo">Até R$100</option>
                            <option value="medio">R$100 - R$500</option>
                            <option value="alto">Acima de R$500</option>
                        </select>
                    </div>
                    <button type="submit" class="btn-primary">Aplicar Filtros</button>
                </form>
            </aside>

            <main class="product-list">
                <div class="product-item">
                    <img src="https://via.placeholder.com/150" alt="Produto 1">
                    <h3>Produto 1</h3>
                    <p>Descrição curta do produto 1. Inclui informações básicas sobre o item.</p>
                    <p class="price">R$99,99</p>
                    <a href="#" class="btn-secondary">Comprar</a>
                </div>
                <div class="product-item">
                    <img src="https://via.placeholder.com/150" alt="Produto 2">
                    <h3>Produto 2</h3>
                    <p>Descrição curta do produto 2. Inclui informações básicas sobre o item.</p>
                    <p class="price">R$149,99</p>
                    <a href="#" class="btn-secondary">Comprar</a>
                </div>
                <div class="product-item">
                    <img src="https://via.placeholder.com/150" alt="Produto 3">
                    <h3>Produto 3</h3>
                    <p>Descrição curta do produto 3. Inclui informações básicas sobre o item.</p>
                    <p class="price">R$199,99</p>
                    <a href="#" class="btn-secondary">Comprar</a>
                </div>
                <!-- Adicione mais produtos conforme necessário -->
            </main>
        </div>

        <section class="featured-product">
            <div class="container">
                <h2>Produto em Destaque</h2>
                <div class="product-item featured">
                    <img src="https://via.placeholder.com/300x300" alt="Produto Destaque">
                    <h3>Produto em Destaque</h3>
                    <p>Descrição detalhada do produto em destaque. Este é um item especial que você não vai querer perder!</p>
                    <p class="price">R$299,99</p>
                    <a href="#" class="btn-primary">Comprar Agora</a>
                </div>
            </div>
        </section>

        <x-footer class="footer">
            @include('components.footer')
        </x-footer>
    </div>
</body>

</html>
