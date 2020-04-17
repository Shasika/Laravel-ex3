<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class NewController extends Controller
{
    public function show(){

        return Task::all();

    }

    public function store(Request $request){

        Task::create($request->all());

    }
}
