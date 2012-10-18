<?php
/**
 * @package    Sandbox
 * @subpackage Module
 */
namespace Sandbox\Module;

use Sandbox\Module\ProdModule;
use BEAR\Sunday\Module;
use BEAR\Sunday\Module\Constant\NamedModule;
use BEAR\Package\Module\Resource\NullCacheModule;
/**
 * Production module
 *
 * @package    Sandbox
 * @subpackage Module
 */
class TestModule extends ProdModule
{
    /**
     * (non-PHPdoc)
     * @see Ray\Di.AbstractModule::configure()
     */
    protected function configure()
    {
        $config = require __DIR__ . '/config.php';
        $config['master_db']['dbname'] = 'blogbeartest';
        $config['slave_db'] = $config['master_db'];
        $this->install(new NamedModule($config));
        $this->install(new NullCacheModule);
        $this->install(new ProdModule($this));
    }
}
