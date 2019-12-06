<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
//        fetch all data from database
//        $todos=Todo::all();
        return view('todos.index')->with("todos",Todo::all());
    }
}
