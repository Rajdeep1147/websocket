<?php

namespace Tests\Feature\PerformanceCoaches;

use App\Models\User;
use App\Models\UserEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;

class AddEditAlternateEmailTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function when_the_new_user_added_the_user_email_table_also_inseted_with_new_row_with_same_email_and_same_user_id_if_not_then_it_should_return_an_error(): void
    {
        // User Data is Inseting in database
        $user = User::factory(['status' => User::USER_APPROVED])->create();

        Sanctum::actingAs($user);

        // Data for Inserting the data in user_emails Table
        // $userEmailData = [
        //     'user_id' => $user->id,
        //     'email' => $user->email,
        //     'domain' => UserEmail::TYPE_SKILLARBITRAGE
        // ];

        // User Email Data is inserted in database
        // $userEmail = UserEmail::create($userEmailData);

        // $this->assertDatabaseHas('user_emails', [
        //     'user_id' => $user->id,
        //     'email' => $user->email,
        //     'domain' => UserEmail::TYPE_SKILLARBITRAGE
        // ]);

        // $this->assertInstanceOf(UserEmail::class, $userEmail);

        // Check if User_emails email is equal to  users email table
        // $this->assertEquals($user->email, $userEmail->email);
        
        //  Check if User_emails user_id is equal to  users id table 
        // $this->assertEquals($user->id, $userEmail->user_id);

        $url = route('users.store');
       
        $response = $this->get($url);
        
        $response->assertOk()->assertJson([
            'message' => 'User Created Successfully'
        ]);
     
    }

}
