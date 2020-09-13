<?php

namespace App\Console\Commands;

use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class FetchFAHStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:fahstats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches Folding @ Home Stats';

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
     * @return mixed
     */
    public function handle()
    {
        $url = 'https://stats.foldingathome.org/api/donor/felixwetell';
        $content = file_get_contents( $url );
        $json = json_decode( $content );


        $user = User::first();
        $user->fah_score = $json->credit;
        $user->fah_rank = $json->rank;
        $user->fah_total_users = $json->total_users;
        $user->fah_updated_at = Carbon::now();
        $user->save();

        $this->info( 'FAH Stats fetched and updated successfully!' );
    }
}
