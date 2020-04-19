<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session_Notes extends Model
{
    protected $fillable = ['note', 'updated_by', 'status', 'session_Id'];
    protected $attributes = ['status' => 'لا'];

}
