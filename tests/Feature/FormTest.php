<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FormTest extends TestCase
{
    use RefreshDatabase;

    public function testFeedbackFormSubmission()
    {
        $response = $this->post(route('feedback.submit'), [
            'username' => 'John Doe',
            'comment' => 'This project is great!',
        ]);

        $response->assertRedirect(route('feedback.form'));
        $response->assertSessionHas('success');

        // Assert data is saved to the file
        $this->assertStringContainsString('John Doe', Storage::get('feedback.txt'));
    }

    public function testDataRequestFormSubmission()
    {
        $response = $this->post(route('data-request.submit'), [
            'customer_name' => 'Jane Smith',
            'phone_number' => '1234567890',
            'email' => 'jane@example.com',
            'data_info' => 'Data request details...',
        ]);

        $response->assertRedirect(route('data-request.form'));
        $response->assertSessionHas('success');

        // Assert data is saved to the file
        $this->assertStringContainsString('Jane Smith', Storage::get('data_requests.txt'));
    }
}
