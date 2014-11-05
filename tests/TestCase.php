<?php

abstract class TestCase extends Orchestra\Testbench\TestCase
{
    /**
     * Get application timezone.
     *
     * @return string
     */
    protected function getApplicationTimezone($app)
    {
        return $app['config']['app.timezone'];
    }

     /**
     * Get application aliases.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getApplicationAliases($app)
    {
        return $app['config']['app.aliases'];
    }

    /**
     * Get application providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getApplicationProviders($app)
    {
        return $app['config']['app.providers'];
    }

    /**
     * Get base path.
     *
     * @return string
     */
    protected function getBasePath()
    {
        return realpath(__DIR__.'/../');
    }
}
