<?php

use Orchestra\Model\User as Eloquent;

class User extends Eloquent
{
	use SoftDeletingTrait;
}
