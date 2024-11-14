<?php

// app/Listeners/SendPostNotification.php

namespace App\Listeners;

use App\Events\PostCreated;
use App\Models\User;
use App\Mail\PostCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendPostNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(PostCreated $event)
    {
        $users = User::all(); // Get all users to notify

        foreach ($users as $user) {
            Mail::to($user->email)->queue(new PostCreatedMail($event->post));
        }
    }
}

