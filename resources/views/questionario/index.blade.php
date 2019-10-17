@include('layouts.app')
<div class="container">
    <h3>Novo questionário</h3>
    @include('questionario/create')
</div>
<br>
<hr>
<div class="container">
    <p>Questionários já criados</p>
    <table class="table table-striped table-hover">
        <thead>
            <th scope="col">Apagar</th>
            <th scope="col">Visualizar</th> <!--REMOVER-->
            <th scope="col">Titulo</th>
            <th scope="col">Tipo</th>
        </thead>
        <tbody>
            @foreach ($questionarios as $questionario)
                <tr>
                    <td>
                        <form id="form-delete{{$questionario->id}}" action="{{ route('questionario.destroy', $questionario->id) }}" method="POST">
                            {{method_field('delete')}}
                            <input type="button" class="btn btn-danger" value="x" onclick="really({{ $questionario->id }})">
                        </form>
                    </td>
                    <td><a href="{{ route('questionario.show', $questionario->id) }}">Visualizar</a></td>
                    <td>{{$questionario->titulo}}</td>
                    <td>{{$questionario->tipo}}</td>
                </tr>
            @endforeach            
        </tbody>    
    </table>
</div>

<script language="javaScript" type="text/javascript">
    function really(id){
        event.preventDefault();
        if(confirm('Deseja excluir este questionario?')){
            document.getElementById('form-delete'+id).submit();
        }
    }
</script>