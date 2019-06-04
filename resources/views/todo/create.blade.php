@extends('layouts.app')
@section('content')
<h3 class="text-center my-5">Create Todo</h3>
	<div class="card card-default">
		<div class="card-header text-center">Create Todo List</div>
		<div class="card-body">
			@if($errors->any())
			<div class="alert alert-danger">
				<ul class="list-group">
					@foreach($errors->all() as $error)
						<li class="list-group-item"> {{ $error }}</li>
					@endforeach
				</ul>
			</div>

			@endif
			<form action="/store-todo" method="POST">
				@csrf
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" name="name" placeholder="Name">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" name="description" placeholder="Description">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <button type="submit" class="btn btn-primary">Create Todo</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
@endsection