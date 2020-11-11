<?php

namespace App\Console\Commands;

use App\Services\BridgeStatusService;
use Illuminate\Console\Command;

class insertdb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'inserts status of all 7 bridges to db.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return BridgeStatusService::get();
    }
}
