<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show($name)
    {
        return view('guest', [
            'guest' => User::findOrFail($name)
        ]);
    }

}
