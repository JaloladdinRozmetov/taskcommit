<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    protected $table = 'commits';

    protected $fillable =[
      'first_name',
      'commit'
    ];

}
