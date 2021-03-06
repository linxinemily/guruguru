@extends('layout')

@section('main')

<h1>Create Shops</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('shops.store') }}" method="POST">

	@csrf
	
	<div class="form-group">
		<label for="">店名</label>
		<input class="form-control" type="text" name="name">	
	</div>

	<div class="form-group">
		<label for="">地址</label>
		<input class="form-control" type="text" name="address">	
	</div>

	<div class="form-group">
		<input class="btn btn-primary" type="submit">
	</div>

</form>

@endsection