<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
  protected $fillable = ['user', 'name', 'country', 'email', 'password', 'avatar'];
}
