<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidate';
    protected $fillable = [
      'candidate_id',
      'full_name',
      'portfolio_id',
      'image'
    ];
}
