<?php

namespace CoffeeBike\ErpNextBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();

        $rootNode = $builder->root('coffeebike_erpnext');
        $rootNode->children()
            ->scalarNode('host')->isRequired()->end()
            ->arrayNode('auth')
                ->isRequired()
                ->children()
                    ->scalarNode('username')->isRequired()->end()
                    ->scalarNode('password')->isRequired()->end()
                ->end()
            ->end()
        ;

        return $builder;
    }
}
