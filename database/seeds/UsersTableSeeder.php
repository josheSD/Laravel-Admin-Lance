<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,200)->create()
            ->each(function(User $user){
                factory(\App\Post::class,2)->create(['user_id' => $user->id]);
            });
    }
}
