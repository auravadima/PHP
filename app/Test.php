<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['text', 'is_enabled', 'created_at', 'updated_at'];

}
