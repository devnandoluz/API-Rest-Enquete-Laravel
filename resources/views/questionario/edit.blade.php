@include('layouts.app')
<div class="container">
    <form method="POST" action=" {{ route('questionario.update', $questionario->id) }}">
        {{ method_field('PUT')}}
        <div class="form-group">
            <label for="tituloInput">Título do Questionário:</label>
            <input type="text" class="form-control" id="tituloInput" name="titulo" value="{{ $questionario->titulo }}" required>
            <small class="form-text text-muted" id="tituloHelp">Informe o que você deseja questionar <i>(Ex: Quem descobriu o Brasil?)</i></small>
        </div>
        <div class="form-group">
            <label for="descricaoTextarea">Descrição:</label>
            <textarea name="descricao" id="descricaoTextarea"  rows="4" class="form-control">{{ $questionario->descricao }}</textarea>
            <small class="form-text text-muted" id="tituloHelp">Breve descrição sobre o seu questionário <i>(191 caracteres)</i></small>
        </div>
        <a href="javascript:history.go(-1)" class="btn btn-default flex-row">Voltar</a>
        <button class="btn btn-primary">Salvar Alteração</button>
        <input type="hidden" name="tipo_id" value="{{ $questionario->tipos_id }}">
        <input type="hidden" name="usuario_id" value="{{ $questionario->usuarios_id }}">
    </form>    
</div>