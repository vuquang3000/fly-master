<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';


    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if ($user->isAdmin == 1) {
          return redirect()->route('admin.index')
                           ->with('status', 'Admin login successfully.');
        }

        return redirect('/home')->with('status', 'User login successfully.');
    }

    public function maxAttempts()
    {
        return property_exists($this, 'maxAttempts') ? $this->maxAttempts : 3;
    }

    public function decayMinutes()
    {
        return property_exists($this, 'decayMinutes') ? $this->decayMinutes : 30;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
}
