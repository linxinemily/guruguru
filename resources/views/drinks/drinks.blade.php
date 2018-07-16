@extends('layout')

@section('main')

	<h1>Drink List</h1>
	<a href="{{ route('drinks.create') }}">Create Drink</a>
	<!-- <a href="{{ route('shops.create') }}">Create Shop</a> -->
	<!-- <a href="/shops/create">Create Shop</a> -->

	<ul>
	@foreach ($drinks as $drink)
	<li>
		{{ $drink->name }} - {{ $drink->price }} - {{ $drink->shop->name }} <!--shop為一個方法，在Drink這個Model中就有提到-->
		<a href="{{ route('drinks.edit', $drink) }}">Edit</a>

		<form action="{{ route('drinks.destroy', $drink) }}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="delete">
			<input type="submit" value="Delete">
		</form>
		
	</li>
	@endforeach
	</ul> 

@endsection