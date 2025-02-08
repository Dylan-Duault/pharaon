<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Dylan Duault',
            'email' => 'dylan@pharaon.htb',
            'password' => '$2y$10$6jLGhCmd3pRwdxZjBU5sCuWZVq9Mw4cxpiGodGCAQXHmlWvzIe8bO'
        ]);
    }
}
