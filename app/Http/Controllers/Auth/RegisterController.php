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
    protected $redirectTo = '/';

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
            'fn' => ['required', 'string', 'max:255'],
            'ln' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'adresse' => ['required', 'string', 'max:255'],
            'phno' => ['required', 'string', 'max:255'],
            'current_location' => ['required', 'string', 'max:255'],
            'annual_salary' => ['required', 'string', 'max:255'],
            'pic' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'type' => ['required', 'string', 'max:255'],
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
            'fn' => $data['fn'],
            'ln' => $data['ln'],
            'email' => $data['email'],
            'adresse' => $data['adresse'],
            'phno' => $data['phno'],
            'current_location' => $data['current_location'],
            'annual_salary' => $data['annual_salary'],
            'pic' => $data['pic'],
            'password' => Hash::make($data['password']),
            'type' => $data['type'],
        ]);
    }
}
