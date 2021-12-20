<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use App\Models\Seller;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('username', $request->email)->first();
    
            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
            //seller
            // if(!$user){
            //     $user = Seller::where('username', $request->email)->first();
            //     if($user && Hash::check($request->password, $user->password)){
            //         return $user;
            //     }
            // }
        });

        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
