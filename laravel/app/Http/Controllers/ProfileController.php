<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Redirect, Response;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->paginate(20);
        return view('dashboard.profile', compact('profiles'));
    }
}
