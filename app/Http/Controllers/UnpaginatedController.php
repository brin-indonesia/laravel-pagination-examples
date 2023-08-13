<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UnpaginatedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['title'] = 'Unpaginated - Originally Laravel Style';
        $data['users'] = User::select('name', 'email', 'created_at')->get();

        return view('unpaginated', $data);
    }
}
