@extends('layout')

@section('main')

<h1>Create Shops</h1>

<form action="{{ route('shops.store') }}" method="POST">

	@csrf
	
	<div class="form-group">
		<label for="">店名</label>
		<input type="text" name="name">	
	</div>

	<div class="form-group">
		<label for="">地址</label>
		<input type="text" name="address">	
	</div>

	<div class="form-group">
		<input type="submit">
	</div>

</form>

@endsection