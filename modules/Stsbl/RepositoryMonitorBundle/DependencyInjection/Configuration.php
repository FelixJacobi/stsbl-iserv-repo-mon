<?php
// src/Stsbl/RepositoryMonitorBundle/DependencyInjection/Configuration.php
namespace Stsbl\RepositoryMonitorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 * 
 * @author Felix Jacobi <felix.jacobi@stsbl.de>
 * @license MIT license <https://opensource.org/licenses/MIT>
 */
class Configuration implements ConfigurationInterface
{
    private $alias;

    /**
     * The constructor
     *
     * @param string $alias The alias of the extension (for config)
     */
    public function __construct($alias)
    {
        $this->alias = $alias;
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root($this->alias);

        return $treeBuilder;
    }
}
