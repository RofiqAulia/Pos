<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class UserController extends Controller
{
    public function showUserProfile($id, $name)
    {
        // Mendapatkan data pengguna berdasarkan ID
        $user = User::findOrFail($id);
        
        // Mengirimkan data pengguna ke view untuk ditampilkan
        return view('user.profile', compact('user'));
    }
}
