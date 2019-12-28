@extends("template.app")

@section("content")
@foreach(range('A','Z') as $letra)
    <div class="btn-group mt-3">
        <a href='{{url("/agenda/" . $letra)}}' class="btn btn-primary {{$letra==$criterio ? 'disabled' : ''}}">
            {{$letra}}
        </a>
    </div>
@endforeach

<div class="row mt-3 mb-n2">
    <h1 class="col-sm-6">Critério: {{$criterio}}</h1>
    <form class="col-md-5" action="{{url('/agenda/busca')}}" method="post">
        <div class="input-group ml-3">
            {{csrf_field()}}
            <input name="criterio" type="text" class="form-control border border-secondary" placeholder="Buscar">
            <span class="input-group-btn">
                <button class="btn btn-light border border-secondary" type="submit">Ir</button>
            </span>
        </div>
    </form>
</div>


<div class="row">
    @foreach($pessoas as $pessoa)
		<div class="col-md-3">
            <div class="card mt-3">
                <div class="card-header">
                    {{$pessoa->nome}}
                    <a href='{{url("/agenda/$pessoa->id/excluir")}}' class="btn btn-xs btn-danger ml-1" style="float: right;">
                        <i class="fa fa-trash"></i>
                    </a>
                    <a href='{{url("/agenda/$pessoa->id/editar")}}' class="btn btn-xs btn-info" style="float: right;">
                        <i class="fa fa-pencil"></i>
                    </a>
                </div>
                <div class="card-body">
                	@foreach($pessoa->telefones as $telefone)
	                	<p><strong>Telefone:</strong>({{ $telefone->ddd }}) {{ $telefone->telefone}}</p>
	                @endforeach
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection