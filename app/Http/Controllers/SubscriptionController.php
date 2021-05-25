<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request) {

        $request->validate([
            'email'     => 'required|email',
            'recaptcha' => 'required'
        ]);

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret'   => config( 'google.recaptcha.secret' ),
            'response' => $request->recaptcha
        ];

        $options = [
            'http' => [
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query( $data )
            ]
        ];

        $context = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $json = json_decode( $result );

        if( config('app.env') != 'production' ) {
            $json->success = true;
        }

        if( $json->success != true )
        {
            return response()->json( [ 'result' => 'ReCAPTCHA, please try again later' ], 200);
        }

        $subscription = Subscription::create([
            'email' => $request->email,
        ]);

        return response()->json( [ 'result' => 'Välkommen till klubben, nya inlägg kommer att meddelas via mail' ], 200);
    }

    public function unsubscribe($email) {
        $subscription = Subscription::where('email', $email);
        $subscription->delete();
    }
}
