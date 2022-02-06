<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToDoRequest;
use App\Http\Requests\UpdateToDoRequest;
use App\Models\ToDo;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = ToDo::all()->groupBy('status');
        $statuses = [
            [
                'id' => 0,
                'name' => 'To do'
            ],
            [
                'id' => 10,
                'name' => 'In progress'
            ],
            [
                'id' => 20,
                'name' => 'Finished'
            ],
        ];

        return view('todo.index', [
            'todos' => $todos,
            'statuses' => $statuses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreToDoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreToDoRequest $request)
    {

        $toDo = new ToDo();
        $toDo->title = $request->get('title');
        $toDo->task = $request->get('task');
        /*
        $toDo->fill([
            'title' => $request->get('title'),
            'task' => $request->get('task'),
        ]);
        */

        $toDo->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(ToDo $toDo)
    {
        //dd($toDo);
        return view('todo.view', ['todo' => $toDo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateToDoRequest  $request
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateToDoRequest $request, ToDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDo $toDo)
    {
        $toDo->delete();
        return back();
    }

    /**
     * @TODO: update description
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function inprogress(ToDo $toDo)
    {
        $toDo->status = 10;
        $toDo->save();
        return back();
    }


    /**
     * @TODO: update description
     *
     * @param  \App\Models\ToDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function finish(ToDo $toDo)
    {
        $toDo->status = 20;
        $toDo->save();
        return back();
    }
}
