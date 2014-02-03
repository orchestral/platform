---
title: Change Log

---

## Version 2.2 {#v2-2}

### v2.2.0@dev {#v2-2-0}

* Bump minimum version to PHP v5.4.0.
* Remove redundant implementation in default `User` model.
* Add encrypt option to iron queue config.

## Version 2.1 {#v2-1}

### v2.1.2 {#v2-1-2}

* Add `require_without_all` validation string.

### v2.1.1 {#v2-1-1}

* Ignore environment files.
* Remove redundant implementation in default `User` model.

### v2.1.0 {#v2-1-0}

* Add [Control Extension](https://github.com/orchestral/control) for Orchestra Platform 2.
* Add [Story CMS Extension](https://github.com/orchestral/story) for Orchestra Platform 2.
* Add service providers:
  - `Illuminate\Remote\RemoteServiceProvider`.
  - `Orchestra\Notifier\NotifierServiceProvider`.
* Update changes to Laravel Routing.
* Move to single file log setup for simplicity.
* Consolidate all console support tools to `Illuminate\Foundation\Providers\ConsoleSupportServiceProvider` and `Orchestra\Foundation\ConsoleSupportServiceProvider`.
* Move user registration email template to `app/views/emails/auth/register.blade.php`.

## Version 2.0 {#v2-0}

### v2.0.6 {#v2-0-6}

* Added `Orchestra\Auth\CommandServiceProvider`, `Orchestra\Extension\CommandServiceProvider` and `Orchestra\Memory\CommandServiceProvider`.
* Move pre-update-cmd to post-update-cmd, solves inconveniences.

### v2.0.5 {#v2-0-5}

* Declare `TestCase` as an abstract class.
* Move minimum-stability to stable.
* Add note about expiry time on reminders.

### v2.0.4 {#v2-0-4}

* Use `Orchestra\Translation\TranslationServiceProvider` instead of `Illuminate\Translation\TranslationServiceProvider`.

### v2.0.3 {#v2-0-3}

* Add [Story CMS Extension](https://github.com/orchestral/story) for Orchestra Platform 2.
* Package asset should be handled via artisan or ftp publishing. Ignore the files from committed to git.

### v2.0.2 {#v2-0-2}

* Add expire option to reminder config.
* Added array validation language lines.
* Change minimum stability to RC.

### v2.0.1 {#v2-0-1}

* Add [Control Extension](https://github.com/orchestral/control) for Orchestra Platform 2.

### v2.0.0 {#v2-0-0}

* Migrate from version 1.2 to support Laravel 4.
* Upgrade to Twitter Bootstrap 3.
* Components:
  * Orchestra\Asset.
  * Orchestra\Auth.
  * Orchestra\Extension.
  * Orchestra\Facile.
  * Orchestra\Foundation.
  * Orchestra\Html.
  * Orchestra\Memory.
  * Orchestra\Resources.
  * Orchestra\Support.
  * Orchestra\View.
  * Orchestra\Widget.


