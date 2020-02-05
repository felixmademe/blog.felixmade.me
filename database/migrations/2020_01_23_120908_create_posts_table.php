<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->string( 'title' );
            $table->string('slug');
            $table->longText( 'text' );
            $table->enum( 'state', [ 'public', 'private', 'draft' ] )->default( 'private' );
            $table->integer( 'points' )->default( 0 );
            $table->integer( 'views' )->default( 0 );
            $table->integer( 'shares' )->default( 0 );
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->dateTime( 'published_at' )->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index( [ 'title', 'slug', 'user_id' ] );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
