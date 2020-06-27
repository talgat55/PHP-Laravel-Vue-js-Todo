<?php

namespace App\Models\api\v1;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{

    protected $table = 'groups';


    protected $fillable = [
        'name',
        'todo_id',
        'id',
    ];

    /*
     *  Save in table groups id todo
    */
    function scopeSaveById($query,$id,$saveId){
            $group = $query->where('id', $id)->get();
            $group->todo_id = $saveId;
         return $group->save();
    }

}
