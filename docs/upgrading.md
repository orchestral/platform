---
title: Upgrading Guide

---

## Upgrading from v2.0 to v2.1

* Change require `"orchestra/foundation"` version to `"2.1.*"` in `composer.json`.
  - You may need to change `"minimum-stability"` option to `"dev"` until a stable release is tagged.
* Remove call to `$app->redirectIfTrailingSlash()` in `bootstrap/start.php` file.
* Replace `public/index.php` and `artisan` files.
* Add new `app/config/remote.php` configuration file.
* Edit `app/config/database.php` and update `redis.cluster` option to `false` to turn Redis clustering off by default.
* Edit `app/config/queue.php` and add new `failed` queue job option.
* Edit `app/config/session.php` and add new `expire_on_close` and `secure` option.
* Edit `app/config/view.php` and update `pagination` option to use bootstrap 3 as default pagination view.
* Edit `app/config/app.php`:
  - in `aliases` change `'Controller' => 'Illuminate\Routing\Controllers\Controller'`, to use `Illuminate\Routing\Controller`.
  - in `aliases` add `'SSH' => 'Illuminate\Support\Facades\SSH',`.
  - in `providers` add `'Illuminate\Remote\RemoteServiceProvider',`.
  - in `providers` add `'Orchestra\Notifier\NotifierServiceProvider',`.
* Edit `app/controllers/BaseController.php` has a use statement at the top, change `use Illuminate\Routing\Controllers\Controller;` to `use Illuminate\Routing\Controller;`.
* If you are overriding `missingMethod()` in your controllers, add `$method` as the first parameter and `$parameter = array()` as the second parameter.
* Update `lang/en/reminders.php` language file.
* If you are using http hosts to set the `$env` variable in `bootstrap/start.php`, these should be changed to machine names (as returned by PHP's `gethostname()` function).
* Finally, run `composer update`.
