@extends('layout')

@section('main')

<h1>Create Drinks</h1>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('drinks.store') }}" method="POST">


	@csrf

	<div class="form-group">
		<label for="">Shop</label>
		<input type="text" name="shop_id">
	</div>
	<div class="form-group">
		<label for="">飲料名稱</label>
		<input type="text" name="name">	
	</div>

	<div class="form-group">
		<label for="">飲料價格</label>
		<input type="text" name="price">	
	</div>

	<div class="form-group">
		<input type="submit">
	</div>

</form>

@endsection