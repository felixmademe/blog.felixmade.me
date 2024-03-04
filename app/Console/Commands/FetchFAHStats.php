<?php

namespace App\Console\Commands;

use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
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

        $url = 'https://api.foldingathome.org/uid/62032396';
        $client = new Client();
        $res = $client->get($url);
        $content = (string) $res->getBody();
        $json = json_decode( $content );

        $user = User::first();
        $user->fah_score = $json->score;
        $user->fah_rank = $json->rank;
        $user->fah_total_users = $json->users;
        $user->fah_updated_at = Carbon::now();
        $user->save();

        $this->info( 'FAH Stats fetched and updated successfully!' );
    }
}
