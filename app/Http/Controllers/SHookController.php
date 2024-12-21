<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;

class SHookController extends Controller
{
    public function sHook(Request $request)
    {
        $request = WebhookCall::create()
        ->url('https://webhook.site/f0f82986-dd86-43c1-84c6-9f29c52c9202')
        ->useHttpVerb('POST')
        ->doNotSign()
        ->timeoutInSeconds(5)
        ->doNotVerifySsl()
        ->payload(['key' => 'value'])
        ->useSecret('sign-using-this-secret')
        ->dispatchSync();
        ds('sHook', $request);
 //       return back()->with('error', 'webhook não transmitido.<br>');
        return view('sendhook');
    }
}
