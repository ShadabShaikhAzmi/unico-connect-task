<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(){
        $grade = array(1,3,2);
        $user = User::whereIn('grade',$grade)
                    ->orderByRaw('FIELD(grade,'.implode(",",$grade).')')
                    ->get(['name','grade']);
        return response()->json($user);
    }
}
