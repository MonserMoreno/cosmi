@extends('index')
@section('contenido')
<h1> Preguntas frecuentes </h1><br>
<ul>
  @foreach ($preguntas as $preguntas)
    <li>
        <h2><br>
          {{ $preguntas->pregunta}}
          <!--aqui-->
        </h2>
        <p>{{ $preguntas->respuesta}}</p>
    </li>
  @endforeach
</ul>
@endsection
