<?php

namespace App\Http\Controllers\Api;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Yajra\DataTables\Facades\DataTables;

class TodoController extends Controller
{
    public function todoWithCache(){
        if (!Cache::has('todo')) {
            Cache::forever('todo', Todo::all());
            return response()->json(Cache::get('todo'));     
        }
        return response()->json(Cache::get('todo'));
    }

    public function todoWithoutCache(){
       $todo = DB::table('todos')->orderBy('id');
       $response = DataTables::queryBuilder($todo)->toJson();
       return response()->json($response->original);
    }

}
