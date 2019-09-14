<?php

namespace App\Providers;

use Orchestra\Contracts\Installation\Requirement as RequirementContract;
use Orchestra\Installation\InstallerServiceProvider as ServiceProvider;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Add default specifications.
     *
     * @param  \Orchestra\Contracts\Installation\Requirement  $requirement
     *
     * @return \Orchestra\Contracts\Installation\Requirement
     */
    protected function addDefaultSpecifications(RequirementContract $requirement)
    {
        parent::addDefaultSpecifications($requirement);

        //
    }
}
