<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function __invoke(Request $request)
    {
        $posts = Post::where( 'state', '!=', 'public' )->get();
        $private = $posts->where( 'state', 'private' );
        $drafts = $posts->where( 'state', 'draft' );
        $post = Post::latest()->first();

        return view( 'user.profile' )
            ->with( 'post', $post )
            ->with( 'private', $private )
            ->with( 'drafts', $drafts );
    }
}
