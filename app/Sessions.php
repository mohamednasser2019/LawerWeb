<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessions extends Model
{
    protected $fillable=['session_date','case_Id','month','year','status'];
    protected $attributes = ['status' => 'waiting'];
}
