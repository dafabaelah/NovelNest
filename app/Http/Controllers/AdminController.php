<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    // dashboard
    public function index()
    {
        return view('dashboard.admin.index');
    }
    // users
    public function userIndex()
    {
        $users = User::all(); // Mengambil semua data pengguna
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function userEdit()
    {
        return view('dashboard.admin.users.edit');
    }

    public function userEditPost() {
        
    }

    public function userCreate()
    {
        return view('dashboard.admin.users.create');
    }
}
