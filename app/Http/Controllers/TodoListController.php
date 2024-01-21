<?php

namespace App\Http\Controllers;

use App\Models\todolist;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view("welcome");
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

            $todo=new todolist;
            $todo->name=$request['name'];
            $todo->work= $request['work'];
            $todo->dueDate=$request['dueDate'];
            $todo->save();

           
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
    public function edit(todolist $todolist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todolist $todolist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todolist $todolist)
    {
        //
    }
    
    
}
