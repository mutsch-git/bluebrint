<?php

declare(strict_types=1);

namespace Database\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    public function getAllUsers(): array;
    public function getUser(string $email): ?User;
}