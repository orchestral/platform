<?php

namespace App;

use Orchestra\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * Get user's name (using alias).
     *
     * @return string
     */
    public function getNameAttribute(): string
    {
        return $this->getAttribute('fullname');
    }
}
