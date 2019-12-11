<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bangunruang extends Controller
{
  public function kubus()
  {
    return view ('bangunruang.kubus');
  }
  public function balok()
  {
    return view ('bangunruang.balok');
  }

  public function limas()
  {
    return view ('bangunruang.limas');
  }

  public function tabung()
  {
    return view ('bangunruang.tabung');
  }

  public function kerucut()
  {
    return view ('bangunruang.kerucut');
  }

  public function bola()
  {
    return view ('bangunruang.bola');
  }

}
