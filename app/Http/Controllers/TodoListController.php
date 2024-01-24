<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $data["items"] = TodoList::all();
     return view("welcome", $data);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("layout.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'work'=>'required',
                'dueDate'=>'required',
            ]
            );
            $todo=new TodoList;
            $todo->name=$request->name;
            $todo->work= $request->work;
            $todo->due_date=$request->dueDate;
            $todo->save();

            return redirect(route("todolist.index"));
           
    }

    /**
     * Display the specified resource.
     */
    public function show(todolist $todolist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data["item"] = TodoList::find($id);
        
        return view("layout.update", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'work' => 'required',
            'dueDate' => 'required|date',
        ]);

        $item = TodoList::find($id);
        $item->name = $validatedData['name'];
        $item->work = $validatedData['work'];
        $item->due_date = $validatedData['dueDate'];

        $item->save();

        return redirect()->route('todolist.index')->with('success', 'Task updated successfully');

    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $todoList = TodoList::find($id);
        $todoList->delete();
        return redirect(route("todolist.index"));
    }
    
    
}
