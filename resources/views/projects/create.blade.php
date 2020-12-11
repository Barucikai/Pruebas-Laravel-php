@extends('layout')

@section('titles', 'Crear Proyectos')

@section('content')

    <h1>Crear nuevo proyectos</h1>
<!-- mostrar errores de una forma mas facil, en los formularios --->
    @if($errors->any())

    <ul>
        
        <!-- octener todos los erros con el metoda (all)-->
        @foreach ( $errors->all() as $error)

        <!-- mostra los erros en una lista --->
        <li>{{ $error }}</li>
            
        @endforeach

    </ul>

    @endif

    <!-- fin --->

    <form method="post" action="{{ route('projects.store') }}">

        @csrf
        <table>
            Titulo del proyecto <br>
            <input type="text" name = "title">
        </table>
        <br>
        <table>
            Description del proyecto <br>
            <textarea name = "description"></textarea> 
        </table>
        <br>
        <button>Guardar</button> 

    </form>

    <br>
    <a href="{{ route('projects.index')}}">Mis proyectos</a>

@endsection


