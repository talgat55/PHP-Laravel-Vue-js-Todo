<?php

namespace App\Models\api\v1;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';


    protected $fillable = [
        'name',
        'complete',
        'id',
    ];
}
