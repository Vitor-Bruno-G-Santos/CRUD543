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
                            <button onclick="abrirModal(<?= $usuario['id'] ?>)">Editar</button>
                            <a href="/CRUD543/deletar?id=<?= $usuario['id'] ?>">
                                <button>Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/CRUD543/eventos">
            <button>VER EVENTOS</button>
        </a>
    </section>
</body>

</html>