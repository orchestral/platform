---
title: Events
---

Orchestra Platform utilise `Event` class from Laravel to extends the functionality, without having to modify any of the code.
Listed below are all the possible events that can be used with Orchestra Platform.

* **General**
	- orchestra.ready
	- orchestra.started: admin
	- orchestra.ready: admin
	- orchestra.done: admin
* **Installation**
	- orchestra.install.schema
	- orchestra.install.schema: users
	- orchestra.install: user
	- orchestra.install: acl
* **Extensions**
	- extension.started
	- extension.started: {name}
	- extension.done
	- extension.done: {name}
	- orchestra.form: extension.{name}
	- orchestra.validate: extension.{name}
	- orchestra.saving: extension.{name}
	- orchestra.saved: extension.{name}
* **Manage Users**
	- orchestra.list: users
	- orchestra.form: users
	- orchestra.validate: users
	- orchestra.creating: users
	- orchestra.updating: users
	- orchestra.deleting: users
	- orchestra.saving: users
	- orchestra.created: users
	- orchestra.updated: users
	- orchestra.deleted: users
	- orchestra.saved: users
* **User Account**
	- orchestra.form: user.account
	- orchestra.validate: user.account
	- orchestra.creating: user.account
	- orchestra.updating: user.account
	- orchestra.deleting: user.account
	- orchestra.saving: user.account
	- orchestra.created: user.account
	- orchestra.updated: user.account
	- orchestra.deleted: user.account
	- orchestra.saved: user.account
* **Settings**
	- orchestra.form: settings
	- orchestra.validate: settings
	- orchestra.saved: settings
