@extends('layout')

@section('main')

	<h1>Shop List</h1>

	<a href="{{ route('shops.create') }}">Create Shop</a>
	<!-- <a href="/shops/create">Create Shop</a> -->

	<ul>
	@foreach ($shops as $shop)
	<li>
		{{ $shop->name }} - {{ $shop->address }} 
		<!-- <a href="{{ '/shops/' . $shop->id . '/edit'}}">Edit</a> -->
		<!-- <a href="/shops/{{ $shop->id }}/edit">Edit</a> -->

		<a href="{{ route('shops.edit', $shop) }}">Edit</a>

		<form action="{{ route('shops.destroy', $shop) }}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="delete">
			<input type="submit" value="Delete">
		</form>
	</li>
	@endforeach
	</ul>

@endsection