<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function create(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email'],
            'message' => ['required', 'string']
        ]);
        $visiteur = Visiteur::create([
            'email' => $request->email,
            'message' => $request->message,
            'abonner' => $request->abonner
        ]);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => env('TRUSTIFI_URL') . "/api/i/v1/email",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{
                \"recipients\":[
                    {\"email\":\"yes-ivoire-site@heroku.trustifi.com\"},
                    {\"name\":\"Yes Ivoire\"}
                ],
                \"title\":\"Notification message reçu\",
                \"html\":\"Body\"
            }",
            CURLOPT_HTTPHEADER => array(
                "x-trustifi-key: " . env('TRUSTIFI_KEY'),
                "x-trustifi-secret: " . env('TRUSTIFI_SECRET'),
                "content-type: application/json"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            echo $response;
        }

        return redirect()->route('index');
    }

    public function new_letter(Request $request) {
        Visiteur::create([
            'email' => $request->email
        ]);

        return redirect()->route('index');
    }
}
