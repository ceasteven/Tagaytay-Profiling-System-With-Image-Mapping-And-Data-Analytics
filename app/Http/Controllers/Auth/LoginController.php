<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
   protected $redirectTo = '/dashboard';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    
    public function username()
    {
        return 'username';
    }
   
protected function sendFailedLoginResponse(Request $request)
{
    throw ValidationException::withMessages([
        $this->username() => [trans('auth.failed')],
        
    ]);
}
public function login(Request $request)
{
    $this->validate($request, [
        'username' => 'required',
        'password' => 'required',
    ]);
    
    $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    
    $credentials = [
        $fieldType => $request->username,
        'password' => $request->password,
        'status' => '1'
    ];

    if (auth()->attempt($credentials)) {
        $username = $request->username;
        $dt = Carbon::now();
        $todaydate = $dt->toDateTimeString();
        $activityLog = [
            'log_name' => $username,
            'description' => 'Log in',
            'updated_at' => $todaydate,
        ];
        DB::table('activity_log')->insert($activityLog);
        return redirect()->route('home');
    } else {
        return redirect()->route('login')
            ->with('error', 'Incorrect username / email or password.');
    }
}

    public function logout(Request $request)
    {
        $user= Auth::User();
        Session::put('user',$user);
        $user=Session::get('user');
        $dt=Carbon::now();
$todaydate=$dt->toDateTimeString();
         $activityLog=[
'log_name'=> Auth::check() ? Auth::user()->email : null,
'description'=>'Log out',
'updated_at'=>$todaydate,


         ];
  
        DB::table('activity_log')->insert($activityLog);
        activity()->disableLogging();
        $this->guard()->logout();

        Auth::logout();
        Session::flush();
        Session::regenerate();
        
        return redirect('/login')->with('status','You have successfully logged out!');
    }
}
