<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Unit Test for User
     */

    // refresh database before run unit test.
    use RefreshDatabase;

    // case success create new user
    public function testCreateSuccess()
    {
        $this->post('/api/users', [
            'email' => 'tarkiman.zone@gmail.com',
            'password' => 'P@ssw0rd',
            'name' => 'Tarkiman'
        ])->assertStatus(201)
            ->assertJson([
                "data" => [
                    'email' => 'tarkiman.zone@gmail.com',
                    'name' => 'Tarkiman'
                ]
            ]);
    }

    // case failed create new user, validate email and min/max character length
    public function testCreateFailedValidateEmailAndMinMaxCharacter()
    {
        $this->post('/api/users', [
            'email' => 'tarkiman.zone',
            'password' => 'P@ss',
            'name' => 'Ta'
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                    'email' => [
                        "The email field must be a valid email address."
                    ],
                    'password' => [
                        "The password field must be at least 8 characters."
                    ],
                    'name' => [
                        "The name field must be at least 3 characters."
                    ]
                ]
            ]);
    }

    // case failed create new user, validate required fields
    public function testCreateFailedValidateRequiredFields()
    {
        $this->post('/api/users', [
            'email' => '',
            'password' => '',
            'name' => ''
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                    "email" => [
                        "The email field is required."
                    ],
                    "password" => [
                        "The password field is required."
                    ],
                    "name" => [
                        "The name field is required."
                    ]
                ]
            ]);
    }

    // case failed create new user, validate email already exist
    public function testcreateEmailAlreadyExists()
    {
        $this->testCreateSuccess();
        $this->post('/api/users', [
            'email' => 'tarkiman.zone@gmail.com',
            'password' => 'P@ssw0rd',
            'name' => 'Tarkiman'
        ])->assertStatus(400)
            ->assertJson([
                "errors" => [
                    'email' => [
                        "email already registered"
                    ]
                ]
            ]);
    }
}
