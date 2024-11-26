<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Contracts\Queue\Queue;
use Spatie\WebhookServer\CallWebhookJob;
use Spatie\WebhookServer\WebhookCall;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    public function testJobIsQueued()
    {
        Queue::fake();

        $request = WebhookCall::create()
        ->url('https://webhook.site/554c9fda-bee9-48b7-bc4b-01ef105847d6')
        ->useHttpVerb('post')
        ->doNotSign()
        ->timeoutInSeconds(5)
        ->doNotVerifySsl()
        ->payload(['key' => 'value'])
        ->useSecret('sign-using-this-secret')
        ->dispatch();
        Queue::assertPushed(CallWebhookJob::class);
    }
}
