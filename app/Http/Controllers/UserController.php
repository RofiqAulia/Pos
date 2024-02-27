<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile()
    {
        // Mendapatkan data pengguna dari autentikasi atau dari mana pun sumbernya
        $user = auth()->user();
    
        return view('user.profile', compact('user'));
    }
    
    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        // Menyimpan nama pengguna ke profil pengguna (misalnya, ke database)
       
    
        return redirect('/user/profile');
    }

}
