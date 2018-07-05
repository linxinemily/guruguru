@extends('layout')

@section('main')

<h1>Edit Shops</h1>

<form action="{{ route('shops.update', $shop) }}" method="POST">

	<input type="hidden" name="_method" value="patch">

	@csrf
	
	<div class="form-group">
		<label for="">店名</label>
		<input type="text" name="name" value="{{ $shop->name }}">	
	</div>

	<div class="form-group">
		<label for="">地址</label>
		<input type="text" name="address" value="{{ $shop->address }}">	
	</div>

	<div class="form-group">
		<input type="submit">
	</div>

</form>

@endsection