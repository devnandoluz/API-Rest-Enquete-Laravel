<div class="container">
    <form method="POST" action="{{ route('questionario.store') }}">
        <div class="form-group">
            <label for="tituloInput">Título do Questionário:</label>
            <input type="text" class="form-control" id="tituloInput" name="titulo" required>
            <small class="form-text text-muted" id="tituloHelp">Informe o que você deseja questionar <i>(Ex: Quem descobriu o Brasil?)</i></small>
        </div>
        <div class="form-group">
            <label for="descricaoTextarea">Descrição:</label>
            <textarea name="descricao" id="descricaoTextarea"  rows="4" class="form-control"></textarea>
            <small class="form-text text-muted" id="tituloHelp">Breve descrição sobre o seu questionário <i>(191 caracteres)</i></small>
        </div>
        <input type="hidden" name="usuarios_id" value="1">
        <input type="hidden" name="tipos_id" value="1">
        <button class="btn btn-primary">Cadastrar</button>
    </form>   
</div>