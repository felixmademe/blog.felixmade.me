<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;
    protected $post;

    /**
     * Create a new message instance.
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view( 'mail.post.new' )
            ->from( config('mail.from.address'), config('app.name') )
            ->replyTo( config('mail.from.address'), config('app.name') )
            ->subject( 'Nytt blogginlägg på Wetell blogg' )
            ->priority(2)
            ->with([
                'post'  => $this->post,
            ]);
    }
}
