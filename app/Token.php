<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'token';
    protected $primaryKey = 'intAuthToken';
    
    protected $fillable = [
        'id','intAuthToken','device','ip'
    ];
}