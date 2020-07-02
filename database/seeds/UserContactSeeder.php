<?php

use App\Models\UserContact;
use Illuminate\Database\Seeder;

class UserContactSeeder extends Seeder
{
    public function run()
    {
        factory(User::class, 50)
            ->create()
            ->each(function ($user) {
                factory(UserContact::class, 1)
                    ->create([
                        'user_id' => $user->id
                    ]);
            });
    }
}
