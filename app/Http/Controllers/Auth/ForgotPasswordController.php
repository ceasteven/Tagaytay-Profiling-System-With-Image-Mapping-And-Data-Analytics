<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
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
            ->with('status','Password reset email sent!');
        }

        throw ValidationException::withMessages([
            'email' => [trans($response)],
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
