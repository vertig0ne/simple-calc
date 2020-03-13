<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Service\CalcService;

class CalcServiceTest extends TestCase
{
    /**
     * CalcService can add 1 and 1 to make 2
     *
     * @return void
     */
    public function test_can_calculate_1_plus_1()
    {
        $expectedResult = 2;
        $calcService = new CalcService();
        $result = $calcService->add(1, 1);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can add 1 and 10 to make 11
     *
     * @return void
     */
    public function test_can_calculate_1_plus_10()
    {
        $expectedResult = 11;
        $calcService = new CalcService();
        $result = $calcService->add(1, 10);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can add 4929274 and 228377 to make 5157651
     *
     * @return void
     */
    public function test_can_calculate_4929274_plus_228377()
    {
        $expectedResult = 5157651;
        $calcService = new CalcService();
        $result = $calcService->add(4929274, 228377);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can subtract 1 from 1 to make 0
     *
     * @return void
     */
    public function test_can_calculate_1_subtract_1()
    {
        $expectedResult = 0;
        $calcService = new CalcService();
        $result = $calcService->subtract(1, 1);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can subtract 100 from 1 to make -99
     *
     * @return void
     */
    public function test_can_calculate_1_subtract_100()
    {
        $expectedResult = -99;
        $calcService = new CalcService();
        $result = $calcService->subtract(1, 100);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can subtract 23489 from 1237988 to make 1214499
     *
     * @return void
     */
    public function test_can_calculate_1237988_subtract_23489()
    {
        $expectedResult = 1214499;
        $calcService = new CalcService();
        $result = $calcService->subtract(1237988, 23489);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can multiply 1 and 10 to make 10
     *
     * @return void
     */
    public function test_can_calculate_1_multiply_10()
    {
        $expectedResult = 10;
        $calcService = new CalcService();
        $result = $calcService->multiply(1, 10);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can multiply 24 and 12 to make 288
     *
     * @return void
     */
    public function test_can_calculate_24_multiply_12()
    {
        $expectedResult = 288;
        $calcService = new CalcService();
        $result = $calcService->multiply(24, 12);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can multiply 136176 and 287634 to make 39168847584
     *
     * @return void
     */
    public function test_can_calculate_136176_multiply_287634()
    {
        $expectedResult = 39168847584;
        $calcService = new CalcService();
        $result = $calcService->multiply(136176, 287634);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can divide 1 from 10 to make 10
     *
     * @return void
     */
    public function test_can_calculate_10_divide_1()
    {
        $expectedResult = 10;
        $calcService = new CalcService();
        $result = $calcService->divide(10, 1);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can divide 1298 from 2398 to make 1.847
     *
     * @return void
     */
    public function test_can_calculate_2398_divide_1298()
    {
        $expectedResult = 1.8474576271;
        $calcService = new CalcService();
        $result = $calcService->divide(2398, 1298);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }

    /**
     * CalcService can divide 81793628 from 23876786 to make 0.291
     *
     * @return void
     */
    public function test_can_calculate_81793628_divide_23876786()
    {
        $expectedResult = 0.2919149888;
        $calcService = new CalcService();
        $result = $calcService->divide(23876786, 81793628);
        $this->assertEquals($expectedResult, $result, "Result does not meet expectations");
    }
}
