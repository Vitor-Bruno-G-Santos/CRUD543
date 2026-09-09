async function buscar(id){
    const resposta = await fetch(`/CRUD543/setor/json?id=${id}`);
    const dados = await resposta.json();
    return dados;
}

async function buscarEventos(){
    const resposta = await fetch(`/CRUD543/eventos/listarEventos`);
    const dados  = await resposta.json();
    return dados;
}

async function abrirModal(id) {
    const dados = await buscar(id);
    console.log(dados);
    const modal = document.querySelector(".cadastro");
    modal.classList.add('active');
    modal.innerHTML = `
        <form action=${dados ? "setor/atualizar" : "setor/cadastrar"} method="POST" class="formulario">
            <input type="hidden" name="id" id="id" value=${(dados.id ?? "")}>
            <label for="Nome">Nome</label>
            <input type="text" name="nome" id="nome" value=${(dados.nome ?? "")}>
            <label for="Nome">Capacidade Maxima</label>
            
            <input type="number" name="capacidade_setor" id="capacidade_setor" value=${(dados.capacidade_maxima ?? "")}>
            <div>
                <button type="button" onclick="fecharModal()">Cancelar</button>
                <button>Enviar</button>
            </div>
        </form>`
}

function fecharModal(){
    const modal = document.querySelector(".cadastro");
    modal.classList.remove('active')
}

