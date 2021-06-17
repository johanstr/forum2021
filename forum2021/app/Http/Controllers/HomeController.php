<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $threads = Thread::with('user', 'topics')->get();

        return view('home.index', compact('threads'));
    }
}
