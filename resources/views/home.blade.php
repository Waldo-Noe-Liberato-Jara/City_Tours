@extends('layouts.template')
@section('title', 'home')
@section('content')

<div class="container my-5">
    <p class="h4 p-2 text-primary text-center" style="font-size: 5rem;"><b>Bienvenido {{auth()->user()->name}}</b></p>
</div>

@endsection