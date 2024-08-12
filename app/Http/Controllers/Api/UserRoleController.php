<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRoleController extends Controller
{
    public function getUserRole(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the role names assigned to the user
        $roles = $user->getRoleNames(); // This returns a collection of roles

        // Return the first role or a default value if no roles are assigned
        $role = $roles->isNotEmpty() ? $roles->first() : 'guest'; // 'guest' or any default role name

        return response()->json(['role' => $role]);
    }
}
