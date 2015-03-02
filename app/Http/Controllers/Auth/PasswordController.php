<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Contracts\Auth\Listener\PasswordReset;
use Orchestra\Contracts\Auth\Listener\PasswordResetLink;
use Orchestra\Foundation\Processor\Account\PasswordBroker;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller implements PasswordReset, PasswordResetLink
{
    /**
     * Password broker processor.
     *
     * @var \Orchestra\Foundation\Processor\Account\PasswordBroker
     */
    protected $processor;

    /**
     * The request.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * Create a new password controller instance.
     *
     * @param  \Orchestra\Foundation\Processor\Account\PasswordBroker  $processor
     * @param  \Illuminate\Http\Request  $request
     */
    public function __construct(PasswordBroker $processor, Request $request)
    {
        $this->processor = $processor;
        $this->request   = $request;

        $this->middleware('guest');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return view('auth.password');
    }

    /**
     * Send a reset link to the given user.
     *
     * @return mixed
     */
    public function postEmail()
    {
        return $this->processor->store($this, $this->request->all());
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param  string  $token
     *
     * @return mixed
     *
     * @throws
     */
    public function getReset($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException();
        }

        return view('auth.reset')->with('token', $token);
    }

    /**
     * Reset the given user's password.
     *
     * @return mixed
     */
    public function postReset()
    {
        $input = $this->request->only('email', 'password', 'password_confirmation', 'token');

        return $this->processor->update($this, $input);
    }

    /**
     * Response when request password failed on validation.
     *
     * @param  \Illuminate\Support\MessageBag|array $errors
     *
     * @return mixed
     */
    public function resetLinkFailedValidation($errors)
    {
        return redirect_with_errors(handles('app::password/email'), $errors);
    }

    /**
     * Response when request reset password failed.
     *
     * @param  string $response
     *
     * @return mixed
     */
    public function resetLinkFailed($response)
    {
        messages('error', trans($response));

        return redirect(handles('app::password/email'));
    }

    /**
     * Response when request reset password succeed.
     *
     * @param  string $response
     *
     * @return mixed
     */
    public function resetLinkSent($response)
    {
        messages('success', trans($response));

        return redirect(handles('app::password/email'));
    }

    /**
     * Response when reset password failed.
     *
     * @param  string $response
     *
     * @return mixed
     */
    public function passwordResetHasFailed($response)
    {
        $token = $this->request->get('token');

        messages('error', trans($response));

        return redirect(handles("app::password/reset/{$token}"));
    }

    /**
     * Response when reset password succeed.
     *
     * @param  string $response
     *
     * @return mixed
     */
    public function passwordHasReset($response)
    {
        messages('success', trans('orchestra/foundation::response.account.password.update'));

        return redirect(handles('app::home'));
    }
}
