<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
  protected $table='bangundatar';
  protected $fillable=['nama_materi','gambar','isi'];
}
