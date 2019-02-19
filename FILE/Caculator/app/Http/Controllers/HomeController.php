<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $numberOne = $request->numberOne;
        $numberTwo = $request->numberTwo;

        if ($request->add){
            $result = $numberOne+$numberTwo;

        }elseif ($request->sub){
            $result = $numberOne-$numberTwo;

        }elseif ($request->mul){
            $result = $numberOne * $numberTwo;

        }else{
            if ($numberTwo==0){
                echo "Error";
            }else{
                $result = $numberOne / $numberTwo;
            }

        }

        return view('result',compact('result'));
    }
}
