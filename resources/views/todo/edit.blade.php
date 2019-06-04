@extends('layouts.app')
@section('content')
<h3 class="text-center my-5">Edit Todo</h3>
	<div class="card card-default">
		<div class="card-header text-center">Edit Todo List</div>
		<div class="card-body">
			<form action="/todo/{{$todo->id}}/update-todo" method="POST">
			@csrf
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $todo->name }}">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $todo->description }}">
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-12">
			      <button type="submit" class="btn btn-primary">Update Todo</button>
			    </div>
			  </div>
			</form>
		</div>
	</div>
@endsection