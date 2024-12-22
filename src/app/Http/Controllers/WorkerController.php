<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    //
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $worker = $request->only(['name','email','password']);
        Worker::create($worker);
        return view('login');
    }

    
}
