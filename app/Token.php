<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
        'id','intAuthToken','device','ip'
    ];

      protected $table = 'token';
}
