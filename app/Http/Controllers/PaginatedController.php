<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PaginatedController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['title'] = 'Paginated - Originally Laravel Style';
        $data['users'] = User::paginate(10);
        Paginator::useBootstrapFour();

        return view('paginated', $data);
    }
}
