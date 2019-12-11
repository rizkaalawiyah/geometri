<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materi;
class bangundatar extends Controller
{
  public function index(){

      return view ('bangundatar.materi');
}
  public function persegi()
  {
    return view ('bangundatar.persegi');
  }
  public function persegipanjang()
  {
    return view ('bangundatar.persegipanjang');
  }

  public function trapesium()
  {
    return view ('bangundatar.trapesium');
  }
  public function layang()
  {
    return view ('bangundatar.layang');
  }
  public function jajargenjang()
  {
    return view ('bangundatar.jajargenjang');
  }

  public function ketupat()
  {
    return view ('bangundatar.ketupat');
  }





}
