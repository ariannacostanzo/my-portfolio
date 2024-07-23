<?php

namespace App\Console\Commands;

use Illuminate\Support\Facades\Mail;

use Illuminate\Console\Command;

class TestEmail extends Command
{
    protected $signature = 'test:email';
    protected $description = 'Send a test email';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Mail::raw('This is a test email', function ($message) {
            $recipient = config('mail.from.address');
            $message->to($recipient)
            ->subject('Test Email');
        });

        $this->info('Test email sent successfully.');
    }
}