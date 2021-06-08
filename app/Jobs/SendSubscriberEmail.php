<?php

namespace App\Jobs;

use App\Mail\NewPost;
use App\Models\Post;
use App\Models\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendSubscriberEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;
    public $timeout = 7200; // 2 hours

    /**
     * Create a new job instance.
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $subscribers = Subscription::all();
        $email = new NewPost($this->post);

        foreach ($subscribers as $subscriber) {
            $data['email'] = $subscriber->email;
            $data['title'] = 'Nytt blogginlägg - ' . config('app.name');

            Mail::send('mail.post.new', ['post' => $this->post], function($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });
        }
    }
}
