<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('welcome')->with(compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'dueDate' => 'required',
        ]);
       
        $todo = new Todo;
        $todo->name = $request['name'];
        $todo->work = $request['work'];
        $todo->due_date = $request['dueDate'];
        $todo->save();

        return redirect(route('todo.home'));
    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect(route('todo.home'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('update')->with(compact('todo'));
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'work' => 'required',
            'dueDate' => 'required',
        ]);

        $todo = Todo::find($request['id']);
        if ($todo) {
            $todo->name = $request['name'];
            $todo->work = $request['work'];
            $todo->due_date = $request['dueDate'];
            $todo->save();
        }

        return redirect(route('todo.home'));
    }

    public function markComplete($id)
    {
        $todo = Todo::find($id);
        if ($todo) {
            $todo->completed = !$todo->completed; // Toggle completion status
            $todo->save();
        }

        return redirect(route('todo.home'));
    }
}
