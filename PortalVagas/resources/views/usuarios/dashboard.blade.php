@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>dashboard - {{ Auth::user()->tipo }} {{ Auth::user()->nome }}!</h2>
        <!--  <form action="{{ route('usuarios.logout') }}" method="post">
            @csrf
            <input type="submit" value="Sair">
        </form> -->
    </div>
@endsection
