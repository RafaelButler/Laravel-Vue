<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
      return inertia('About', ['teste' => 'Rafael Butler']);
    }
}
