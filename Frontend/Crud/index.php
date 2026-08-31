<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD543</title>
    <script src="/CRUD543/Frontend/Crud/script.js"></script>
    <link rel="stylesheet" href="/CRUD543/Frontend/Crud/style.css">
</head>

<body>
    <button onclick="abrirModal()">CADASTRAR</button>
    <div class="cadastro">
        <form action="cadastrar" method="post" class="formulario">
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="nome">
            <label for="Nome">Email</label>
            <input type="mail" name="email" id="email">
            <label for="Nome">Senha</label>
            <input type="password" name="senha" id="senha">
            <label for="Nome">CPF</label>
            <input type="text" name="cpf" id="cpf">
            <label for="Nome">Perfil</label>
            <input type="text" name="perfil" id="perfil">
            <div>
                <button type="button">Cancelar</button>
                <button>Enviar</button>
            </div>
        </form>
    </div>


    <section>
        <table class="tabela">
            <thead>
                <tr>
                    <th class="item">Nome</th>
                    <th class="item">Email</th>
                    <th class="item">CPF</th>
                    <th class="item">Perfil</th>
                    <th class="item">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td class="item"><?= $usuario["nome"] ?></td>
                        <td class="item"><?= $usuario["email"] ?></td>
                        <td class="item"><?= $usuario["cpf"] ?></td>
                        <td class="item"><?= $usuario["perfil"] ?></td>
                        <td class="item">
                            <button onclick="">Editar</button>
                            <a href="/CRUD543/deletar?id=<?= $usuario['id'] ?>">
                                <button>Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>

</html>