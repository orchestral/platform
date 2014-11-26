<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Orchestra\Foundation\Processor\Account\ProfileCreator as Processor;
use Orchestra\Foundation\Contracts\Listener\Account\ProfileCreator as ProfileCreatorListener;

class ProfileCreatorController extends Controller implements ProfileCreatorListener
{
    /**
     * The controller processor.
     *
     * @var \Orchestra\Foundation\Processor\Processor
     */
    protected $processor;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Orchestra\Foundation\Processor\Account\ProfileCreator  $processor
     */
    public function __construct(Processor $processor)
    {
        $this->processor = $processor;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application registration form.
     *
     * @return mixed
     */
    public function getRegister()
    {
        $this->processor->create($this);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function postRegister(Request $request)
    {
        return $this->processor->store($this, $request->all());
    }

    /**
     * Response when show registration page succeed.
     *
     * @param  array  $data
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
     * @return mixed
     */
    public function createProfileFailedValidation($errors)
    {
        return $this->redirectWithErrors(handles('app::auth/register'), $errors);
    }

    /**
     * Response when create a user failed.
     *
     * @param  array  $errors
     * @return mixed
     */
    public function createProfileFailed(array $errors)
    {
        $message = trans('orchestra/foundation::response.db-failed', $errors);

        return $this->redirectWithMessage(handles('app::auth/register'), $message, 'error')->withInput();
    }

    /**
     * Response when create a user succeed but unable to notify the user.
     *
     * @return mixed
     */
    public function profileCreatedWithoutNotification()
    {
        // TODO: Implement profileCreatedWithoutNotification() method.
    }

    /**
     * Response when create a user succeed with notification.
     *
     * @return mixed
     */
    public function profileCreated()
    {
        // TODO: Implement profileCreated() method.
    }
}
