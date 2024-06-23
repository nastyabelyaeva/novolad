<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /*
      A basic feature test example.
     
    use RefreshDatabase;
    public function test_it_display_login_form(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }*/

     /** @test */
     /*public function it_can_register_a_user()
     {
         // Given
         Event::fake();
             
         // When
         $response = $this->post(route('register'), [
            'name'=> 'Иван',
            'surname' => 'Иванов',
            'lastname' => 'Иванович',
            'login' => 'admin2',
            'email' => 'ivan@mail.ru',
            'password' => bcrypt($password = 'admin2'),
            'birthdate' => '11.11.2001',
            'phonenumber' => '777',
         ]);
             
         // Then
         $users = User::all();
         $user = $users->first();
         $this->assertCount(1, $users);
         $this->assertAuthenticatedAs($user);
         $this->assertEquals('Иван', $user->name);
         $this->assertEquals('Иванов', $user->surname);
         $this->assertEquals('Иванович', $user->lastname);
         $this->assertEquals('admin2', $user->login);
         $this->assertEquals('ivan@mail.ru', $user->email);
         $this->assertTrue(Hash::check('admin2', $user->password));
         $this->assertEquals('11.11.2001', $user->birthdate);
         $this->assertEquals('777', $user->phonenumber);
         Event::assertDispatched(Registered::class, function ($e) use ($user) {
             return $e->user->id === $user->id;
         });*/
     

    
     /*public function test_it_logs_user_in_with_correct_credentials() {
        
        $user = User::create([
            'name'=> 'Иван',
            'surname' => 'Иванов',
            'lastname' => 'Иванович',
            'login' => 'admin',
            'email' => 'ivan@mail.ru',
            'password' => bcrypt($password = 'admin2'),
            'birthdate' => '11.11.2001',
            'phonenumber' => '777',
            
        ]);

        $response = $this->post(route('login'), [
            'login' => $user-> login,
            'password' => $password,
        ]);

        $this->assertAuthenticatedAs($user);
    } */
}
