<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
    <div class="container_principal">
        <x-navbar class="navbar">
            @include('components.navbar')
        </x-navbar>

        <header class="hero-section">
            <div class="container">
                <h1>Bem-vindo à Nossa Página Inicial</h1>
                <p>Transforme suas ideias em realidade com nossos serviços especializados.</p>
                <a href="#servicos" class="btn-primary">Saiba Mais</a>
            </div>
        </header>

        <section id="servicos" class="services-section">
            <div class="container">
                <h2>Nossos Serviços</h2>
                <div class="service-item">
                    <h3>Consultoria</h3>
                    <p>Oferecemos consultoria personalizada para ajudar você a alcançar seus objetivos.</p>
                </div>
                <div class="service-item">
                    <h3>Desenvolvimento Web</h3>
                    <p>Criamos sites e aplicações web sob medida para atender às suas necessidades.</p>
                </div>
                <div class="service-item">
                    <h3>Design Gráfico</h3>
                    <p>Desenvolvemos identidades visuais e materiais gráficos para sua marca.</p>
                </div>
            </div>
        </section>

        <section id="depoimentos" class="testimonials-section">
            <div class="container">
                <h2>O que nossos clientes dizem</h2>
                <div class="testimonial-item">
                    <p>"A equipe foi incrível e entregou um trabalho excepcional. Recomendo a todos!"</p>
                    <cite>- João Silva</cite>
                </div>
                <div class="testimonial-item">
                    <p>"Profissionalismo e qualidade em cada detalhe. Estou muito satisfeito com o resultado."</p>
                    <cite>- Maria Oliveira</cite>
                </div>
            </div>
        </section>

        <x-footer class="footer">
            @include('components.footer')
        </x-footer>

    </div>
</body>

</html>