<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contatos.css') }}">
</head>

<body>
    <div class="container_principal">
        <x-header class="header">
            @include('components.header')
        </x-header>

        <div class="container">
            <header class="contact-header">
                <h1>Entre em Contato Conosco</h1>
                <p>Estamos aqui para ajudar! Preencha o formulário abaixo e responderemos o mais breve possível.</p>
            </header>

            <div class="contact-info">
                <div class="contact-details">
                    <h2>Informações de Contato</h2>
                    <p><strong>Endereço:</strong> Rua Exemplo, 123, Bairro, Cidade, Estado, 00000-000</p>
                    <p><strong>Telefone:</strong> (11) 1234-5678</p>
                    <p><strong>Email:</strong> contato@exemplo.com</p>
                </div>

                <div class="contact-form">
                    <h2>Formulário de Contato</h2>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary">Enviar</button>
                    </form>
                </div>
            </div>

            <div class="map">
                <h2>Nosso Local</h2>
                <!-- Substitua o URL do iframe pelo link do seu local no Google Maps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14615.779848934452!2d-46.68929822578787!3d-23.589184840610092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5d5d21c86b79%3A0x6b9e19b34f7f8eb6!2sRua%20Exemplo%2C%20123%2C%20Bairro%2C%20Cidade%2C%20Estado!5e0!3m2!1spt-BR!2sbr!4v1615402197648!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

        <x-footer>
            @include('components.footer')
        </x-footer>
    </div>
</body>

</html>
