<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Collective\Html\Eloquent\FormAccessible;

class Entry extends Model
{
  use FormAccessible;

  protected $fillable = [
    'title',
    'date',
    'description',
    'imageUrl'
  ];

  public function setDateFormat($value)
   {
       return Carbon::parse($value)->format('Y-m-d');
   }
}
