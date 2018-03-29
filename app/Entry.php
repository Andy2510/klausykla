<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\PhotoHelper;
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

   public function getUrlAttribute()
  {
    $photoHelper = app(PhotoHelper::class);
    // siuo atveju dvitaskiai nereiskia statinio metodo, tai reiskia klases nurodyma (kuri siuo atveju yra aprasyta PhotoHelper faile)
    return $photoHelper->generateUrl($this);
  }
}
