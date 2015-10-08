<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ctr extends Model
{
  protected $fillable = ['date', 'ctr'];

  public function getTitle()
  {
      return $this->title;
  }
}
