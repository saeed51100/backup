<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

// TODO:
//  line below added to test for resolve:  "Expected status code 200 but received 500".
//  https://stackoverflow.com/questions/52825048/phpunit-test-expected-status-200-but-received-500
    use RefreshDatabase;




    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
