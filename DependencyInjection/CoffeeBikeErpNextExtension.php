<?php

namespace CoffeeBike\ErpNextBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class CoffeeBikeErpNextExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        $loader->load('services.xml');
        $config = $this->processConfiguration(new Configuration(), $configs);
        $container->setParameter('coffeebike_erpnext.auth.username', $config['auth']['username']);
        $container->setParameter('coffeebike_erpnext.auth.password', $config['auth']['password']);
        $container->setParameter('coffeebike_erpnext.host', $config['host']);
    }
}
