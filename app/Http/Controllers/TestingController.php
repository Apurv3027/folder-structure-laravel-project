<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public static function index(Request $request, $id=NULL, $name=NULL)
    {
        $arr_req = [
            'id' => $id,
            'name' => $name,
        ];
        
        dd($arr_req);
        // $res = $arr_req->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);
        // return $res;
    }
}
