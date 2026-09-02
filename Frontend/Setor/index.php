<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD543</title>
    <script src="/CRUD543/Frontend/Eventos/script.js"></script>
    <link rel="stylesheet" href="/CRUD543/Frontend/Eventos/style.css">
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
                    <th class="item">Data</th>
                    <th class="item">Capacidade Maxima</th>
                    <th class="item">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setores as $setor): ?>
                    <tr>
                        <td class="item"><?= $setor["nome"] ?></td>
                        <td class="item"><?= $setor["capacidade_setor"] ?></td>
                        <td class="item">
                            <button onclick="abrirModal(<?= $setor['id'] ?>)">Editar</button>
                            <a href="/CRUD543/setores/deletar?id=<?= $setor['id'] ?>">
                                <button>Excluir</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/CRUD543/crud">
            <button>VER USUARIOS</button>
        </a>
        <a href="/CRUD543/setor">
            <button>VER SETORES</button>
        </a>
    </section>
</body>

</html>