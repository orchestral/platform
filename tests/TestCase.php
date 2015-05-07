<?php

use Orchestra\Testing\ApplicationTestCase;

abstract class TestCase extends ApplicationTestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

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
