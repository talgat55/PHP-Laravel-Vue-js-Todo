<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Show the list items
     *
     *
     */
    public function index()
    {
//        $items = Banners::paginate('50');

        return view('index');
    }
}
