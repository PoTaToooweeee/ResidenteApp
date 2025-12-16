<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'mname' => ['nullable', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'ext_name' => ['nullable', 'string', 'max:10'],
            'dob_month' => ['required', 'string'],
            'dob_day' => ['required', 'string'],
            'dob_year' => ['required', 'string'],
            'sex' => ['required', 'string', 'in:Male,Female'],
            'house_number' => ['nullable', 'string', 'max:50'],
            'zone' => ['nullable', 'string', 'max:100'],
            'street_address' => ['nullable', 'string', 'max:255'],
            'nameofbarangay' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'contact_number' => ['required', 'string', 'max:20'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Combine date of birth
        $dob = $request->dob_year . '-' . $request->dob_month . '-' . $request->dob_day;
        
        // Create display name from first name and last name
        $displayName = $request->fname . ' ' . $request->lname;

        $user = User::create([
            'name' => $displayName,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'ext_name' => $request->ext_name,
            'dob' => $dob,
            'sex' => $request->sex,
            'house_number' => $request->house_number,
            'zone' => $request->zone,
            'street_address' => $request->street_address,
            'nameofbarangay' => $request->nameofbarangay,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'password' => Hash::make($request->password),
            'account_type' => 'citizen',
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
