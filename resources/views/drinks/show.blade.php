@extends('layout')

@section('main')

<h1>Show Drinks</h1>

<h2>{{ $drink->name }}</h2>

<h3>{{ $drink->price }}</h3>

# shop info
<p>Address: {{ $drink->shop->address }}</p>
<p>Name: {{ $drink->shop->name }}</p>

@endsection