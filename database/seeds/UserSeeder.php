<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name'              => 'Admin',
            'email'             => 'admin@app.com',
            'location'          => 'Egypt, Cairo',
            'phone'             => '01000000000',
            'job'               => 'Admin Website',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'youtube'           => 'youtube',
            'instagram'         => 'instagram',
            'status'            => '1',
            'is_admin'          => 'admin',
            'password'          => bcrypt('12345678'),
            'email_verified_at' => \Carbon\Carbon::now(),
        ]);

    }
}
