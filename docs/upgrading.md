Upgrading Guide
==============

## Upgrading from v2.0 to v2.1

* Change require orchestra/foundation version to `"2.1.*"` in `composer.json`.
  - You may need to change `"minimum-stability"` option to `"dev"` until a stable release is tagged.
* Run `composer update`.
* Replace `public/index.php`, `artisan`.
* Add new `expire_on_close` option to session configuration file.
* Remove call to `$app->redirectIfTrailingSlash()` in `bootstrap/start.php` file.
* Edit `app/config/app.php`:
  - in `aliases` change `'Controller' => 'Illuminate\Routing\Controllers\Controller'`, to use `Illuminate\Routing\Controller`.
  - in `providers` add `'Illuminate\Remote\RemoteServiceProvider',`.
  - in `aliases` add `'SSH' => 'Illuminate\Support\Facades\SSH'`,
* Edit `app/controllers/BaseController.php` change `use Illuminate\Routing\Controllers\Controller;` to `use Illuminate\Routing\Controller;`.
* If you are overriding `missingMethod()` in your controllers, add `$method` as the first parameter.
* Update `reminders.php` language file.
