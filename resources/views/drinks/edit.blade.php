@extends('layout')

@section('main')

<h1>Edit Drinks</h1>

<form action="/drinks/{{ $drink->id }}" method="POST">

	<input type="hidden" name="_method" value="patch">

	@csrf
	
	<div class="form-group">
		<label for="">飲料名稱</label>
		<input type="text" name="name" value="{{ $drink->name }}">	
	</div>

	<div class="form-group">
		<label for="">飲料價格</label>
		<input type="text" name="price" value="{{ $drink->price }}">	
	</div>

	<div class="form-group">
		<input type="submit">
	</div>

</form>

@endsection