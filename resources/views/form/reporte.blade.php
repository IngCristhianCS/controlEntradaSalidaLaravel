{!! Form::open(['id'=>'logueo', 'onSubmit'=>'return Validar()','route'=>'asistencia.reporte','files'=>true]) !!}
{!! Field::file('reporte')!!}
{!! Field::hidden('id',Auth::user()->id)!!}
{!! Field::textArea('actividades')!!}
{!! Form::button('Enviar',['class' => 'btn btn-primary','type'=>'submit']) !!}
{!! Form::close() !!}