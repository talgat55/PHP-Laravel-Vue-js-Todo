<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\api\v1\Groups;
use App\Models\api\v1\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * * Create new item
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {

            try {
                $model = Todo::create($request->all());
                $model->save();
                Groups::saveById($request->get('group_id'),$model->id);
                return response('success', 201);
            }catch (\Exception $e){
                return response($e, 400);
            }

        }

    }

}
