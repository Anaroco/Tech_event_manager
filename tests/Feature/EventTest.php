<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Event;
use App\Models\User;

class EventTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_route_get_all_events()
    {
        //Given 
        $user = User::factory()->create();
        $events = Event::factory()->count(5)->create();

        //When
        $response =$this->actingAs($user)
            ->get('/events', ['events' => $events]);
        
        //Then
        $response->assertStatus(200)
            ->assertViewIs('index');
    }
}