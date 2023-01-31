<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index($pr1, $pr2){

        
        $model = ['param1'=>$pr1,
                  'param2'=>$pr2,
        ];

        //return 'il primo controller. parametro1: '. $pr1 . ' parametro2: '.$pr2;

        return view('hello-view', $model);
    }


    public function indexWithQueryString(Request $request){

        $all = $request->all();

        $p1 = $request->input('p1');
        $p2 = $request->input('p2');

        var_dump($p1);
        var_dump($p2);
        //var_dump($all);
    }


}
