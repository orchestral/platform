---
title: Helpers
---

Orchestra Platform includes a set of helpers function to help solves some of the frequent problem while developing on Laravel.

* [orchestra()](#orchestra)
* [handles()](#handles)
* [resources()](#resources)
* [memorize()](#memorize)

## orchestra() {#orchestra}

Return `orchestra.app` instance.

	echo orchestra()->memory()->get('site.name');

## handles() {#handles}

Return handles configuration for a package to generate a full URL.

	echo handles('orchestra/foundation::users');

	// you can also use `orchestra` as an alias to `orchestra/foundation`.
	echo handles('orchestra::users');


Above code would return `http://yoursite.com/orchestra/users`, however if your Orchestra Platform configuration is set to use admin as the bundle handles, the same code would then return `http:://yoursite.com/admin/users`.

> During boot process, Orchestra Platform will automatically set handle for each packages, if specified in `orchestra.json` to `orchestra/extension::handles.vendor/package`, this can be modified from the extension configuration page.

## resources() {#resources}

Return handles configuration for a resources to generate a full URL.

	// To route for a resources you would normally write
	echo handles('orchestra/foundation::resources/foo/create');

	// this can be shortern to
	echo resources('foo/create');

## memorize() {#memorize}

Return memory configuration associated to the request, helper alias to `Orchestra\Memory::get()`.

	echo memorize('site.name');
