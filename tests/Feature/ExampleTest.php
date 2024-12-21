<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Bus;
use Spatie\WebhookClient\Models\WebhookCall;
use Spatie\WebhookServer\CallWebhookJob;
use Tests\TestCase;

class TestFile extends TestCase
{
    public function testJobIsDispatched()
    {
        Bus::fake();

        WebhookCall::create()
        ->url('https://webhook.site/554c9fda-bee9-48b7-bc4b-01ef105847d6')
        ->payload(['key' => 'value'])
        ->useSecret('sign-using-this-secret')
        ->dispatch();

        Bus::assertDispatched(CallWebhookJob::class);
    }
}
