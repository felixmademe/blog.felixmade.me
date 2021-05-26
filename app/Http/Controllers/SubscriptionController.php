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
            return response()->json( [ 'result' => 'ReCAPTCHA fel, försök igen senare.' ], 200);
        }

        $subscription = Subscription::where('email', $request->email)->first();

        if($subscription == null) {
            Subscription::create([
                'email' => $request->email,
            ]);

            return response()->json( [ 'result' => 'Välkommen till klubben, nya inlägg kommer att meddelas via mail.' ], 200);
        }

        return response()->json( [ 'result' => 'Du är redan uppskriven juuu, #coolgang!' ], 200);
    }

    public function unsubscribeForm() {
        return view('subscription.unsubscribe');
    }

    public function unsubscribe(Request $request) {
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
            return response()->json( [ 'result' => 'ReCAPTCHA fel, försök igen senare.' ], 200);
        }

        $subscription = Subscription::where('email', $request->email)->first();

        if($subscription != null) {
            $subscription->delete();
            return response()->json( [ 'result' => 'Du har nu avprenumererat, du är alltid välkommen tillbaka när som helst!' ], 200);
        }

        return response()->json( [ 'result' => 'E-postadressen kunde inte hittas.' ], 200);
    }
}
