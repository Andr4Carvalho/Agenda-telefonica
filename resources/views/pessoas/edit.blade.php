@extends("template.app")

@section("content")
	<div class="col-md-12" style="margin-top: 25px">
		<h3>Editar contato</h3>
	</div>

	<div class="row">
		<div class="col-md-6 mt-4">
			<form class="col-md-12" action="{{url('/agenda/update')}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="id" value="{{$pessoa->id}}">
				<div class="form-group {{ $errors->has('nome')? 'has-error' : ''}}">
					<input class="col-md-12 form-control" name="nome" placeholder="Nome" value="{{$pessoa->nome}}">
					@if($errors->has('nome'))
						<span class="form-text text-danger">
							{{$errors->first('nome')}}
						</span>
					@endif
				</div>
				<button class="btn btn-primary" style="margin-top: 5px; float: right;">Salvar</button>
			</form>
		</div>
		<div class="col-md-3">
	        <div class="card">
	            <div class="card-header">{{$pessoa->nome}}</div>
	            <div class="card-body">
	            	@foreach($pessoa->telefones as $telefone)
	                	<p><strong>Telefone:</strong>({{ $telefone->ddd }}) {{ $telefone->telefone}}</p>
	                @endforeach
	            </div>
	        </div>
	    </div>
	</div>
@endsection