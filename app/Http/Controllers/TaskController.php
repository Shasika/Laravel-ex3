<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function show(){
        dd(1);
        return Task::all();
    }
}
