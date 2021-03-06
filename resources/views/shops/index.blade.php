@extends('layout')

@section('main')

	<h1>Shop List</h1>

	<a href="{{ route('shops.create') }}">Create Shop</a>
	<!-- <a href="/shops/create">Create Shop</a> -->

	<ul>
	@foreach ($shops as $shop) <!-- 抓出來塞到$shop裡面 -->
	<li>
		{{ $shop->name }} - {{ $shop->address }}  <!-- $shop 隨便取 -->
		<!-- <a href="{{ '/shops/' . $shop->id . '/edit'}}">Edit</a> -->
		<!-- <a href="/shops/{{ $shop->id }}/edit">Edit</a> -->

		<a href="{{ route('shops.edit', $shop) }}">Edit</a>

		<form action="{{ route('shops.destroy', $shop) }}" method="POST">
			@csrf
			<input type="hidden" name="_method" value="delete">
			<input type="submit" value="Delete">
		</form>

		<ul>
			@foreach ($shop->drinks as $drink)
			<li>{{ $drink->name }} -  {{ $drink->price }}</li>
			@endforeach
		</ul>
	</li>
	@endforeach
	</ul>

@endsection