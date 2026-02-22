<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {}

    /**
     * Display the dashboard with user balance.
     */
    public function index(): View
    {
        $user = $this->userService->getUserMe();

        return view('dashboard', [
            'user' => $user->toArray()
        ]);
    }
}
