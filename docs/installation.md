---
title: Installation
---

* [Install Composer](#install-composer)
* [Install Orchestra Platform](#install-orchestra-platform)
* [Setup Orchestra Platform](#setup-orchestra-platform)
* [Server Requirements](#server-requirement)

## Install Composer

Orchestra Platform utilizes [Composer](http://getcomposer.org/) to manage its dependencies. First, download a copy of the `composer.phar`. Once you have the PHAR archive, you can either keep it in your local project directory or move to `usr/local/bin` to use it globally on your system. On Windows, you can use the Composer [Windows installer](https://getcomposer.org/Composer-Setup.exe).

## Install Orchestra Platform

Once Composer is installed, download the [latest version](https://github.com/orchestral/platform/archive/master.zip) of the Orchestra Platform and extract its contents into a directory on your server. Next, in the root of your Orchestra Platform application, run the `php composer.phar install` command to install all dependencies. This process requires Git to be installed on the server to successfully complete the installation.

```bash
php composer.phar install
```

> The installation process would automatically publish `orchestra/foundation` asset to your public path.

### Installation using Composer

You can install Orchestra Platform using Composer:

```bash
php composer.phar create-project orchestra/platform website dev-master --prefer-dist
```

### Installation using GIT

You can also choose to install Orchestra Platform using GIT:

```bash
git clone -o orchestra -b master git@github.com:orchestral/platform.git website
cd website
```

This allow you to grab the latest update of Orchestra Platform app skeleton via the following command.

```bash
git fetch orchestra
git merge --squash -m "Update Orchestra Platform" orchestra/master
```

</article>

<article id="setup-orchestra">
## Setup Orchestra Platform

Once Laravel 4 and Orchestra Platform is properly downloaded and installed, we need to setup the database and create the application basic schema (including administrator user).

1. Open `app/config/database.php` and configure your database connection.
2. Browse to the installation page, for example `http://yoursite.com/admin` and follow the installation process.
3. And... you're done.

> Application configuration are 99% identical to Laravel so that integration is stream-less.

## Server Requirements

Orchestra Plaftorm has a few system requirements:

* PHP >= 5.3.7
* MCrypt PHP Extension
* Apache, nginx, or another compatible web server.
* SQLite, MySQL, PostgreSQL, or SQL Server PDO drivers.
