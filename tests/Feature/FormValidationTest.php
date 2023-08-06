<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FormValidationTest extends TestCase
{
    use RefreshDatabase;

    public function testFeedbackFormValidation()
    {
        $response = $this->post(route('feedback.submit'), []);

        $response->assertRedirect(route('feedback.form'));
        $response->assertSessionHasErrors(['username', 'comment']);
    }

    public function testDataRequestFormValidation()
    {
        $response = $this->post(route('data-request.submit'), []);

        $response->assertRedirect(route('data-request.form'));
        $response->assertSessionHasErrors(['customer_name', 'phone_number', 'email', 'data_info']);
    }
}
