<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && $user->status == 0) {
            return redirect()->back()
                ->with('error', 'Your Account is inactive, please contact System Admin.');
        }
        try {
            $response = $this->broker()->sendResetLink(
                $this->credentials($request)
            );
        } catch (\Exception $e) {
            return redirect()->back()
            ->with('error','Cannot send email due to lack of internet connection!');
        }

        if ($response == Password::RESET_LINK_SENT) {
            return redirect()->back()
            ->with('status',trans(Password::RESET_LINK_SENT));
        }

        throw ValidationException::withMessages([
            'email' => [trans($response)],
            'throttled' => [trans('passwords.throttled', ['minutes' => config('auth.passwords.users.throttle') / 60])],
        'user' => [trans('passwords.user')],
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    protected function broker()
    {
        return Password::broker();
    }
}
