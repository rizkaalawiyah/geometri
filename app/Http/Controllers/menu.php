<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function index()
    {
      return view ('/menu');
    }
    public function menumateri()
    {
      return view ('/menumateri');
    }
     public function menukuis()
    {
      return view ('kuis.menukuis');
    }
}
