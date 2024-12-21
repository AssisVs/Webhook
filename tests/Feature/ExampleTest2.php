<?php

use Illuminate\Support\Facades\Queue;
use Spatie\WebhookServer\CallWebhookJob;
use Tests\TestCase;

class TestFile extends TestCase
{
    public function testJobIsQueued()
    {
        Queue::fake();

        WebhookCall::create()
        ->url('https://other-app.com/webhooks')
        ->payload(['key' => 'value'])
        ->useSecret('sign-using-this-secret')
        ->dispatch();

        Queue::assertPushed(CallWebhookJob::class);
    }
}
