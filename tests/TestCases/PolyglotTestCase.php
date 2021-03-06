<?php

namespace Polyglot\TestCases;

use Illuminate\Support\Facades\Config;
use Polyglot\PolyglotServiceProvider;

abstract class PolyglotTestCase extends ContainerTestCase
{
    /**
     * Set up the tests.
     */
    public function setUp()
    {
        parent::setUp();

        // Bind Polyglot classes
        //$provider = new PolyglotServiceProvider($this->app);
        //$provider->register();
        //$provider->boot();
    
        $this->app->register(PolyglotServiceProvider::class);
        
        $this->app['translator'] = $this->app['polyglot.translator'];
    }
    
    public function createApplication() {
        
        $app = parent::createApplication();
    
        Config::setFacadeApplication($app);
        
        return $app;
    }
}
