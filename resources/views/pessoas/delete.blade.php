@extends("template.app")

@section("content")
	<div class="row">
		<div class="col-md-6 mt-4 bg-light rounded">
			<div class="col-md-12" style="margin-top: 25px">
				<h3>Deseja realmente excluir esse contato?</h3>
				<div style="float: right;">
					<a class="btn btn-default" href='{{url("agenda")}}'>
						<i class="fa fa-reply"></i>
						Cancelar
					</a>
					<a class="btn btn-danger" href='{{url("agenda/$pessoa->id/destroy")}}'>
						<i class="fa fa-user-times"></i>
						Excluir
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3 mt-4">
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