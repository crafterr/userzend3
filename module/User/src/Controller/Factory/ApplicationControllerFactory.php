<?php
namespace User\Controller\Factory;

use Interop\Container\ContainerInterface;
use User\Controller\ApplicationController;
use User\Service\ApplicationManager;
use Zend\ServiceManager\Factory\FactoryInterface;
use User\Controller\UserController;
use User\Service\UserManager;

/**
 * This is the factory for UserController. Its purpose is to instantiate the
 * controller and inject dependencies into it.
 */
class ApplicationControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {

        $entityManager = $container->get('doctrine.entitymanager.orm_default');
        $applicationManager = $container->get(ApplicationManager::class);
        
        // Instantiate the controller and inject dependencies
        return new ApplicationController($entityManager, $applicationManager);
    }
}