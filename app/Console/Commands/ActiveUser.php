<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ActiveUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Active:User';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Donor is activated';
    private $donors = null;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $from = Carbon::today();
        $to = Carbon::threeMonths();
        $this->donors = Donor::whereBetween('created_at', [$from, $to])->get();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
