<?php

namespace App\Http\Controllers;
use App\Todo;

class TodoController extends Controller {

	public function index() {

		return view('todo.index')->with('todo', Todo::all());
	}

	public function show(Todo $todo) {
		return view('todo.show')->with('todo', $todo);
	}

	public function create() {
		return view('todo.create');
	}

	public function store() {
		//this section is check validate newt_form()
		$this->validate(request(), [
			'name' => 'required|min:6|max:20',
			'description' => 'required',
		]);

		$data = request()->all();

		$todo = new Todo();
		$todo->name = $data['name'];
		$todo->description = $data['description'];
		$todo->completed = false;

		$todo->save();

		session()->flash('success', 'Created Successfully!');

		return redirect('/todo');
	}

	// public function edit($todoId) {

	// 	$todo = Todo::find($todoId);

	// 	return view('todo.edit')->with('todo', $todo);
	// }

	//Model Binding

	public function edit(Todo $todo) {

		return view('todo.edit')->with('todo', $todo);
	}

	public function update(Todo $todo) {

		$this->validate(request(), [
			'name' => 'required|min:6|max:20',
			'description' => 'required',
		]);

		$data = request()->all();

		$todo->name = $data['name'];
		$todo->description = $data['description'];

		$todo->save();

		return redirect('/todo');
	}

	public function destory(Todo $todo) {
		$todo->delete();
		session()->flash('success', 'Deleted Successfully!');
		return redirect('/todo');
	}

	public function complete(Todo $todo) {

		$todo->completed = true;
		$todo->save();

		session()->flash('success', 'Completed Successfully!');
		return redirect('/todo');
	}
}
