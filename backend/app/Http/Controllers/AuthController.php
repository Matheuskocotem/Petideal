<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        $users = $this->authService->getAllUsers();
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

        $user = $this->authService->createUser($validatedData);
        return response()->json(['message' => 'Usuário criado com sucesso.', 'user' => $user], 201);
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        try {
            $token = $this->authService->login($validatedData);
            return response()->json(['message' => 'Login bem-sucedido.', 'token' => $token]);
        } catch (\InvalidArgumentException $e) {
            return response()->json(['message' => $e->getMessage()], 401);
        }
    }

    public function logout(Request $request)
    {
        $this->authService->logout($request->user());
        return response()->json(['message' => 'Logout bem-sucedido.']);
    }

    public function update(Request $request, $id)
    {
        $user = $this->authService->userRepository->findById($id); // Assuming user repository is accessible

        $validatedData = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:users,email,' . $user->id,
            'password' => 'sometimes|required|string|min:8|confirmed',
            'cpf' => 'sometimes|required|string|size:11',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:15',
            'role' => 'sometimes|required|in:cliente,admin',
        ]);

        $updatedUser = $this->authService->updateUser($user, $validatedData);
        return response()->json(['message' => 'Usuário atualizado com sucesso.', 'user' => $updatedUser]);
    }

    public function destroy($id)
    {
        $user = $this->authService->userRepository->findById($id); // Assuming user repository is accessible
        $this->authService->deleteUser($user);
        return response()->json(['message' => 'Usuário deletado com sucesso.'], 201);
    }
}
