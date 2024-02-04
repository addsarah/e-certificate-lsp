<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new \App\Models\User;
       $user->name='Reza';
       $user->username='reza2311';
       $user->email='reza2301@gmail.com';
       $user->password= Hash::make('12345');
       $user->level='admin';
       $user->save();
       $this->command->info("user telah dibuat");

       $user = new \App\Models\User;
       $user->name='Reza7';
       $user->username='reza2318';
       $user->email='reza2351@gmail.com';
       $user->password= Hash::make('12345');
       $user->level='staff';
       $user->save();
       $this->command->info("user telah dibuat");

       $user = new \App\Models\User;
       $user->name='Reza14';
       $user->username='reza2308';
       $user->email='reza2391@gmail.com';
       $user->password= Hash::make('12345');
       $user->level='admin';
       $user->save();
       $this->command->info("user telah dibuat");
    }
}
