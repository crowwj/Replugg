<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return Redirect::to('/');
    }
    public function update(Request $request)
{
    $user = Auth::user();
    $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'tel' => 'nullable|string|max:20',
    ]);

    $user->update([
        'name'  => $request->name,
        'email' => $request->email,
        'tel' => $request->tel,
    ]);
    return back()->with('success', 'Perfil actualizado correctamente.');
}

    
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'], 
            'password' => ['required', 'min:8', 'confirmed'], 
        ]);
        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);
        return back()->with('success', 'Contraseña actualizada correctamente.');
    }


}
