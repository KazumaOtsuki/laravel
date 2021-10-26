<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use App\Http\Requests\CalculationRequest;

class CalculatorController extends Controller
{
    protected $signs = null;

    public function __construct(){
        $this->signs = Config::get('define.signs');
    }

    public function index(Request $request){

        return view('calculator.index')->with([
            'signs' => $this->signs,
            'num1' => null,
            'num2' => null,
            'sign' => $this->signs['plus'],
            'rst' => null,
        ]);
        //return view('calculator.index', compact('signs','num1','num2','sign','rst'));
    }

    public function exec(CalculationRequest $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $sign = $request->input('sign');
        $rst = null;
        
        if(!empty($num1) && !empty($num2)){
            switch($sign){
                case $this->signs['plus']:
                    $rst = $num1 + $num2;
                    break;
                case $this->signs['minus']:
                    $rst = $num1 - $num2;
                    break;
                case $this->signs['times']:
                    $rst = $num1 * $num2;
                    break;
                case $signs['divided']:
                    $this->rst = $num1 / $num2;
                    break;
            }
        }

        return view('calculator.index')->with([
            'signs' => $this->signs,
            'num1' => $num1,
            'num2' => $num2,
            'sign' => $sign,
            'rst' => $rst,
        ]);
    }
}
