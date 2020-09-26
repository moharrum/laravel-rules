<?php

namespace Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Moharrum\LaravelRules\Providers\LaravelRulesServiceProvider;

/**
 * @author Khalid Moharrum <khalid.moharran@gmail.com>
 */
class TestCase extends BaseTestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * Load our package service provider.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            LaravelRulesServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        //
    }
}
