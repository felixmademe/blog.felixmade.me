<?php

namespace App\Http\Controllers;

use App\Jobs\SendSubscriberEmail;
use App\Models\Subscription;
use Carbon\Carbon;

use App\Models\Post;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $posts = Post::where( 'state', 'public' )->orderBy( 'created_at', 'desc' );
        $total = $posts->count();
        $posts = $posts->simplePaginate( 10 );

        return view( 'posts.index' )->with( 'posts', $posts )->with( 'total', $total );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view( 'posts.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store( Request $request )
    {

        // $result = Validate::post( $request );
        $post = Post::create(
        [
            'title' => trim( $request->title ),
            'text' => trim( $request->text ),
            'state' => $request->state,
            'user_id' => Auth::user()->id,
            'published_at' => $request->state === 'public' ? Carbon::now()->toDateTimeString() : null,
        ] );

        $job = (new SendSubscriberEmail($post))
            ->delay(now()->addSeconds(2));

        dispatch($job);
        
        return redirect()->route( 'posts.show', $post->id );
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function show( $id )
    {
        $post = Post::findOrFail( $id );
        return view( 'posts.show' )->with( 'post', $post );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Factory|View
     */
    public function edit( $id )
    {
        $post = Post::findOrFail( $id );
        return view( 'posts.edit' )->with( 'post', $post );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $id
     * @return RedirectResponse
     */
    public function update( Request $request, $id )
    {
        $post = Post::findOrFail( $id );

        $post->fill(
        [
            'title' => trim( $request->title ),
            'text' => trim( $request->text ),
            'state' => $request->state,
            'user_id' => Auth::user()->id,
            'published_at' => $request->state === 'public' ? Carbon::now()->toDateTimeString() : null,
        ] );
        $post->save();

        return redirect()->route( 'posts.show', $post->id );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy( $id )
    {
        $post = Post::findOrFail( $id );
        $post->delete();

        return redirect()->route( 'posts.index' );
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return Factory|View
     */
    public function display( $slug )
    {
        $post = Post::where( 'slug', $slug )->first();
        $post->fill( [ 'views' => $post->views + 1 ] );
        $post->save();

        $lastPost = Post::find( $post->id - 1 !== 0 ? $post->id - 1 : Post::latest()->first()->id );


        return view( 'posts.display' )->with( 'post', $post )->with( 'random', $lastPost );
    }
}
