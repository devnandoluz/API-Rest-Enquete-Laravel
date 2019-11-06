@extends ('layouts.app')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="container bg-default" style="padding: 2rem">
        <div class="row col-sm-12">
            <div class="container col-sm-3">
                <img src="{!! URL::asset('img/evagelista.jpg') !!}" alt="Foto de João Evangelista" style="width: 200px; border-radius: 50%;">
            </div>
            <div class="container col-sm-9">
                <h2>João Evangelista</h2>
                <p> 
                    <strong>Disciplina:</strong> Apicações Web <br>
                    <strong>href:</strong> Brasília/DF
                </p>
            </div>
        </div>
    </div>
</div>

@endsection