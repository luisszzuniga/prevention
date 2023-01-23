<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        Log::info('store');

        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::guard('web')->user();

        // Créez un nouveau token pour l'utilisateur
        $token = $user->createToken('LaravelSanctumAuth', ['user-get-user'])->plainTextToken;
        Log::info($token);
        $request->session()->put('token', $token);

        return redirect()->intended(RouteServiceProvider::HOME)->withCookie(cookie('token', $token, 60));;

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
