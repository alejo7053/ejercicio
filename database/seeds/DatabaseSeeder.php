<?php

use Exercise\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      self::seedUsersTable();
      $this->command->info('Users Table Initialize');
        //  $this->call(UsersTableSeeder::class);
    }

    private function seedUsersTable()
    {
        DB::table('users')->delete();

        foreach ($this->arrayUsers as $user) {
            $newUser = new User;
            $newUser->name = $user['name'];
            $newUser->lastname = $user['lastname'];
            $newUser->email = $user['email'];
            $newUser->mobile = $user['mobile'];
            $newUser->telephone = $user['telephone'];
            $newUser->role = $user['role'];
            $newUser->password = bcrypt($user['password']);
            $newUser->identification = $user['identification'];
            $newUser->save();
        }
    }

    private $arrayUsers = array(
        array(
            'name' => 'Admin',
            'lastname' => 'Test',
            'email' => 'admin@test.com',
            'mobile' => '1234567890',
            'telephone' => '0244466666',
            'role' => 'admin',
            'password' => 'adminpass',
            'identification' => '1094001001'
        ),
        array(
            'name' => 'User',
            'lastname' => 'Test',
            'email' => 'user@test.com',
            'mobile' => '1234567890',
            'telephone' => '0244466666',
            'role' => 'user',
            'password' => 'userpass',
            'identification' => '1094002002'
        )
      );

}
