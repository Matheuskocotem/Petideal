<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return $this->userRepository->all();
    }

    public function createUser(array $data)
    {
        $this->validateUserData($data);
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    public function login(array $credentials)
    {
        if (Auth::attempt($credentials)) {
            return Auth::user()->createToken('API Token')->plainTextToken;
        }

        throw new \InvalidArgumentException('Credenciais inválidas.'); // Use a specific exception
    }

    public function logout(User $user)
    {
        $user->currentAccessToken()->delete();
    }

    public function updateUser(User $user, array $data)
    {
        $this->validateUserData($data, $user->id);
        if (isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $this->userRepository->update($user, $data);
    }

    public function deleteUser(User $user)
    {
        return $this->userRepository->delete($user);
    }

    protected function validateUserData(array $data, $userId = null)
    {
        if (!User::validateCpf($data['cpf'])) {
            throw ValidationException::withMessages(['cpf' => 'O CPF fornecido é inválido.']);
        }

        if ($this->userRepository->emailExists($data['email'], $userId)) {
            throw ValidationException::withMessages(['email' => 'O email já está em uso.']);
        }
    }
}
