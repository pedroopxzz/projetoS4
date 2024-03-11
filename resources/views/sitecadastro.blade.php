<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Açaíteria</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h1>Login - Açaí dos Guris</h1>
    </header>

    <main>
        <div id="login-form">
            <h2>Login</h2>
            <form>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <p>Não possui uma conta? <a href="#">Registrar</a></p>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Açaí dos Guris. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
<link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
