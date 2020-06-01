<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class todoController extends Controller
{
    public function index()
    {
        // fatch all data from todos table
        // display all data in Todo.index page

        $todos = Todo::all();

        return view('Todo.index')->with('todos',$todos);
    }

    public function show(Todo $todo)
    {

      return view('Todo.show')->with('todo',$todo);

    }

    public function create()
    {
      return view('Todo.create');
    }

    public function store()
    {

      $this->validate(request(),[

        'name' => 'required|min:6|max:12',
        'description' => 'required',
      ]);


      $todo = new Todo;

      $A = request()->all();

      $todo->name = $A['name'];
      $todo->description = $A['description'];
      $todo->completed = false;

      $todo->save();

      session()->flash('success','Todo create successfully');

      return redirect('/todos');
    }

    public function edit(Todo $todo)
    {

      return view('Todo.edit')->with('todo',$todo);
    }

    public function update(Todo $todo)
    {

      $this->validate(request(),[

        'name' => 'required|min:6|max:12',
        'description' => 'required',
      ]);

      $data = request()->all();

      $todo->name = $data['name'];
      $todo->description = $data['description'];

      $todo->save();

      session()->flash('success','Todo update successfully');

      return redirect('/todos');

    }

    public function destroy(Todo $todo)
    {
      $todo->delete();

      session()->flash('success','Todo delete successfully');

      return redirect('/todos');
    }

    public function completed(Todo $todo)
    {
      $todo->completed = true;

      $todo->save();

      session()->flash('success','Todo completed successfully');

      return redirect('/todos');
    }
}
