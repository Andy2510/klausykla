<?php

namespace App;

use App\Helpers\PhotoHelper;
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
    'trackUrl',
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
