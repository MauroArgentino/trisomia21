<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 29)->create();
        
        User::create([
            'name' => 'Administrador',
            'slug' => Str::slug('Administrador'),
            'email' => 'administrador@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
