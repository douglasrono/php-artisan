<?php
 
namespace App\Console\Commands;
 
use App\Models\User;
use App\Support\DripEmailer;
use Illuminate\Console\Command;
 
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send {user}';
 
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a marketing email to a user';
 
    /**
     * Execute the console command.
     *
     * @param  \App\Support\DripEmailer  $drip
     * @return mixed
     */
    public function handle(DripEmailer $drip)
    {
        $drip->send(User::find($this->argument('user')));
    }
}
