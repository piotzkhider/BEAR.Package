<?php

namespace MyVendor\MyProject\Module;

use BEAR\Package\PackageModule;
use Ray\Di\AbstractModule;

class AppModule extends AbstractModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->install(new PackageModule);
    }
}
