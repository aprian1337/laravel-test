<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

use function PHPUnit\Framework\throwException;

class CalculationController extends Controller
{
    public function sum(Request $request){
        $a = $request->a;
        $b = $request->b;
        if(!is_numeric($a) || !is_numeric($b)){
            throw new Exception('Must be number.');
        }
        return $a+$b;
    }

    public function division(Request $request){
        $a = $request->a;
        $b = $request->b;
        return $a/$b;
    }

}
