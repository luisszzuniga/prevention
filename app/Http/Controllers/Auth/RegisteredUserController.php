<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Mail\WelcomeMail;
use App\Models\Client;
use App\Models\Company;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param RegisterRequest $request
     * @return RedirectResponse
     *
     */
    public function store(RegisterRequest $request): RedirectResponse
    {

        $user = User::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $company = Company::create([
            'name' => $request->company_name,
        ]);
        $client = Client::create([
            'company_id' => $company->id,
        ]);

        $user->client()->associate($client);
        $user->save();

        event(new Registered($user));

        Auth::login($user);

//        Mail::to($user)
//            ->send(new WelcomeMail($user));

        return redirect(RouteServiceProvider::DASHBOARD);
    }

}
