<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\api\v1\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Show the list items
     */
    public function index()
    {
        $items =  Groups::all();
        return response()
            ->json($items);
    }

    /**
     * * Create new item
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $model = Groups::create($request->all());
            $model->save();
            return response('success', 201);
        }

    }



}
