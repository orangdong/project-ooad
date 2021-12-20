<?php

namespace App\Actions\Fortify;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'date_of_birth' => ['required', 'string'],
            'address' => ['required', 'string'],
            'number' => ['required', 'numeric'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        if($input['role'] == 'user'){
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'username' => $input['username'],
                'date_of_birth' => $input['date_of_birth'],
                'address' => $input['address'],
                'number' => $input['number'],
            ]);
        }else{
            Seller::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'username' => $input['username'],
                'date_of_birth' => $input['date_of_birth'],
                'address' => $input['address'],
                'number' => $input['number'],
            ]);
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'username' => $input['username'],
                'date_of_birth' => $input['date_of_birth'],
                'address' => $input['address'],
                'number' => $input['number'],
            ]);
        }
    }
}
