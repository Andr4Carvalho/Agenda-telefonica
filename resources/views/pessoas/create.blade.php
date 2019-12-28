@extends("template.app")

@section("content")
	<div class="col-md-12" style="margin-top: 25px">
		<h3>Novo contato</h3>
	</div>

	<div class="col-md-6 mt-4">
		<form class="col-md-12" action="{{url('/agenda/store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group {{ $errors->has('nome')? 'has-error' : ''}}">
				<input class="col-md-12 form-control" name="nome" placeholder="Nome" value="{{old('nome')}}">
				@if($errors->has('nome'))
					<span class="form-text text-danger">
						{{$errors->first('nome')}}
					</span>
				@endif
			</div>
	  		<div class="form-row">
	    		<div class="col-md-2 {{ $errors->has('ddd')? 'has-error' : ''}}">
		      		<input type="text" class="form-control text-center" name="ddd" placeholder="DDD" value="{{old('ddd')}}">
		      		@if($errors->has('ddd'))
						<span class="form-text text-danger">
							{{$errors->first('ddd')}}
						</span>
					@endif
		    	</div>
	    		<div class="col-md-10 {{ $errors->has('telefone')? 'has-error' : ''}}">
	      			<input type="text" class="form-control" name="telefone" placeholder="Telefone" value="{{old('telefone')}}">
	      			@if($errors->has('telefone'))
						<span class="form-text text-danger">
							{{$errors->first('telefone')}}
						</span>
					@endif
	    		</div>
	  		</div>
			<button class="btn btn-primary" style="margin-top: 5px; float: right;">Salvar</button>
		</form>
	</div>
@endsection