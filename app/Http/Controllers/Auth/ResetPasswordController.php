<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USE Spatie\Activitylog;
use Illuminate\Support\Str;
class ResetPasswordController extends Controller
{
    use ResetsPasswords;
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/login';
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
{
    $this->middleware('guest');
}
    protected function rules()
{
    return [
        'token' => 'required',
        'email' => 'required|email',
        'password' => [
            'required',
            'confirmed',
            'min:8',
            'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[!%&@#$^*?_~-]).{8,}$/',
          
        ],
    ];
}

protected $messages = [
    'password.required' => 'The password field is required.',
    'password.confirmed' => 'The password confirmation does not match.',
    'password.min' => 'The password must be at least :min characters.',
    'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
];
protected function validationErrorMessages()
{
    return [
        'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.',
    ];
}
protected function resetPassword($user, $password)
{
    $validator = Validator::make(['password' => $password], $this->rules(), $this->messages, $this->validationErrorMessages());

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $user->forceFill([
        'password' => bcrypt($password),
        'remember_token' => Str::random(60),
    ])->save();
}


    protected function sendResetFailedResponse(Request $request, $response)
    {
        if ($response === Password::INVALID_TOKEN) {
            return redirect()->route('login')->with('message', 'The password reset email is invalid. Please try to forgot your password again');
        }
    
        return redirect()->back()->with('error', 'Password reset failed.');
    }
    

    protected function sendResetResponse(Request $request, $response)
    {
        activity()->disableLogging();
        return redirect()->to($this->redirectTo)->with('status', 'Your password has been reset successfully.');

    }
}
