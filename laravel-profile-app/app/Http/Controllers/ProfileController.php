<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function submit(Request $request) 
    {
        $path = $request->file('profile_photo')->store('profile_photo', 'public');

        $data = $request->only(['name', 'email']);
        $data['photo_path'] = $path;

        return view('profile_result', ['data' => $data]);
    }
}