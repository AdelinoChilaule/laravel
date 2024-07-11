@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id < 20)
        <p>Exibindo produto id: {{$id}}</p>
    @endif

@endsection
