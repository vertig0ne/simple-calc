<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Service\CalcService;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('calc:add', function () {
    $calcService = new CalcService();
    $input1 = $this->ask('First Number?');
    $input2 = $this->ask('Second Number?');
    $this->info($calcService->add($input1, $input2));
})->describe('Add numbers together');

Artisan::command('calc:multiply', function () {
    $calcService = new CalcService();
    $input1 = $this->ask('First Number?');
    $input2 = $this->ask('Second Number?');
    $this->info($calcService->multiply($input1, $input2));
})->describe('Multiply numbers together');

Artisan::command('calc:subtract', function () {
    $calcService = new CalcService();
    $input1 = $this->ask('First Number?');
    $input2 = $this->ask('Second Number?');
    $this->info($calcService->subtract($input1, $input2));
})->describe('Subtract number from another');

Artisan::command('calc:divide', function () {
    $calcService = new CalcService();
    $input1 = $this->ask('First Number?');
    $input2 = $this->ask('Second Number?');
    $this->info($calcService->divide($input1, $input2));
})->describe('Division of numbers');
