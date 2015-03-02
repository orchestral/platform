<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;
use Orchestra\Foundation\Processor\AuthenticateUser;
use Orchestra\Foundation\Processor\Account\ProfileCreator;
use Orchestra\Contracts\Auth\Listener\AuthenticateUser as AuthenticateUserListener;
use Orchestra\Contracts\Foundation\Listener\Account\ProfileCreator as ProfileCreatorListener;

class AuthController extends Controller implements AuthenticateUserListener, ProfileCreatorListener
{
    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->beforeFilter('orchestra.registrable', ['only' => ['getRegister', 'postRegister']]);
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application registration form.
     *
     * @param  \Orchestra\Foundation\Processor\Account\ProfileCreator  $creator
     *
     * @return mixed
     */
    public function getRegister(ProfileCreator $creator)
    {
        return $creator->create($this);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Orchestra\Foundation\Processor\Account\ProfileCreator  $creator
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function postRegister(ProfileCreator $creator, Request $request)
    {
        return $creator->store($this, $request->all());
    }

    /**
     * Show the application login form.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Show the application login form.
     *
     * @param  \Orchestra\Foundation\Processor\AuthenticateUser  $authenticator
     * @param  \Illuminate\Http\Request  $request
     *
     * @return mixed
     */
    public function postLogin(AuthenticateUser $authenticator, Request $request)
    {
        return $authenticator->login($this, $request->all());
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Orchestra\Foundation\Processor\AuthenticateUser  $authenticator
     *
     * @return mixed
     */
    public function getLogout(AuthenticateUser $authenticator)
    {
        return $authenticator->logout($this);
    }

    /**
     * Response when show registration page succeed.
     *
     * @param  array  $data
     *
     * @return mixed
     */
    public function showProfileCreator(array $data)
    {
        return view('auth.register', $data);
    }

    /**
     * Response when create a user failed validation.
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function createProfileFailedValidation($errors)
    {
        return redirect_with_errors(handles('app::auth/register'), $errors);
    }

    /**
     * Response when create a user failed.
     *
     * @param  array  $errors
     *
     * @return mixed
     */
    public function createProfileFailed(array $errors)
    {
        messages('error', trans('orchestra/foundation::response.db-failed', $errors));

        return redirect(handles('app::auth/register'))->withInput();
    }

    /**
     * Response when create a user succeed but unable to notify the user.
     *
     * @return mixed
     */
    public function profileCreatedWithoutNotification()
    {
        messages('success', trans("orchestra/foundation::response.users.create"));
        messages('error', trans('orchestra/foundation::response.credential.register.email-fail'));

        return redirect(handles('app::auth/login'));
    }

    /**
     * Response when create a user succeed with notification.
     *
     * @return mixed
     */
    public function profileCreated()
    {
        messages('success', trans("orchestra/foundation::response.users.create"));
        messages('success', trans('orchestra/foundation::response.credential.register.email-send'));

        return redirect(handles('app::auth/login'));
    }

    /**
     * Response to user log-in trigger failed validation .
     *
     * @param  \Illuminate\Support\MessageBag|array  $errors
     *
     * @return mixed
     */
    public function userLoginHasFailedValidation($errors)
    {
        return redirect_with_errors(handles('app::auth/login'), $errors);
    }

    /**
     * Response to user log-in trigger has failed authentication.
     *
     * @param  array  $input
     *
     * @return mixed
     */
    public function userLoginHasFailedAuthentication(array $input)
    {
        messages('error', trans('orchestra/foundation::response.credential.invalid-combination'));

        return redirect(handles('app::auth/login'))->withInput();
    }

    /**
     * Response to user has logged in successfully.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     *
     * @return mixed
     */
    public function userHasLoggedIn(Authenticatable $user)
    {
        messages('success', trans('orchestra/foundation::response.credential.logged-in'));

        return redirect()->intended(handles('app::home'));
    }

    /**
     * Response to user has logged out successfully.
     *
     * @return mixed
     */
    public function userHasLoggedOut()
    {
        return redirect(handles('app::/'));
    }
}
