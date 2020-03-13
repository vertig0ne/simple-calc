<?php

namespace App\Http\Controllers;

use App\Service\CalcService;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    protected $calcService;

    public function __construct(CalcService $calcService)
    {
        $this->calcService = $calcService;
    }

    public function calculate(Request $request)
    {
        $input1 = $request->input('input1');
        $input2 = $request->input('input2');
        $method = $request->input('method');

        switch ($method) {
            case "add":
                return $this->calcService->add($input1, $input2);
            case "subtract":
                return $this->calcService->subtract($input1, $input2);
            case "multiply":
                return $this->calcService->multiply($input1, $input2);
            case "divide":
                return $this->calcService->divide($input1, $input2);
            default:
                throw new Exception('Request out of range');
        }
    }
}
