<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
      return Inertia::render('Home', ['name' => 'Rafael']);
    }

    public function show()
    {
      return Inertia::render('About', ['name' => 'Rafael']);
    }
}
