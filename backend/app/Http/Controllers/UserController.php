<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([    
           'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'cpf' => 'required|string|size:11',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'role' => 'required|in:cliente,admin',
        ]);

        if (!User::validateCpf($validatedData['cpf'])) {
            throw ValidationException::withMessages([
                'cpf' => 'O CPF fornecido é inválido.',
            ]);
        }

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'cpf' => $validatedData['cpf'],
            'address' => $validatedData['address'],
            'phone_number' => $validatedData['phone_number'],
            'role' => $validatedData['role'],
        ]);

        return response()->json(['message' => 'Usuário criado com sucesso.', 'user' => $user], 201);
    }

    public function update(request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8|confirmed',
            'cpf' => 'sometimes|required|string|size:11',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'role' => 'sometimes|required|in:cliente,admin',
        ]);

        if (isset($validatedData['cpf']) && !User::validateCpf($validatedData['cpf'])) {
            throw ValidationException::withMessages([
                'cpf' => 'O CPF fornecido é inválido.',
            ]);
        }

        $user->update(array_merge(
            $validatedData,
            $request->has('password') ? ['password' => Hash::make($validatedData['password'])] : []
        ));

        return response()->json(['message' => 'Usuário atualizado com sucesso.', 'user' => $user]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['message' => 'Usuário deletado com sucesso.']);
    }
}
