<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CRUD543/Frontend/Login/style.css">
    <title>CRUD543</title>
</head>

<body>
    <section class="secaoLogin">
        <div class="esquerdaLogin">
            <h2>Este é o crud 543</h2>
        </div>
        <div class="direitaLogin">
            <form action="logar" method="post" class="areaLogin">
                <label for="email" class="labelLogin">Digite seu email</label>
                <input type="email" name="email" id="email" class="inputLogin">
                <label for="senha" class="labelLogin">Digite sua senha</label>
                <input type="password" name="senha" id="senha" class="inputLogin">
                <button>Logar</button>
            </form>
        </div>
    </section>
</body>

</html>