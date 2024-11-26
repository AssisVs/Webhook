<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\WebhookServer\WebhookCall;

class SHookController extends Controller
{
    public function sHook(Request $request)
    {
        $request = WebhookCall::create()
        ->url('https://webhook.site/554c9fda-bee9-48b7-bc4b-01ef105847d6')
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
