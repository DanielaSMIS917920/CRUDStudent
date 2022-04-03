@extends('student.form')
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
					<h3 class="panel-title">Editar</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('student.update',$country->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Codigo" id="Codigo" class="form-control input-sm" value="{{$student->Codigo}}">
                                        <br>
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Nombre" id="Nombre" class="form-control input-sm" value="{{$student->Nombre}}">
                                        <br>
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Direccion" id="Direccion" class="form-control input-sm" value="{{$student->Direccion}}">
                                        <br>
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Telefono" id="Telefono" class="form-control input-sm" value="{{$student->Telefono}}">
                                        <br>
									</div>
								</div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="Email" id="Email" class="form-control input-sm" value="{{$student->Email}}">
                                        <br>
									</div>
								</div>
                                <div class="row">

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <input type="submit"  value="Guardar" class="btn btn-success btn-block">
                                        <a href="{{ route('livewire.crud') }}" class="btn btn-info btn-block" >Atras</a>
                                    </div>	

							    </div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	@endsection
