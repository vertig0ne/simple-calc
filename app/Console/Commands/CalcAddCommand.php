<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Service\CalcService;

class CalcAddCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calc {input1} {method} {input2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->calcService = new CalcService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $input1 = $this->argument('input1');
        $input2 = $this->argument('input2');
        $method = $this->argument('method');
        $ans = $this->calcService->$method($input1, $input2);
        $this->info($ans);
    }
}
