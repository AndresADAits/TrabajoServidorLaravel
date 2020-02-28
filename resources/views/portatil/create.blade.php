@extends('layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Portatil</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('portatil.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-12 col-sm-10 col-md-8 pt-4">
									
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre del portatil">
									</div>
								
								<div class="col-xs-12 col-sm-10 col-md-8 pt-4">
									
										<input type="text" name="marca" id="marca" class="form-control input-sm" placeholder="marca del portatil">
								
							
							</div>

							
							<div class="col-xs-12 col-sm-10 col-md-8 pt-4">
								<input type="number" name="ram" id="ram" class="form-control input-sm" placeholder="ram del portatil (1-3)">
							</div>
							
							
								<div class="col-xs-12 col-sm-10 col-md-8 pt-4">
									
										<input type="text" name="tgrafica" id="tgrafica" class="form-control input-sm" placeholder="T. Gráfica del portatil">
									
								</div>
								<div class="col-xs-12 col-sm-10 col-md-8 pt-4">
								
										<input type="number" name="precio" id="precio" class="form-control input-sm" placeholder="Precio">
									</div>
								
							
							

								<div class="col-xs-12 col-sm-12 col-md-12 pt-5">
									<input type="submit"  value="Guardar" class="btn btn-secondary btn-block">
									</div>
									<div class="col-xs-12 col-sm-12 col-md-12 pt-5">
									<a href="{{ route('portatil.index') }}" class="btn btn-danger btn-block" >Atrás</a>
									</div>	

							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection