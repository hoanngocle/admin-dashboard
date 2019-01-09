<?php

use Illuminate\Database\Seeder;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        DB::table('users')->truncate();

        $admin = Sentinel::getUserRepository()->create(array(
            'member_code'   => 'AD99999',
            'email'         => 'hoancn1.ptit@gmail.com',
            'username'      => 'admin',
            'password'      => 'admin123',
            'password_expried_time' => '2020-01-01 23:59:59',
            'nickname'      => 'Flame Haze',
            'created_at'    => '2019-01-01 07:00:00'
        ));

        $user = Sentinel::getUserRepository()->create(array(
            'member_code'   => 'US99999',
            'email'         => 'user@mfu.com',
            'username'      => 'user',
            'password'      => 'user123',
            'password_expried_time' => '2020-01-01 23:59:59',
            'nickname'      => 'User     Haze',
            'created_at'    => '2019-01-01 07:00:00'
        ));

        // Create Activations
        DB::table('activations')->truncate();
        $code = Activation::create($admin)->code;
        Activation::complete($admin, $code);
        $code = Activation::create($user)->code;
        Activation::complete($user, $code);

        // Create Roles
        $administratorRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Administrator',
            'slug' => 'administrator',
            'permissions' => array(
                'users.create' => true,
                'users.update' => true,
                'users.view' => true,
                'users.destroy' => true,
                'roles.create' => true,
                'roles.update' => true,
                'roles.view' => true,
                'roles.delete' => true
            )
        ));

        $moderatorRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Moderator',
            'slug' => 'moderator',
            'permissions' => array(
                'users.update' => true,
                'users.view' => true,
            )
        ));

        $subscriberRole = Sentinel::getRoleRepository()->create(array(
            'name' => 'Subscriber',
            'slug' => 'subscriber',
            'permissions' => array()
        ));

        // Assign Roles to Users
        $administratorRole->users()->attach($admin);
        $subscriberRole->users()->attach($user);
    }
}
