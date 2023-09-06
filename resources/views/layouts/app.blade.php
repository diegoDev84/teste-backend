<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Backend - Produtos</title>
    <!-- Inclua aqui seus links para CSS, JavaScript, etc. -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('produtos.index') }}">Lista de Produtos</a></li>
                <li><a href="{{ route('produtos.create') }}">Criar Produto</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Seu rodapé aqui -->
    </footer>
</body>
</html>
