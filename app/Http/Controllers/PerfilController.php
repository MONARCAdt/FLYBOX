<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function edit()
    {
        $perfil = Auth::user();
        return view('perfil', compact('perfil'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        // Verificar si se proporcionó una nueva contraseña
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Actualizar imagen de perfil si se proporciona una nueva
        if ($request->hasFile('profile_picture')) {
            $imagePath = $request->file('profile_picture')->store('perfil', 'public');
            $user->profile_picture = $imagePath;
        }

        $user->save();

        return redirect()->route('perfil.edit')->with('success', 'Perfil actualizado correctamente.');
    }
}
