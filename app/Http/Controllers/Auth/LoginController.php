<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

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

    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        alert()->error("<h5>Etwas war falsh <br>-<br> Hubo algún error</h5>", "<h3><strong>Upps</strong></h3>")->html()->persistent("OK");
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors([
                $this->username() => Lang::get('auth.failed'),
            ])->with('error', 'Etwas war falsch - Hubo algún error');
    }

    protected function authenticated(Request $request, $user)
    {
        alert()->success("<h5>Hallo, wir geht es dir? <br>-<br> Hola, ¿como estás?</h5>", "<h3><strong>{$user->name}</strong></h3>")->html()->autoclose(3000);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        alert()->success("<h5>Hab einen schönen Tag! <br>-<br> Ten un lindo dia!</h5>", "<h3><strong>Bye!</strong></h3>")->html()->autoclose(3000);;
        return redirect('/')->with('success', 'Danke für deinen Besuch - Gracias por tu visita');
    }
}
