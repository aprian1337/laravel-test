<?php

namespace Tests\Unit\app\Http\Controllers;

use App\Http\Controllers\CalculationController;
use Exception;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;

class CalculationControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_sum_true()
    {
        $a = 5;
        $b = 100;
        $request = new Request([
            'a'   => $a,
            'b' => $b,
        ]);
        $k = new CalculationController();
        $res = $k->sum($request);
        return $this->assertEquals($a+$b, $res);
    }

    public function test_sum_false()
    {
        $a = 5;
        $b = 100;
        $request = new Request([
            'a'   => $a,
            'b' => $b,
        ]);
        $k = new CalculationController();
        $res = $k->sum($request);
        return $this->assertNotEquals($a-$b, $res);
    }

    public function test_sum_input_with_chara()
    {
        $a = "asda";
        $b = "dsadaz";
        $request = new Request([
            'a'   => $a,
            'b' => $b,
        ]);
        try{
            $k = new CalculationController();
            $res = $k->sum($request);
        }catch(Exception $e){
            return $this->assertEquals("Must be number.",$e->getMessage());
        }
        return $this->assertEquals($a+$b, $res);
    }

    public function test_division_true(){
        $a = 10;
        $b = 2;
        $request = new Request([
            'a'   => $a,
            'b' => $b,
        ]);
        $k = new CalculationController();
        $res = $k->division($request);
        return $this->assertEquals($a/$b, $res);
    }
}
