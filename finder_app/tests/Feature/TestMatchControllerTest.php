<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Swipe;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



 
class TestMatchControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {  
        $user = User::factory()->create();
        
        $response = $this->actingAs($user)->withSession(['banned' => false])->get(route('matches.index',' '));

        $response->assertStatus(200);
    }
}
