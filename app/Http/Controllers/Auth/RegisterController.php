<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ee_fn' => ['required', 'string', 'max:255'],
            'ee_ln' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'ee_adresse' => ['required', 'string', 'max:255'],
            'ee_phno' => ['required', 'string', 'max:255'],
            'ee_current_location' => ['required', 'string', 'max:255'],
            'ee_annual_salary' => ['required', 'string', 'max:255'],
            'ee_pic' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'ee_fn' => $data['ee_fn'],
            'ee_ln' => $data['ee_ln'],
            'email' => $data['email'],
            'ee_adresse' => $data['ee_adresse'],
            'ee_phno' => $data['ee_phno'],
            'ee_current_location' => $data['ee_current_location'],
            'ee_annual_salary' => $data['ee_annual_salary'],
            'ee_pic' => $data['ee_pic'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
