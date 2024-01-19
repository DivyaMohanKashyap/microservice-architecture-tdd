<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class UserController extends Controller
{
    /**
     * @method show()
     * Display the specified user.
     * @param int $id
     * 
     * @return mixed
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return response()->json($user);;
    }
}
