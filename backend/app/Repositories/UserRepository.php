<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function all()
    {
        return User::all();
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update(User $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function delete(User $user)
    {
        return $user->delete();
    }

    public function findById($id)
    {
        return User::findOrFail($id);
    }

    public function emailExists($email, $userId = null)
    {
        return User::where('email', $email)
            ->when($userId, fn($query) => $query->where('id', '!=', $userId))
            ->exists();
    }
}
