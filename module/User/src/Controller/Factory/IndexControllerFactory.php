<?php
/**
 * Created by PhpStorm.
 * User: adampietras
 * Date: 14/02/2018
 * Time: 21:11
 */

namespace User\Controller\Factory;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use User\Controller\IndexController;

class IndexControllerFactory implements FactoryInterface
{

    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $entityManager = $container->get('doctrine.entitymanager.orm_default');

        return new IndexController($entityManager);
    }

}