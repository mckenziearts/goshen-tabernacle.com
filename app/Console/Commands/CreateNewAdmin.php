<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Exception;

final class CreateNewAdmin extends Command
{
    protected $signature = 'goshen:create-admin';

    protected $description = 'Create user with admin role and all permissions.';

    public function handle(): void
    {
        $this->info('Create Admin User for your admin panel.');
        $this->createUser();
        $this->info('User created successfully.');
    }

    protected function createUser(): void
    {
        $email = $this->ask('Email Address', 'admin@goshen.dev');
        $first_name = $this->ask('First Name', 'Admin');
        $last_name = $this->ask('Last Name', 'Goshen');
        $password = (string) $this->secret('Password');
        $confirmPassword = $this->secret('Confirm Password');

        // Passwords don't match
        if ($password !== $confirmPassword) {
            $this->info('Passwords don\'t match');
        }

        $this->info('Creating admin account...');

        $userData = [
            'email' => $email,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'password' => Hash::make($password),
            'last_login_at' => now()->toDateTimeString(),
            'email_verified_at' => now()->toDateTimeString(),
            'last_login_ip' => request()->getClientIp()
        ];
        $model = config('auth.providers.users.model');

        try {
            $user = tap((new $model())->forceFill($userData))->save(); // @phpstan-ignore-line

            $user->assignRole(config('goshen.users.admin_role'));
        } catch (Exception | QueryException $e) {
            $this->error($e->getMessage());
        }
    }
}
