@extends('student.form')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Listado de estudiantes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('student.create') }}" class="btn btn-info" >Añadir nuevo</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>Codigo</th>
               <th>Nombre</th>
               <th>Direccion</th>
               <th>Telefono</th>
               <th>Email</th>
               <th>Editar o eliminar</th>
             </thead>
             <tbody>
              @if($students->count())  
              @foreach($students as $student)  
              <tr>
                <td>{{$student->Codigo}}</td>
                <td>{{$student->Nombre}}</td>
                <td>{{$student->Direccion}}</td>
                <td>{{$student->Telefono}}</td>
                <td>{{$student->Email}}</td>
                <form action="{{ url('/student/'.$student->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <td>
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </td>
                    </form>
                    <form action="{{ url('/student/'.$student->id .'/edit') }}">
                        <td>
                            <input class="btn btn-success" type="submit" value="Editar">
                        </td>
                    </form>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $students->links() }}
    </div>
  </div>
</section>

@endsection
