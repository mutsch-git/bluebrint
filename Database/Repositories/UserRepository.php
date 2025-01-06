<?php

declare(strict_types=1);

namespace Database\Repositories;

use Database\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @return User[]
     */
    public function getAllUsers(): array
    {
        return User::all()->toArray();
    }

    public function getUser(string $email): ?User
    {
        return User::where('email', $email);
    }
}